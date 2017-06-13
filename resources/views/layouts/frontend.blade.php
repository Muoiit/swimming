@include('frontend.head')

<body>
<!--WRAPPER-->
<div id="wrapper" class="home_2"> 
  <!--HEADER-->
   @include('frontend.header')
  <!--HEADER--> 

  
  <!--BANNER-->
  @yield('banner')
  <!--BANNER-->



  <div id="main"> 
   @yield('content')
  </div>

  

  @include('frontend.footer')

</div>
<!--WRAPPER--> 
<!--JQUERY MIN--> 

@include('frontend.scripts');


</body>


</html>
