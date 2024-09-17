<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\locationcontroller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\BookeventController;
use App\Http\Controllers\ServiceseventController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\ScheduleController;



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

Route::get('/client', function () {
    return view('client');
});
// Route::get('/upcoming', function () {
//     return view('upcomingevent');
// });

Route::get('/dash', [BookeventController::class,'display'])->name('dash');
Route::get('/upcoming', [AdminController::class,'upcomingAcceptedBookings'])->name('upcomingevent');
Route::get('/viewEvent/{bid}',[BookeventController::class,'viewEvent']);
Route::get('/client',[BookeventController::class,'showAcceptedRequests']);

// ______________________________Authantication_Start__________________________________

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'loginn']);

// Route::get('/login', function () {
//     return view('authlr.login');
// })->name('login');

// Route::get('/registration', function () {
//     return view('authlr.registration');
// })->name('registration');

// ______________________________Authantication_End__________________________________

Route::get('/custform',function(){
    return view('custform');

});
Route::get('/vendordisplay',[ServiceseventController::class,'showserviceadmin'])->name('vendordisplay');

Route::post('/custform',[CustomersController::class,'store'])->name('storecustomer');

Route::get('/bookingform',function(){
    return view('bookingform');

});

Route::get('/packageform',function(){
    return view('packageform');

});
Route::post('/packageform',[PackageController::class,'storepackage'])->name('storepackage');

Route::get('/locationform',function(){
    return view('locationform');

});
Route::post('/locationform',[locationcontroller::class,'storelocation'])->name('storelocation');

// Route::get('/feedbackform',function(){
//     return view('feedbackform');

// });

Route::get('/feedbackdisplay',[FeedbackController::class,'display']);
Route::get('/bookingdisplay',[BookeventController::class,'display']);

Route::get('acceptedevent/{id}', [BookeventController::class,'acceptevent']);
Route::get('rejectdevent/{id}', [BookeventController::class,'regectevent']);


Route::get('deletepackage/{id}',[PackageController::class,'deletepackage']);
Route::get('editpackage/{id}',[PackageController::class,'editpackage']);
Route::post('updatepackage/{id}',[PackageController::class,'updatepackage'])->name('updatepackage');


Route::get('/locationdisplay',[locationcontroller::class,'displayloc']);

Route::get('/packagedisplay',[PackageController::class,'display']);

// Route::get('editpackage/{pid}',[PackageController::class,'editpackage']);
// Route::post('/updatepackage/{pid}',[PackageController::class,'updatepackage'])->name('updatepackage');

// Route::get('/acceptedevent/{$bid}',[BookingEventController::class,'rejected']);

Route::get('/servicesform',[ServiceseventController::class,'index']);
Route::post('/servicesform',[ServiceseventController::class,'addservice'])->name('storeservice');
Route::get('/servicedisplay',[ServiceseventController::class,'show'])->name("displaydata");
// Route::get('/editservice',[ServiceseventController::class,'index']);
Route::get('/editservice/{id}',[ServiceseventController::class,'editservice']);
Route::post('/updateservice/{id}',[ServiceseventController::class,'updateservice'])->name('updateservice');
Route::get('/deleteservice/{id}',[ServiceseventController::class,'deleteservice']);



// *************************************___VENDORS___****************************************************************

// Route::get('/dashvendor',function(){
//     return view('dashvendor');
// })->name('dashvendor');

Route::get('/dashvendor',[VendorsController::class,'index'])->name('dashvendor');

Route::get('/formvendor',function(){
    return view('formvendor');
})->name('formvendor');

Route::post('/formvendor',[VendorsController::class,'storevendorinfo'])->name('formvendor');

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/vancal',[ScheduleController::class,'index'])->name('vancal');

Route::post('/vancal',[ScheduleController::class,'storevencal'])->name('vancal');

Route::get('/dashvendor',[ScheduleController::class,'venscheduledisplay']);

// Route::get('/vancal',function(){
//     return view('vancal');
// })->name('vancal');