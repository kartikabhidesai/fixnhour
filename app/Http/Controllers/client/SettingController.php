<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Users;
use Config;

class SettingController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
         $this->middleware('client');
    }

    public function profileImage(Request $request) {
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['cpp'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->file();
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('client')->user()->id;
                $user->chnageProfilePic($fileData,$userId);
                $request->session()->flash('session_success', 'Your profile pictures update successfully.');
            }else{
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('client-setting'));
        }
        $data['plugincss'] = array('bootstrap-fileinput/bootstrap-fileinput.css');
        $data['css'] = array();
        $data['pluginjs'] = array('bootstrap-fileinput/bootstrap-fileinput.js');
        $data['js'] = array();
        $data['funinit'] = array();
        return view('client.setting.profile-image',$data);
    }
    
    public function updateProfile(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['up'] = 'active';
        $arrUserInfo = Users::find($userId);
        $arrNameTitle = Config::get('constants.arrNameTitle');
        $arrUserType = Config::get('constants.arrUserType');
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('client')->user()->id;
                $user->updateUserInfo($request,$userId);
                $request->session()->flash('session_success', 'Your profile update successfully.');
            }else{
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('client-update-profile'));
        }
        $data['arrNameTitle'] = $arrNameTitle;
        $data['arrUserType'] = $arrUserType;
        $data['arrUserInfo'] = $arrUserInfo;
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.init();');
        return view('client.setting.update-profile',$data);
    }
    
    public function changePassword(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['cp'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('client')->user()->id;
                $changePasssword = $user->changePassword($request,$userId);
                if($changePasssword)
                {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                }else{
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
                
            }else{
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('client-change-password'));
        }
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('client.setting.change-password',$data);
    }
    
}
