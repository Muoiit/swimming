<?php

namespace App\Http\Controllers;
use App\Show;
use App\Owner;
use App\Introcenter;
use App\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     
      public function show(){
          
          $shows     = Show::all();
          $galleries = Gallery::all();
          $owner     = Owner::findOrFail(2);
          $center    = Introcenter::findOrFail(1);
          return view('home',compact('shows','owner','center','galleries'));           

      }


}
