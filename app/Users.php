<?php

namespace App;
use Mail;
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
    
    public function checkUsername($request){
        $checkUsername = Users::where('username', $request['username'])->orWhere('email', $request['email'])->get()->toArray();
        
        if(empty($checkUsername)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function saveFrontendUsers($request,$fileData){
//            $emailEncode = base64_encode($request['email']);
//            $url = url('front/HomeController/activeAccount/'.$emailEncode);
//            $mailbody = 'Please click on below link to active your account<br/>'.$url;
//                
//            Mail::send(array(), $request ,function($message) use($request,$mailbody) {
//                $message->to($request1['email'], $request1['username'])
//                        ->from('kartikdesai123@gmail.com')
//                        ->subject('Welcome to Softral')
//                        ->setBody($mailbody, 'text/html');
//            });
//        exit();
            $file = $fileData['profile_image']; 
            $profileImage = NULL;
            if($request['usertype'] == 'freelancer'){
                 if(!empty($fileData)){
                       $destinationPath = public_path() . '/uploads/freelancer';
                       $time = time();
                       $profileImage = $time . $file->getClientOriginalName();
                       $upload_success = $file->move($destinationPath, $profileImage);
                 }
            }else{
                 if(!empty($fileData)){
                       $destinationPath = public_path() . '/uploads/client';
                       $time = time();
                       $profileImage = $time . $file->getClientOriginalName();
                       $upload_success = $file->move($destinationPath, $profileImage);
                 }
            }
            $users = new Users();
            $users->username = $request['username'];
            $users->email = $request['email'];
            $users->role_type = $request['usertype'];
            $users->password = Hash::make($request['password']);
            $users->var_image = $profileImage;
            $users->last_ip = \Request::ip();
            
//            $emailEncode = base64_encode($request['email']);
//            $url = url('front/HomeController/activeAccount/'.$emailEncode);
//            $mailbody = 'Please click on below link to active your account<br/>'.$url;
//
//            Mail::send('emails.email', $data, function($message) use ($data) {
//                $message->to( $request['email'], $request['username'])
//                        ->from('kartikdesai123@gmail.com')
//                        ->subject('Welcome to Softral')
//                        ->setBody($mailbody, 'text/html');
//            });
            
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
