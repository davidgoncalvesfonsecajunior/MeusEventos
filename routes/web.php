<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/eventos/{slug}', [\App\Http\Controllers\HomeController::class, 'show'])->name('event.single');





//rotas CRUD da base para eventos...
Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {

    // Route::prefix('/events')->name('events.')->group(function () {

    //     Route::get('/', [\App\Http\Controllers\Admin\EventController::class, 'index'])->name('index');

    //     Route::get('/create', [\App\Http\Controllers\Admin\EventController::class, 'create'])->name('create');

    //     Route::post('/store', [\App\Http\Controllers\Admin\EventController::class, 'store'])->name('store');

    //     Route::get('/{event}/edit', [\App\Http\Controllers\Admin\EventController::class, 'edit'])->name('edit');

    //     Route::post('/update/{event}', [\App\Http\Controllers\Admin\EventController::class, 'update'])->name('update');

    //     Route::get('/destroy/{event}', [\App\Http\Controllers\Admin\EventController::class, 'destroy'])->name('destroy');
    // });

    route::resource('events', \App\Http\Controllers\Admin\EventController::class);

    route::resource('events.photos', \App\Http\Controllers\Admin\EventPhotosController::class)->only('destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
