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

Route::group(['middleware' => 'auth' ], function () {
    Route::get('/index', function () {
        return view('index');
    });
    Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
        Route::get('/', 'CompanyController@index')->name('index');
        Route::get('/show/{id}', 'CompanyController@show')->name('show');
        Route::get('/create', 'CompanyController@create')->name('create');
        Route::get('/edit/{id}', 'CompanyController@edit')->name('edit');
        Route::post('/update/{id}', 'CompanyController@update')->name('update');
        Route::post('/store', 'CompanyController@store')->name('store');
        Route::delete('/delete/{id}', 'CompanyController@destroy')->name('delete');
    });
    Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
        Route::get('/', 'EmployeeController@index')->name('index');
        Route::get('/show/{id}', 'EmployeeController@show')->name('show');
        Route::get('/create', 'EmployeeController@create')->name('create');
        Route::get('/edit/{id}', 'EmployeeController@edit')->name('edit');
        Route::post('/update/{id}', 'EmployeeController@update')->name('update');
        Route::post('/store', 'EmployeeController@store')->name('store');
        Route::delete('/delete/{id}', 'EmployeeController@destroy')->name('delete');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
