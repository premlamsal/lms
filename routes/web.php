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



Auth::routes();

Route::get('/', 'DashboardController@index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



Route::get('/dashboard/employees', 'AdminController@employees')->name('admin.employees');

Route::get('/dashboard/addEmployee', 'AdminController@addEmployee')->name('admin.addEmployee');

Route::post('/dashboard/creatEemployee', 'AdminController@creatEemployee')->name('admin.creatEemployee');

Route::get('/dashboard/editEmployee/{id}', 'AdminController@editEmployee')->name('admin.editEmployee');

Route::post('/dashboard/updateEmployee', 'AdminController@updatEemployee')->name('admin.updateEmployee');

Route::get('/dashboard/deleteEmployee/{id}', 'AdminController@deleteEmployee')->name('admin.deleteEmployee');




//kitchen staff routes

Route::get('/dashboard/kitchenStaffs', 'AdminController@kitchenStaffs')->name('admin.kitchenStaffs');

Route::get('/dashboard/addKitchenStaff', 'AdminController@addKitchenStaff')->name('admin.addKitchenStaff');

Route::post('/dashboard/createKitchenStaff', 'AdminController@createKitchenStaff')->name('admin.createKitchenStaff');

Route::get('/dashboard/editKitchenStaff/{id}', 'AdminController@editKitchenStaff')->name('admin.editKitchenStaff');

Route::post('/dashboard/updateKitchenStaff', 'AdminController@updateKitchenStaff')->name('admin.updateKitchenStaff');

Route::get('/dashboard/deleteKitchenStaff/{id}', 'AdminController@deleteKitchenStaff')->name('admin.deleteKitchenStaff');







