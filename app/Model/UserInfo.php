<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserInfo extends Model {

    protected $table = 'users';
    
    public function checkUsername($request){
        $checkUsername = UserInfo::where('username', $request['username'])->orWhere('email', $request['email'])->get()->toArray();
        
        if(empty($checkUsername)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function saveUserInfo($request) {
        
        $newpassword = ($request->input('password') != '') ? $request->input('password') : null;
        $newpass = Hash::make($newpassword);
        
        $objUser = new UserInfo();
        
        $objUser->title = $request->input('title');
        $objUser->first_name = $request->input('first_name');
        $objUser->last_name = $request->input('last_name');
        $objUser->phone = $request->input('phone');
        $objUser->mobile = $request->input('mobile');
        $objUser->email = $request->input('email');
        $objUser->username  = $request->input('username');
        $objUser->password = $newpass;
        $objUser->address = $request->input('address');
        $objUser->city_town = $request->input('city_town');
        $objUser->state = $request->input('state');
        $objUser->postcode = $request->input('postcode');
        $objUser->role_type = $request->input('type');
        $objUser->save();
        return TRUE;
    }
    
    public function updateUserInfo($userId, $request) {
        
        $objUser = UserInfo::find($userId);
        
        $objUser->title = $request->input('title');
        $objUser->first_name = $request->input('first_name');
        $objUser->last_name = $request->input('last_name');
        $objUser->phone = $request->input('phone');
        $objUser->mobile = $request->input('mobile');
        $objUser->email = $request->input('email');
        $objUser->address = $request->input('address');
        $objUser->city_town = $request->input('city_town');
        $objUser->state = $request->input('state');
        $objUser->postcode = $request->input('postcode');
        $objUser->role_type = $request->input('type');
        $objUser->save();
        return TRUE;
    }
    
    public function updateUserPassword($userId, $request) {
        
        $newpassword = ($request->input('password') != '') ? $request->input('password') : null;
        $newpass = Hash::make($newpassword);
        
        $objUser = UserInfo::find($userId);
        $objUser->password = $newpass;
        $objUser->save();
        return TRUE;
    }
    
    public function deleteUserInfo($userId) {
        return UserInfo::where('id', $userId)->delete();
    }
}