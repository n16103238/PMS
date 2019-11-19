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
//Route::get('/dashboard/admin_dashboard', 'DashboardController@admin_dashboard')->name('admin_dashboard');
Route::get('/dashboard/salesman_dashboard', 'DashboardController@salesman_dashboard')->name('salesman_dashboard');
Route::get('/dashboard/pharmacist_dashboard', 'DashboardController@pharmacist_dashboard')->name('pharmacist_dashboard');
Route::get('/dashboard/cashier_dashboard', 'DashboardController@cashier_dashboard')->name('cashier_dashboard');


//Invoice
Route::get('/invoice/add_invoice', 'InvoiceController@add_invoice')->name('add_invoice');
Route::get('/invoice/view_invoice', 'InvoiceController@view_invoice')->name('view_invoice');


//Medicine
Route::get('/medicine/add_medicine', 'MedicineController@add_medicine')->name('add_medicine');
Route::get('/medicine/medicine_list', 'MedicineController@medicine_list')->name('medicine_list');
Route::get('/medicine/medicine_category', 'MedicineController@medicine_category')->name('medicine_category');
Route::get('/medicine/add_category', 'MedicineController@add_category')->name('add_category');

//Pharmacist


//Report
