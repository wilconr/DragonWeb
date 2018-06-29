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
    return view('welcome');
});

Route::resource('maestros', 'MaestrosController');
Route::resource('belts', 'BeltsController');
Route::resource('students', 'StudentsController');
Route::resource('schedules', 'SchedulesController');
Route::resource('attendants', 'AttendantsController');
Route::get('/search', 'SearchController@index');
Route::get('/search/action', 'SearchController@action')->name('search.action');