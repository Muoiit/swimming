<?php

namespace App;
use App\Image;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['title','image_id','slogan','description'];


     public function image(){
     	
     	return $this->belongsTo('App\Image');

     }
}
