<?php
namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostYourJobController  extends Controller {
    
    public function __construct() {
        
        
    }
    
    public function postYourJob(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'sliderList';
        
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
       
        return view('client.post-your-job.add',$data);
    }
    
    public function sliderAdd(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'sliderList';
        
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
       
        return view('admin.account.slider-add',$data);
    }
    
    public function dashboard(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'Dashboard';
      
        //print_r(Auth::guard('admin')->user());

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
