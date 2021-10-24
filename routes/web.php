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

Auth::routes();
Route::prefix('admin')->group(function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'UserController@index')->name('dashboard');
Route::get('/company', 'UserController@listCompany')->name('listCompany');
Route::get('/company/create', 'UserController@createCompany')->name('createCompany');
Route::get('/company/{id}/edit', 'UserController@editCompany')->name('editCompany');
Route::post('/company/store', 'UserController@storeCompany')->name('storeCompany');
Route::put('/company/{id}/update', 'UserController@updateCompany')->name('updateCompany');
Route::delete('/company/{id}/delete', 'UserController@deleteCompany')->name('destoryCompany');

Route::get('/employee', 'EmployeeController@listEmployee')->name('listEmployee');
Route::get('/employee/create', 'EmployeeController@createEmployee')->name('createEmployee');
Route::get('/employee/{id}/edit', 'EmployeeController@editEmployee')->name('editEmployee');
Route::post('/employee/store', 'EmployeeController@storeEmployee')->name('storeEmployee');
Route::put('/employee/{id}/update', 'EmployeeController@updateEmployee')->name('updateEmployee');
Route::delete('/employee/{id}/delete', 'EmployeeController@deleteEmployee')->name('destoryEmployee');

Route::get('/dashboard/export', 'UserController@export')->name('export');
});
