<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('front.home',$data);
    }
    
}
