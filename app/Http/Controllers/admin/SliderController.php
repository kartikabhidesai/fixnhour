<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SliderController  extends Controller {
    
    public function __construct() {
        //echo 'ss';
        // $this->rememberToken
       //  $this->middleware('admin');
    }
    
    public function dd(){
        echo 'dd';
         print_r(Auth::guard('web')->user());
        print_r($user);
        echo 'ssss';exit;
    }
    
    public function dashboard(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
       //  echo '<pre>';
       // $user = Auth::user();
        
        //print_r(Auth::guard('admin')->user());
//        if(Auth::guard('admin')->guest()){
//            echo 'if';
//        }else{
//            echo 'else';
//        }
        //print_r($user);
     //   echo 'ssss';exit;
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
       
    //   exit;
        return view('admin.account.dashboard',$data);
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
