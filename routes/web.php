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
Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/home','Backend\Office\OfficeController@Index');
    Route::get('/project','Backend\Office\OfficeController@Index');// List project
    Route::get('/project/{id}','Backend\Office\OfficeController@findById');// Get project by id
    Route::post('/project','Backend\Office\OfficeController@createProject');// Create project
    Route::put('/project/{id}','Backend\Office\OfficeController@updateProject');//Update project
    Route::delete('/project/{id}','Backend\Office\OfficeController@deleteProject');//Delete project
});


Route::get('/home', 'HomeController@index')->name('home');
