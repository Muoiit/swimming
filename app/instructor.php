<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    
	protected $uploads = '/images/';


    protected $fillable = ['name','intro','role','image'];


    public function getLogoAttribute($photo){


        return $this->uploads . $photo;


    }


}
