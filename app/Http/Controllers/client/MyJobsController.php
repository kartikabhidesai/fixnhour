<?php
namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\PostJob;
use Config;
use DateTime;

class MyJobsController  extends Controller {
    
    public function __construct() {
        
    }
     function timeAgo($timestamp) {
        $datetime1 = new DateTime("now");
        $datetime2 = date_create($timestamp);
        $diff = date_diff($datetime1, $datetime2);
        $timemsg = '';
        if ($diff->y > 0) {
            $timemsg = $diff->y . ' year' . ($diff->y > 1 ? "'s" : '');
        } else if ($diff->m > 0) {
            $timemsg = $diff->m . ' month' . ($diff->m > 1 ? "'s" : '');
        } else if ($diff->d > 0) {
            $timemsg = $diff->d . ' day' . ($diff->d > 1 ? "'s" : '');
        } else if ($diff->h > 0) {
            $timemsg = $diff->h . ' hour' . ($diff->h > 1 ? "'s" : '');
        } else if ($diff->i > 0) {
            $timemsg = $diff->i . ' minute' . ($diff->i > 1 ? "'s" : '');
        } else if ($diff->s > 0) {
            $timemsg = $diff->s . ' second' . ($diff->s > 1 ? "'s" : '');
        }

        $timemsg = $timemsg . ' ago';
        return $timemsg;
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
        for ($i = 0; $i < count($data['jobList']); $i++) {
            $data['jobList'][$i]['ago'] = $this->timeAgo($data['jobList'][$i]['created_at']);
        }

       
        $data['arrApproximateBudget'] = Config::get('constants.arrApproximateBudget');
        $data['arrCountry'] = Config::get('constants.arrCountry');

        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('client.myjobs', $data);
    }
    public function viewJobDetail($jobId) {
        $objPostJob = new PostJob();
       
        $data['jobDetail'] = $objPostJob->getJobDetailForFreelanser($jobId);
        
        $data['arrApproximateBudget'] = Config::get('constants.arrApproximateBudget');
        $data['arrCountry'] = Config::get('constants.arrCountry');

        $data['pagetitle'] = 'Job Detail - Fixnhour';
        $data['metatitle'] = 'Job Detail - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array('freelancer/jobdetail.css');
        $data['pluginjs'] = array();
        $data['js'] = array('freelancer/jobdetail.js');
        $data['funinit'] = array('jobdetail.init()');
        return view('client.post-your-job.viewJobDetail', $data);
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
