<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';

    public function saveDetail($request, $userId) {
        $objPortfolio = new Portfolio();

        $objPortfolio->user_id = $userId;
        $objPortfolio->project_title = $request['project_title'];
        $objPortfolio->project_overview = $request['project_overview'];
        $objPortfolio->contract = $request['contract'];
        $objPortfolio->category_id = $request['category_id'];
        $objPortfolio->sub_category_id = $request['sub_category_id'];
        $objPortfolio->project_url = $request['project_url'];
        $objPortfolio->completion_date = $request['completion_date'];
        $objPortfolio->skills = $request['skills'];
        
        $objPortfolio->save();
        return TRUE;
    }
}
