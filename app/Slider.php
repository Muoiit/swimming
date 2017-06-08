<?php

namespace App;

use App\SliderImage;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model

{
     protected $fillable = ['title','imageslider_id','slogan','description'];


     public function sliderImage(){
     	return $this->belongsTo('App\SliderImage');

     }
     


}
