<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
       
        return view('admin.user.user-list',$data);
    }
    
    public function userAdd(){
        $data['metatitle'] = 'User Add';
        $data['title'] = 'User Add';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['activateValue'] = 'userAdd';
        return view('admin.user.user-add',$data);
    }
    
    
}

?>
