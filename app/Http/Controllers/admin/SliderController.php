<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SliderController  extends Controller {
    
    public function __construct() {
        //echo 'ss';
        // $this->rememberToken
       
        $this->middleware('admin');
    }
    
    public function sliderList(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'sliderList';
        
        $data['js'] = array(
        
        );
        $data['css'] = array(
            
        );
       
        return view('admin.account.slider-list',$data);
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
