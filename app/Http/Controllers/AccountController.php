<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
    }

    function deshboard(){
        $data['title'] = 'Deshbord';
         $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
        $data['css_plugin'] = array(
            
        );
        
        return view('admin.acccount.deshboard',$data);
    }
}
