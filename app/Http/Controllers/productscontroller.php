<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CategoryCreateRequest;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function home(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->simplePaginate(8);

        return view('home.home', ['products' => $products]);
    }

    public function homelogin(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->simplePaginate(8);

        return view('home.homelogin', ['products' => $products]);
    }
    public function index(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->simplePaginate(8);

        return view('product.index', ['products' => $products]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            $request->validate([
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|integer',
                'picture' => 'image|mimes:jpeg,png,jpg,gif',
            ]);

            $productData = $request->all();

            // Proses upload gambar jika ada
            if ($request->hasFile('picture')) {
                Storage::delete('public/uploads/' . $product->picture);
                $imageName = time() . '.' . $request->picture->getClientOriginalExtension();
                $request->picture->storeAs('public/uploads/', $imageName);
                $productData['picture'] = $imageName;
            }
            $product->update($productData);

            Session::flash('status', 'success');
            Session::flash('message', 'Perubahan data berhasil');
        } catch (\Illuminate\Database\QueryException $e) {
            // Menangani kesalahan SQL, misalnya duplikasi data
            Session::flash('status', 'error');
            Session::flash('message', 'Perubahan data gagal: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Menangani kesalahan umum
            Session::flash('status', 'error');
            Session::flash('message', 'Perubahan data gagal: ' . $e->getMessage());
        }

        return redirect('/products');
    }

    public function detail($name)
    {
        $product = Product::where('name', $name)->firstOrFail();

        return view('product.detail', ['product' => $product]);
    }


    public function new()
    {
        $categories = Category::all(); // Ambil semua data kategori dari tabel categories
        return view('product.new', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                // 'category_id' => 'required|exists:categories,id',
                'categories' => 'required|exists:categories,name',
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|integer',
                'picture' => 'required|mimes:jpeg,png,jpg,gif',
                'condition' => 'required|string',
            ]);

            $productData = $request->except('picture');

            // Proses upload gambar jika ada
            if ($request->hasFile('picture')) {
                $imageName = time() . '.' . $request->picture->getClientOriginalExtension();
                $request->picture->storeAs('public/uploads/', $imageName);
                $productData['picture'] = $imageName;
            }

            $product = Product::create($productData);

            if ($product) {
                Session::flash('status', 'success');
                Session::flash('message', 'Penambahan data berhasil');
            }
        } catch (\Illuminate\Database\QueryException $e) {
            // Menangani kesalahan SQL, misalnya duplikasi data
            Session::flash('status', 'error');
            Session::flash('message', 'Penambahan data gagal: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Menangani kesalahan umum
            Session::flash('status', 'error');
            Session::flash('message', 'Penambahan data gagal: ' . $e->getMessage());
        }

        return redirect('/products');
    }

    
