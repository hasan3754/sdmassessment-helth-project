<?php

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
    return view('create');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/next', function () {
    return view('next');
});
Route::post('/create', 'FormsController@store');
Route::post('/posture', 'FormsController@storeee');
Route::post('/next', 'FormsController@storee');
Route::post('/Patient', 'PatientController@store');
Route::post('/Pain', 'PatientController@storee');
Route::get('/records', 'PatientController@index');
Route::resource('/records','lcontroller');

