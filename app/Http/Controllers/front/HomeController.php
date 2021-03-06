<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Model\PostJob;
use DB;
use DateTime;
use Config;

class HomeController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
        //echo "hi";exit;
    }

    public function index(Request $request) {
        
        $data['pagetitle'] = 'Home - Softral';
        $data['metatitle'] = 'Home - Softral';
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array(
            'jquery-validation/js/jquery.validate.min.js',
            
        );
        $data['js'] = array(
            'front/signup.js',
        );
        $data['funinit'] = array(
            'Singup.init()',
        );
        $data['slider'] = DB::table('slider')->get();
        return view('front.home',$data);
    }
    
    public function signin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password,'role_type' =>'admin','enum_status'=>'ACTIVE'])) {
                 return redirect()->intended('admin/dashboard');
             }
             if (Auth::guard('freelancer')->attempt(['email' => $username, 'password' => $password,'role_type' =>'freelancer'])) {
                 
                 if(Auth::guard('freelancer')->user()->enum_status == 'PENDING')
                 {
                     
                      Auth::guard('freelancer')->logout();
                      $request->session()->flash('session_success', 'You have not activate your profile. Please activate it.');
                      return redirect()->intended('/');
                 }else{
                    // $request->session()->flash('session_success', 'User are successfully signup.Please check your mail.');
                     //return redirect()->intended('freelancer');
                     return redirect(route('freelancer'));
                 }
             }
             if (Auth::guard('client')->attempt(['email' => $username, 'password' => $password,'role_type' =>'client'])) {
                 
                  if(Auth::guard('client')->user()->enum_status == 'PENDING')
                 {
                      Auth::guard('client')->logout();
                      $request->session()->flash('session_success', 'You have not activate your profile. Please activate it.');
                      return redirect()->intended('/');
                 }else{
                   //  $request->session()->flash('session_success', 'User Was Successfully Added.');
                     return redirect(route('post-your-job'));
                     
                 }
                 
             }
             
            $request->session()->flash('session_success', 'Your username and password is wrong. Please check it.');
            return redirect()->intended('/');;
    }
    public function signup(Request $request){
        
        $data['pagetitle'] = 'Create account freelancce - Softral';
        $data['metatitle'] = 'Create account freelancce - Softral';
        
        if ($request->isMethod('post')) {
            $postData = $request->input();
            $fileData = $file = $request->file();
            $user = new Users;
            $firstTime = $user->checkUsername($postData);
            if($firstTime){
                $user->saveFrontendUsers($postData,$fileData);
                $request->session()->flash('session_success', 'User are successfully signup.Please check your mail.');
            }else{
                $request->session()->flash('session_error', 'You are Already Register.');
            }
            return redirect(route('signup'));
        }
        
        $data['plugincss'] = array(
          //  'bootstrap/css/bootstrap.min.css',
            'bootstrap-fileinput/bootstrap-fileinput.css',
        );
        $data['css'] = array(
        );
        $data['pluginjs'] = array(
            'jquery-validation/js/jquery.validate.min.js',
            'jquery-validation/js/additional-methods.min.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'bootstrap-fileinput/bootstrap-fileinput.js',
        );
        $data['js'] = array(
            'front/signup.js',
        );
        $data['funinit'] = array(
            'Singup.init()',
        );
        return view('front.singup',$data);
    }
    
    public function findTelent(){
        $data['pagetitle'] = 'Find Talent - Softral';
        $data['metatitle'] = 'Find Talent - Softral';
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
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('front.how-it-works',$data);
        
    }
    public function freelancer(){
        $objPostJob = new PostJob();
        $data['jobList'] = $objPostJob->getListForFreelanser();
        for ($i = 0; $i < count($data['jobList']); $i++) {
            $data['jobList'][$i]['ago'] = $this->timeAgo($data['jobList'][0]['created_at']);
        }


        $data['arrApproximateBudget'] = Config::get('constants.arrApproximateBudget');
        $data['arrCountry'] = Config::get('constants.arrCountry');

        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('front.findWork', $data);
        
    }
    
      function timeAgo($timestamp) {
        $datetime1 = new DateTime("now");
        $datetime2 = date_create($timestamp);
        $diff = date_diff($datetime1, $datetime2);
        $timemsg = '';
        if ($diff->y > 0) {
            $timemsg = $diff->y . ' year' . ($diff->y > 1 ? "'s" : '');
        } else if ($diff->m > 0) {
            $timemsg = $diff->m . ' month' . ($diff->m > 1 ? "'s" : '');
        } else if ($diff->d > 0) {
            $timemsg = $diff->d . ' day' . ($diff->d > 1 ? "'s" : '');
        } else if ($diff->h > 0) {
            $timemsg = $diff->h . ' hour' . ($diff->h > 1 ? "'s" : '');
        } else if ($diff->i > 0) {
            $timemsg = $diff->i . ' minute' . ($diff->i > 1 ? "'s" : '');
        } else if ($diff->s > 0) {
            $timemsg = $diff->s . ' second' . ($diff->s > 1 ? "'s" : '');
        }

        $timemsg = $timemsg . ' ago';
        return $timemsg;
    }
    
    public function activeAccount($code){
        $email = base64_decode($code);
        
        $user = new Users;
        $checkUsername = Users::where('email', $email)->get()->toArray();
       
        $result = Users::where('id', '=', $checkUsername[0]['id'])->update(['enum_status' => 'ACTIVE']);
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        
       
        if($result){
            $data['message'] = 'Success';
        }else{
            $data['message'] = 'Error';
        }
        return view('front.account-active',$data);
    }
    
    public function basic_email(){
        $user = new Users;
        $firstTime = $user->basic_email();
    }
}
