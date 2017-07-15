<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Users;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class ClientController extends Controller {

    //
    public function login(Request $request) {
        echo "hi";exit;
        
        if (Auth::user()) {
            return redirect(route('client_login'));
        }
        
        $data['js'] = array('login.js');
        $data['funinit'] = array('Login.initloginjs()');

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                        //'email' => 'required|email|max:255',
                        'email' => 'required',
                        'password' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect(route('client_login'))->withErrors($validator)->withInput();
            }

            $email = $request['email'];
            $password = $request['password'];
            $activity="login";
             
            $objClient = new Client();
            $arrDataActivity = array();
            $arrDataActivity['ip_address'] = $request->ip();
            $arrDataActivity['category'] = '4';
            $arrDataActivity['event_name'] = 'User Authentication';
            $arrDataActivity['event_detail'] = 'Login Success';
            
            if (Auth::attempt(['email' => $email, 'password' => $password])) 
            {
                $this->checkAuthForUser($activity, $arrDataActivity, $request);
                return redirect(route('client_dashboard'));
            } 
            else if (Auth::attempt(['username' => $email, 'password' => $password])) 
            {
                $this->checkAuthForUser($activity, $arrDataActivity, $request);
                return redirect(route('client_dashboard'));
            } 
            else 
            {                
                $request->session()->flash('session_error', 'Incorrect Email or Password.');
            }
        }         
        return view('login.login', $data);
    }

    public function logout(Request $request) {
        
//        echo "<pre/>";
//        print_r($request->session());
//        print_r($this->loginUser);
//        exit;
        
        if(!empty($this->loginUser)){
            $activity = "logout";
            $objUsers = new Users();
            $objUsers->editLastActivityDate($this->loginUser, $activity);
            $request->session()->flush();

            Auth::logout();
            Auth::guard('student')->logout();
            $request->session()->flash('session_success', 'You have successfully Logged Out.');
        }else{
            $request->session()->flash('session_error', 'You are already logged out. Please Sign In.');
        }
        return redirect()->route('user_login');
        
    }
    
    public function dashboard() {
        
        $data['pagetitle'] = 'Dashboard';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['activateValue'] = 'Dashboard';

        return view('front.client.dashboard', $data);
    }
}
