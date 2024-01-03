<?php

// use App\Http\Controllers\bagscontroller;
use App\Http\Controllers\productscontroller;
use App\Http\Controllers\bagscontroller;
use App\Http\Controllers\registercontroller;
use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductsController::class, 'welcome']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
Route::get('/dashboard', [ProductsController::class, 'dashboard']);

    // navbar
    Route::get('/thrifting', [ProductsController::class, 'thrifting']);
    Route::get('/seller', [ProductsController::class, 'seller']);
    Route::get('/account', [ProductsController::class, 'account']);
    Route::get('/mybag', [ProductsController::class, 'mybag']);

    // Customer POV
    Route::get('/shopbycategories', [ProductsController::class, 'categoryelectronic']);
    // product yang dijual oleh seorang seller
    Route::get('/sellerdetail', [ProductsController::class, 'shopseller']);
    // detail dari suatu product 
    Route::get('/detailproduct/{name}', [ProductsController::class, 'detailproduct']);
    Route::get('/sellerrating', [ProductsController::class, 'shopsellerrating']);
    Route::get('/checkout', [ProductsController::class, 'checkout']);

    // Seller POV
    Route::get('/products', [ProductsController::class, 'index']);
    Route::get('/product/{name}', [ProductsController::class, 'detail']);
    Route::get('/add-product', [ProductsController::class, 'new']);
    Route::post('/product', [ProductsController::class, 'store']);
    Route::get('/edit-product/{id}', [ProductsController::class, 'edit']);
    Route::put('/product/{id}', [ProductsController::class, 'update']);
    Route::get('/delete-product/{id}', [ProductsController::class, 'delete']);
    Route::delete('/product/{id}', [ProductsController::class, 'destroy']);
    // Route::get('/editstatus', [ProductsController::class, 'editstatus']);  
    Route::get('/myrating', [ProductsController::class, 'mystorerating']);

    // Edit status
    Route::get('/mystatus', [ProductsController::class, 'mystorestatus'])->name('mystorestatus');
    Route::get('/editstatus/{productId}', [ProductsController::class, 'editStatus'])->name('editstatus.edit');
    Route::put('/editstatus/{id}', [ProductsController::class, 'updateStatus'])->name('editstatus.update');


    Route::post('/remove-from-bag', [bagsController::class, 'removeFromBag'])->name('removeFromBag');
    Route::match(['get', 'post'], '/remove-from-bag', [bagsController::class, 'removeFromBag'])->name('removeFromBag');

    Route::post('/editstatus/{id}', [ProductsController::class, 'update'])->name('updateStatus');

    // My bag
    Route::post('/mybag/add-to-bag', [bagsController::class, 'addToBag'])->name('add.to.bag');
    Route::get('/mybag', [bagsController::class, 'showBag'])->name('show.bag');

    Route::post('/checkout', [ProductsController::class, 'checkout'])->name('checkout');


    // Account
    Route::get('/editprofil', [RegisterController::class, 'editprofil']);

});

