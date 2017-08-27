<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class Notification extends Model {

    protected $table = 'notification';

    public function saveDetail($request, $userId) {
        
        if (isset($request['edit_id'])) {
            $objNotification = Notification::find($request['edit_id']);
        } else {
            $objNotification = new Notification();
            $objNotification->created_at = date('Y-m-d');
        }

        $objNotification->user_id = $userId;
        $objNotification->send_mail = $request['send_mail'];
        $objNotification->header = $request['header'];
        $objNotification->job_post = $request['job_post'];
        $objNotification->save();
        return TRUE;
    }

    public function getDetail($userId) {
        $return = Notification::select('*')
                        ->where('user_id', '=', $userId)
                        ->get()->toArray();

        return (count($return) > 0) ? $return[0] : array();
    }

}
