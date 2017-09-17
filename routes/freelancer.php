<?php


// Freelancer Rought start
$userPrefix1 = "freelancer";
Route::group(['prefix' => $userPrefix1], function() {

Route::match(['get', 'post'], '/jobdetail/{id}', ['as' => 'jobdetail', 'uses' => 'freelancer\FreelancerController@viewJobDetail']);
Route::match(['get', 'post'], '/proposol/{id}', ['as' => 'proposol', 'uses' => 'freelancer\FreelancerController@submitproposal']);
Route::match(['get', 'post'], '/freelancer', ['as' => 'freelancer', 'uses' => 'freelancer\FreelancerController@index']);
Route::match(['get', 'post'], '/freelancer-logout', ['as' => 'freelancer-logout', 'uses' => 'freelancer\FreelancerController@logout']);
Route::match(['get', 'post'], '/my-jobs', ['as' => 'my-jobs', 'uses' => 'freelancer\FreelancerController@myJobs']);
Route::match(['get', 'post'], '/payment', ['as' => 'payment', 'uses' => 'freelancer\FreelancerController@payment']);
Route::match(['get', 'post'], '/message', ['as' => 'message', 'uses' => 'freelancer\FreelancerController@message']);
Route::match(['get', 'post'], '/save-job', ['as' => 'save-job', 'uses' => 'freelancer\FreelancerController@saveJob']);
Route::match(['get', 'post'], '/profile', ['as' => 'profile', 'uses' => 'freelancer\FreelancerController@profile']);
Route::match(['get', 'post'], '/setting', ['as' => 'setting', 'uses' => 'freelancer\SettingController@profileImage']);
Route::match(['get', 'post'], '/update-profile', ['as' => 'freelancer-update-profile', 'uses' => 'freelancer\SettingController@updateProfile']);
Route::match(['get', 'post'], '/change-password', ['as' => 'freelancer-change-password', 'uses' => 'freelancer\SettingController@changePassword']);
Route::match(['get', 'post'], '/notification', ['as' => 'freelancer-notification', 'uses' => 'freelancer\SettingController@notification']);
Route::match(['get', 'post'], '/aboutme', ['as' => 'freelancer-aboutme', 'uses' => 'freelancer\SettingController@aboutme']);
Route::match(['get', 'post'], '/employment-history', ['as' => 'freelancer-employment-history', 'uses' => 'freelancer\SettingController@employmentHistory']);
Route::match(['get', 'post'], '/setting/ajaxAction', ['as' => 'freelancer-setting/ajaxAction', 'uses' => 'freelancer\SettingController@ajaxAction']);
Route::match(['get', 'post'], '/education', ['as' => 'freelancer-education', 'uses' => 'freelancer\SettingController@freelancerEducation']);
Route::match(['get', 'post'], '/skill', ['as' => 'freelancer-skill', 'uses' => 'freelancer\SettingController@skill']);
Route::match(['get', 'post'], '/setting/getSkillList', ['as' => 'freelancer-skill-ajax', 'uses' => 'freelancer\SettingController@getSkillList']);
});
// Freelancer Rought end

?>
