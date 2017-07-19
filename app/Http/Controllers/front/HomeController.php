<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use DB;
class HomeController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
        //echo "hi";exit;
    }

    public function index(Request $request) {
        
        $data['pagetitle'] = 'Home - Fixnhour';
        $data['metatitle'] = 'Home - Fixnhour';
        if ($request->isMethod('post')) {
             $username = $request->input('username');
            $password = $request->input('password');
             if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password,'role_type' =>'admin'])) {
                 return redirect()->intended('admin/dashboard');
             }
             if (Auth::guard('freelancer')->attempt(['email' => $username, 'password' => $password,'role_type' =>'freelancer'])) {
                 return redirect()->intended('freelancer');
             }
             if (Auth::guard('client')->attempt(['email' => $username, 'password' => $password,'role_type' =>'client'])) {
                 return redirect()->intended('post-your-job');
             }
        }
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['slider'] = DB::table('slider')->get();
        return view('front.home',$data);
    }
    
    public function signin(){
            $username = $request->input('username');
            $password = $request->input('password');
             if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password])) {
                 return redirect()->intended('admin/dashboard');
             }
    }
    public function signup(Request $request){
        $data['pagetitle'] = 'Create account freelancce - Fixnhour';
        $data['metatitle'] = 'Create account freelancce - Fixnhour';
        
        if ($request->isMethod('post')) {
            $postData = $request->input();
            $user = new Users;
            $firstTime = $user->checkUsername($postData);
            if($firstTime){
                $user->saveFrontendUsers($postData);
                $request->session()->flash('session_success', 'User Was Successfully Added.');
            }else{
                $request->session()->flash('session_error', 'You are Already Register.');
            }
            return redirect(route('signup'));
        }
        
        $data['plugincss'] = array('bootstrap/css/bootstrap.min.css');
        $data['css'] = array();
        $data['pluginjs'] = array(
            'jquery-validation/js/jquery.validate.min.js',
            'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('front/signup.js');
        $data['funinit'] = array('Singup.init()');
        return view('front.singup',$data);
    }
    
    public function findTelent(){
        $data['pagetitle'] = 'Find Talent - Fixnhour';
        $data['metatitle'] = 'Find Talent - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('front.find-telent',$data);

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('front.find-telent',$data);
    }
    
    public function howItWorks(){
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('front.how-it-works',$data);
        
    }
}
