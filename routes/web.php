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


Route::get('/index', 'PageController@index');
Route::get('/create', 'PageController@createPage');
Route::get('/lists', 'StudentController@displayUser');

Route::post('/insert', 'StudentController@store');

// Route::get('create', 'StudentController@create');
// Route::post('student', 'StudentController@store');

// Route::resource('pages', 'StudentController');