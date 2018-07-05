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
//Admin routes
Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/home', 'Backend\Office\OfficeController@Index');
    Route::get('/project', 'Backend\Project\ProjectController@Index');// List project
    Route::get('/project/create', 'Backend\Project\CreateProjectController@Create');// Create project
    Route::post('/project/storage', 'Backend\Project\CreateProjectController@Storage');// Storage project
    Route::get('/project/edit/{project_id}', 'Backend\Project\UpdateProjectController@Edit');// Create project
    Route::post('/project/update{project_id}', 'Backend\Project\UpdateProjectController@Update');// Storage project
    Route::delete('/project/{id}', 'Backend\Project\ProjectController@deleteProject');//Delete project
});

//Client routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/project.html', 'HomeController@index');
Route::get('/project/{id}-{slug}.html', 'HomeController@index');
Route::get('/office.html', 'HomeController@index');
Route::get('/expertise/{id}-{slug}.html', 'HomeController@index');
Route::get('/expertise.html', 'HomeController@index');
Route::get('/news.html', 'HomeController@index');
Route::get('/news/{id}-{slug}.html', 'HomeController@index');
Route::get('/contact.html', 'HomeController@index');
Route::post('/contact', 'HomeController@index');
