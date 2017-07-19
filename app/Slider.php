<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model{
    
    protected $table = 'slider';

    // bellow code is used to remove remember token
    public function insertSlider($request){
        
        $file = $request->file('slider');
       

        $destinationPath = public_path() . '/uploads/slider';
       
        $time = time();
        $filenm = $time . $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $filenm);
               
        $slider = new Slider;
        $slider->var_name = $request->slider_title;
        $slider->var_image = $filenm;
            
            if ($slider->save()) {
                return $slider->id;
            }else{
                return FALSE;
            }
    }
    public function editSlider($request){
//        print_r($request->input());
//        print_r($request->file()); exit();
        
        if(!empty($request->file('slider'))){
//            $OldImagePath = public_path() . '/uploads/slider'.$request->old_image;
//            if(file_exists($OldImagePath)){
//                echo "enter"; exit();
//                unlink($request->old_image);
//                exit();
//            }
//            exit();
            
            $file = $request->file('slider');
            $destinationPath = public_path() . '/uploads/slider';
            $time = time();
            $filenm = $time . $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filenm);
        }else{
            $filenm = $request->old_image;
        }
           
        $slider = new Slider;
        $result = Slider::where('id', '=', $request->slider_id)->update(['var_name' => $request->slider_title, 
        'var_image' => $filenm]);
           if($result){
               return TRUE;
           }else{
               return FALSE;
           }
//        $slider->var_name = $request->slider_title;
//        $slider->var_image = $filenm;
//           
//            if ($slider->save()) {
//                return $slider->id;
//            }else{
//                return FALSE;
//            }
    }


    
}
