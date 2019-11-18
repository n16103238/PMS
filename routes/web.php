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
Route::group(['middleware'=>['auth']],function(){
  Route::group(['middleware'=>['_admin']],function(){
    Route::get('/admin_dashboard', 'DashboardController@admin_dashboard')->name('admin_dashboard');
  });
});
Route::group(['middleware'=>['auth']],function(){
  Route::group(['middleware'=>['_salesman']],function(){
    Route::get('/salesman_dashboard', 'DashboardController@salesman_dashboard')->name('salesman_dashboard');
  });
});


//Dashboard
Route::get('/dashboard/admin_dashboard', 'DashboardController@admin_dashboard')->name('admin_dashboard');
Route::get('/salesman_dashboard', 'DashboardController@salesman_dashboard')->name('salesman_dashboard');
Route::get('/denied', 'DashboardController@denied')->name('denied');

//Medicine
Route::get('/medicine/add_medicine', 'MedicineController@add_medicine')->name('add_medicine');
