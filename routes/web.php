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
    return view('auth/login');
});


Route::resource('customer', 'CustomerController')->middleware('auth');
Route::resource('products', 'ProductController')->middleware('auth');
Route::resource('agency', 'AgencyController')->middleware('auth');
Route::resource('projectmanagement', 'ProjectManagementController')->middleware('auth');
Route::resource('document', 'DocumentationController')->middleware('auth');
Route::resource('audit', 'AuditController')->middleware('auth');
Route::resource('assessment', 'AssessmentController')->middleware('auth');
Route::resource('payment', 'PaymentController')->middleware('auth');
//Route::resource('amc', 'AmcController');

Route::get('amcs/complete', 'ProjectManagementController@completeAmc')->name('amcs.complete')->middleware('auth');
Route::get('projectmanagement/{id}/amc/create', 'ProjectManagementAmcController@create')->name('projectmanagementamc.create')->middleware('auth');
Route::post('projectmanagement/{id}/amc/', 'ProjectManagementAmcController@store')->name('projectmanagementamc.store')->middleware('auth');
Route::get('projectmanagement/amc/{id}/show', 'ProjectManagementAmcController@show')->name('projectmanagementamc.show')->middleware('auth');
Route::get('projectmanagement/amc/{id}/edit', 'ProjectManagementAmcController@edit')->name('projectmanagementamc.edit')->middleware('auth');
Route::put('projectmanagement/amc/{id}/update', 'ProjectManagementAmcController@update')->name('projectmanagementamc.update')->middleware('auth');
Route::get('projectmanagement/amc/index', 'ProjectManagementAmcController@index')->name('projectmanagementamc.index')->middleware('auth');
// Route::resource('certifications', 'CertificationBodyController');
//Route::resource('auditinfo', 'AuditInfoController');
// Route::resource('auditmanagement', 'AuditManagementController');
// Route::resource('auditinfo', 'AuditInfoController');
// Route::resource('certificationinfo', 'CertificationInfoController');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::post('login', 'Auth\LoginController@login');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register','Auth\RegisterController@index')->name('register')->middleware('auth');
Route::post('register','Auth\RegisterController@register')->middleware('auth');
Route::get('/subbroker/verify/{token}', 'Auth\RegisterController@verifyUser')->middleware('auth');

Route::get('dashboard', 'HomeController@index')->name('dashboard.index')->middleware('auth');
