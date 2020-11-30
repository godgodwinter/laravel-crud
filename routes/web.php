<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Members; //Load class Members 
use App\Http\Livewire\Carts; //Load class Carts 
use App\Http\Livewire\Products; //Load class Carts 
use App\Http\Livewire\Home; //Load class Carts 

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home'); //Tambahkan routing ini

Route::get('/carts', Carts::class)->name('carts'); //Tambahkan routing ini
Route::get('/products', Products::class)->name('products'); //Tambahkan routing ini
// Route::get('/', [Home::class, 'render'])->name('home');
// Route::get('/carts', [Carts::class, 'render'])->name('carts');
// Route::get('/products', [Products::class, 'render'])->name('products');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard'); 
    Route::get('member', Members::class)->name('member'); //Tambahkan routing ini
});