<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/fix',function (){
    Artisan::call('optimize');
});
Route::get('/doctors','HomeController@Doctors')->name('Doctors');
Route::get('/majors','HomeController@Majors')->name('All-Majors');
Route::get('/view-majors/{id}','HomeController@ViewMajors')->name('View-Majors');
Route::get('/view-doctor/{id}','HomeController@ViewDoctor')->name('View-Doctor');

Route::get('/booking/{id}','HomeController@Booking')->name('Booking');
Route::post('/booking/{id}','HomeController@Booking');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Home
Route::prefix('/control')->group(function (){
    Route::get('/','AdminController@index')->name('Admin-Dashboard');

    Route::get('/add-major','AdminController@AddMajor')->name('Add-Major');
    Route::post('/add-major','AdminController@AddMajor');

    Route::get('/add-doctor','AdminController@AddDoctor')->name('Add-Doctor');
    Route::post('/add-doctor','AdminController@AddDoctor');


    Route::get('/add-clinic','AdminController@AddClinic')->name('Add-clinic');
    Route::post('/add-clinic','AdminController@AddClinic');

    Route::get('/doctor-times','AdminController@DoctorTimes')->name('doctor-times');
    Route::post('/doctor-times','AdminController@DoctorTimes');

});
