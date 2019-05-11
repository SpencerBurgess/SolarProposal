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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/login', function(){
    return view('home');
});

Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/project', 'ProjectController@index')->name('project');

Route::get('/project/{id}', 'ProjectController@edit');

Route::post('/project/save', 'ProjectController@store');