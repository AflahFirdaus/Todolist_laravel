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
    return view('index');
});

// Untuk Data Todolist
Route::get('/task', 'TugasController@tugastampil');
Route::post('/task/tambah','TugasController@tugastambah');
Route::get('/task/hapus/{id}','TugasController@tugashapus');
Route::put('/task/edit/{id}', 'TugasController@tugasedit');

Route::get('/home', function(){return view('view_home');});