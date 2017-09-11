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

    /* Overrides the method to ignore the remember token. */
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
    
    public function basic_email(){
      $data = array('name'=>"Virat Gandhi");

      Mail::send(['text'=>'email.email'], $data, function($message) {
         $message->to('kartikdesai123@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         
         $message->from('abhishekdesai39@gmail.com','Virat Gandhi');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   
    public function saveFrontendUsers($request,$fileData){
            $emailEncode = base64_encode($request['email']);
            $url = url('activeAccount/'.$emailEncode);
            $mailbody = 'Hello '.$request['email'].'<br/><br/>Please click on below link to active your account.<br/><br/>'.$url.'<br/><br/>Thanks';

            $arrMail = array(
                'mailTo' => $request['email'],
                'from' => 'abhishekdesai39@gmail.com',
                'fromName' => 'Softral',
                'cc' => 'abhishekdesai39@gmail.com',
                'replyTo' => $request['email'],
                'bcc' => 'abhishekdesai39@gmail.com',
                'subject' => 'Welcome to Softral',
                'message' => 'Active Account',
                'fileName' => '',
                'filePath' => '',
            );
                
                
            $from_name = $arrMail['from'];
            $from_mail = $arrMail['from'];
            $replyto = $arrMail['mailTo'];
            $message = $arrMail['message'];
            $subject = $arrMail['subject'];
            $mailto = $arrMail['mailTo'];
                
            // message & attachment
            $nmessage = '';

            $nmessage .= $mailbody . "\r\n\r\n";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: Softral <Mednoor1@gmail.com>' . "\r\n";
       
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
            
            
            if ($users->save()) {
                mail($mailto, $subject, $nmessage, $headers);
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
    
    public function chnageProfilePic($fileData,$id){
        
            $file = $fileData['profile_image']; 
            $users = Users::find($id);
            $profileImage = $users->var_image;
            
            if(!empty($fileData)){
                  $destinationPath = public_path() . '/uploads/freelancer';
                  $time = time();
                  $profileImage = $time . $file->getClientOriginalName();
                  $upload_success = $file->move($destinationPath, $profileImage);
            }
            
            
            $users->var_image = $profileImage;
            $users->last_ip = \Request::ip();
            if ($users->save()) {
                return $users->id;
            }
            
    }
    
    public function updateUserInfo($request,$userId) {
        
        $objUser = Users::find($userId);
        
        $objUser->title = $request->input('title');
        $objUser->first_name = $request->input('first_name');
        $objUser->last_name = $request->input('last_name');
        $objUser->phone = $request->input('phone');
        $objUser->mobile = $request->input('mobile');
        
        $objUser->address = $request->input('address');
        $objUser->city_town = $request->input('city_town');
        $objUser->state = $request->input('state');
        $objUser->postcode = $request->input('postcode');
        
        $objUser->save();
        return TRUE;
    }
    
    public function changePassword($request,$userId){
        $objUser = Users::find($userId);
        
        //if($objUser->password == Hash::make($request['old_password']))
        if(Hash::check($request['old_password'] , $objUser->password))
        {
            $objUser->password = Hash::make($request['new_password']);
            $objUser->save();
             return TRUE;
        }else{
            return FALSE;
        }
        
    }
    
    public function updateOverviewInfo($request, $userId){
        $objUser = Users::find($userId);
        $objUser->overview_title = $request->input('overview_title');
        $objUser->overview_text = $request->input('overview_text');
        $objUser->price = $request->input('price');
        $objUser->save();
        return TRUE;
    }
}
