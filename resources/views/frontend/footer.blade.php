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
            <div class="footer_col"> <a href="index-2.html" class="footer_logo"><img src="{{$owner->logo}}" alt="logo"></a>
              <p>{{$center->intro}}</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer_col">
              <h3>need Help ?</h3>
              <span>{{$center->intro}}</span> <strong class="title">Thông tin hỗ trợ</strong>
              <div class="call"> <span><i class="fa fa-phone" aria-hidden="true"></i></span> <strong><b>Mở cửa : {{$center->timeopen}}</b> +{{$center->hotline}} </strong> </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="footer_col">
              <h3>Liên hệ</h3>
              <address>
              <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$owner->address}}</span> <a href="mailto:"><i class="fa fa-envelope-o" aria-hidden="true"></i>{{$owner->email}}</a>
              <form action="#">
                <strong class="title">Nhận thông tin khuyến mãi hot nhất từ trung tâm</strong>
                <div class="mail-box">
                  <input name="email" type="text" placeholder="emai của ban" required>
                  <input name="submit" type="submit" value="Đăng ký">
                </div>
              </form>
              </address>
            </div>
          </div>
        </div>
        <div class="footer_btm_row"> <strong class="copy">&copy; 2013. All Rights Reserved. Đậu Văn Mười </strong>
          <div class="footer_social">
            <ul>
              <li><a href="{{$owner->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="{{$owner->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="{{$owner->googleplus}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="{{$owner->youtube}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="back_top"> Go Top <a href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a> </div>
    </section>
    <!--FOOTER CONTENT--> 
  </footer>
  <!--FOOTER--> 