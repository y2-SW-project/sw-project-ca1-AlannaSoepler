<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subscriber\brandController as subBrandController;


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

Route::get('/', function(){
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('subscriber/home', [App\Http\Controllers\Subscriber\HomeController::class, 'index'])->name('subscriber.home');

Route::get('subscriber/brands/', [subBrandController::class, 'index'])->name('subscriber.brands.index');
Route::get('subscriber/brands/{id}', [subBrandController::class, 'show'])->name('subscriber.brands.show');
