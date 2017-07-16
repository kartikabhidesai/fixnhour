<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class FreelancerController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
    }

    public function index() {
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        
        return view('freelancer.findWork',$data);
    }
    
    public function profile(){
         $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
         //   'easyResponsiveTabs.js',
            'rotate-patch.js',
            'gridGallery.js',
          //  'freelancer/profile.js'
        );
        $data['css'] = array(
            'easy-responsive-tabs.css',
            'gridGallery.css'
        );
       
        return view('freelancer.profile',$data);
    }
    public function myJobs() {
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('freelancer.my-jobs',$data);
    }
    
    public function payment() {
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('freelancer.payment',$data);
    }
    
    public function message() {
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('freelancer.message',$data);
    }
    
    public function saveJob(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('freelancer.saveJob',$data);
    }
    
    public function postYourJob(){
         $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('freelancer.post-your-job',$data);
    }
    
}
