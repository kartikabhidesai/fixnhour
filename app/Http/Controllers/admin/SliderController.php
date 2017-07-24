<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

use App\Slider;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
//use App\Http\Requests;
////use Auth;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Auth\Middleware\Authenticate;
//use Illuminate\Support\Facades\Auth;

class SliderController  extends Controller {
    
    public function __construct() {
        $this->middleware('admin');
    }
    
    public function sliderList(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'sliderList';
        
        $data['js'] = array(
            'admin/slider.js',
        );
        $data['css'] = array(
            
        );
        $data['init'] = array(
            'Slider.init();'
        );
        $data['slider'] = DB::table('slider')->get();
        
        return view('admin.account.slider-list',$data);
    }
    
    public function sliderAdd(){
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'sliderList';
        
        $data['css'] = array(
            
        );
        $data['css_plugin'] = array(
            'bootstrap-fileinput/bootstrap-fileinput.css',
        );
        
        $data['js'] = array(
            'admin/slider.js',
        );
        $data['js_plugin'] = array(
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'bootstrap-fileinput/bootstrap-fileinput.js',
        );
        
        $data['init'] = array(
            'Slider.add_init();'
        );
        return view('admin.account.slider-add',$data);
    }
    
    public function sliderEdit(){
        $id = $_GET['id'];
        
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'sliderList';
        
        $data['css'] = array(
            
        );
        $data['css_plugin'] = array(
            'bootstrap-fileinput/bootstrap-fileinput.css',
        );
        
        $data['js'] = array(
            'admin/slider.js',
        );
        $data['js_plugin'] = array(
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'bootstrap-fileinput/bootstrap-fileinput.js',
        );
        
        $data['init'] = array(
            'Slider.edit_init();'
        );
        $data['slider'] = DB::table('slider')->where('id',$id)->get();
       
        return view('admin.account.slider-edit',$data);
    }
    
    function addSlider(Request $request){
        $insertSlider = new Slider();
        $result = $insertSlider->insertSlider($request);
        if($result){
            $response['status'] = 'success';
            $response['message'] = 'Slider added Successfully.';
            $response['reload'] = 'true';
        }else{
            $response['status'] = 'error';
            $response['message'] = 'Something Went Worng';
        }
       echo json_encode($response); exit;
    }
    
    function editSlider(Request $request){
        $insertSlider = new Slider();
        $result = $insertSlider->editSlider($request);
        if($result){
            $response['status'] = 'success';
            $response['message'] = 'Slider added Successfully.';
            $response['reload'] = 'true';
        }else{
            $response['status'] = 'error';
            $response['message'] = 'Something Went Worng';
        }
       echo json_encode($response); exit;
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
    
    function ajaxAction(Request $request){
         $action = $request->input('action');
        switch ($action) {

            case 'deleteSlider':
                $id = $request->input('data.id');
                $sliderDelete = DB::table('slider')
                ->Where('id', $id)
                ->delete();
                
               if($sliderDelete){
                    $response['status'] = 'success';
                    $response['message'] = 'Slider Deleted Successfully.';
                    $response['reload'] = 'true';
               }else{
                    $response['status'] = 'error';
                    $response['message'] = 'Something Went Worng';
               } 
               echo json_encode($response); exit;
        }
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
