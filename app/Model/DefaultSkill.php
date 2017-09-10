<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class DefaultSkill extends Model {

    protected $table = 'default_skill';

   
    public function deleteDetail($id) {
        return DefaultSkill::where('id', $id)->delete();
    }

    public function getDetail() {
        return DefaultSkill::select('*')
                        ->get()->toArray();
    }

}
