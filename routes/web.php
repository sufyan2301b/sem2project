<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use Illuminate\Support\Facades\Auth;

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


 Route::get('/welcome', function () {
      return view('welcome');
  });



Route::post('/frm',[mycontroller::class,('insertdata')]);
Route::get('/fetch',[mycontroller::class,('getdata')]);
Route::post('/del/{id}',[mycontroller::class,('delrecord')]);
Route::post('/upd/{id}',[mycontroller::class,('updrecord')]);
Route::post('/updaterecord',[mycontroller::class,('update')]);


// Middleware route start

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/admin', function () {
        return view('Admin-layout.index');
    })->name('dasboard');

    Route::get('/dashboard', function () {
        if(Auth::user()-> role==1)
        {
            return view('index');
        }
        else
        {
            return view('Admin-layout.index');
        }
    })->name('dashboard');


    Route::post('/insertproduct',[mycontroller::class,('insprod')]);
});

// Middleware route end


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/Jewelry', function () {
    return view('Jewelry');
})->name('Jewelry');

Route::get('/form', function () {
    return view('form');
})->name('form');


Route::get('/Cosmetics', function () {
    return view('Cosmetics');
})->name('Cosmetics');




// =====================================================Admin Panel =======================




Route::get('/dash', function () {
    return view('Admin-layout.e-commerce');
})->name('dashboard');



Route::get('/Product', function () {
    return view('Admin-layout.product');
})->name('product');


Route::get('/product', function () {
    return view('Admin-layout.product-detail');
})->name('product-detail');


Route::get('/addproduct', function () {
    return view('Admin-layout.add-products');
})->name('add-products');


Route::get('/orders', function () {
    return view('Admin-layout.product-orders');
})->name('orders');

Route::get('/cart', function () {
    return view('Admin-layout.product-cart');
})->name('carts');

Route::get('/check-out', function () {
    return view('Admin-layout.product-checkout');
})->name('check-out');


// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('index');
// });

