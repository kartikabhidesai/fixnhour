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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/signup', 'HomeController@signup');

Route::get('/findTelent', 'HomeController@findTelent');

Route::get('/howItWorks', 'HomeController@howItWorks');

Route::get('/freelancer', 'FreelancerController@index');

Route::get('/myJobs', 'FreelancerController@myJobs');

Route::get('/payment', 'FreelancerController@payment');

Route::get('/message', 'FreelancerController@message');

Route::get('/save-job', 'FreelancerController@saveJob');

Route::get('/profile', 'FreelancerController@profile');
Route::get('/post-your-job', 'FreelancerController@postYourJob');
Route::get('/deshboard', 'admin\AccountController@deshboard');
Route::get('/admin', 'admin\AccountController@login');
