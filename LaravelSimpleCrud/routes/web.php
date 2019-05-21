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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newEmployee','HomeController@addEmployee')->name('newEmployee');
Route::post('/newEmployee/create','HomeController@storeNewEmployee')->name('createEmployee');

Route::get('/updateEmployee/{id}','HomeController@updateEmployee')->name('updateEmployee');
Route::get('/updatedEmployee/{id}','HomeController@storeUpdatedEmployee')->name('updatedEmployee');

Route::get('deleteEmployee/{id}','HomeController@deleteEmployee')->name('deleteEmployee');