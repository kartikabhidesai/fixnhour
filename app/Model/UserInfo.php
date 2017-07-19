<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class UserInfo extends Model {

    protected $table = 'users';

    public function saveUserInfo($request) {
        
        $objUser = new UserInfo();
        
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
        
        if($objUser->save()){
            echo "dsffsd";
        }else{
            echo "1111";
        }exit;
        return TRUE;
    }
}