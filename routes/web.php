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
Route::get('/test/{id}',[patientcontroller::class,'addtest']);
Route::get('/addxray/{id}',[testcontroller::class,'addxray']);
Route::post('/addxray1',[testcontroller::class,'addxray1']);
Route::get('/addcarm/{id}',[testcontroller::class,'addcarm']);
Route::post('/addcarm1',[testcontroller::class,'addcarm1']);
Route::get('/addbmd/{id}',[testcontroller::class,'addbmd']);
Route::post('/addbmd1',[testcontroller::class,'addbmd1']);
Route::get('/addmg/{id}',[testcontroller::class,'addmg']);
Route::post('/addmg1',[testcontroller::class,'addmg1']);
Route::get('/addus/{id}',[testcontroller::class,'addus']);
Route::post('/addus1',[testcontroller::class,'addus1']);
Route::get('/addct/{id}',[testcontroller::class,'addct']);
Route::post('/addct1',[testcontroller::class,'addct1']);
Route::get('/addmri/{id}',[testcontroller::class,'addmri']);
Route::post('/addmri1',[testcontroller::class,'addmri1']);
Route::get('/addfluro/{id}',[testcontroller::class,'addfluro']);
Route::post('/addfluro1',[testcontroller::class,'addfluro1']);
Route::get('/addredos/{id}',[testcontroller::class,'addredos']);
Route::post('/addredos1',[testcontroller::class,'addredos1']);
Route::get('/listxray',[testcontroller::class,'listxray']);
Route::get('/listcarm',[testcontroller::class,'listcarm']);
Route::get('/listfluro',[testcontroller::class,'listfluro']);
Route::get('/listmri',[testcontroller::class,'listmri']);
Route::get('/listct',[testcontroller::class,'listct']);
Route::get('/listus',[testcontroller::class,'listus']);
Route::get('/listmg',[testcontroller::class,'listmg']);
Route::get('/listbmd',[testcontroller::class,'listbmd']);
Route::get('/listredos',[testcontroller::class,'listredos']);
