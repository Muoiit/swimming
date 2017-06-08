<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Swim School</title>
<!--BOOTSTRAP CSS-->
<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<!--MAIN STYLE CSS-->
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css">
<!--THEME COLOR CSS-->
<link href="{{asset('frontend/css/theme_color.css')}}" rel="stylesheet" type="text/css">
<!--THEME RESPONISVE CSS-->
<link href="{{asset('frontend/css/responsive_query.css')}}" rel="stylesheet" type="text/css">
<!--OWL CAROUSEL CSS-->
<link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
<!--FONTAWESOME-->
<link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<!--FONTAWESOME-->
<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!--WRAPPER-->
<div id="wrapper" class="home_2"> 
  <!--HEADER-->
  <header id="header"> 
    <!--HEAD TOP-->
    <section class="head-top">
      <div class="container">
        <div class="left-col"> <a href="mailto:"><i class="fa fa-envelope" aria-hidden="true"></i>Info@swimschool.com</a> <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>573 - Swim School London England</a> </div>
        <div class="right-col">
          <div class="head-social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--HEAD TOP--> 
    
    <!--HEAD BOTTOM ROW-->
    <section class="head-bottom-row">
      <div class="container"> <strong class="logo"><a href="index-2.html"><img src="{{asset('frontend/images/footer_logo.png')}}" alt="logo"></a></strong>
        <div class="search-box">
          <div class="dropdown"> <a href="#" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></a>
            <form action="#" class="dropdown-menu">
              <input type="text" required placeholder="Search....">
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
        <div class="navigation">
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav" id="nav">
                <li class="active"><a href="#">Home<span>go to home</span></a>
                  <ul>
                    <li><a href="index-2.html">Home 1</a></li>
                    <li><a href="index-3.html">Home 2</a></li>
                    <li><a href="index-4.html">Home 3</a></li>
                  </ul>
                </li>
                <li><a href="about.html">about Us<span>discover</span></a></li>
                <li><a href="#">courses<span>classes</span></a>
                  <ul>
                    <li><a href="courses.html">courses</a></li>
                    <li><a href="courses-registration.html">Courses Registration</a></li>
                  </ul>
                </li>
                <li><a href="#">Photo shot <span>Gallery</span></a>
                  <ul>
                    <li><a href="gallery-full.html">Gallery Full</a></li>
                    <li><a href="gallery-one-col.html">Gallery One Column</a></li>
                    <li><a href="gallery-two-col.html">Gallery Two Column</a></li>
                  </ul>
                </li>
                <li><a href="#">blog<span>latest news</span></a>
                  <ul>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-detail.html">Blog Detail</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Location<span>get in touch</span></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </section>
    <!--HEAD BOTTOM ROW--> 
  </header>
  <!--HEADER--> 
  
  <!--BANNER-->
  <div id="banner">
    <div id="home-banner" class="owl-carousel owl-theme">
      <div class="item"> <img src="{{asset('frontend/images/banner-style-2-img-1.jpg')}}" alt="img">
        <div class="caprtion">
          <div class="holder"> <strong class="title">Poviding Expert Diving</strong>
            <h1>Training for all <span>Skill Levels</span></h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, Thank you.</p>
            <div class="btn-row"> <a href="#" class="btn-more-2">Learn More</a> </div>
          </div>
        </div>
      </div>
      <div class="item"> <img src="{{asset('frontend/images/banner-style-2-img-2.jpg')}}" alt="img">
        <div class="caprtion">
          <div class="holder"> <strong class="title">Swimming Beauty</strong>
            <h1>Experience with <span>Swimmers.</span></h1>
  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, Thank you.</p>
            <div class="btn-row"> <a href="#" class="btn-more-2">Learn More</a> </div>
          </div>
        </div>
      </div>
      <div class="item"> <img src="{{asset('frontend/images/banner-style-2-img-3.jpg')}}" alt="img">
        <div class="caprtion">
          <div class="holder"> <strong class="title">Swimming Beauty</strong>
            <h1>Experience with <span>Swimmers.</span></h1>
           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, Thank you.</p>
            <div class="btn-row"> <a href="#" class="btn-more-2">Learn More</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--BANNER-->
  <div id="main"> 
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
            <div class="thumb"><img src="{{asset('frontend/images/welcome_bg.jpg')}}" alt="img"></div>
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
          <div class="frame"> <img src="{{asset('frontend/images/gallery-img-1.jpg')}}" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame"> <img src="{{asset('frontend/images/gallery-img-2.jpg')}}" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-right"> <img src="{{asset('frontend/images/gallery-img-3.jpg')}}" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-btm"> <img src="{{asset('frontend/images/gallery-img-4.jpg')}}" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-btm"> <img src="{{asset('frontend/images/gallery-img-5.jpg')}}" alt="img">
            <div class="caption">
              <div class="holder"> <a href="#" class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                <h2><a href="#">friendly environment</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="frame padd-right padd-btm"> <img src="{{asset('frontend/images/gallery-img-6.jpg')}}" alt="img">
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
                apr</strong><a href="#"><img src="{{asset('frontend/images/blog-img-1.jpg')}}" alt="img"></a></div>
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
                apr</strong><a href="#"><img src="{{asset('frontend/images/blog-img-2.jpg')}}" alt="img"></a></div>
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
  </div>
  <!--FOOTER-->
  <footer id="footer"> 
    <!--MAP AREA-->
    <section class="footer_map">
      <div id="map_contact_1" class="map_canvas active"></div>
    </section>
    <!--MAP AREA--> 
    
    <!--FOOTER CONTENT-->
    <section class="footer_content_row">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer_col"> <a href="index-2.html" class="footer_logo"><img src="{{asset('frontend/images/footer_logo.png')}}" alt="logo"></a>
              <p>Curabitur iaculis accumsan augue, nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristi  que porta. Nulla facilisi. Suspendisse ultricies eros blandit.
                Fusce aliquet quam eget neque ultrices elementum. </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer_col">
              <h3>need Help ?</h3>
              <span>Visit our support center for tips and
              frequently asked questions. </span> <strong class="title">Support Center</strong>
              <div class="call"> <span><i class="fa fa-phone" aria-hidden="true"></i></span> <strong><b>Timing : 09 am - 08 pm</b> +1  011 - 222 - 3333 </strong> </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="footer_col">
              <h3>Contact us</h3>
              <address>
              <span><i class="fa fa-map-marker" aria-hidden="true"></i>641 Dowd Avenue Elizabeth, NJ 07201</span> <a href="mailto:"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact@swimschool.com</a>
              <form action="#">
                <strong class="title">Sign up for special offers and services</strong>
                <div class="mail-box">
                  <input name="email" type="text" placeholder="Your email" required>
                  <input name="submit" type="submit" value="Sign up">
                </div>
              </form>
              </address>
            </div>
          </div>
        </div>
        <div class="footer_btm_row"> <strong class="copy">&copy; 2016. All Rights Reserved. </strong>
          <div class="footer_social">
            <ul>
              <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i aria-hidden="true" class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="back_top"> Go Top <a href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a> </div>
    </section>
    <!--FOOTER CONTENT--> 
  </footer>
  <!--FOOTER--> 
</div>
<!--WRAPPER--> 
<!--JQUERY MIN--> 
<script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script> 
<!--BOOTSTRAP--> 
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script> 
<!--MAP--> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<!--OWL CAROUSEL JS--> 
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script> 
<!--CUSTOM SCRIPT--> 
<script src="{{asset('frontend/js/custom_script.js')}}"></script>
</body>


</html>
