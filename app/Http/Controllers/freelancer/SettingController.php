<?php

namespace App\Http\Controllers\freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Users;
use Config;

class SettingController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
         $this->middleware('freelancer');
    }

    public function profileImage(Request $request) {
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['cpp'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->file();
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('freelancer')->user()->id;
                $user->chnageProfilePic($fileData,$userId);
                $request->session()->flash('session_success', 'Your profile pictures update successfully.');
            }else{
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('setting'));
        }
        $data['plugincss'] = array('bootstrap-fileinput/bootstrap-fileinput.css');
        $data['css'] = array();
        $data['pluginjs'] = array('bootstrap-fileinput/bootstrap-fileinput.js');
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.setting.profile-image',$data);
    }
    
    public function updateProfile(Request $request){
        $userId = Auth::guard('freelancer')->user()->id;
        
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
                $userId = Auth::guard('freelancer')->user()->id;
                $user->updateUserInfo($request,$userId);
                $request->session()->flash('session_success', 'Your profile update successfully.');
            }else{
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('update-profile'));
        }
        $data['arrNameTitle'] = $arrNameTitle;
        $data['arrUserType'] = $arrUserType;
        $data['arrUserInfo'] = $arrUserInfo;
        $data['plugincss'] = array('bootstrap-fileinput/bootstrap-fileinput.css');
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js','bootstrap-fileinput/bootstrap-fileinput.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.init();');
        return view('freelancer.setting.update-profile',$data);
    }
    
}
