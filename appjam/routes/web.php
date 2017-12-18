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
use Illuminate\Http\Response;

Route::get('/', function (){
    return view('welcome');
});




// teacher
Route::post('/api/insertTeacher','TeacherController@insertTeacher');

Route::post('/api/insertLocation','TeacherController@insertLocation');

Route::post('/api/selectTeacherList','TeacherController@selectTeacherList');

Route::post('/api/selectTeacher','TeacherController@selectTeacher');