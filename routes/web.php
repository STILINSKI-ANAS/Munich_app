<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaiementController;
use App\Http\Livewire\Admin\Inscriptions\TestsInscriptions\Index;
use App\Mail\EmailService;
use App\Mail\GreetingEmail;
use App\Models\Test;
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
//Route::get('/payment-for-telc', [PaiementController::class, 'showTestTelcPayment']);

//Route::get('/payment-for-telc', function (Request $request) {
//    PaiementController::showTestTelcPayment($request);
//});
//Route::get('/dump-and-die', [\App\Http\Controllers\PaiementController::class, 'showTestTelcPayment'])->name('showTestTelcPayment');
Route::get('/account', function () {
    return view('welcome');
});
//Route::get('/payment-for-telc', [\App\Http\Controllers\PaiementController::class, 'showTestTelcPayment'])->name('showTestTelcPayment');
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/user', function () {
    return view('layouts.user');
});

// Email Verification
Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');

Route::get('/home', function () {
    return redirect()->route('root');
});

Auth::routes(['verify' => true]);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('Dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('Dashboard');

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

    # Users
    Route::controller(\App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('/Users', 'index')->name('Users');
        Route::post('/Users/SetAdmin/{user}', 'setAdmin');
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
    Route::get('CoursInscriptions', [\App\Http\Controllers\Admin\CoursInscriptionsController::class, 'index']);
    Route::get('TestsInscriptions', [\App\Http\Controllers\Admin\TestsInscriptionsController::class, 'index']);
});

Route::prefix('/')->group(function () {

//    Route::controller(\App\Http\Controllers\HomeController::class)->group(function () {
//        Route::get('/', 'index')->name('root');
//        Route::get('/privacy-policy', 'privacyPolicy');
//        Route::get('/blog', 'blog');
//        Route::get('/blog1', 'blog1');
//        Route::get('/blog2', 'blog2');
//        Route::get('/blog3', 'blog3');
//        Route::get('/blog4', 'blog4');
//        Route::get('/blog5', 'blog5');
//
//        Route::post('/Subscribe', 'subscribe');
//
//        Route::get('/aboutUs', 'aboutUs');
//
//        Route::get('/{Language}/Courses', 'getLanguageCourses');
//        Route::get('/Language/Course/{Course}', 'getCourse');
//        Route::get('/{Language}/Tests', 'getLanguageTests');
//        Route::get('/Language/Test/create', 'createDummyTests');
//        Route::get('/Language/Test/{Test}', 'getTest');
//
//        Route::get('/Language/Course/{courseId}', 'HomeController@getCourse')->name('getCourse');
//    });

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

        Route::get('/aboutUs', [HomeController::class, 'aboutUs']);

        Route::get('/{Language}/Courses', [HomeController::class, 'getLanguageCourses']);
        Route::get('/Language/Course/{Course}', [HomeController::class, 'getCourse']);
        Route::get('/{Language}/Tests', [HomeController::class, 'getLanguageTests']);
        Route::get('/Language/Test/create', [HomeController::class, 'createDummyTests']);
        Route::get('/Language/Test/{Test}', [HomeController::class, 'getTest']);

        Route::get('/Language/Course/{courseId}', [HomeController::class, 'getCourse'])->name('getCourse');
    });

    Route::controller(\App\Http\Controllers\InstructorController::class)->group(function () {
        Route::get('/Instructor/register', 'index');
        Route::post('/Instructor/Register', 'store');
    });
    Route::controller(\App\Http\Controllers\EtudiantTestController::class)->group(function () {
        Route::get('/EtudiantTests', 'showTests');
//        Route::post('/EtudiantTest', 'store')->name('EtudiantTest');
        Route::match(['get', 'post'], '/EtudiantTest', 'store')->name('EtudiantTest');
        Route::post('/inscriptionstep2', 'step2')->name('inscriptionstep2');
    });
    Route::controller(\App\Http\Controllers\PaiementController::class)->group(function () {
        Route::get('/inscriptionstep3', 'index');
        Route::post('/testPaymentProcess', 'testPayment')->name('testPaymentProcess');
        Route::post('/coursePaymentProcess', 'coursePayment')->name('coursePaymentProcess');
        Route::post('/validerCoursePayment1', 'validerCoursePayment1')->name('validerCoursePayment1');
        Route::post('/validerCoursePayment2', 'validerCoursePayment2')->name('validerCoursePayment2');
        Route::post('/validerTestPayment1', 'validerTestPayment1')->name('validerTestPayment1');
        Route::post('/validerTestPayment2', 'validerTestPayment2')->name('validerTestPayment2');
        Route::get('/payment-success', function () {
            return view('user.Paiement.ok');
        })->name('paymentSuccess');
        Route::get('/payment-fail', function () {
            return view('user.Paiement.fail');
        })->name('paymentFail');

        //notez que vous pouvez utiliser le chemin que vous voulez, mais vous devez utiliser la méthode de rappel (callback) implémentée dans la trait CmiGateway
        Route::post('/cmi/callback', [\App\Http\Controllers\PaiementController::class, 'callback'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        // dans la trait CmiGateway, cette méthode est vide pour que vous puissiez implémenter votre propre processus après un paiement réussi
        Route::post('/cmi/ok', [\App\Http\Controllers\PaiementController::class, 'okUrl'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        // la fail url redirigera l'utilisateur vers shopUrl avec une erreur pour que l'utilisateur puisse essayer de payer à nouveau
        Route::post('/cmi/fail', [\App\Http\Controllers\PaiementController::class, 'failUrl'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        //Route::post('/inscriptionstep2', 'step2')->name('inscriptionstep2');
    });
    Route::controller(\App\Http\Controllers\EtudiantCourseController::class)->group(function () {
        Route::post('/EtudiantCourse', 'store')->name('EtudiantCourse');
    });
});

Route::get('/send-greeting-email', function () {
    $recipientEmail = 'hakeemkadim@gmail.com';

    Mail::to($recipientEmail)->send(new GreetingEmail());

    return "Greeting email sent successfully!";
});

Route::controller(\App\Http\Controllers\Admin\EtudiantController::class)->group(function () {
    Route::get('/create-user/{etudiant_id}', 'createAndAttachUser');
    Route::get('/get-user/{user_id}', 'getUserAndAttachedEtudiant');
});

# Static paiement routes
Route::get('/payment-for-telc', [\App\Http\Controllers\PaiementController::class, 'showTestTelcPayment'])->name('showTestTelcPayment');
//Route::get('/process-test', [PaiementController::class, 'showTestTelcPayment'])->name('process-test');

Route::get('/exams', [ExamController::class, 'index'])->name('exams');
Route::prefix('registration')->group(function () {
    Route::get('/step1', [RegistrationController::class, 'step1'])->name('registration.step1');
    Route::post('/step1', [RegistrationController::class, 'postStep1'])->name('registration.postStep1');
    Route::get('/step2', [RegistrationController::class, 'step2'])->name('registration.step2');
    Route::post('/step2', [RegistrationController::class, 'postStep2'])->name('registration.postStep2');
    Route::get('/validate-email/{token}', [RegistrationController::class, 'validateEmail'])->name('registration.validate_email');
});

Route::prefix('payment')->group(function () {
    Route::get('/form', [PaymentController::class, 'form'])->name('payment.form');
    Route::post('/submit', [PaymentController::class, 'submit'])->name('payment.submit');
    Route::get('/confirm', [PaymentController::class, 'confirm'])->name('payment.confirm');
});
