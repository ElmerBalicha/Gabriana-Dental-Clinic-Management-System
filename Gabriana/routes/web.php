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
// Route::group(['middleware'=>['auth']],function(){

    Route::post('/login/custom',[
        'uses' => 'LoginController@login',
        'as' => 'login.custom'
    ]);

    Route::get('/admin', 'PagesController@admin')->name('admin');
    Route::get('/assistant', 'PagesController@assistant')->name('assistant');
    Route::get('/', 'PagesController@log')->name('');
    
    Route::get('admin/inventory/{invID}/add', 'Admin\\InventoryController@add');
    Route::resource('admin/inventory', 'Admin\\InventoryController');
    
    Route::resource('admin/patient', 'Admin\\PatientsController');
    Route::resource('admin/inactiveInventory', 'Admin\\InactiveInventoryController');
    Route::resource('admin/inactivePatient', 'Admin\\InactivePatientsController');
    Route::resource('admin/schedules', 'Admin\\SchedulesController');
    Route::resource('admin/service', 'Admin\\ServicesController');
    
    
    Route::get('assistant/inventory/{invID}/add', 'Assistant\\InventoryController@add');
    Route::resource('assistant/inventory', 'Assistant\\InventoryController');
    
    Route::resource('assistant/patient', 'Assistant\\PatientsController');
    Route::resource('assistant/inactiveInventory', 'Assistant\\InactiveInventoryController');
    Route::resource('assistant/inactivePatient', 'Assistant\\InactivePatientsController');
    Route::resource('assistant/schedules', 'Assistant\\SchedulesController');
    Route::resource('assistant/service', 'Assistant\\ServicesController');
    
// });