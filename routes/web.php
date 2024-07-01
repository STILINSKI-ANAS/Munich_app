<?php

use App\Http\Controllers\Admin\AnnouncementsController;
use App\Http\Controllers\Admin\CoursController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EtudiantController;
use App\Http\Controllers\Admin\ExamController as AdminExamController;
use App\Http\Controllers\Admin\LanguaguesController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\ResultController as AdminResultController;
use App\Http\Controllers\Admin\ConvocationController as AdminConvocationController;
use App\Http\Controllers\Admin\TestsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ConvocationController;
use App\Http\Controllers\EtudiantCourseController;
use App\Http\Controllers\EtudiantTestController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ResultController;
use App\Mail\GreetingEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

// Authentication Routes
Auth::routes(['verify' => true]);

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('Dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::controller(LanguaguesController::class)->group(function () {
        Route::get('/Languages', 'index')->name('admin.languages');
        Route::get('/Languages/create', 'create');
        Route::get('/Languages/{language}/edit', 'edit');
        Route::post('/Languages', 'store');
        Route::put('/Languages/{Language}', 'update');
    });

    Route::controller(AnnouncementsController::class)->group(function () {
        Route::get('/Announcements', 'index')->name('admin.announcements');
        Route::get('/Announcements/create', 'create');
        Route::get('/Announcements/{Announcements}/edit', 'edit');
        Route::post('/Announcements', 'store');
        Route::put('/Announcements/{Announcements}', 'update');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/Users', 'index')->name('admin.users');
        Route::post('/Users/SetAdmin/{user}', 'setAdmin');
    });

    Route::controller(AdminExamController::class)->group(function () {
        Route::get('/exams', 'index')->name('admin.exams.index');
        Route::get('/exams/create', 'create')->name('admin.exams.create');
        Route::post('/exams', 'store')->name('admin.exams.store');
        Route::get('/exams/{exam}/edit', 'edit')->name('admin.exams.edit');
        Route::put('/exams/{exam}', 'update')->name('admin.exams.update');
        Route::delete('/exams/{exam}', 'destroy')->name('admin.exams.destroy');
        Route::get('/exams/test', 'testPagination')->name('admin.exams.test');
    });

    Route::controller(AdminRegistrationController::class)->group(function () {
        Route::get('/registrations', 'index')->name('admin.registrations.index');
        Route::get('/registrations/{registration}/edit', 'edit')->name('admin.registrations.edit');
        Route::put('/registrations/{registration}', 'update')->name('admin.registrations.update');
    });

    Route::controller(AdminPaymentController::class)->group(function () {
        Route::get('/payments', 'index')->name('admin.payments.index');
        Route::get('/payments/{id}', 'show')->name('admin.payments.show');
        Route::post('/payments/{id}/verify', 'verify')->name('admin.payments.verify');
        Route::get('payments/{payment}/receipt', 'showReceipt')->name('admin.payments.receipt');
    });

    Route::controller(AdminConvocationController::class)->group(function () {
        Route::get('/convocations', 'index')->name('admin.convocations.index');
        Route::get('/convocations/{id}/download', 'download')->name('admin.convocations.download');
    });

    Route::controller(AdminResultController::class)->group(function () {
        Route::get('/results', 'index')->name('admin.results.index');
        Route::get('/results/export', 'export')->name('admin.results.export');
        Route::post('/results/import', 'import')->name('admin.results.import');
        Route::get('/results/template', 'downloadTemplate')->name('admin.results.downloadTemplate');
    });
});

// Normal User Routes
Route::middleware(['web'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('root');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
    Route::get('/thank-you', [HomeController::class, 'thankyou']);
    Route::get('/blog', [HomeController::class, 'blog']);
    Route::get('/blog1', [HomeController::class, 'blog1']);
    Route::get('/blog2', [HomeController::class, 'blog2']);
    Route::get('/blog3', [HomeController::class, 'blog3']);
    Route::get('/blog4', [HomeController::class, 'blog4']);
    Route::get('/blog5', [HomeController::class, 'blog5']);
    Route::post('/Subscribe', [HomeController::class, 'subscribe']);
    Route::get('/aboutUs', [HomeController::class, 'aboutUs'])->name('aboutUs');
    Route::post('/search/customer', [HomeController::class, 'searchCustomer'])->name('search.customer');
    Route::get('/{Language}/Courses', [HomeController::class, 'getLanguageCourses']);
    Route::get('/Language/Course/{Course}', [HomeController::class, 'getCourse']);
    Route::get('/{Language}/Tests', [HomeController::class, 'getLanguageTests']);
    Route::get('/Language/Test/create', [HomeController::class, 'createDummyTests']);
    Route::get('/Language/Test/{Test}', [HomeController::class, 'getTest']);
    Route::get('/Test/preinscription', [HomeController::class, 'preinscription']);
    Route::get('/Test/admission/{testId}', [HomeController::class, 'admission'])->name('test.admission');
    Route::get('/Language/Course/{courseId}', [HomeController::class, 'getCourse'])->name('getCourse');

    Route::controller(ExamController::class)->group(function () {
        Route::get('/exams', 'index')->name('exams');
    });

    Route::controller(RegistrationController::class)->group(function () {
        Route::prefix('registration')->group(function () {
            Route::get('/step1', 'step1')->name('registration.step1');
            Route::post('/step1', 'postStep1')->name('registration.postStep1');
            Route::get('/step2', 'step2')->name('registration.step2');
            Route::post('/step2', 'postStep2')->name('registration.postStep2');
            Route::get('/validate-email/{token}', 'validateEmail')->name('registration.validate_email');
        });
    });

    Route::controller(ResultController::class)->group(function () {
        Route::get('/results', 'showCinForm')->name('results.form');
        Route::post('/results/search', 'searchResults')->name('results.search');
        Route::get('/results/{id}', 'show')->name('results.show');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::prefix('payment')->group(function () {
            Route::get('/form', 'form')->name('payment.form');
            Route::post('/submit', 'submit')->name('payment.submit');
            Route::get('/confirm', 'confirm')->name('payment.confirm');
            Route::get('/prepayement', 'prepayement')->name('payment.prepayement');
        });
    });

    Route::controller(ConvocationController::class)->group(function () {
        Route::prefix('convocation')->group(function () {
            Route::get('/form', 'form')->name('convocation.form');
            Route::post('/submit', 'submit')->name('convocation.submit');
        });
    });

    Route::controller(InstructorController::class)->group(function () {
        Route::get('/Instructor/register', 'index');
        Route::post('/Instructor/Register', 'store');
    });


    // Static Routes
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
