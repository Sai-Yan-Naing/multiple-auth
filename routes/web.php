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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'UserController@index')->name('dashboard');
Route::get('/admin/company', 'UserController@listCompany')->name('listCompany');
Route::get('/admin/company/create', 'UserController@createCompany')->name('createCompany');
Route::get('/admin/company/{id}/edit', 'UserController@editCompany')->name('editCompany');
Route::post('/admin/company/store', 'UserController@storeCompany')->name('storeCompany');
Route::put('/admin/company/{id}/update', 'UserController@updateCompany')->name('updateCompany');
Route::delete('/admin/company/{id}/delete', 'UserController@deleteCompany')->name('destoryCompany');

Route::get('/admin/employee', 'EmployeeController@listEmployee')->name('listEmployee');
Route::get('/admin/employee/create', 'EmployeeController@createEmployee')->name('createEmployee');
Route::get('/admin/employee/{id}/edit', 'EmployeeController@editEmployee')->name('editEmployee');
Route::post('/admin/employee/store', 'EmployeeController@storeEmployee')->name('storeEmployee');
Route::put('/admin/employee/{id}/update', 'EmployeeController@updateEmployee')->name('updateEmployee');
Route::delete('/admin/employee/{id}/delete', 'EmployeeController@deleteEmployee')->name('destoryEmployee');
