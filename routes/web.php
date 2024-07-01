<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\kriteriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');  
// });


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(AlternatifController::class)->prefix('alternatif')->group(function () {
        Route::get('', 'index')->name('alternatif');
        Route::get('create', 'create')->name('alternatif.create');
        Route::post('store', 'store')->name('alternatif.store');
        Route::get('show/{id}', 'show')->name('alternatif.show');
        Route::get('edit/{id}', 'edit')->name('alternatif.edit');
        Route::put('edit/{id}', 'update')->name('alternatif.update');
        Route::delete('destroy/{id}', 'destroy')->name('alternatif.destroy');
    });

    Route::controller(kriteriaController::class)->prefix('kriteria')->group(function () {
        Route::get('', 'index')->name('kriteria');
        Route::get('create', 'create')->name('kriteria.create');
        Route::post('store', 'store')->name('kriteria.store');
        Route::get('show/{id}', 'show')->name('kriteria.show');
        Route::get('edit/{id}', 'edit')->name('kriteria.edit');
        Route::put('edit/{id}', 'update')->name('kriteria.update');
        Route::delete('destroy/{id}', 'destroy')->name('kriteria.destroy');
    });


    
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('/profileSetting', [App\Http\Controllers\AuthController::class, 'profileSetting'])->name('profileSetting');

});
