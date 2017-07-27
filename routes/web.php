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
Route::get('/find-telent', 'front\HomeController@findTelent');
Route::get('/sendbasicemail','front\HomeController@basic_email');
Route::get('/how-it-works', 'front\HomeController@howItWorks');

// Front Rought End

// Freelancer Rought start
Route::get('/freelancer', 'freelancer\FreelancerController@index');
Route::get('/freelancer-logout', 'freelancer\FreelancerController@logout');
Route::get('/my-jobs', 'freelancer\FreelancerController@myJobs');
Route::get('/payment', 'freelancer\FreelancerController@payment');
Route::get('/message', 'freelancer\FreelancerController@message');
Route::get('/save-job', 'freelancer\FreelancerController@saveJob');
Route::get('/profile', 'freelancer\FreelancerController@profile');
Route::match(['get', 'post'], '/setting', ['as' => 'setting', 'uses' => 'freelancer\SettingController@profileImage']);
Route::match(['get', 'post'], '/update-profile', ['as' => 'update-profile', 'uses' => 'freelancer\SettingController@updateProfile']);

// Freelancer Rought end

// Client Rought start
Route::match(['get', 'post'], 'post-your-job', ['as' => 'post-your-job', 'uses' => 'client\PostYourJobController@postYourJob']);

// Client Rought end

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