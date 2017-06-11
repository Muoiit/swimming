<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strongpoint extends Model

{
     protected $uploads = '/images/';


    protected $fillable = ['title','content','image'];


    public function getImageAttribute($photo){


        return $this->uploads . $photo;


    }
}
