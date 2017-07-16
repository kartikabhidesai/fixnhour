<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
        //echo "hi";exit;
    }

    public function index() {
        
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('front.home',$data);
    }
    
    public function signup(){
        $data['pagetitle'] = 'Create account freelancce - Fixnhour';
        $data['metatitle'] = 'Create account freelancce - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
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
