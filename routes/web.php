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


//orders routes

Route::get('/dashboard/orders', 'KitchenStaffController@orders')->name('kitchenStaff.orders');

Route::get('/dashboard/order/ready/{id}', 'KitchenStaffController@orderReady')->name('kitchenStaff.order.ready');

Route::get('/dashboard/order/preparing/{id}', 'KitchenStaffController@orderPreparing')->name('kitchenStaff.order.preparing');

Route::get('/dashboard/order/notready/{id}', 'KitchenStaffController@orderNotReady')->name('kitchenStaff.order.notready');

//add food
Route::get('/dashboard/foods', 'KitchenStaffController@foods')->name('kitchenStaff.foods');

Route::get('/dashboard/addFood', 'KitchenStaffController@addFood')->name('kitchenStaff.addFood');

Route::post('/dashboard/createFood', 'KitchenStaffController@createFood')->name('kitchenStaff.createFood');


Route::get('/dashboard/editFood/{id}', 'KitchenStaffController@editFood')->name('kitchenStaff.editFood');

Route::post('/dashboard/updateFood', 'KitchenStaffController@updateFood')->name('kitchenStaff.updateFood');



Route::get('/dashboard/deleteFood/{id}', 'KitchenStaffController@deleteFood')->name('kitchenStaff.deleteFood');




Route::get('/dashboard/myOrders/', 'employeeController@myOrders')->name('employee.myOrders');

Route::get('/dashboard/deleteOrder/{id}', 'employeeController@deleteOrder')->name('employee.deleteOrder');









