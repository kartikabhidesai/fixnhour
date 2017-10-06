<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\PostJob;
use Config;

class FindTelentController extends Controller {
    
    public function __construct() {
      $this->middleware('client');
    }

   
    public function findTelent(){
        $data['pagetitle'] = 'Find Talent - Softral';
        $data['metatitle'] = 'Find Talent - Softral';
      
       

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('client.find-telent.find-telent',$data);
    }
    
    
    
}
