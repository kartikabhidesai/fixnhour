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

// Front Rought Start
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'front\HomeController@index']);
Route::match(['get', 'post'], '/signup', ['as' => 'signup', 'uses' => 'front\HomeController@signup']);
Route::match(['get', 'post'], '/signin', ['as' => 'signin', 'uses' => 'front\HomeController@signin']);
Route::match(['get', 'post'], '/activeAccount/{code}', ['as' => 'activeAccount', 'uses' => 'front\HomeController@activeAccount']);
Route::match(['get', 'post'], '/find-telent', ['as' => 'find-telent', 'uses' => 'front\HomeController@findTelent']);
Route::match(['get', 'post'], '/sendbasicemail', ['as' => 'sendbasicemail', 'uses' => 'front\HomeController@basic_email']);
Route::match(['get', 'post'], '/how-it-works', ['as' => 'how-it-works', 'uses' => 'front\HomeController@howItWorks']);


// Front Rought End
//Route::match(['get', 'post'], 'post-your-job', ['as' => 'post-your-job', 'uses' => 'client\PostYourJobController@postYourJob']);

// Admin Rought start
Route::match(['get', 'post'], '/admin', ['as' => 'login', 'uses' => 'admin\AccountController@login']);
Route::match(['get', 'post'], '/admin/ajaxAction', ['as' => 'login1', 'uses' => 'admin\AccountController@ajaxAction']);
Route::match(['get', 'post'], '/login', ['as' => 'admin_login','uses' => 'admin\AccountController@login']);
Route::match(['get', 'post'], '/logout', ['as' => 'admin_logout','uses' => 'admin\AccountController@logout']);

$userPrefix = "admin";
Route::group(['prefix' => $userPrefix], function() {
   
     Route::match(['get', 'post'], '/dashboard', ['as' => 'dashboard', 'uses' => 'admin\SliderController@dashboard']);
     Route::match(['get', 'post'], '/slider-list', ['as' => 'slider-list', 'uses' => 'admin\SliderController@sliderList']);
     Route::match(['get', 'post'], '/slider-add', ['as' => 'slider-add', 'uses' => 'admin\SliderController@sliderAdd']);
     Route::match(['get', 'post'], '/slider-edit', ['as' => 'slider-edit', 'uses' => 'admin\SliderController@sliderEdit']);

     
     Route::match(['get', 'post'], '/user-list', ['as' => 'user-list', 'uses' => 'admin\UserController@userList']);
     Route::match(['get', 'post'], '/user-add', ['as' => 'user-add', 'uses' => 'admin\UserController@userAdd']);
     Route::match(['get', 'post'], '/user-edit/{id}', ['as' => 'user-edit', 'uses' => 'admin\UserController@userEdit']);
     Route::match(['get', 'post'], '/user-delete/{id}', ['as' => 'user-delete', 'uses' => 'admin\UserController@userDelete']);
     Route::match(['get', 'post'], '/reset-user-password/{id}', ['as' => 'reset-user-password', 'uses' => 'admin\UserController@resetPassword']);
     
     Route::match(['get', 'post'], '/addSlider', ['as' => 'addSlider','uses' => 'admin\SliderController@addSlider']);
     Route::match(['get', 'post'], '/editSlider', ['as' => 'editSlider','uses' => 'admin\SliderController@editSlider']);
     Route::match(['get', 'post'], '/slider/ajaxAction', ['as' => 'ajaxAction','uses' => 'admin\SliderController@ajaxAction']);

});

// Admin Rought end