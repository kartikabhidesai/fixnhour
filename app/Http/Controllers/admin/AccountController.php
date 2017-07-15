<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
//use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
class AccountController  extends Controller {

    public function __construct() {
        //echo 'ss';
        // $this->rememberToken
        // $this->middleware('admin:admin1');
    }
    
    public function login(Request $request){
        $data['metatitle'] = 'Landing - Fixnhour';
        
        if ($request->isMethod('post')) {
            //print_r($request->input());exit;
            $username = $request->input('username');
                $password = $request->input('password');
             if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password])) {
                 return redirect()->intended('admin/dashboard');
             }
            
        }
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        
        return view('admin.login.login',$data);
    }
    
    public function ajaxAction(Request $request){
         $action = $request->input('action');
        switch ($action) {

            case 'loginDetail':
                $username = $request->input('data.username');
                $password = $request->input('data.password');
                
                $this->_checkLogin($username, $password);
                break;
        }
    }
    
    public function _checkLogin($username, $password){
        
        if (Auth::attempt(['email' => $username, 'password' => $password])) {
            $result['status'] = 'success';
            $result['message'] = 'Login Successfully.';
        }else{
            $result['status'] = 'fail';
            $result['message'] = 'Login Successfully.';
        }
        echo json_encode($result);
        exit;
        
    }
    
       
    public function logout(){
         Auth::guard('admin')->logout();
          return redirect(route('admin_login'));
    }
}

?>