<?php
namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\PostJob;
use Config;

class MyJobsController  extends Controller {
    
    public function __construct() {
        
    }
    
    public function index() {
        
        $arrCategory = Config::get('constants.arrCategory');
        $arrSubCategory = Config::get('constants.arrSubCategory');
        $arrPostJobSkill = Config::get('constants.arrPostJobSkill');
        $arrApproximateBudget = Config::get('constants.arrApproximateBudget');
        $arrApproximateTime = Config::get('constants.arrApproximateTime');
        $arrCountry = Config::get('constants.arrCountry');
        
        
        
        $data['metatitle'] = 'Job Post - Fixnhour';
        $data['title'] = 'Job Post - Fixnhour';
        
        $data['plugincss'] = array('bootstrap-fileinput/bootstrap-fileinput.css');
        $data['css'] = array();
        $data['pluginjs'] = array(
            'jquery-validation/js/jquery.validate.min.js',
            'jquery-validation/js/additional-methods.min.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'bootstrap-fileinput/bootstrap-fileinput.js',
        );
        $data['js'] = array('client/postjob.js');
        $data['funinit'] = array('Postjob.init()');
        
        $data['arrCategory'] = $arrCategory;
        $data['arrSubCategory'] = $arrSubCategory;
        $data['arrPostJobSkill'] = $arrPostJobSkill;
        $data['arrApproximateBudget'] = $arrApproximateBudget;
        $data['arrApproximateTime'] = $arrApproximateTime;
        $data['arrCountry'] = $arrCountry;
        
        
        $objPostJob = new PostJob();
        $data['jobList'] = $objPostJob->getListForFreelanser();
//        for ($i = 0; $i < count($data['jobList']); $i++) {
//            $data['jobList'][$i]['ago'] = $this->timeAgo($data['jobList'][0]['created_at']);
//        }


//        $data['arrApproximateBudget'] = Config::get('constants.arrApproximateBudget');
//        $data['arrCountry'] = Config::get('constants.arrCountry');

        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('client.myjobs', $data);
    }
    
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
