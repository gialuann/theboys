<?php


use App\Http\Controllers\Client\CountryController;
use App\Http\Controllers\Client\SigninController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

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


Route::get('/',[BlogController::class ,'blog'])->name('client.home');
Route::prefix('client')->name('client.')->group(function () {
    Route::prefix('country')->name('country.')->controller(CountryController::class)->group(function () {
        Route::get('china', 'china')->name('china');
        Route::get('india', 'india')->name('india');
        Route::get('japan', 'japan')->name('japan');
        Route::get('pakistan', 'pakistan')->name('pakistan');
        Route::get('vietnam', 'vietnam')->name('vietnam');
    });
    Route::prefix('sign-in')->name('sign-in.')->controller(SigninController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::get('register', 'register')->name('register');
        Route::post('store', 'store')->name('store');
    });
});
Route::prefix('admin')->name('admin.')->group(function () {
        Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
            Route::get('index', 'index')->name('index');
    
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    
        Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function () {
            Route::get('index', 'index')->name('index');
    
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    
        Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
            Route::get('index', 'index')->name('index');
    
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    });