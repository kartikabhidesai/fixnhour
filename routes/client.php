<?php

// Client Rought start
$userPrefix1 = "client";
Route::group(['prefix' => $userPrefix1], function() {
    
Route::match(['get', 'post'], 'post-your-job', ['as' => 'post-your-job', 'uses' => 'client\PostYourJobController@postYourJob']);
Route::match(['get', 'post'], 'client-logout', ['as' => 'client-logout', 'uses' => 'client\PostYourJobController@logout']);
Route::match(['get', 'post'], 'client-setting', ['as' => 'client-setting', 'uses' => 'client\SettingController@profileImage']);
Route::match(['get', 'post'], 'client-update-profile', ['as' => 'client-update-profile', 'uses' => 'client\SettingController@updateProfile']);
Route::match(['get', 'post'], 'client-change-password', ['as' => 'client-change-password', 'uses' => 'client\SettingController@changePassword']);

// Client Rought end
});
?>
