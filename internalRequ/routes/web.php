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
Route::get('admin/role', 'RoleController@index')->name('role');
Route::get('admin/role/create', 'RoleController@create')->name('role');
Route::post('admin/role', 'RoleController@store');







Route::get('/user', 'UserController@index')->name('user');
Route::get('/solicitor', 'SolicitorController@index')->name('solicitor');
Route::get('/request', 'RequestController@index')->name('request');
Route::get('/employe', 'EmployeeController@index')->name('employee');
Route::get('/notification', 'NotificationColler@index')->name('notification');
