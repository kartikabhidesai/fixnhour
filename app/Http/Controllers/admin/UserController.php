<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Model\UserInfo;
use App\Model\Users;
use DB;
use Config;

class UserController  extends Controller {
    
    public function __construct() {
        //echo 'ss';
        // $this->rememberToken
        $this->middleware('admin');
    }
    
    public function userList(Request $request){
        
        $data['metatitle'] = 'User List';
        $data['title'] = 'User List';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array(
            'admin/user.js',
            'jquery.form.min.js',
            'bootstrap-fileinput/bootstrap-fileinput.js',
            );
        $data['init'] = array('user.listInit()');
        $data['activateValue'] = 'userList';
        $data['arrUserList'] = UserInfo::where('role_type', '!=', 'admin')->get();
       
        return view('admin.user.user-list',$data);
    }
    
    public function userAdd(Request $request){
        //print_r(Auth::guard('admin')->user());exit;
        $arrNameTitle = Config::get('constants.arrNameTitle');
        $arrUserType = Config::get('constants.arrUserType');
        
        if ($request->isMethod('post')) {
            
            $validator = Validator::make($request->all(), [
                        'title' => 'required',
                        'first_name' => 'required',
                        'last_name' => 'required',
                        'phone' => 'required',
                        'username' => 'required',
                        'email' => 'required',
                        'address' => 'required',
                        'city_town' => 'required',
                        'state' => 'required',
                        'postcode' => 'required']);

            if ($validator->fails()) {
                return redirect(route('user-add'))->withErrors($validator)->withInput();
            }
            
            $objUserInfo = new UserInfo();
            $firstTime = $objUserInfo->checkUsername($request->input());
            if($firstTime){
                $result = $objUserInfo->saveUserInfo($request);
                if ($result) {
                    $request->session()->flash('session_success', 'User Add Sucessfully.');
                    return redirect(route('user-list'));
                } else {
                    $request->session()->flash('session_success', 'Something will be wrong. Please try again.');
                    return redirect(route('user-add'))->withInput();
                }
            }else{
                $request->session()->flash('session_error', 'UserName OR Email address is already Register.');
                return redirect(route('user-add'))->withInput();
            }
        }
        
        $data['metatitle'] = 'User Add';
        $data['title'] = 'User Add';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jQuery/jquery.validate.min.js');
        $data['js'] = array('admin/user.js');
        $data['init'] = array('user.init()');
        $data['activateValue'] = 'userAdd';
        $data['arrNameTitle'] = $arrNameTitle;
        $data['arrUserType'] = $arrUserType;
        
        return view('admin.user.user-detail',$data);
    }
    
    public function userEdit($userId, Request $request){
        
        $arrNameTitle = Config::get('constants.arrNameTitle');
        $arrUserType = Config::get('constants.arrUserType');
        $arrUserInfo = UserInfo::find($userId);
        //echo "<pre>";print_r($arrUserInfo);exit;
        
        if ($request->isMethod('post')) {
            
            $validator = Validator::make($request->all(), [
                        'title' => 'required',
                        'first_name' => 'required',
                        'last_name' => 'required',
                        'phone' => 'required',
                        'email' => 'required',
                        'address' => 'required',
                        'city_town' => 'required',
                        'state' => 'required',
                        'postcode' => 'required']);

            if ($validator->fails()) {
                return redirect(route('user-edit', array('id', $userId)))->withErrors($validator)->withInput();
            }
            
            $objUserInfo = new UserInfo();
            $result = $objUserInfo->updateUserInfo($userId, $request);
            
            if($result){
                $request->session()->flash('session_success', 'User Update Sucessfully.');
                return redirect(route('user-list'));
            }else{
                $request->session()->flash('session_success', 'Something will be wrong. Please try again.');
                return redirect(route('user-edit', array('id', $userId)))->withInput();
            }
        }
        
        $data['metatitle'] = 'User Edit';
        $data['title'] = 'User Edit';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jQuery/jquery.validate.min.js');
        $data['js'] = array('admin/user.js');
        $data['init'] = array('user.init()');
        $data['activateValue'] = 'userEdit';
        
        $data['arrNameTitle'] = $arrNameTitle;
        $data['arrUserInfo'] = $arrUserInfo;
        $data['arrUserType'] = $arrUserType;
        
        return view('admin.user.user-detail',$data);
    }
    
    public function userDelete($userId, Request $request){
        
        $objUserInfo = new UserInfo();
        $result = $objUserInfo->deleteUserInfo($userId);
        
        if($result){
            $request->session()->flash('session_success', 'This Record Delete Sucessfully.');
        }else{
            $request->session()->flash('session_error', 'Something will be Wrong. Please Try again.');
        }
         return redirect(route('user-list'));
    }
    
    public function resetPassword($userId, Request $request){
        
        $objUserInfo = new UserInfo();
        $result = $objUserInfo->updateUserPassword($userId, $request);
        
        if($result){
            $request->session()->flash('session_success', 'This Password Update Sucessfully.');
        }else{
            $request->session()->flash('session_error', 'Something will be Wrong. Please Try again.');
        }
         return redirect(route('user-list'));
    }
}

?>
