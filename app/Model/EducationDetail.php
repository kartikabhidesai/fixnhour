<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class EducationDetail extends Model {

    protected $table = 'education_detail';

    public function saveDetail($request, $userId) {
        $objEducationDetail = new EducationDetail();

        $objEducationDetail->user_id = $userId;
        $objEducationDetail->school = $request['school'];
        $objEducationDetail->degree = $request['degree'];
        $objEducationDetail->area_of_study = $request['area_of_study'];
        $objEducationDetail->school_from = $request['school_from'];
        $objEducationDetail->school_to = $request['school_to'];
        $objEducationDetail->descr = $request['descr'];
        $objEducationDetail->created_at = date('Y-m-d');

        $objEducationDetail->save();
        return TRUE;
    }

    public function updateDetail($request) {
        $objEducationDetail = EducationDetail::find($request['edit_id']);

        $objEducationDetail->school = $request['school'];
        $objEducationDetail->degree = $request['degree'];
        $objEducationDetail->area_of_study = $request['area_of_study'];
        $objEducationDetail->school_from = $request['school_from'];
        $objEducationDetail->school_to = $request['school_to'];
        $objEducationDetail->descr = $request['descr'];

        $objEducationDetail->save();
        return TRUE;
    }

    public function deleteDetail($id) {
        return EducationDetail::where('id', $id)->delete();
    }

    public function getDetail($userId) {
        return EducationDetail::select('*')
                        ->where('user_id', '=', $userId)
                        ->get()->toArray();
    }

    public function getEdit($id) {
        return EducationDetail::select('*')
                        ->where('id', '=', $id)
                        ->get()->toArray();
    }

}
