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

Route::get('/company', 'App\Http\Controllers\CompanyController@view')->name('company.index');
Route::get('/companies', 'App\Http\Controllers\CompanyController@get_company_data')->name('data');
Route::get('/addcompany', 'App\Http\Controllers\CompanyController@view')->name('company.view');
Route::post('/addcompany', 'App\Http\Controllers\CompanyController@Store')->name('company.store');
Route::delete('/addcompany/{id}', 'App\Http\Controllers\CompanyController@destroy')->name('company.destroy');
Route::get('/addcompany/{id}/edit', 'App\Http\Controllers\CompanyController@update')->name('company.update');
