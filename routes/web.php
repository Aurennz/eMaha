<?php

Use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/task', function () {
    return view('task');
    });

Route::group(['middleware' => ['auth']], function () {
Route::get('/home','PageController@home');
Route::get('/profile','PageController@profile');
Route::get('/student','PageController@student');
Route::get('/contact','PageController@contact');

Route::get('/student/search','PageController@search');
Route::get('/student/formadd','PageController@formadd');
Route::get('/student/formedit/{id}','PageController@formedit');
Route::put('/student/update/{id}','PageController@update');
Route::get('/student/hapus/{id}','PageController@hapus');
Route::POST('/student/save','PageController@save');
Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/','AuthController@login');
    Route::post('/ceklogin','AuthController@ceklogin');
});

//api

Route::get('/mahasiswa/all','MahasiswaApiController@all');
Route::POST('/mahasiswa/create','MahasiswaApiController@create');
Route::put('/mahasiswa/update/{id}','MahasiswaApiController@update');
Route::delete('/mahasiswa/delete/{id}','MahasiswaApiController@delete');


