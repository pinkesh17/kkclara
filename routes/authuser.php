<?php
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\UserDashboard\DashboardController;





Route::get('/otp', [RegisterController::class, 'showRegistrationOtpForm'])->name('otp');
Route::post('/otp', [RegisterController::class, 'showRegistrationOtpFormPost'])->name('otp');




Route::namespace('UserDashboard')->prefix('dashboard')->name('users.dashboard.')->group(function () {


        Route::get('/',[DashboardController::class, 'index']);
       /* Route::post('login',[AuthAdminController::class, 'postLogin']);

        Route::get('registration',[AuthAdminController::class, 'registration']);
        Route::post('registration',[AuthAdminController::class, 'postRegistration']);*/

     /*Route::namespace('Auth')->middleware('guest')->group(function(){
        Route::get('login',[AuthAdminController::class, 'create']);
        Route::post('login',[AuthAdminController::class, 'store']);
    });*/

});







/*
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;




Route::get('/register', [AuthenticatedSessionController::class, 'registrationMobile'])
                ->middleware('guest')
                ->name('register');

Route::post('/otp', [AuthenticatedSessionController::class, 'registrationOtpPost'])
                ->middleware('guest')
                ->name('otp');
Route::post('/otpverify', [AuthenticatedSessionController::class, 'verifyOtpPost'])
                ->middleware('guest')
                ->name('otpverify');


                


Route::post('/register', [AuthenticatedSessionController::class, 'registrationMobilePost'])
                ->middleware('guest')
                ->name('register');



Route::get('/register-user', [AuthenticatedSessionController::class, 'register'])
                ->middleware('guest')
                ->name('register-user');

Route::post('/register-user', [AuthenticatedSessionController::class, 'registerPost'])
                ->middleware('guest')
                ->name('register-user');

 Route::get('/login', [AuthenticatedSessionController::class, 'login'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'loginPost'])
                ->middleware('guest')
                ->name('login');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.store');

Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');




Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');





/*

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

                */


                /*Route::namespace('Admin')->prefix('webadmin')->name('webadmin.')->group(function () {


        Route::get('login',[AuthAdminController::class, 'index']);
        Route::post('login',[AuthAdminController::class, 'postLogin']);

        Route::get('registration',[AuthAdminController::class, 'registration']);
        Route::post('registration',[AuthAdminController::class, 'postRegistration']);

     /*Route::namespace('Auth')->middleware('guest')->group(function(){
        Route::get('login',[AuthAdminController::class, 'create']);
        Route::post('login',[AuthAdminController::class, 'store']);
    });*/


/*

    Route::middleware(['adminauth:30'])->group(function () {
        Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

        Route::get('articles',[ArticlesController::class, 'index']);
        Route::get('add-article',[ArticlesController::class, 'addArticle']);
        Route::post('add-article',[ArticlesController::class, 'addArticlePost']);


        Route::get('images',[ImagesController::class, 'index']);


        Route::get('add-image',[ImagesController::class, 'addImage']);
        Route::post('uploadImage',[ImagesController::class, 'UploadImage']);




        Route::get('imases-feature',[ImagesController::class, 'imasesFeature']);
        Route::get('add-image-feature',[ImagesController::class, 'addImageFeature']);
        Route::post('uploadFeaturesImage',[ImagesController::class, 'uploadFeaturesImage']);


        

        Route::get('imases-category',[ImagesController::class, 'imasesCategory']);
        Route::get('add-image-category',[ImagesController::class, 'addImageCategory']);
        Route::post('uploadCategoriesImage',[ImagesController::class, 'uploadCategoriesImage']);


    
        

        Route::get('books',[BooksController::class, 'index']);
        
        Route::get('add-books',[BooksController::class, 'addBook']);
        Route::post('add-books',[BooksController::class, 'addBookPost']);

        


    });


    /*Route::group(['middleware'=>['adminauth','roles:30']],function(){
         Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

    });*

    /*Route::put('/post/{id}', function (string $id) {
    // ...
})->middleware('role:editor,publisher');*


});
*/