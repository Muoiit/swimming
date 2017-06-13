@extends('layouts.frontend')
@section('title','Trung Tam day boi kem rieng TP-Ho Chi Minh, day boi 1 kem 1, day boi cho moi lua tuoi')
@section('banner')

 <div id="banner">
    <div id="home-banner" class="owl-carousel owl-theme">
   
    @foreach($shows as $show)
      <div class="item"> <img src="{{$show->image->file}}" alt="img">
        <div class="caprtion">
          <div class="holder"> <strong class="title">{{$show->title}}</strong>
            <h1>{{$show->slogan}}</h1>
            <p>{{$show->description}}</p>
            <div class="btn-row"> <a href="#" class="btn-more-2">Learn More</a> </div>
          </div>
        </div>
      </div>
    @endforeach  
      

    </div>
  </div>

@stop


@section('content')

<!--WELCOME BOX-->
    <section class="welcome_box">
      <div class="container">
        <div class="holder">
          <h2>Welcome to <span>Swim School</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="left_box">
              <h3>Swimming Lessons</h3>
              <a href="#" class="btn-link"><i class="fa fa-plus" aria-hidden="true"></i></a>
              <p>Phasellus sit amet tristique ligula. Donec iaculis leo at 
                nibh suscipit ultricies. Interdum talesuada </p>
            </div>
            <div class="left_box">
              <h3>Swimming Courses</h3>
              <a href="#" class="btn-link"><i class="fa fa-plus" aria-hidden="true"></i></a>
              <p>Phasellus sit amet tristique ligula. Donec iaculis leo at 
                nibh suscipit ultricies. Interdum talesuada </p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="thumb"><img src="images/welcome_bg.jpg" alt="img"></div>
          </div>
        </div>
      </div>
    </section>
    <!--WELCOME BOX--> 
    
    <!--CHILDREN BANNER-->
    <section class="children_banner children_banner_2">
      <div class="container">
        <div class="holder"> <strong class="title">Learn to Swim.</strong>
          <h2>BECOME WATER <span>Safe.</span></h2>
          <div class="btn-row"><a href="#" class="btn-more-2">read More</a></div>
        </div>
      </div>
    </section>
    <!--CHILDREN BANNER--> 
    
    <!--FULL GALLERY-->
    <section class="full_gallery">
      <div class="container">
        <div class="heading-head"> <strong class="title">Swim Photo Shot</strong>
          <h2>Our <span>Gallery</span></h2>
        </div>
      </div>
      <div class="container-fluid">
        <div class="col-md-4 col-sm-4">
          <div class="frame"> <img src="images/gallery-img-1.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame"> <img src="images/gallery-img-2.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-right"> <img src="images/gallery-img-3.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-btm"> <img src="images/gallery-img-4.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-btm"> <img src="images/gallery-img-5.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-right padd-btm"> <img src="images/gallery-img-6.jpg" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-row"> <a href="#" class="btn-more">Load more</a> </div>
    </section>
    <!--FULL GALLERY--> 
    
    <!--BLOG POST-->
    <section class="blog-post">
      <div class="container">
        <div class="heading-head"> <strong class="title">Swim News Update</strong>
          <h2>Our <span> Latest News</span></h2>
        </div>
        <div class="post-box">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="frame"><strong class="date">16
                apr</strong><a href="#"><img src="images/blog-img-1.jpg" alt="img"></a></div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="text-box">
                <ul>
                  <li><span>Posted By : Smith</span></li>
                  <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>View : 13</a></li>
                  <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>Comments : 26</a></li>
                </ul>
                <h2><a href="#">Swimming Lessons at the New Pool</a></h2>
                <p>Duis aute irure dolor in reprehenderit in volupta velit esse cillum. Sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn-more">Read More</a> </div>
            </div>
          </div>
        </div>
        <div class="post-box">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="frame"><strong class="date">18
                apr</strong><a href="#"><img src="images/blog-img-2.jpg" alt="img"></a></div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="text-box">
                <ul>
                  <li><span>Posted By : Smith</span></li>
                  <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>View : 13</a></li>
                  <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>Comments : 26</a></li>
                </ul>
                <h2><a href="#">Swimming Lessons at the New Pool</a></h2>
                <p>Duis aute irure dolor in reprehenderit in volupta velit esse cillum. Sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn-more">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--BLOG POST--> 

@stop