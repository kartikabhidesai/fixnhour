<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelancerController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
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
//            'holder.min.js',
//            'easyResponsiveTabs.js',
//            'rotate-patch.js',
//            'gridGallery.js',
            'freelancer/profile.js'
        );
        $data['funinit'] = array();
        return view('freelancer.profile',$data);
    }
    public function myJobs() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
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
