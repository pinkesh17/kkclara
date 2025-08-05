<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\SettingController;






Route::middleware(['admin'])->namespace('Admin')->prefix('webadmin')->group(function () {


    /*Route::middleware(['userSteps'])->group(function () {
         Route::get('/',[DashboardController::class, 'index']);
    });*/



    Route::get('/',[DashboardController::class, 'index'])->name('webadmin');



    Route::get('/autocomplete-users',[UserManagementController::class, 'autocomplete'])->name('users.autocomplete');

    Route::get('/users',[UserManagementController::class, 'index'])->name('users');
    Route::get('/add-user',[UserManagementController::class, 'addUser'])->name('add-user');
    Route::post('/add-user',[UserManagementController::class, 'addUserPost'])->name('add-user');


    Route::get('/add-user-child',[UserManagementController::class, 'addUserChild'])->name('add-user-child');
    Route::post('/add-user-child',[UserManagementController::class, 'addUserChildPost'])->name('add-user-child');



    Route::get('/add-address/{id?}',[UserManagementController::class, 'addAddress'])->name('users.add-address');
    Route::post('/users.add-address',[UserManagementController::class, 'addAddressPost'])->name('users.add-address');



    

    /*Setting*/

    Route::get('/my-profile',[SettingController::class, 'index'])->name('my-profile');



    Route::get('/user-data',[UserManagementController::class, 'userData'])->name('user-data');

    


       


});








/*
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ImagesController;






Route::namespace('Admin')->prefix('webadmin')->name('webadmin.')->group(function () {


        Route::get('login',[AuthAdminController::class, 'index']);
        Route::post('login',[AuthAdminController::class, 'postLogin']);

        Route::get('registration',[AuthAdminController::class, 'registration']);
        Route::post('registration',[AuthAdminController::class, 'postRegistration']);

     /*Route::namespace('Auth')->middleware('guest')->group(function(){
        Route::get('login',[AuthAdminController::class, 'create']);
        Route::post('login',[AuthAdminController::class, 'store']);
    });*




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

    });*/

    /*Route::put('/post/{id}', function (string $id) {
    // ...
})->middleware('role:editor,publisher');*


});




/*use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\StaticPagesController;
use App\Http\Controllers\Front\PackageController;





/*For Admin*
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SurveyingController;
use App\Http\Controllers\Admin\BaseHelperController;


use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\InvoiceController;

use App\Http\Controllers\Admin\QueryController;






use App\Http\Controllers\Admin\UsersDataController;






use App\Http\Controllers\Front\DownloadReportController;
use App\Http\Controllers\Front\PDFController;


/* For Emails *
use App\Mail\ContactMail;



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

/*Route::get('/', function () {
    return view('welcome');
});*

Route::get('/',[HomeController::class, 'index']);

Route::get('about-us',[StaticPagesController::class, 'aboutUs']);
Route::get('faq',[StaticPagesController::class, 'faqs']);
Route::get('health-packages',[StaticPagesController::class, 'healthPackages']);
Route::get('mytest',[StaticPagesController::class, 'mytest']);

Route::get('contact-us',[StaticPagesController::class, 'contactUs']);
Route::post('contact-us', [StaticPagesController::class, 'contactSave'])->name('contact');

Route::get('book-appointment', [StaticPagesController::class, 'bookAppointment']);
Route::post('appointment', [StaticPagesController::class, 'appointmentSave'])->name('appointmentSave');
Route::post('appointmentaj', [StaticPagesController::class, 'appointmentSaveAjax'])->name('appointmentAjax');


/*PackageController*
Route::get('full-body-packages',[PackageController::class, 'fullBody']);

/*
Route::get('full-body-packages',[PackageController::class, 'fullBody']);
Route::get('full-body-packages',[PackageController::class, 'fullBody']);
Route::get('full-body-packages',[PackageController::class, 'fullBody']);
Route::get('full-body-packages',[PackageController::class, 'fullBody']);
Route::get('full-body-packages',[PackageController::class, 'fullBody']);
*





Route::get('mymail', [ContactMail::class, 'build']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::namespace('Admin')->prefix('webadmin')->name('webadmin.')->group(function () {

     Route::namespace('Auth')->middleware('guest')->group(function(){
        Route::get('login',[AuthenticatedSessionController::class, 'create']);
        Route::post('login',[AuthenticatedSessionController::class, 'store']);
    });

    Route::middleware('admin')->group(function(){
         Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

         Route::get('addSurveyUser',[SurveyingController::class, 'addSurveyUser']);
         Route::post('addSurveyUser',[SurveyingController::class, 'addSurveyUser'])->name('addSurveyUser');
         Route::get('listSurveyUser',[SurveyingController::class, 'listSurveyUser']);

         Route::get('addAmenity',[BaseHelperController::class, 'addAmenity']);
         Route::post('saveamenity',[BaseHelperController::class, 'saveAmenity'])->name('saveamenity.store');
         Route::get('listAmenity',[BaseHelperController::class, 'listAmenity']);

         Route::get('addGender',[BaseHelperController::class, 'addGender']);
         Route::post('addGender',[BaseHelperController::class, 'addGender'])->name('addGender');
         Route::get('listGender',[BaseHelperController::class, 'listGender']);

         Route::get('addPrefix',[BaseHelperController::class, 'addPrefix']);
         Route::post('addPrefix',[BaseHelperController::class, 'addPrefix'])->name('addPrefix');
         Route::get('listPrefix',[BaseHelperController::class, 'listPrefix']);




         Route::get('booking',[TransactionController::class, 'addBooking']);
         Route::post('saveBooking',[TransactionController::class, 'saveBooking'])->name('saveBooking');
         Route::get('listBooking',[TransactionController::class, 'listBooking']);

         Route::get('testResult/{id}',[TransactionController::class, 'testResult']);
         Route::post('testResultSave',[TransactionController::class, 'testResultSave'])->name('testResultSave');

         


         /*Invoice | Report*
         Route::get('booking-invoice/{id}', [InvoiceController::class, 'generateBookingInvoice']);
         Route::get('print-report/{id}', [InvoiceController::class, 'generateReport']);

         




         /*Master*
         Route::get('test-list',[TestController::class, 'testList']);
         Route::get('add-test',[TestController::class, 'addTest']);
         Route::post('add-test',[TestController::class, 'addTest'])->name('addTest');


         /*MasterController*
         Route::get('referralDoctors',[MasterController::class, 'referralDoctors']);
         Route::post('referralDoctors',[MasterController::class, 'referralDoctors'])->name('saveReferralDoctors');


         Route::get('labDoctors',[MasterController::class, 'labDoctors']);
         Route::post('labDoctors',[MasterController::class, 'labDoctors'])->name('saveLabDoctors');



         Route::get('addUsers',[UsersDataController::class, 'addUsers']);
         Route::post('addUsers',[UsersDataController::class, 'addUsers'])->name('addUsers');
         Route::get('userList',[UsersDataController::class, 'userList']);

         /*Query*
         Route::get('queries/appointment',[QueryController::class, 'appointment']);
         Route::get('queries/contact',[QueryController::class, 'contacts']);

         


    });


  
  
   Route::post('logout',[AuthenticatedSessionController::class, 'destroy']);
});

require __DIR__.'/auth.php';

*/
