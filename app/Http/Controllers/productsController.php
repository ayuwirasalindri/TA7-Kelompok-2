<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CategoryCreateRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Order; 


class ProductsController extends Controller
{

    public function dashboard(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->simplePaginate(8);

        return view('dashboard', ['products' => $products]);
    }

    public function welcome(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->simplePaginate(8);

        return view('welcome', ['products' => $products]);
    }

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
        return view('product.new');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
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
    public function delete($id)
    {
        $product = product::findOrFail($id);
        return view('product.delete', ['product' => $product]);
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        if ($product) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data berhasil');
        }
        return redirect('/products');
    }

    public function thrifting(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->simplePaginate(8);

        return view('home.thrifting', ['products' => $products]);
    }

    public function seller(Request $request)
    {
        $products = Product::orderBy('name')->SimplePaginate(6);

        return view('home.seller', ['products' => $products]);
    }

    public function shopseller(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->simplePaginate(8);

        return view('home.sellerdetail', ['products' => $products]);
    }

    public function detailseller($name)
    {
        $product = Product::where('name', $name)->orderBy('name')->firstOrFail();

        return view('home.detailseller', ['product' => $product]);
    }


    public function account(Request $request)
    {
        $products = Product::all();

        return view('home.account', ['products' => $products]);
    }

    public function mybag(Request $request)
    {
        $products = Product::all();

        return view('home.mybag', ['products' => $products]);
    }

    public function checkout(Request $request)
    {
        $selectedProductIds = $request->input('selected_products', []);
        $selectedProducts = Product::whereIn('id', $selectedProductIds)->get();
    
        return view('home.checkout', compact('selectedProducts'));
    }
    
    public function shopsellerrating(Request $request)
    {
        $products = Product::all();

        return view('home.sellerrating', ['products' => $products]);
    }

    public function mystorestatus(Request $request)
    {
        $products = Product::all();

        return view('product.mystatus', ['products' => $products]);
    }

    public function editStatus($productId)
    {
        $product = Product::findOrFail($productId);
    
        return view('product.editstatus', compact('product'));
    }
    
    public function updateStatus($id)
    {
        // Retrieve the product by ID
        $product = Product::findOrFail($id);
    
        // Validate the request
        $validatedData = request()->validate([
            'status' => 'required|in:New Order,Packing,Shipping,Delivered,Completed',
        ]);
    
        // Update the status
        $product->update($validatedData);
    
        // Redirect back to the status page with a success message
        return redirect('/mystatus')->with('success', 'Status updated successfully');
    }

    public function mystorerating(Request $request)
    {
        $products = Product::all();

        return view('product.myrating', ['products' => $products]);
    }

    public function categoryelectronic(Request $request)
    {
        $products = Product::all();

        return view('home.shopbycategories', ['products' => $products]);
    }
    public function login(Request $request)
    {
        $products = Product::all();

        return view('account.login', ['products' => $products]);
    }
    public function signup(Request $request)
    {
        $products = Product::all();

        return view('account.signup', ['products' => $products]);
    }

    public function detailproduct($name)
    {
        $product = Product::where('name', $name)->firstOrFail();

        return view('home.detailproduct', ['product' => $product]);
    }

    public function showOrders()
    {
        // Ambil data pesanan dari database
        $orders = Order::all();

        // Kirim data pesanan ke halaman account
        return view('account', ['orders' => $orders]);
    }
    
}


