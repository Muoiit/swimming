<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $uploads = '/images/';


    protected $fillable = ['intro','content','image','youtube'];


    public function getImageAttribute($photo){


        return $this->uploads . $photo;


    }
}
