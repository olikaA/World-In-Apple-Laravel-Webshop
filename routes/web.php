<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
  return view('login');
});
Route::get('/logout', function () {
  Session::forget('user');
  return view('login');
});
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get("/", [ProductController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::post('/add_to_cart', [ProductController::class, 'addtocart']);
Route::get("cart", [ProductController::class, 'cart', 'viewcart']);
Route::get("orders", [ProductController::class, 'orders']);

Route::get('/register', function () {
  if (Session::has('user')) {
    return redirect('/');
  }
  else {
    return view('register');
  }
});
Route::post("/register", [RegisterController::class, 'register'])->name('register');
Route::get('/devices', [ProductController::class, 'devices']);
Route::get("removecart/{id}", [ProductController::class, 'removecart']);
Route::get("checkout", [ProductController::class, 'checkout']);
Route::post("checkoutplace", [ProductController::class, 'checkoutplace']);
