<?php

namespace App\Http\Controllers\freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\Notification;
use App\Model\Employment;
use App\Model\EducationDetail;
use App\Model\DefaultSkill;
use App\Model\UserSkill;
use Illuminate\Support\Facades\Cache;
use App\Users;
use App\Model\Portfolio;
use App\Model\Portfoio_Category;
use Config;

class SettingController extends Controller {
    
    public function __construct() {
     //   $this->middleware('auth');
         $this->middleware('freelancer');
    }

    public function profileImage(Request $request) {
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['cpp'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->file();
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('freelancer')->user()->id;
                $user->chnageProfilePic($fileData,$userId);
                $request->session()->flash('session_success', 'Your profile pictures update successfully.');
            }else{
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('setting'));
        }
        $data['plugincss'] = array('bootstrap-fileinput/bootstrap-fileinput.css');
        $data['css'] = array();
        $data['pluginjs'] = array('bootstrap-fileinput/bootstrap-fileinput.js');
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.setting.profile-image',$data);
    }
    
    public function updateProfile(Request $request){
        $userId = Auth::guard('freelancer')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['up'] = 'active';
        $arrUserInfo = Users::find($userId);
        $arrNameTitle = Config::get('constants.arrNameTitle');
        $arrUserType = Config::get('constants.arrUserType');
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('freelancer')->user()->id;
                $user->updateUserInfo($request,$userId);
                $request->session()->flash('session_success', 'Your profile update successfully.');
            }else{
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('freelancer-update-profile'));
        }
        $data['arrNameTitle'] = $arrNameTitle;
        $data['arrUserType'] = $arrUserType;
        $data['arrUserInfo'] = $arrUserInfo;
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.init();');
        return view('freelancer.setting.update-profile',$data);
    }
    
    public function changePassword(Request $request){
        $userId = Auth::guard('freelancer')->user()->id;
        
        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['cp'] = 'active';
        
        if ($request->isMethod('post')) {
            $fileData  = $request->input();
            $user = new Users;
            if(!empty($fileData)){
                $userId = Auth::guard('freelancer')->user()->id;
                $changePasssword = $user->changePassword($request,$userId);
                if($changePasssword)
                {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                }else{
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
                
            }else{
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('change-password'));
        }
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('freelancer.setting.change-password',$data);
    }
    
    public function notification(Request $request) {
        $userId = Auth::guard('freelancer')->user()->id;

        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['notification'] = 'active';
        $objNotification = new Notification();

        if ($request->isMethod('post')) {
            $fileData = $request->input();
            if (!empty($fileData)) {
                $fileData['send_mail'] = (isset($fileData['send_mail'])) ? $fileData['send_mail'] : '0';
                $fileData['header'] = (isset($fileData['header'])) ? $fileData['header'] : '0';
                $fileData['job_post'] = (isset($fileData['job_post'])) ? $fileData['job_post'] : '0';
                $saveDetail = $objNotification->saveDetail($fileData, $userId);
                if ($saveDetail) {
                    $request->session()->flash('session_success', 'Your Notification details update successfully.');
                } else {
                    $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('freelancer-notification'));
        }

        $data['notificationDetails'] = $objNotification->getDetail($userId);
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('freelancer.setting.notification', $data);
    }
    
    public function aboutme(Request $request) {
        $userId = Auth::guard('freelancer')->user()->id;

        $data['pagetitle'] = 'About Me';
        $data['metatitle'] = 'About Me';
        $data['aboutme'] = 'active';

        if ($request->isMethod('post')) {
            $fileData = $request->input();

            if (!empty($fileData)) {
                $objUser = new Users;
                $result = $objUser->updateOverviewInfo($request, $userId);
                if ($result) {
                    $request->session()->flash('session_success', 'Your detail update successfully.');
                } else {
                    $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter required field.');
            }
            return redirect(route('freelancer-aboutme'));
        }

        $arrUserInfo = Users::find($userId);
        $data['arrUserInfo'] = $arrUserInfo;
        //echo "<pre>";print_r($arrUserInfo);exit;

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.about();');
        return view('freelancer.setting.aboutme', $data);
    }
    
    public function employmentHistory(Request $request) {
        $userId = Auth::guard('freelancer')->user()->id;

        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['employmenthistory'] = 'active';

        $objEmployment = new Employment();

        if ($request->isMethod('post')) {
            $fileData = $request->input();
            if (!empty($fileData)) {
                if (isset($fileData['edit_id'])) {
                    $result = $objEmployment->updateDetail($fileData);
                } else {
                    $result = $objEmployment->saveDetail($fileData, $userId);
                }

                if ($result) {
                    $request->session()->flash('session_success', 'Employment ' . ((isset($fileData['edit_id'])) ? 'updated' : 'saved') . ' successfully.');
                } else {
                    $request->session()->flash('session_error', 'Something went wronge.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('employment-history'));
        }

        $data['employmentDetail'] = $objEmployment->getDetail($userId);

        $data['arrCountry'] = Config::get('constants.arrCountry');
        $data['arrRole'] = Config::get('constants.arrRole');

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/freelancerSetting.js');
        $data['funinit'] = array('freelancerSetting.initEmployment();');
        return view('freelancer.setting.employment-history', $data);
    }
    
    public function freelancerEducation(Request $request) {
        $userId = Auth::guard('freelancer')->user()->id;

        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['education'] = 'active';
       
       
        $objEducationDetail = new EducationDetail();
        if ($request->isMethod('post')) {
            $fileData = $request->input();
            if (!empty($fileData)) {
                if (isset($fileData['edit_id'])) {
                    $result = $objEducationDetail->updateDetail($fileData);
                } else {
                    $result = $objEducationDetail->saveDetail($fileData, $userId);
                }

                if ($result) {
                    $request->session()->flash('session_success', 'Education details ' . ((isset($fileData['edit_id'])) ? 'updated' : 'saved') . ' successfully.');
                } else {
                    $request->session()->flash('session_error', 'Something went wronge.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('freelancer-education'));
        }
        
       
        $data['educations'] = $objEducationDetail->getDetail($userId);
        
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/freelancerSetting.js');
        $data['funinit'] = array('freelancerSetting.initEducation();');
        print_r($data); exit;
        return view('freelancer.setting.freelancer-education', $data);
    }
    
     public function freelancerPortfolioCategory(Request $request) {
         $objPortfolioCategory = new Portfoio_Category();
         $category_list = $objPortfolioCategory->category_list();
         return $category_list;
     }
     public function freelancerPortfolio(Request $request) {
        $userId = Auth::guard('freelancer')->user()->id;

        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['portfolio'] = 'active';
         $objPortfolioCategory = new Portfoio_Category();
        $data['category_list'] =$objPortfolioCategory->category_list();
       // print_r($data['category_list']); exit;
         $objPortfolio = new Portfolio();


        if ($request->isMethod('post')) {
            $fileData = $request->input();
            if (!empty($fileData)) {
                if (isset($fileData['edit_id'])) {
                    $result = $objPortfolio->updateDetail($fileData);
                } else {
                    $result = $objPortfolio->saveDetail($fileData, $userId);
                }

                if ($result) {
                    $request->session()->flash('session_success', 'Portfolio details ' . ((isset($fileData['edit_id'])) ? 'updated' : 'saved') . ' successfully.');
                } else {
                    $request->session()->flash('session_error', 'Something went wronge.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('freelancer-portfolio'));
        }

       //$data['educations'] = $objPortfolio->getDetail($userId);

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/freelancerSetting.js');
        $data['funinit'] = array('freelancerSetting.initPortfolio();');
        return view('freelancer.setting.freelancer-portfolio', $data);
    }
    
    function ajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {

            case 'getEducationEdit':
                $objEducationDetail = new EducationDetail();
                $edit = $objEducationDetail->getEdit($request->input('data.id'));
                if (count($edit) > 0) {
                    echo json_encode(array('status' => 'success', 'data' => $edit[0]));
                } else {
                    echo json_encode(array('status' => 'error'));
                }
                exit;
            case 'educationDelete':
                $objEducationDetail = new EducationDetail();
                $delete = $objEducationDetail->deleteDetail($request->input('data.id'));
                if ($delete) {
                    $request->session()->flash('session_success', 'Education Detail Deleted Successfully.');
                    return response::json(['status' => 'success']);
                } else {
                    $request->session()->flash('session_error', 'Something Went Worng');
                    return response::json(['status' => 'error']);
                }
            case 'getEmploymentEdit':
                $objEmployment = new Employment();
                $edit = $objEmployment->getEdit($request->input('data.id'));
                if (count($edit) > 0) {
                    echo json_encode(array('status' => 'success', 'data' => $edit[0]));
                } else {
                    echo json_encode(array('status' => 'error'));
                }
                exit;
            case 'employmentDelete':
                $objEmployment = new Employment();
                $delete = $objEmployment->deleteDetail($request->input('data.id'));
                if ($delete) {
                    $request->session()->flash('session_success', 'Employment Detail Deleted Successfully.');
                    return response::json(['status' => 'success']);
                } else {
                    $request->session()->flash('session_error', 'Something Went Worng');
                    return response::json(['status' => 'error']);
                }
        }
    }
    
    public function skill(Request $request){
        
        $userId = Auth::guard('freelancer')->user()->id;

        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['skill'] = 'active';

        $objUserSkill = new UserSkill();

        if ($request->isMethod('post')) {
            $fileData = $request->input();
            
            if (!empty($fileData)) {
               
                $result = $objUserSkill->saveDetail($fileData, $userId);
                if ($result) {
                    $request->session()->flash('session_success', 'Skill Added successfully.');
                } else {
                    $request->session()->flash('session_error', 'Please enter at list one skill.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('freelancer-skill'));
        }

        $data['getUserSkills'] = $objUserSkill->getUserSkill($userId);

        $data['arrCountry'] = Config::get('constants.arrCountry');
        $data['arrRole'] = Config::get('constants.arrRole');

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('freelancer/freelancerSetting.js');
        $data['funinit'] = array('freelancerSetting.initSkill();');
        return view('freelancer.setting.skill', $data);
    }
    
    public function getSkillList(){
        
        
//        $data[0]= array('value'=>1,'text'=>'test','continent'=>'sss');
//        $data[1]= array('value'=>2,'text'=>'test2','continent'=>'sss');
//        $data[2]= array('value'=>3,'text'=>'test3','continent'=>'sss');
//        $data[3]= array('value'=>4,'text'=>'test4','continent'=>'sss');
//        
//        echo json_encode($data);
//        exit;
        
//        echo '<pre>';
//        print_r($data);
       
        $objDefaultSkill = new DefaultSkill();
        $data = $objDefaultSkill->getDetail();
        $data1 = array();
        for($i=0;$i<count($data);$i++){
            $data1[]= array('value'=>$data[$i]['id'],'text'=>$data[$i]['name'],'continent'=>'sss');
        }
        
       
        echo json_encode($data1);
        exit;
    }
    
}
