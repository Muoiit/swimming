<?php

namespace App\Http\Controllers;
use App\Show;
use App\Owner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     
      public function show(){
          
          $shows = Show::all();
          $owner = Owner::findOrFail(2);
          return view('home',compact('shows','owner')); 

          

      }


}
