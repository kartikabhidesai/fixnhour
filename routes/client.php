<?php

// Client Rought start
$userPrefix1 = "client";
Route::group(['prefix' => $userPrefix1], function() {
    
Route::match(['get', 'post'], 'post-your-job', ['as' => 'post-your-job', 'uses' => 'client\PostYourJobController@postYourJob']);
Route::match(['get', 'post'], 'client-logout', ['as' => 'client-logout', 'uses' => 'client\PostYourJobController@logout']);
Route::match(['get', 'post'], 'client-setting', ['as' => 'client-setting', 'uses' => 'client\SettingController@profileImage']);
Route::match(['get', 'post'], 'client-update-profile', ['as' => 'client-update-profile', 'uses' => 'client\SettingController@updateProfile']);
Route::match(['get', 'post'], 'client-change-password', ['as' => 'client-change-password', 'uses' => 'client\SettingController@changePassword']);
Route::match(['get', 'post'], 'client-notification', ['as' => 'client-notification', 'uses' => 'client\SettingController@notification']);
Route::match(['get', 'post'], 'client-dashboard', ['as' => 'client-dashboard', 'uses' => 'client\SettingController@dashboard']);
Route::match(['get', 'post'], 'client-aboutme', ['as' => 'client-aboutme', 'uses' => 'client\SettingController@aboutme']);
Route::match(['get', 'post'], 'client-employment-history', ['as' => 'client-employment-history', 'uses' => 'client\SettingController@employmentHistory']);
Route::match(['get', 'post'], 'client-education', ['as' => 'client-education', 'uses' => 'client\SettingController@clientEducation']);
Route::match(['get', 'post'], 'client-profile', ['as' => 'client-profile', 'uses' => 'client\ProfileController@profile']);
// Client Rought end
});
?>
