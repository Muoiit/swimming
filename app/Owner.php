<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
	protected $uploads = '/images/';


    protected $fillable = ['name','email','phone','address','facebook','twitter','youtube','googleplus','logo'];


    public function getLogoAttribute($photo){


        return $this->uploads . $photo;


    }

}
