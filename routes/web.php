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

// Route::get('/', function () {
//     return view('auth/login');
// });
Route::get('/', 'HomeController@home')->name('home');


Route::resource('customer', 'CustomerController')->middleware(['auth', 'admin']);
Route::resource('products', 'ProductController')->middleware(['auth', 'admin']);
Route::resource('agency', 'AgencyController')->middleware('auth');
Route::resource('projectmanagement', 'ProjectManagementController')->middleware(['auth', 'adminemployee']);
Route::resource('document', 'DocumentationController')->middleware('auth');
Route::resource('audit', 'AuditController')->middleware('auth');
Route::resource('assessment', 'AssessmentController')->middleware('auth');
Route::resource('payment', 'PaymentController')->middleware('auth');
Route::resource('users', 'UserController')->middleware(['auth', 'admin']);

Route::get('amcs/complete', 'ProjectManagementController@completeAmc')->name('amcs.complete')->middleware(['auth', 'adminemployee']);
Route::get('projectmanagement/{id}/amc/create', 'ProjectManagementAmcController@create')->name('projectmanagementamc.create')->middleware(['auth', 'admin']);
Route::post('projectmanagement/{id}/amc/', 'ProjectManagementAmcController@store')->name('projectmanagementamc.store')->middleware(['auth', 'admin']);
Route::get('projectmanagement/amc/{id}/show', 'ProjectManagementAmcController@show')->name('projectmanagementamc.show')->middleware(['auth', 'adminemployee']);
Route::get('projectmanagement/amc/{id}/edit', 'ProjectManagementAmcController@edit')->name('projectmanagementamc.edit')->middleware(['auth', 'adminemployee']);
Route::put('projectmanagement/amc/{id}/update', 'ProjectManagementAmcController@update')->name('projectmanagementamc.update')->middleware(['auth', 'adminemployee']);
Route::get('projectmanagement/amc/index', 'ProjectManagementAmcController@index')->name('projectmanagementamc.index')->middleware(['auth', 'adminemployee']);

Auth::routes();

Route::get('dashboard', 'HomeController@index')->name('dashboard.index')->middleware('auth');
