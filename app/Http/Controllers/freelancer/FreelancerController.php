<?php

namespace App\Http\Controllers\freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Model\PostJob;
use Config;
use DateTime;

class FreelancerController extends Controller {

    public function __construct() {
        //   $this->middleware('auth');
        $this->middleware('freelancer');
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
        $objPostJob = new PostJob();
        $data['jobList'] = $objPostJob->getListForFreelanser();
        for ($i = 0; $i < count($data['jobList']); $i++) {
            $data['jobList'][$i]['ago'] = $this->timeAgo($data['jobList'][0]['created_at']);
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
        return view('freelancer.findWork', $data);
    }

    public function logout(Request $request) {
        Auth::guard('freelancer')->logout();
        $request->session()->flash('session_success', 'You are successfully logout.');
        return redirect()->intended('/');
    }

    public function profile() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array(
//            'easy-responsive-tabs.css',
//            'gridGallery.css'
        );
        $data['pluginjs'] = array();
        $data['js'] = array(
            'easyResponsiveTabs.js',
            'rotate-patch.js',
            'gridGallery.js',
            'freelancer/profile.js'
        );
        $data['css'] = array(
            'easy-responsive-tabs.css',
            'gridGallery.css'
        );


        $data['funinit'] = array();
        return view('freelancer.profile', $data);
    }

    public function myJobs() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        );
        $data['css'] = array(
        );
        return view('freelancer.my-jobs', $data);
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.myJobs', $data);
    }

    public function payment() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.payment', $data);
    }

    public function message() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.message', $data);
    }

    public function saveJob() {
        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.saveJob', $data);
    }

    public function postYourJob() {
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['js'] = array(
        );
        $data['css'] = array(
        );
        return view('freelancer.post-your-job', $data);

        $data['pagetitle'] = 'Landing - Fixnhour';
        $data['metatitle'] = 'Landing - Fixnhour';
        $data['plugincss'] = array();
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('freelancer.postYourJob', $data);
    }

}
