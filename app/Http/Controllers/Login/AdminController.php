<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;

class AdminController extends Controller {

    public function __construct() {
        // $this->rememberToken
        echo "hi";exit;
    }

    public function index() {
        echo "hi";exit;
        return view('admin.dashboard');
    }

    public function login(Request $request) {
        
        echo "hi";exit;
        
        $data['loginType'] = "adminpanel";
        $data['js'] = array('login.js');
        $data['funinit'] = array('Login.initloginjs()');
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                        'email' => 'required|email|max:255',
                        'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('admin/login')
                                ->withErrors($validator)
                                ->withInput();
            }

            $email = $request['email'];
            $password = $request['password'];

            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                 return redirect(route('adminIndex'));
            } else {

                // $errors = array('error' => 'Email and/or password invalid.','error_type' => 'success');
                $request->session()->flash('session_error', 'Invalid Email Address or Password.');
                return redirect(route('admin_login'));
                // echo "wrong credentials";
            }
        }
        return view('login.login', $data);
    }

    public function dashboard() {
        //$roles_id = Auth::user()->role_id;
        //$roles = Roles::findOrFail($roles_id);
//        echo "<pre/>";
//        print_r($roles);
     
        $data['user'] = auth()->guard('admin')->user();
        $data['pagetitle'] = 'Dashboard';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['activateValue'] = 'Dashboard';

        //$data['roles'] = $roles;
        return view('admin.users.dashboard', $data);
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

}
