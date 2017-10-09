<?php

// Client Rought start
$userPrefix1 = "client";
Route::group(['prefix' => $userPrefix1], function() {

    Route::match(['get', 'post'], 'setting/ajaxAction', ['as' => 'setting/ajaxAction', 'uses' => 'client\SettingController@ajaxAction']);
    Route::match(['get', 'post'], 'post-your-job', ['as' => 'post-your-job', 'uses' => 'client\PostYourJobController@postYourJob']);
    Route::match(['get', 'post'], 'client-logout', ['as' => 'client-logout', 'uses' => 'client\PostYourJobController@logout']);
    Route::match(['get', 'post'], 'find-telent', ['as' => 'client-find-telent', 'uses' => 'client\FindTelentController@findTelent']);
    Route::match(['get', 'post'], 'profile-picture', ['as' => 'profile-picture', 'uses' => 'client\SettingController@profilePicture']);
    Route::match(['get', 'post'], 'update-profile', ['as' => 'update-profile', 'uses' => 'client\SettingController@updateProfile']);
    Route::match(['get', 'post'], 'change-password', ['as' => 'change-password', 'uses' => 'client\SettingController@changePassword']);
    Route::match(['get', 'post'], 'notification', ['as' => 'notification', 'uses' => 'client\SettingController@notification']);
    Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'client\SettingController@dashboard']);
    Route::match(['get', 'post'], 'my-jobs', ['as' => 'client-my-jobs', 'uses' => 'client\MyJobsController@index']);
    Route::match(['get', 'post'], 'jobdetail/{id}', ['as' => 'client-jobdetail', 'uses' => 'client\MyJobsController@viewJobDetail']);
    Route::match(['get', 'post'], 'aboutme', ['as' => 'aboutme', 'uses' => 'client\SettingController@aboutme']);
    Route::match(['get', 'post'], 'client-employment-history', ['as' => 'client-employment-history', 'uses' => 'client\SettingController@employmentHistory']);
    Route::match(['get', 'post'], 'client-education', ['as' => 'client-education', 'uses' => 'client\SettingController@clientEducation']);
    Route::match(['get', 'post'], 'client-profile', ['as' => 'client-profile', 'uses' => 'client\ProfileController@profile']);
// Client Rought end
});
?>
