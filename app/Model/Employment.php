<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class Employment extends Model {

    protected $table = 'employment';

    public function saveDetail($request, $userId) {
        $objEmployment = new Employment();

        $objEmployment->user_id = $userId;
        $objEmployment->company = $request['company'];
        $objEmployment->location = $request['location'];
        $objEmployment->country = $request['country'];
        $objEmployment->title = $request['title'];
        $objEmployment->role = $request['role'];
        $objEmployment->emp_from = $request['emp_from'];
        $objEmployment->emp_to = $request['emp_to'];
        $objEmployment->descr = $request['descr'];
        $objEmployment->created_at = date('Y-m-d');

        $objEmployment->save();
        return TRUE;
    }

    public function updateDetail($request) {
        $objEmployment = Employment::find($request['edit_id']);

        $objEmployment->company = $request['company'];
        $objEmployment->location = $request['location'];
        $objEmployment->country = $request['country'];
        $objEmployment->title = $request['title'];
        $objEmployment->role = $request['role'];
        $objEmployment->emp_from = $request['emp_from'];
        $objEmployment->emp_to = $request['emp_to'];
        $objEmployment->descr = $request['descr'];

        $objEmployment->save();
        return TRUE;
    }

    public function deleteDetail($id) {
        return Employment::where('id', $id)->delete();
    }

    public function getDetail($userId) {
        return Employment::select('*')
                        ->where('user_id', '=', $userId)
                        ->get()->toArray();
    }

    public function getEdit($id) {
        return Employment::select('*')
                        ->where('id', '=', $id)
                        ->get()->toArray();
    }

}
