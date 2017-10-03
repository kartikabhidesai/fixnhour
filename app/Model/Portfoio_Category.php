<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfoio_Category extends Model
{
    protected $table = 'portfolio_category';
    function category_list(){
       return Portfoio_Category::select('category_id','category_name')->get();
    
    }
}
