<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class UserSkill extends Model {

    protected $table = 'user_skill';

   
    public function deleteDetail($id) {
        return UserSkill::where('id', $id)->delete();
    }

    public function getUserSkill($userId) {
        return UserSkill::from('user_skill as us')
                        ->leftjoin('default_skill as ds', 'ds.id', '=', 'us.skill_id')
                        ->where('us.user_id', $userId)
                        ->select('ds.id','ds.name')
                        ->get()->toArray();
    }
    public function saveDetail($fileData, $userId) {
        
        $explodeSkill = explode(',', $fileData['skill']);
        $explodeSkill = array_unique($explodeSkill);
        
        if(!empty($explodeSkill))
        {
             UserSkill::where('user_id', $userId)->delete();
            for($i=0;$i<count($explodeSkill);$i++)
            {
                $objUserSkill = new UserSkill();
                $objUserSkill->skill_id = $explodeSkill[$i];
                $objUserSkill->user_id = $userId;
                $objUserSkill->save();
            }
            return TRUE;
        }else{
            return FALSE;
        }
        
    }

}
