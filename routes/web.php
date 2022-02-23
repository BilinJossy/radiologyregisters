<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\testcontroller;

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
    return view('login');
});
Route::get('/reg', function () {
    return view('register');
});

Route::get('/pat', function () {
    return view('patient');
});
Route::get('/xray', function () {
    return view('xray');
});

Route::get('/test', function () {
    return view('tests');
});


Route::post('/register1',[registercontroller::class,'store']);
Route::post('/login1',[registercontroller::class,'check']);
Route::post('/pat1',[patientcontroller::class,'store']);
Route::post('/stu1',[patientcontroller::class,'store1']);
Route::get('/plist',[patientcontroller::class,'viewpatient']);
Route::get('/plist/{id}',[patientcontroller::class,'patient1']);
Route::get('/stu/{id}',[patientcontroller::class,'addstudy']);
Route::get('/plist/slist/{id}',[patientcontroller::class,'viewstudy']);
Route::get('/logout',[registercontroller::class,'logout']);
Route::get('/search',[patientcontroller::class,'viewpatient']);
Route::get('/listxray',[testcontroller::class,'listxray']);
Route::get('/listcarm',[testcontroller::class,'listcarm']);
Route::get('/listfluro',[testcontroller::class,'listfluro']);
Route::get('/listmri',[testcontroller::class,'listmri']);
Route::get('/listct',[testcontroller::class,'listct']);
Route::get('/listus',[testcontroller::class,'listus']);
Route::get('/listmg',[testcontroller::class,'listmg']);
Route::get('/listbmd',[testcontroller::class,'listbmd']);
Route::get('/listredos',[testcontroller::class,'listredos']);
Route::get('/listportable',[testcontroller::class,'listportable']);
