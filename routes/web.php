<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeeStructerController;
use App\Http\Controllers\ClassSessionController;
use App\Http\Controllers\PDFController;

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
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/pdf', function () {
    return view('myPDF');
});
Route::get('command', function () {
//  echo 'd';
    /* php artisan migrate */
    Artisan::call('cache:clear');
     Artisan::call('config:cache');
     Artisan::call('route:clear');
     Artisan::call('view:clear');
     
    //  date_default_timezone_set("Asia/Karachi");
    dd("Done");
});
// Route::get('generate-pdf','PDFController@generatePDF');
Route::get('/generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('generate-pdf');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');

// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('admin/allusers', [App\Http\Controllers\AdminController::class, 'allusera'])->name('allusers');
Route::delete('admin/userdelete/{id}', [App\Http\Controllers\AdminController::class, 'destroy']);
Route::get('admin/edit_user/{id}',[App\Http\Controllers\AdminController::class,'getUserById']);
Route::post('admin/updateuser/{id}',[App\Http\Controllers\AdminController::class,'updateuser']);

Route::get('admin/allstudents', [App\Http\Controllers\AdminController::class, 'allstudents'])->name('allstudents');
Route::get('/superadmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superadmin')->middleware('superadmin');
Route::get('/deo', [App\Http\Controllers\DeoController::class, 'index'])->name('deo')->middleware('deo');
Route::get('/feevoucherofficer', [App\Http\Controllers\FeeVoucherOfficerController::class, 'index'])->name('feevoucherofficer')->middleware('feevoucherofficer');
Route::post('/studentrecord', [App\Http\Controllers\FeeVoucherOfficerController::class, 'studentrecord'])->name('studentrecord')->middleware('feevoucherofficer');
Route::get('/admissionofficer', [App\Http\Controllers\AdmissionOfficerController::class, 'index'])->name('admissionofficer')->middleware('admissionofficer');
Route::post('/studentrecordupload', [App\Http\Controllers\AdmissionOfficerController::class, 'studentrecordupload'])->name('studentrecordupload')->middleware('admissionofficer');

Route::resource('feestructer', FeeStructerController::class);
Route::resource('session', ClassSessionController::class);
Route::post('admissionform', [App\Http\Controllers\StudentRecordController::class, 'store']);
Route::get('admissionrespit/{id}', [App\Http\Controllers\StudentRecordController::class, 'wordExport']);
Route::get('uploadrespit/{id}', [App\Http\Controllers\AdmissionOfficerController::class, 'uploadrespit']);
Route::post('postrespit/{id}', [App\Http\Controllers\AdmissionOfficerController::class, 'postrespit']);
// Route::get('/home', 'AcademicController@index')->name('home');
Route::get('export', [App\Http\Controllers\AdminController::class, 'export'])->name('export')->middleware('admin');
Route::get('libraryexport', [App\Http\Controllers\AdminController::class, 'libraryexport'])->name('libraryexport')->middleware('admin');
Route::get('change-password', [App\Http\Controllers\ChangePasswordController::class,'index']);
Route::post('change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');



Route::get('adduser', function(){

    return view('admin.user.adduser');
}) ;