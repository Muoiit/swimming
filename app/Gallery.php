<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $uploads = '/images/';


    protected $fillable = ['file'];


    public function getFileAttribute($photo){


        return $this->uploads . $photo;


    }

}
