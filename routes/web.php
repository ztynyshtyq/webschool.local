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
Route::get('/dashboard', 'CourseController@dashboard');
Route::resource('/course', 'CourseController');

Route::get('/admin', function(){
    $session_web = \Illuminate\Support\Facades\Session::get('webclient');
    return view('admin')
        ->with('webclient', $session_web);
})->middleware('webClient');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminizator', "HomeController@adminizator");