<?php

use App\Http\Controllers\Admin\ChinaController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\IndiaController;
use App\Http\Controllers\Admin\JapanController;
use App\Http\Controllers\Admin\JoinController;
use App\Http\Controllers\Admin\MemberjoinController;
use App\Http\Controllers\Admin\MountainController;
use App\Http\Controllers\Admin\NepanController;
use App\Http\Controllers\Admin\PakistanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VietnamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
Route::get('admin/blog',[BlogController::class ,'blog'])->name('admin.blog');

Route::get('admin/vietnam/index',[VietnamController::class ,'index'])->name('admin.vietnam.index');

Route::get('admin/china/index',[ChinaController::class ,'index'])->name('admin.china.index');

Route::get('admin/janan/index',[JapanController::class ,'index'])->name('admin.janan.index');

Route::get('admin/nepan/index',[NepanController::class ,'index'])->name('admin.nepan.index');

Route::get('admin/pakistan/index',[PakistanController::class ,'index'])->name('admin.pakistan.index');

Route::get('admin/india/index',[IndiaController::class ,'index'])->name('admin.india.index');




Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('country')->name('country.')->controller(CountryController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('mountain')->name('mountain.')->controller(MountainController::class)->group(function () {
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

    Route::prefix('join')->name('join.')->controller(JoinController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('memberjoin')->name('memberjoin.')->controller(MemberjoinController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });


});
