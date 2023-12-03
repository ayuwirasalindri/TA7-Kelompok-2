<?php

use App\Http\Controllers\productscontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/products', [productscontroller::class, 'index']);
    Route::get('/product/{name}', [productscontroller::class, 'detail']);
    Route::get('/add-product', [productscontroller::class, 'new']);
    Route::post('/product', [productscontroller::class, 'store']);
    Route::get('/edit-product/{id}', [productscontroller::class, 'edit']);
    Route::put('/product/{id}', [productscontroller::class, 'update']);
    Route::get('/delete-product/{name}', [productscontroller::class, 'delete']);
    Route::delete('/product/{name}', [productscontroller::class, 'destroy']);
});
