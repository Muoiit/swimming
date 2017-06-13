 <header id="header"> 
    <!--HEAD TOP-->
    <section class="head-top">
      <div class="container">
        <div class="left-col"> <a href="mailto:"><i class="fa fa-envelope" aria-hidden="true"></i> {{$owner->email}}</a> <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$owner->address}}</a> </div>
        <div class="right-col">
          <div class="head-social">
            <ul>
              <li><a href="{{$owner->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="{{$owner->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="{{$owner->googleplus}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="{{$owner->youtube}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--HEAD TOP--> 
    
    <!--HEAD BOTTOM ROW-->
    <section class="head-bottom-row">
      <div class="container"> <strong class="logo"><a href="index-2.html"><img src="{{$owner->logo}}" alt="logo"></a></strong>
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
                <li class="active"><a href="{{url('/')}}">Home<span>go to home</span></a>                  
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