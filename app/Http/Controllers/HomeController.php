<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
    }

    public function index() {
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('front.home',$data);
    }
    
    public function signup(){
        $data['metatitle'] = 'Create account freelancce - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('front.singup',$data);
    }
    
    public function findTelent(){
        $data['metatitle'] = 'Find Talent - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('front.findTelent',$data);
    }
    
    public function howItWorks(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        return view('front.howItworks',$data);
    }
}
