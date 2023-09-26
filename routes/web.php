<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\contactsController;
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
    return view('frontend/home');
});
Route::get('/about-us', function () {
    return view('frontend/about');
});
Route::get('/contact-us', function () {
    return view('frontend/contact');
});
Route::get('/our-gallery', function () {
    return view('frontend/gallery');
});
Route::get('/our-services', function () {
    return view('frontend/services');
});

Route::get('/certificate', [StudentController::class, 'showcertpage'])->name('certpageshow');
Route::post('/certificate-check', [StudentController::class, 'checkcertificate'])->name('certificate.check');

Route::get('/certificate-details', function () {
    return view('frontend/certificatedetails');
});

    Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
   






Route::group(['middleware' => 'adminauth'], function () {
  
//dashboard route
Route::get('admin/dashboard', [dashboardController::class, 'show'])->name('adminDashboard');
 

// student route
Route::get('/admin/add-student', [StudentController::class, 'addstudent'])->name('add.student');
Route::post('/save-student', [StudentController::class, 'savestudent'])->name('save.student');
Route::get('/admin/all-student', [StudentController::class, 'allstudent'])->name('all.student');
Route::delete('/admin/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::get('/admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');


//contact routes
Route::get('/admin/contacts/', [contactsController::class, 'show'])->name('all.contacts');
Route::delete('/admin/contact/{contact}', [contactsController::class, 'destroy'])->name('contact.destroy');
Route::post('/save-contact', [contactsController::class, 'submitForm'])->name('contact.submit');

//logout route
 Route::get('admin/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
});


