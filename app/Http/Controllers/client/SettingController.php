<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Users;
use App\Model\EducationDetail;
use App\Model\Employment;
use App\Model\Notification;
use Config;
use Session;
use Response;

class SettingController extends Controller {

    public function __construct() {
        //   $this->middleware('auth');
        $this->middleware('client');
    }

    public function profilePicture(Request $request) {

        $data['pagetitle'] = 'Profile Picture';
        $data['metatitle'] = 'Profile Picture';
        $data['profilePic'] = 'active';

        if ($request->isMethod('post')) {
            $fileData = $request->file();
            $user = new Users;
            if (!empty($fileData)) {
                $userId = Auth::guard('client')->user()->id;
                $user->chnageProfilePic($fileData, $userId);
                $request->session()->flash('session_success', 'Your profile pictures update successfully.');
            } else {
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('profile-picture'));
        }

        $data['plugincss'] = array('bootstrap-fileinput/bootstrap-fileinput.css');
        $data['css'] = array();
        $data['pluginjs'] = array('bootstrap-fileinput/bootstrap-fileinput.js');
        $data['js'] = array();
        $data['funinit'] = array();

        return view('client.setting.profile-picture', $data);
    }

    public function updateProfile(Request $request) {
        $userId = Auth::guard('client')->user()->id;

        $data['pagetitle'] = 'Update Profile Info';
        $data['metatitle'] = 'Update Profile Info';
        $data['profileInfo'] = 'active';
        $arrUserInfo = Users::find($userId);
        $arrNameTitle = Config::get('constants.arrNameTitle');
        $arrUserType = Config::get('constants.arrUserType');

        if ($request->isMethod('post')) {
            $fileData = $request->input();
            $user = new Users;
            if (!empty($fileData)) {
                //$userId = Auth::guard('client')->user()->id;
                $user->updateUserInfo($request, $userId);
                $request->session()->flash('session_success', 'Your profile update successfully.');
            } else {
                $request->session()->flash('session_error', 'Please select image first.');
            }
            return redirect(route('update-profile'));
        }

        $data['arrNameTitle'] = $arrNameTitle;
        $data['arrUserType'] = $arrUserType;
        $data['arrUserInfo'] = $arrUserInfo;
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.init();');
        return view('client.setting.update-profile', $data);
    }

    public function changePassword(Request $request) {
        $userId = Auth::guard('client')->user()->id;

        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['changePwd'] = 'active';

        if ($request->isMethod('post')) {
            $fileData = $request->input();
            $user = new Users;
            if (!empty($fileData)) {
                $userId = Auth::guard('client')->user()->id;
                $changePasssword = $user->changePassword($request, $userId);
                if ($changePasssword) {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                } else {
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('change-password'));
        }

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('client.setting.change-password', $data);
    }

    public function notification(Request $request) {
        $userId = Auth::guard('client')->user()->id;

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
            return redirect(route('notification'));
        }

        $data['notificationDetails'] = $objNotification->getDetail($userId);
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('client.setting.notification', $data);
    }

    public function dashboard(Request $request) {
        $userId = Auth::guard('client')->user()->id;

        $data['pagetitle'] = 'Landing - Softral';
        $data['metatitle'] = 'Landing - Softral';
        $data['dashboard'] = 'active';

        if ($request->isMethod('post')) {
            $fileData = $request->input();

            $user = new Users;
            if (!empty($fileData)) {
                $userId = Auth::guard('client')->user()->id;
                $changePasssword = $user->notification($request, $userId);
                if ($changePasssword) {
                    $request->session()->flash('session_success', 'Your password update successfully.');
                } else {
                    $request->session()->flash('session_error', 'Your old password is wronge.');
                }
            } else {
                $request->session()->flash('session_error', 'Please enter all field.');
            }
            return redirect(route('dashboard'));
        }

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.changePassword();');
        return view('client.setting.dashboard', $data);
    }

    public function aboutme(Request $request) {
        $userId = Auth::guard('client')->user()->id;

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
            return redirect(route('aboutme'));
        }

        $arrUserInfo = Users::find($userId);
        $data['arrUserInfo'] = $arrUserInfo;
        //echo "<pre>";print_r($arrUserInfo);exit;

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('freelancer/updateProfile.js');
        $data['funinit'] = array('UpdateProfile.about();');
        return view('client.setting.aboutme', $data);
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

    public function clientEducation(Request $request) {
        $userId = Auth::guard('client')->user()->id;

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
            return redirect(route('client-education'));
        }

        $data['educations'] = $objEducationDetail->getDetail($userId);

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('client/clientSetting.js');
        $data['funinit'] = array('clientSetting.initEducation();');
        return view('client.setting.client-education', $data);
    }

    public function employmentHistory(Request $request) {
        $userId = Auth::guard('client')->user()->id;

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
            return redirect(route('client-employment-history'));
        }

        $data['employmentDetail'] = $objEmployment->getDetail($userId);

        $data['arrCountry'] = Config::get('constants.arrCountry');
        $data['arrRole'] = Config::get('constants.arrRole');

        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array('jquery-validation/js/jquery.validate.min.js', 'jquery-validation/js/additional-methods.min.js');
        $data['js'] = array('client/clientSetting.js');
        $data['funinit'] = array('clientSetting.initEmployment();');
        return view('client.setting.employment-history', $data);
    }

}
