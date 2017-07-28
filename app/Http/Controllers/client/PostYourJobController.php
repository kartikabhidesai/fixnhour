<?php
namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\PostJob;
use Config;

class PostYourJobController  extends Controller {
    
    public function __construct() {
        
    }
    
    public function postYourJob(Request $request){
        
        $arrCategory = Config::get('constants.arrCategory');
        $arrSubCategory = Config::get('constants.arrSubCategory');
        $arrPostJobSkill = Config::get('constants.arrPostJobSkill');
        $arrApproximateBudget = Config::get('constants.arrApproximateBudget');
        $arrApproximateTime = Config::get('constants.arrApproximateTime');
        
        if ($request->isMethod('post')) {
            
            $validator = Validator::make($request->all(), [
                        'category' => 'required',
                        'sub_category' => 'required',
                        'title' => 'required',
                        'description' => 'required',
                        'skill' => 'required',
                        'job_type' => 'required',
                        'approximate_budget' => 'required',
                        'approximate_time' => 'required',
                        'start_date' => 'required']);

            if ($validator->fails()) {
                return redirect(route('post-your-job'))->withErrors($validator)->withInput();
            }
            
            $objPostJob = new PostJob();
            $result = $objPostJob->savePostJobInfo($request);
            if ($result) {
                $request->session()->flash('session_success', 'User Add Sucessfully.');
                return redirect(route('post-your-job'));
            } else {
                $request->session()->flash('session_success', 'Something will be wrong. Please try again.');
                return redirect(route('post-your-job'))->withInput();
            }
        }
        
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['title'] = 'Landing - Fixnhour';
        $data['activateValue'] = 'sliderList';
        
        $data['js'] = array();
        $data['css'] = array();
        
        $data['arrCategory'] = $arrCategory;
        $data['arrSubCategory'] = $arrSubCategory;
        $data['arrPostJobSkill'] = $arrPostJobSkill;
        $data['arrApproximateBudget'] = $arrApproximateBudget;
        $data['arrApproximateTime'] = $arrApproximateTime;
        
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
