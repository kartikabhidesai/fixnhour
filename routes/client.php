<?php

// Client Rought start
$userPrefix1 = "client";
Route::group(['prefix' => $userPrefix1], function() {
    
Route::match(['get', 'post'], 'post-your-job', ['as' => 'post-your-job', 'uses' => 'client\PostYourJobController@postYourJob']);
Route::match(['get', 'post'], 'client-logout', ['as' => 'client-logout', 'uses' => 'client\PostYourJobController@logout']);

// Client Rought end
});
?>
