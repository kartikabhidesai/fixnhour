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

    public function profilePicture(Request $request) {
        
        $data['pagetitle'] = 'Profile Picture';
        $data['metatitle'] = 'Profile Picture';
        $data['profilePic'] = 'active';
        
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
            return redirect(route('profile-picture'));
        }
        
        $data['plugincss'] = array('bootstrap-fileinput/bootstrap-fileinput.css');
        $data['css'] = array();
        $data['pluginjs'] = array('bootstrap-fileinput/bootstrap-fileinput.js');
        $data['js'] = array();
        $data['funinit'] = array();
        
        return view('client.setting.profile-picture',$data);
    }
    
    public function updateProfile(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'Update Profile Info';
        $data['metatitle'] = 'Update Profile Info';
        $data['profileInfo'] = 'active';
        $arrUserInfo = Users::find($userId);
        $arrNameTitle = Config::get('constants.arrNameTitle');
        $arrUserType = Config::get('constants.arrUserType');
        
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            $user = new Users;
            if(!empty($fileData)){
                //$userId = Auth::guard('client')->user()->id;
                $user->updateUserInfo($request, $userId);
                $request->session()->flash('session_success', 'Your profile update successfully.');
            }else{
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('update-profile'));
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
        $data['changePwd'] = 'active';
        
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
            return redirect(route('change-password'));
        }
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('client.setting.change-password',$data);
    }
    
    public function notification(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['notification'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('client')->user()->id;
                $changePasssword = $user->notification($request,$userId);
                if($changePasssword)
                {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                }else{
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
                
            }else{
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('notification'));
        }
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('client.setting.notification',$data);
    }
    
    public function dashboard(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['dashboard'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('client')->user()->id;
                $changePasssword = $user->notification($request,$userId);
                if($changePasssword)
                {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                }else{
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
                
            }else{
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('dashboard'));
        }
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('client.setting.dashboard',$data);
    }
    
    public function aboutme(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'About Me';
        $data['metatitle'] = 'About Me';
        $data['aboutme'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData = $request->input();
            
            if(!empty($fileData)){
                $objUser = new Users;
                $result = $objUser->updateOverviewInfo($request, $userId);
                if($result){
                    $request->session()->flash('session_success', 'Your detail update successfully.');
                }else{
                    $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                }
            }else{
                $request->session()->flash('session_error', 'Please enter required field.');
            }
            return redirect(route('aboutme'));
        }
        
        $arrUserInfo = Users::find($userId);
        $data['arrUserInfo'] = $arrUserInfo;
        //echo "<pre>";print_r($arrUserInfo);exit;
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.about();');
        return view('client.setting.aboutme',$data);
    }
    
    public function employmentHistory(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['employmenthistory'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('client')->user()->id;
                $changePasssword = $user->notification($request,$userId);
                if($changePasssword)
                {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                }else{
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
                
            }else{
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('dashboard'));
        }
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('client/employmentHistory.js');
        $data['funinit'] = array('EmploymentHistory.init();');
        return view('client.setting.employment-history',$data);
    }
    
    public function clientEducation(Request $request){
        $userId = Auth::guard('client')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['education'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('client')->user()->id;
                $changePasssword = $user->notification($request,$userId);
                if($changePasssword)
                {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                }else{
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
                
            }else{
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('dashboard'));
        }
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('client/employmentHistory.js');
        $data['funinit'] = array('EmploymentHistory.init();');
        return view('client.setting.client-education',$data);
    }
    
}
