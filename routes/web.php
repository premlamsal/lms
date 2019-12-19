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

Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::get('/dashboard/employee', 'AdminController@employees')->name('admin.employee');

Route::get('/dashboard/addKitchenStaff', 'AdminController@addKitchenStaff')->name('admin.addKitchenStaff');

Route::post('/dashboard/createKitchenStaff', 'AdminController@createKitchenStaff')->name('admin.createKitchenStaff');

Route::get('/dashboard/editKitchenStaff', 'AdminController@editKitchenStaff')->name('admin.editKitchenStaff');

Route::post('/dashboard/updateKitchenStaff/{id}', 'AdminController@updateKitchenStaff')->name('admin.updateKitchenStaff');

Route::get('/dashboard/deleteKitchenStaff/{id}', 'AdminController@deleteKitchenStaff')->name('admin.deleteKitchenStaff');

Route::get('/dashboard/kitchenStaffs', 'AdminController@kitchenStaffs')->name('admin.kitchenStaffs');




