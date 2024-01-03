<?php

// namespace App\Http\Controllers;

// use App\Models\Bag;
// use App\Models\Product;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class BagsController extends Controller
// {   

//     public function addToBag(Request $request)
//     {
//         $productId = $request->input('product_id');

//         $bagItems = session()->get('bagItems', []);

//         if (!in_array($productId, $bagItems)) {
//             $bagItems[] = $productId;
//             session()->put('bagItems', $bagItems);
//             return redirect()->back()->with('success', 'Produk ditambahkan ke dalam tas!');
//         } else {
//             return redirect()->back()->with('error', 'Produk sudah ada dalam tas belanja.');
//         }
//     }

//     public function showBag()
//     {
//         $bagItems = session()->get('bagItems', []);

//         $products = Product::whereIn('id', $bagItems)->get();

//         return view('home.mybag', compact('products'));
//     }


namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BagsController extends Controller
{

    public function addToBag(Request $request)
{
    $productId = $request->input('product_id');

    // Retrieve the product by ID
    $product = Product::findOrFail($productId);

    // Cek apakah produk sudah ada di tas belanja dalam sesi
    $bagItems = session()->get('bagItems', []);

    // Jika produk belum ada dalam tas belanja, tambahkan ke dalam sesi
    if (!in_array($productId, $bagItems)) {
        $bagItems[] = $productId;
        session()->put('bagItems', $bagItems);

        return redirect()->back()->with('success', 'Produk ditambahkan ke dalam tas.');
    } else {
        return redirect()->back()->with('error', 'Produk sudah ada dalam tas belanja.');
    }
}

public function showBag()
{
    $bagItems = session()->get('bagItems', []);

    // Retrieve products based on the stored product IDs
    $products = Product::whereIn('id', $bagItems)->get();

    // Now you have the complete product information
    // You can pass $products to your view

    return view('home.mybag', compact('products'));
}



    public function checkout(Request $request)
    {
        // Retrieve selected product IDs from the form
        $selectedProductIds = $request->input('selected_products');

        if (empty($selectedProductIds)) {
            return redirect()->back()->with('error', 'No products selected for checkout.');
        }

        // Retrieve selected products from the database using the IDs
        $selectedProducts = Bag::whereIn('id', $selectedProductIds)->with('product')->get();

        // Pass the selected products to the checkout view
        return view('home.checkout', compact('selectedProducts'));
    }


    public function removeFromBag(Request $request)
    {
        $productId = $request->input('product_id');

        $bagItem = Bag::find($productId);

        if ($bagItem) {
            // Soft delete item di tas belanja dari database
            $bagItem->delete();

            // Hapus item dari sesi
            $bagItems = session()->get('bagItems', []);
            $index = array_search($productId, $bagItems);

            if ($index !== false) {
                unset($bagItems[$index]);
                session()->put('bagItems', $bagItems);

                return redirect()->back()->with('success', 'Produk dihapus dari tas belanja dan database.');
            }
        }

        return redirect()->back()->with('error', 'Produk tidak ditemukan dalam tas belanja atau terjadi kesalahan.');
    }
}
