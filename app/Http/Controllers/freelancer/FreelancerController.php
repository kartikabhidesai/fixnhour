<?php

namespace App\Http\Controllers\freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class FreelancerController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
         $this->middleware('freelancer');
    }

    public function index() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.findWork',$data);
    }
    
    public function logout(Request $request)
    {
        Auth::guard('freelancer')->logout();
        $request->session()->flash('session_success', 'You are successfully logout.');
         return redirect()->intended('/');
    }
    public function profile(){
         $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array(
//            'easy-responsive-tabs.css',
//            'gridGallery.css'
        );
        $data['pluginjs'] = array();
        $data['js'] = array(
            'easyResponsiveTabs.js',
            'rotate-patch.js',
            'gridGallery.js',
            'freelancer/profile.js'
        );
        $data['css'] = array(
            'easy-responsive-tabs.css',
            'gridGallery.css'
        );
       

        $data['funinit'] = array();
        return view('freelancer.profile',$data);
    }
    public function myJobs() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('freelancer.my-jobs',$data);
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.myJobs',$data);
    }
    
    public function payment() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.payment',$data);
    }
    
    public function message() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.message',$data);
    }
    
    public function saveJob(){
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.saveJob',$data);
    }
    
    public function postYourJob(){
         $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('freelancer.post-your-job',$data);

        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.postYourJob',$data);
    }
    
}
