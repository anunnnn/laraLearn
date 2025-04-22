<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

// landing page
Route::get('/', function () {
    return view('welcome');
});

// routes
// lists all products
Route::get('/product',[ ProductController::class, 'index' ])->name('product.index');

// creates new product
Route::get('/product/create', [ ProductController::class, 'create' ])->name('product.create');

//stores new product
Route::post('/product', [ ProductController::class, 'store' ])->name('product.store');

// shows the product with specified id
Route::get('/products/{id}/show', [ ProductController::class, 'show'])->name('product.show');

// gets edit page for the product with specified id
Route::get('/product/{id}/edit', [ ProductController::class, 'edit' ])->name('product.edit');
Route::put('/product/{id}', [ ProductController::class, 'update' ])->name('product.update');

// deletes the project with specified id
Route::delete('/product/{id}', [ ProductController::class, 'destroy' ])->name('product.destroy');
// Route::get('/product/{id}/delete', [ ProductController::class, 'delete' ])->name('product.delete'); this is optional







// Route::get('/product', [ ProductController::class, 'index'])->name('product.index');
// Route::get('/product/create', [ ProductController::class, 'create'])->name('product.create');
// Route::post('/product', [ ProductController::class, 'store'])->name('product.store');


// Route::get('/product/{id}', [ ProductController::class, 'show'])->name('product.show');


// Route::get('/product/{id}/edit', [ ProductController::class, 'edit'])->name('product.edit');
// Route::put('/product/{id}', [ ProductController::class, 'update'])->name('product.update');


// Route::delete('/product/{id}', [ ProductController::class, 'destroy'])->name('product.destroy');
// Route::get('/product/{id}/delete', [ ProductController::class, 'delete'])->name('product.delete');
