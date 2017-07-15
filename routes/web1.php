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

Route::match(['get', 'post'], '/login', ['as' => 'client_login', 'uses' => 'Login\ClientController@login']);

Route::get('/', function () {
            return redirect()->route('client_login');
        });

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
Route::get('/admin', 'AccountController@deshboard');


$adminPrefix = "admin";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {

    Route::get('/dashboard', ['as' => 'adminIndex', 'uses' => 'Login\AdminController@dashboard']);
    
});

Route::get($adminPrefix . '/', ['as' => 'admin_login', 'uses' => 'Login\AdminController@login']);
Route::get($adminPrefix . '/login', ['as' => 'admin_login', 'uses' => 'Login\AdminController@login']);
Route::get($adminPrefix . '/logout', ['as' => 'admin_logout', 'uses' => 'Login\AdminController@logout']);