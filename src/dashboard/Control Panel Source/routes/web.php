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
    return view('auth.login');
});

Route::post('/login', 'loginController@login');

Route::post('/status_trigger', 'device\deviceStatusTrigger@updateStatus');

Route::post('/devices', 'device\devicesController@main');

Route::post('/reg_device', 'device\regDeviceController@main');

Route::post('/delete_device', 'device\delete_device@delete');

Route::post('/add_dashboard', 'dashboard\add_dashboard@main');

Route::post('/input_config', 'dashboard\add_dashboard@get_api');

Route::post('/update_dashboard', 'dashboard\UpdateDashboard@main');

Route::post('/db_list', 'dashboard\db_list@main');

Route::post('/remove_db', 'dashboard\remove_db@main');
