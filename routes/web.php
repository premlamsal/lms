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














Route::group(['middleware' => ['admin']], function () {
    



Route::get('/dashboard/employees', 'AdminController@employees')->name('admin.employees');

Route::get('/dashboard/addEmployee', 'AdminController@addEmployee')->name('admin.addEmployee');

Route::post('/dashboard/creatEemployee', 'AdminController@creatEemployee')->name('admin.creatEemployee');

Route::get('/dashboard/editEmployee/{id}', 'AdminController@editEmployee')->name('admin.editEmployee');

Route::post('/dashboard/updateEmployee', 'AdminController@updatEemployee')->name('admin.updateEmployee');

Route::get('/dashboard/deleteEmployee/{id}', 'AdminController@deleteEmployee')->name('admin.deleteEmployee');




});//end of admin middleware




Route::group(['middleware' => ['employee']], function () {
    

Route::get('/dashboard/makeOrder/{id}', 'employeeController@makeOrder')->name('employee.makeOrder');

Route::get('/dashboard/myOrders/', 'employeeController@myOrders')->name('employee.myOrders');

Route::get('/dashboard/deleteOrder/{id}', 'employeeController@deleteOrder')->name('employee.deleteOrder');



});//end of employee middleware




Route::group(['middleware' => ['kitchenStaff']], function () {
    



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






Route::get('/dashboard/menus', 'KitchenStaffController@menus')->name('kitchenStaff.menus');

Route::get('/dashboard/addMenu', 'KitchenStaffController@addMenu')->name('kitchenStaff.addMenu');


Route::post('/dashboard/createMenu', 'KitchenStaffController@createMenu')->name('kitchenStaff.createMenu');


Route::get('/dashboard/editMenu/{id}', 'KitchenStaffController@editMenu')->name('kitchenStaff.editMenu');

Route::post('/dashboard/updateMenu', 'KitchenStaffController@updateMenu')->name('kitchenStaff.updateMenu');



Route::get('/dashboard/addMenuItem', 'KitchenStaffController@addMenuItem')->name('kitchenStaff.addMenuItem');

Route::post('/dashboard/createMenuItem', 'KitchenStaffController@createMenuItem')->name('kitchenStaff.createMenuItem');


Route::post('/dashboard/setMenuOfDay', 'KitchenStaffController@setMenuOfDay')->name('kitchenStaff.setMenuOfDay');



Route::get('/dashboard/deleteMenuItem/{id}', 'KitchenStaffController@deleteMenuItem')->name('kitchenStaff.deleteMenuItem');











});//end of employee middleware








