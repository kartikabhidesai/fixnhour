<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Model\UserInfo;
use DB;
use Config;

class UserController  extends Controller {
    
    public function __construct() {
        //echo 'ss';
        // $this->rememberToken
        $this->middleware('admin');
    }
    
    public function userList(){
        
        $data['metatitle'] = 'User List';
        $data['title'] = 'User List';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['activateValue'] = 'userList';
        $data['arrUserList'] = UserInfo::where('role_type', '!=', 'admin')->get();
       
        return view('admin.user.user-list',$data);
    }
    
    public function userAdd(Request $request){
        //print_r(Auth::guard('admin')->user());exit;
        
        if ($request->isMethod('post')) {
            
            $validator = Validator::make($request->all(), [
                        'title' => 'required',
                        'first_name' => 'required',
                        'last_name' => 'required',
                        'phone' => 'required',
                        'mobile' => 'required',
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
            $result = $objUserInfo->saveUserInfo($request);
            
            if($result){
                $request->session()->flash('session_success', 'User Add Sucessfully.');
                return redirect(route('user-list'));
            }else{
                $request->session()->flash('session_success', 'Something will be wrong. Please try again.');
                return redirect(route('user-list'))->withInput();
            }
        }
        
        $data['metatitle'] = 'User Add';
        $data['title'] = 'User Add';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jQuery/jquery.validate.min.js');
        $data['js'] = array('admin/user.js');
        $data['funinit'] = array('user.init()');
        $data['activateValue'] = 'userAdd';
        
        return view('admin.user.user-add',$data);
    }
    
}

?>
