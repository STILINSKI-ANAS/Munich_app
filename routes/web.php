<?php

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

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/user', function () {
    return view('layouts.user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('Dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::controller(\App\Http\Controllers\Admin\LanguaguesController::class)->group(function (){
        Route::get('/Languages', 'index');
        Route::get('/Languages/create', 'create');
        Route::get('/Languages/{language}/edit', 'edit');
        Route::post('/Languages', 'store');
        Route::put('Languages/{Language}', 'update');
    });

    Route::controller(\App\Http\Controllers\Admin\CoursController::class)->group(function (){
        Route::get('/Course', 'index');
        Route::get('/Course/create', 'create');
        Route::get('/Course/{language}/edit', 'edit');
        Route::post('/Course', 'store');
        Route::put('Course/{Course}', 'update');
    });

    Route::controller(\App\Http\Controllers\Admin\AnnouncementsController::class)->group(function (){
        Route::get('/Announcements', 'index');
        Route::get('/Announcements/create', 'create');
        Route::get('/Announcements/{language}/edit', 'edit');
        Route::post('/Announcements', 'store');
        Route::put('Announcements/{Announcements}', 'update');
    });

        Route::get('Cours', [\App\Http\Controllers\Admin\CoursController::class, 'index']);
    Route::get('Tests', [\App\Http\Controllers\Admin\TestsController::class, 'index']);
    Route::get('Orders', [\App\Http\Controllers\Admin\OrdersController::class, 'index']);
    Route::get('Clients', [\App\Http\Controllers\Admin\ClientsController::class, 'index']);

});
