<?php


// Freelancer Rought start
$userPrefix1 = "freelancer";
Route::group(['prefix' => $userPrefix1], function() {

Route::match(['get', 'post'], '/freelancer', ['as' => 'freelancer', 'uses' => 'freelancer\FreelancerController@index']);
Route::match(['get', 'post'], '/freelancer-logout', ['as' => 'freelancer-logout', 'uses' => 'freelancer\FreelancerController@logout']);
Route::match(['get', 'post'], '/my-jobs', ['as' => 'my-jobs', 'uses' => 'freelancer\FreelancerController@myJobs']);
Route::match(['get', 'post'], '/payment', ['as' => 'payment', 'uses' => 'freelancer\FreelancerController@payment']);
Route::match(['get', 'post'], '/message', ['as' => 'message', 'uses' => 'freelancer\FreelancerController@message']);
Route::match(['get', 'post'], '/save-job', ['as' => 'save-job', 'uses' => 'freelancer\FreelancerController@saveJob']);
Route::match(['get', 'post'], '/profile', ['as' => 'profile', 'uses' => 'freelancer\FreelancerController@profile']);
Route::match(['get', 'post'], '/setting', ['as' => 'setting', 'uses' => 'freelancer\SettingController@profileImage']);
Route::match(['get', 'post'], '/update-profile', ['as' => 'update-profile', 'uses' => 'freelancer\SettingController@updateProfile']);
Route::match(['get', 'post'], '/change-password', ['as' => 'change-password', 'uses' => 'freelancer\SettingController@changePassword']);
});
// Freelancer Rought end

?>