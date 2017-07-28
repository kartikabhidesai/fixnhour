<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class PostJob extends Model {

    protected $table = 'post_jobs';
    
    public function savePostJobInfo($request) {
        
        //echo "<pre>";print_r($request->input());exit;
        
        $objPostJob = new PostJob();
        
        $objPostJob->category = $request->input('category');
        $objPostJob->sub_category = $request->input('sub_category');
        $objPostJob->title = $request->input('title');
        $objPostJob->job_describe = $request->input('description');
        $objPostJob->skill = $request->input('skill');
        $objPostJob->job_type = $request->input('job_type');
        $objPostJob->approximate_budget = $request->input('approximate_budget');
        $objPostJob->approximate_time = $request->input('approximate_time');
        $objPostJob->level = $request->input('level');
        $objPostJob->location_type = ($request->input('location_type')) ? '1' : '0';
        $objPostJob->region = $request->input('region');
        $objPostJob->country = $request->input('country');
        $objPostJob->state = $request->input('state');
        $objPostJob->city = $request->input('city');
        $objPostJob->zip = $request->input('zip');
        $objPostJob->proposed_option = $request->input('proposed_option');
        $objPostJob->delivery_date = date('Y-m-d', strtotime($request->input('start_date')));
        
        $objPostJob->save();
        return TRUE;
    }
    
    public function updateUserInfo($userId, $request) {
        
        $objPostJob = UserInfo::find($userId);
        
        $objPostJob->title = $request->input('title');
        $objPostJob->first_name = $request->input('first_name');
        $objPostJob->last_name = $request->input('last_name');
        $objPostJob->phone = $request->input('phone');
        $objPostJob->mobile = $request->input('mobile');
        $objPostJob->email = $request->input('email');
        $objPostJob->address = $request->input('address');
        $objPostJob->city_town = $request->input('city_town');
        $objPostJob->state = $request->input('state');
        $objPostJob->postcode = $request->input('postcode');
        $objPostJob->role_type = $request->input('type');
        $objPostJob->save();
        return TRUE;
    }
    
    public function updateUserPassword($userId, $request) {
        
        $newpassword = ($request->input('password') != '') ? $request->input('password') : null;
        $newpass = Hash::make($newpassword);
        
        $objPostJob = UserInfo::find($userId);
        $objPostJob->password = $newpass;
        $objPostJob->save();
        return TRUE;
    }
    
    public function deleteUserInfo($userId) {
        return UserInfo::where('id', $userId)->delete();
    }
}