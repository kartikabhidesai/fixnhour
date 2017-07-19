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

//Route::match(['get', 'post'], '/login', ['as' => 'client_login', 'uses' => 'Login\ClientController@login']);


//Route::match(['get', 'post'], '/dashboard', ['as' => 'dashboard', 'uses' => 'Login\ClientController@login']);


//Route::get('/', 'front\HomeController@index')->name('home');
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'front\HomeController@index']);
//Route::get('/signup', 'HomeController@signup');
Route::match(['get', 'post'], 'signup', ['as' => 'signup', 'uses' => 'front\HomeController@signup']);
Route::get('/find-telent', 'front\HomeController@findTelent');

Route::get('/how-it-works', 'front\HomeController@howItWorks');

Route::get('/freelancer', 'FreelancerController@index');

Route::get('/my-jobs', 'FreelancerController@myJobs');

Route::get('/payment', 'FreelancerController@payment');

Route::get('/message', 'FreelancerController@message');

Route::get('/save-job', 'FreelancerController@saveJob');

Route::get('/profile', 'FreelancerController@profile');
Route::get('/post-your-job', 'client\PostYourJobController@postYourJob');
//Route::get('/deshboard', 'admin\AccountController@deshboard');
//Route::get('/admin', 'admin\AccountController@login');
Route::match(['get', 'post'], '/admin', ['as' => 'login', 'uses' => 'admin\AccountController@login']);
Route::match(['get', 'post'], 'admin/ajaxAction', ['as' => 'login1', 'uses' => 'admin\AccountController@ajaxAction']);

Route::match(['get', 'post'], '/login', ['as' => 'admin_login','uses' => 'admin\AccountController@login']);
Route::match(['get', 'post'], '/logout', ['as' => 'admin_logout','uses' => 'admin\AccountController@logout']);

$userPrefix = "admin";
Route::group(['prefix' => $userPrefix], function() {
   
     Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'admin\SliderController@dashboard']);
     Route::match(['get', 'post'], 'slider-list', ['as' => 'slider-list', 'uses' => 'admin\SliderController@sliderList']);
     Route::match(['get', 'post'], 'slider-add', ['as' => 'slider-add', 'uses' => 'admin\SliderController@sliderAdd']);
     Route::match(['get', 'post'], 'slider-edit', ['as' => 'slider-edit', 'uses' => 'admin\SliderController@sliderEdit']);

     
     Route::match(['get', 'post'], 'user-list', ['as' => 'user-list', 'uses' => 'admin\UserController@userList']);
     Route::match(['get', 'post'], 'user-add', ['as' => 'user-add', 'uses' => 'admin\UserController@userAdd']);
});
Route::match(['get', 'post'], '/addSlider', ['as' => 'addSlider','uses' => 'admin\SliderController@addSlider']);
Route::match(['get', 'post'], '/editSlider', ['as' => 'editSlider','uses' => 'admin\SliderController@editSlider']);
Route::match(['get', 'post'], 'slider/ajaxAction', ['as' => 'ajaxAction','uses' => 'admin\SliderController@ajaxAction']);

//Route::post('addSlider', 'admin\SliderController@addSlider');