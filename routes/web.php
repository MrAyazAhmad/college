<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeeStructerController;
use App\Http\Controllers\ClassSessionController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AdminController;
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
Route::get('command', function () {
    Artisan::call('key:generate');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    dd("Done");
});
Route::get('/', function () {
     if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('feevoucherofficer');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('deo');

        }
        if (Auth::user()->role == 2) {
            return redirect()->route('admin');

        }

        if (Auth::user()->role == 5) {
            return redirect()->route('admissionofficer');

        }
});
// Route::get('/', [App\Http\Controllers\LoginController::class, 'check'])->name('generate-pdf');

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
Route::get('/generate-pdf/{id}', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('generate-pdf');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');

// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('admin/allusers', [App\Http\Controllers\AdminController::class, 'allusera']);
Route::get('admin/addusers', [App\Http\Controllers\AdminController::class, 'adduser'])->name('adduser');
Route::delete('admin/deleteuser/{id}',[AdminController::class,'deleteUser']);
Route::delete('admin/deletestudent/{id}',[AdminController::class,'deletsudent']);
Route::delete('deletefeestructure/{id}',[AdminController::class,'DeleteFeestructure']);
Route::get('view-session',  [App\Http\Controllers\AdminController::class, 'viewsessions']);
Route::get('create-session',  [App\Http\Controllers\AdminController::class, 'CreateSession']);
Route::post('session-store',  [App\Http\Controllers\AdminController::class, 'StoreSession']);
Route::delete('deletesession/{id}',[AdminController::class,'DeleteSession']);
Route::get('admin/edit_user/{id}',[AdminController::class,'EditUser']);
Route::get('admin/edit_student/{id}',[AdminController::class,'EditStudent']);
Route::get('admin/edit_session/{id}',[AdminController::class,'EditSession']);

Route::get('admin/allstudents', [App\Http\Controllers\AdminController::class, 'allstudents'])->name('allstudents');
Route::get('admin/bs-students', [App\Http\Controllers\AdminController::class, 'bsstudents'])->name('bs-students');
Route::get('admin/bs-challanprint', [App\Http\Controllers\AdminController::class, 'bschallanprint'])->name('bs-challanprint');
Route::get('admin/bs-confirm', [App\Http\Controllers\AdminController::class, 'bsconfirm'])->name('bs-confirm');
Route::get('admin/confirmstudents', [App\Http\Controllers\AdminController::class, 'confirmstudents'])->name('confirmstudents');

Route::post('createuser', [App\Http\Controllers\AdminController::class, 'createuser']);

Route::post('admin/updateuser/{id}',[App\Http\Controllers\AdminController::class,'updateuser'])->name('updateuser');
Route::post('admin/session_update/{id}',[App\Http\Controllers\AdminController::class,'SessionUpdate'])->name('SessionUpdate');

Route::get('admin/allstudents', [App\Http\Controllers\AdminController::class, 'allstudents'])->name('allstudents');
Route::get('/superadmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superadmin')->middleware('superadmin');
Route::get('/deo', [App\Http\Controllers\DeoController::class, 'index'])->name('deo')->middleware('deo');
Route::get('/feevoucherofficer', [App\Http\Controllers\FeeVoucherOfficerController::class, 'index'])->name('feevoucherofficer')->middleware('feevoucherofficer');
Route::post('/studentrecord', [App\Http\Controllers\FeeVoucherOfficerController::class, 'studentrecord'])->name('studentrecord')->middleware('feevoucherofficer');
Route::post('/studentfeevoucher/{id}', [App\Http\Controllers\FeeVoucherOfficerController::class, 'studentfeevoucher'])->name('studentfeevoucher')->middleware('feevoucherofficer');
Route::get('/admissionofficer', [App\Http\Controllers\AdmissionOfficerController::class, 'index'])->name('admissionofficer')->middleware('admissionofficer');
Route::get('/studentrecordupload', [App\Http\Controllers\AdmissionOfficerController::class, 'studentrecordupload'])->name('studentrecordupload')->middleware('admissionofficer');

Route::get('view-feestructure', [App\Http\Controllers\AdminController::class, 'viewfeestructure']);
Route::get('edit_feestructure/{id}', [App\Http\Controllers\AdminController::class, 'EditFeestructure']);
Route::post('update_feestructure/{id}', [App\Http\Controllers\AdminController::class, 'UpdateFeestructure']);
Route::get('addfeestructure', [App\Http\Controllers\FeeStructerController::class, 'create']);
Route::post('feestructer', [App\Http\Controllers\FeeStructerController::class, 'store']);

Route::post('admissionform', [App\Http\Controllers\StudentRecordController::class, 'store']);
Route::post('admin/admissionformupdate/{id}', [App\Http\Controllers\AdminController::class, 'UpdateForm']);
Route::get('admissionrespit/{id}', [App\Http\Controllers\StudentRecordController::class, 'wordExport']);
Route::get('uploadrespit/{id}', [App\Http\Controllers\AdmissionOfficerController::class, 'uploadrespit']);
Route::get('printaplication/{id}', [App\Http\Controllers\AdmissionOfficerController::class, 'printaplication']);

Route::post('postrespit/{id}', [App\Http\Controllers\AdmissionOfficerController::class, 'postrespit']);
// Route::get('/home', 'AcademicController@index')->name('home');
Route::get('export', [App\Http\Controllers\AdminController::class, 'export'])->name('export')->middleware('admin');
Route::get('studentexport', [App\Http\Controllers\AdminController::class, 'studentexport'])->name('studentexport')->middleware('admin');
Route::get('libraryexport', [App\Http\Controllers\AdminController::class, 'libraryexport'])->name('libraryexport')->middleware('admin');
Route::get('change-password', [App\Http\Controllers\ChangePasswordController::class,'index']);
Route::post('change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');



Route::get('adduser', function(){

    return view('admin.user.adduser');
}) ;