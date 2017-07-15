<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Users extends Authenticatable{
    
    protected $table = 'users';
    
//    public function roles()
//    {
//        //return $this->belongsTo('App\Roles');
//        return $this->hasOne('App\Roles','id','role_id');
//    }
    
    // bellow code is used to remove remember token
    public function getRememberToken()
    {
      return null; // not supported
    }

    public function setRememberToken($value)
    {
      // not supported
    }

    public function getRememberTokenName()
    {
      return null; // not supported
    }

    /**
     * Overrides the method to ignore the remember token.
     */
    public function setAttribute($key, $value){
      $isRememberTokenAttribute = $key == $this->getRememberTokenName();
      if (!$isRememberTokenAttribute)
      {
        parent::setAttribute($key, $value);
      }
    }
    
    public function getUserList($collegeId){
        $arrUsers = Users::select('id', 'username')->pluck('username', 'id')->toArray();
        
        $userRecord['0'] = '--Select Account Manager--';
        return $returnUserRecord = array_merge($userRecord,$arrUsers);
    }
    
    public function saveFrontendUsers($request){
        
            $users = new Users();
            $users->username = $request['username'];
            $users->email = $request['email'];
            $users->name = $request['name'];
            $users->phone = $request['phone'];
            $users->mobile = $request['mobile'];
            $users->password = Hash::make($request['password']);
            
            if ($users->save()) {
                return $users->id;
            }
            //$request->session()->flash('session_success', 'User Was Successfully Added.');
    }
    
    public function editFrontendUsers($request, $id){
            
            $users = Users::find($id);
            $users->username = $request['username'];
            $users->email = $request['email'];
            $users->name = $request['name'];
            $users->phone = $request['phone'];
            $users->mobile = $request['mobile'];
            $users->save();
            
            //$request->session()->flash('session_success', 'User Was Successfully Updated.');
    }
    
}
