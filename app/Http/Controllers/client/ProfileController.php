<?php
namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\PostJob;
use Config;

class ProfileController  extends Controller {
    
    public function __construct() {
         $this->middleware('client');
    }
    
    public function profile(){
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
        return view('client.profile.profile',$data);
    }
    
}
?>
