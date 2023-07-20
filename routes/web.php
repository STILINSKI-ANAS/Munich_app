<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/account', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/user', function () {
    return view('layouts.user');
});

Auth::routes();

Route::prefix('/')->group(function () {
    Route::controller(\App\Http\Controllers\HomeController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/privacy-policy', 'privacyPolicy');
        Route::get('/blog', 'blog');
        Route::get('/aboutUs', 'aboutUs');

        Route::get('/{Language}/Courses', 'getLanguageCourses');
        Route::get('/Language/Course/{Course}', 'getCourse');
        Route::get('/{Language}/Tests', 'getLanguageTests');
        Route::get('/Language/Test/{Test}', 'getTest');
        Route::get('/Language/Course/{courseId}', 'HomeController@getCourse')->name('getCourse');
    });
});



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('Dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(\App\Http\Controllers\Admin\LanguaguesController::class)->group(function () {
        Route::get('/Languages', 'index');
        Route::get('/Languages/create', 'create');
        Route::get('/Languages/{language}/edit', 'edit');
        Route::post('/Languages', 'store');
        Route::put('Languages/{Language}', 'update');
    });
    Route::controller(\App\Http\Controllers\Admin\EtudiantController::class)->group(function () {
        Route::get('/Etudiant', 'index');
        Route::get('/Etudiant/create', 'create');
        Route::get('/Etudiant/edit/{etudiant}', 'edit');
        Route::post('/Etudiant', 'store');
        Route::put('Etudiant/{etudiant}', 'update');
    });

    Route::controller(\App\Http\Controllers\Admin\CoursController::class)->group(function () {
        Route::get('/Course', 'index');
        Route::get('/Course/create', 'create');
        Route::get('/Course/{Course}/edit', 'edit');
        Route::post('/Course', 'store');
        Route::put('Course/{Course}', 'update');
    });
    Route::get('Cours', [\App\Http\Controllers\Admin\CoursController::class, 'index']);

    Route::controller(\App\Http\Controllers\Admin\OrdersController::class)->group(function () {
        Route::get('/Orders', 'index');
        Route::get('/Orders/create', 'create');
        Route::get('/Orders/{Order}/edit', 'edit');
        Route::post('/Orders', 'store');
        Route::put('Orders/{Order}', 'update');
    });

    Route::controller(\App\Http\Controllers\Admin\TestsController::class)->group(function () {
        Route::get('/Test', 'index');
        Route::get('/Test/create', 'create');
        Route::get('/Test/{Test}/edit', 'edit');
        Route::post('/Test', 'store');
        Route::put('Test/{Test}', 'update');
    });

    Route::controller(\App\Http\Controllers\Admin\AnnouncementsController::class)->group(function () {
        Route::get('/Announcements', 'index');
        Route::get('/Announcements/create', 'create');
        Route::get('/Announcements/{Announcements}/edit', 'edit');
        Route::post('/Announcements', 'store');
        Route::put('Announcements/{Announcements}', 'update');
    });

    Route::get('Cours', [\App\Http\Controllers\Admin\CoursController::class, 'index']);
    Route::get('Tests', [\App\Http\Controllers\Admin\TestsController::class, 'index']);
    Route::get('Orders', [\App\Http\Controllers\Admin\OrdersController::class, 'index']);
    Route::get('Clients', [\App\Http\Controllers\Admin\ClientsController::class, 'index']);
});
