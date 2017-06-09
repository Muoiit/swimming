<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introcenter extends Model

{

    protected $uploads = '/images/';


    protected $fillable = ['intro','description','image','hotline','timeopen'];


    public function getImageAttribute($photo){


        return $this->uploads . $photo;


    }

}
