<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class productscontroller extends Controller
{    public function index(Request $request)
    {
        $products = Product::orderBy('name')->simplePaginate(10);

        return view('product.index', ['products' => $products]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        if ($product) {
            Session::flash('status', 'success');
            Session::flash('message', 'Perubahan data berhasil');
        }

        return redirect('/products');
    }

    public function detail($name)
    {
        $product = DB::table('products')->where('name', $name)->first();

        return view('product.detail', ['product' => $product]);
    }

    public function new()
    {
        return view('product.new');
    }

    public function store(Request $request)
    {
        $product = product::create($request->all());

        if ($product) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data berhasil');
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
}
