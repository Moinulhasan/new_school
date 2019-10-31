<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pull-left">
        <span class="info"><a href="#."> Have any question?</a></span>
        <span class="info"><i class="icon-phone2"></i>(654) 332-112-222</span>
        <span class="info"><i class="icon-mail"></i>support@edua.com</span>
        </div>
        <ul class="social_top pull-right">
          <li><a href="#."><i class="fa fa-facebook"></i></a></li>
          <li><a href="#."><i class="icon-twitter4"></i></a></li>
          <li><a href="#."><i class="icon-google"></i></a></li>
          
 			
        </ul>
      </div>
    </div>
  </div>
</div>

<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
    <div class="container"> 
       <div class="search_btn btn_common"><i class="icon-icons185"></i></div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html"><img src="{{asset('frontend/images/')}}/logo-white.png" alt="logo" class="logo logo-display">
        <img src="{{asset('frontend/images/')}}/logo.png" class="logo logo-scrolled" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
          <li class="dropdown">
            <a href="{{url('/')}}">Home</a>
            
          </li>
          <li class="dropdown">
            <a href="{{url('/course')}}">courses</a>
            
          </li>
          <li class="dropdown">
            <a href="{{url('/event')}}" >events</a>
            
          </li>
          
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h6 class="title">Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="about.html">About</a></li>
                        <li><a href="testinomial.html">Testinomial</a></li>
                        <li><a href="teachers.html">Teachers</a></li>
                        <li><a href="pricing.html">Pricings</a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="col-menu col-md-3">
                    <h6 class="title">Blog</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="blog.html">Blog 01</a></li>
                        <li><a href="blog2.html">Blog 02</a></li>
                        <li><a href="blog3.html">Blog 03</a></li>
                        <li><a href="blog_detail.html">Blog Detail</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-3">
                    <h6 class="title">Shop</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop_detail.html">Shop Detail</a></li>
                        <li><a href="shop_cart.html">Cart</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-3">
                    <h6 class="title">Others</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
          <li><a href="{{url('/contact')}}">Contact Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="icon-user">{{{ Auth::user()->  name}}}</i></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
              <li><a href="{{ route('logout') }} " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                                      <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>   
  </nav>
</header>
<!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common blue">Search</button>
  </form>
</div>

<!--Slider-->