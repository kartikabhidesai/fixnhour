<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class PostJob extends Model {

    protected $table = 'post_jobs';

    public function getListForFreelanser() {
        return PostJob::orderBy('created_at','DESC')->get()->toArray();
    }

    public function savePostJobInfo($request) {

        $destinationPath = public_path() . '/uploads/client';

        $file1 = $request->file('attach1');
        $file2 = $request->file('attach2');

        $file_name1 = '';
        $file_name2 = '';
        if (!empty($file1)) {
            $time = time();
            $file_name1 = $time . $file1->getClientOriginalName();
            $file1->move($destinationPath, $file_name1);
        }
        if (!empty($file2)) {
            $time = time();
            $file_name2 = $time . $file2->getClientOriginalName();
            $file2->move($destinationPath, $file_name2);
        }

        $objPostJob = new PostJob();

        $objPostJob->category = $request->input('category');
        $objPostJob->sub_category = $request->input('sub_category');
        $objPostJob->title = $request->input('title');
        $objPostJob->job_describe = $request->input('description');
        $objPostJob->skill = $request->input('skill');
        $objPostJob->job_type = $request->input('job_type');
        $objPostJob->approximate_budget = $request->input('approximate_budget');
        $objPostJob->approximate_time = $request->input('approximate_time');
        $objPostJob->attach1 = $file_name1;
        $objPostJob->attach2 = $file_name2;
        $objPostJob->level = $request->input('level');
        $objPostJob->location_type = ($request->input('location_type')) ? '1' : '0';
        $objPostJob->region = $request->input('region');
        $objPostJob->country = $request->input('country');
        $objPostJob->state = $request->input('state');
        $objPostJob->city = $request->input('city');
        $objPostJob->zip = $request->input('zip');
        $objPostJob->proposed_option = $request->input('proposed_option');
        $objPostJob->delivery_date = date('Y-m-d', strtotime($request->input('start_date')));
        $objPostJob->created_at = date('Y-m-d H:i:s');

        $objPostJob->save();
        return TRUE;
    }

    
    public function getJobDetailForFreelanser($jobId) {
        return PostJob::Where('id',$jobId)->get()->toArray();
    }

}
