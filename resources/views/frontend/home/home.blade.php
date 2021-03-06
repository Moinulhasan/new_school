@extends('frontend.master')

@section('mainContent')

<section class="rev_slider_wrapper text-center">			
<!-- START REVOLUTION SLIDER 5.0 auto mode -->
  <div id="rev_slider" class="rev_slider"  data-version="5.0">
    <ul>	
    <!-- SLIDE  -->
      <li data-transition="fade">
        <!-- MAIN IMAGE -->
        <img src="{{asset('frontend/images/')}}/1.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">							
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"						
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"							 
        data-start="800"><h1>Best Online Learning</h1>
        </div>
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['380','340','300','350']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-visibility="['on','on','off','off']"
        data-transform_idle="o:1;"
        data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
        data-transform_out="opacity:0;s:1000;s:1000;"
        data-start="1500"><p>Your chance to be a trending expert in IT industries and make a successful <br/> career after completion of our courses.</p>
        </div>
        <div class="tp-caption  tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['450','390','350','250']" data-voffset="['0','0','0','0']"							
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
        data-mask_out="x:0;y:0;s:inherit;e:inherit;" 							 
        data-start="2000">
        <a href="#." class="border_radius btn_common white_border">our services</a>
        <a href="#." class="border_radius btn_common blue">Get a quote</a>
        </div>
      </li>

      <li data-transition="fade">
        <img src="{{asset('frontend/images/')}}/2.jpeg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">							
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"						
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"							 
        data-start="800"><h1>Take The First Step</h1>
        </div>
        <div class="tp-caption tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['380','340','300','350']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-visibility="['on','on','off','off']"
        data-transform_idle="o:1;"
        data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
        data-transform_out="opacity:0;s:1000;s:1000;" 
        data-start="1500"><p>Your chance to be a trending expert in IT industries and make a successful <br/> career after completion of our courses.</p>
        </div>
        <div class="tp-caption  tp-resizeme" 							
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['450','390','350','250']" data-voffset="['0','0','0','0']"							
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
        data-mask_out="x:0;y:0;s:inherit;e:inherit;" 							 
        data-start="2000">
        <a href="#." class="border_radius btn_common blue">Get a quote</a>
        </div>
      </li>
    </ul>				
  </div><!-- END REVOLUTION SLIDER -->
</section>	


<!--ABout US-->
<section id="about" class="padding">
  <div class="container">
    <div class="row">
    <div class="icon_wrap padding-bottom-half clearfix">
      <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="300ms">
         <i class="icon-icons9"></i>
         <h4 class="text-capitalize bottom20 margin10">Unlimited Features</h4>
         <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
      </div>
      <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
         <i class="icon-icons9"></i>
         <h4 class="text-capitalize bottom20 margin10">Unlimited Features</h4>
         <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
      </div>
      <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
         <i class="icon-icons20"></i>
         <h4 class="text-capitalize bottom20 margin10">Unlimited Features</h4>
         <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
      </div>
      <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="600ms">
         <i class="icon-globe"></i>
         <h4 class="text-capitalize bottom20 margin10">Unlimited Features</h4>
         <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
      </div>
      <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
         <i class="icon-layers"></i>
         <h4 class="text-capitalize bottom20 margin10">Unlimited Features</h4>
         <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
      </div>
      <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
         <i class="icon-laptop"></i>
         <h4 class="text-capitalize bottom20 margin10">Unlimited Features</h4>
         <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
      </div>
      </div>
    </div>
  </div> 
  <div class="container margin_top">
    <div class="row">
      <div class="col-md-7 col-sm-6 priorty wow fadeInLeft" data-wow-delay="300ms">
        <h2 class="heading bottom25">Welcome to Edua Theme <span class="divider-left"></span></h2>
        <p class="half_space">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>consectetur id. Aenean sit amet massa eu velit commodo cursus fringilla a tellus. Morbi eros urna, mollis porta feugiat non, ornare eu augue. 
        Sed rhoncus est sit amet diam tempus, et tristique est vive, sectur at dapibus id, luctus at odio. Proin mattis congue tristique 
        eu augue. Sed rhoncus est.</p>
        <div class="row">
          <div class="col-md-6">
            <div class="about-post">
            <a href="#." class="border_radius"><img src="{{asset('frontend/images/')}}//hands.png" alt="hands"></a>
            <h4>Good Planning</h4>
            <p>Renean sit amet massa</p>
            </div>
            <div class="about-post">
            <a href="#." class="border_radius"><img src="{{asset('frontend/images/awesome.png')}}" alt="hands"></a>
            <h4>Happy Students</h4>
            <p>Renean sit amet massa</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-post">
            <a href="#." class="border_radius"><img src="{{asset('frontend/images/maintenance.png')}}" alt="hands"></a>
            <h4>Our Courses</h4>
            <p>Renean sit amet massa</p>
            </div>
            <div class="about-post">
            <a href="#." class="border_radius"><img src="{{asset('frontend/images/home.png')}}" alt="hands"></a>
            <h4>Our Teachers</h4>
            <p>Renean sit amet massa</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6 wow fadeInRight" data-wow-delay="300ms">
         <img src="{{asset('frontend/images/3.jpeg')}}" alt="our priorties" class="img-responsive" style="width:100%;">
      </div>
    </div>
  </div>
</section>
<!--ABout US-->


<!-- Courses -->
<section id="courses" class="padding parallax">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading heading_space wow fadeInDown">Popular Courses<span class="divider-left"></span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="slider_wrapper">
          <div id="course_slider" class="owl-carousel">
            <div class="item">
              <div class="image bottom20">
                <img src="{{asset('frontend/images/4.jpeg')}}" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom15"><a href="course_detail.html">Introduction Science</a></h3>
              <p class="bottom15">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
              <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>
            </div>
            <div class="item">
              <div class="image bottom20">
                <img src="{{asset('frontend/images/5.jpeg')}}" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom15"><a href="course_detail.html">Introduction Commerce</a></h3>
              <p class="bottom15">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
              <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>
            </div>
            <div class="item">
              <div class="image bottom20">
                <img src="{{asset('frontend/images/6.png')}}" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom15"><a href="course_detail.html">Introduction Humanities</a></h3>
              <p class="bottom15">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
              <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>
            </div>
            <div class="item">
              <div class="image bottom20">
                <img src="{{asset('frontend/images/7.jpeg')}}" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom15"><a href="course_detail.html">Introduction Nursury</a></h3>
              <p class="bottom15">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
              <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>
            </div>
            <div class="item">
              <div class="image bottom20">
                <img src="{{asset('frontend/images/8.jpeg')}}" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom15"><a href="course_detail.html">Introduction Academy</a></h3>
              <p class="bottom15">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
              <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>
            </div>
            <div class="item">
              <div class="image bottom20">
                <img src="{{asset('frontend/images/course3.jpg')}}" alt="Courses" class="img-responsive border_radius">
              </div>
              <h3 class="bottom15"><a href="course_detail.html">Introduction LearnPress</a></h3>
              <p class="bottom15">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
              <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Courses -->




<!--Fun Facts-->
<section id="facts" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
       <h2 class="heading">Education Theme<span class="divider-center"></span></h2>
       <p class="heading_space margin10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>
    <div class="row number-counters">
      <div class="col-md-2 col-sm-4">
        <div class="counters-item">
        <i class="icon-checkmark3"></i>
        <strong data-to="1235">0</strong>
        <!-- Set Your Number here. i,e. data-to="56" -->
        <p>Project Completed</p>
        </div>
        <div class="counters-item last">
        <i class="icon-trophy"></i>
        <strong data-to="78">0</strong>
        <p>Awards Won</p>
        </div>
      </div>
      <div class="col-md-7 col-sm-4">
        <div class="fact-image">
        <img src="{{asset('frontend/images/9.jpeg')}}" alt=" some facts" class="img-responsive">
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
       <div class="counters-item">
        <i class=" icon-icons20"></i>
        <strong data-to="186">0</strong>
        <p>Hours of Work / Month</p>
        </div>
        <div class="counters-item last">
        <i class="icon-happy"></i>
        <strong data-to="89">0</strong>
        <p>Satisfied Clients</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Customers Review-->
<section id="reviews" class="padding bg_light">
  <div class="container">
    <div class="row">
      <!--  -->
    </div>
  </div>
</section>




<!--Pricings-->
<section class="padding" id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
        <h2 class="heading">Pricing Tables <span class="divider-center"></span></h2>
        <p class="heading_space margin10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="col-md-12">
        <div class="pricing">
          <div class="pricing_item wow fadeInUp" data-wow-delay="300ms">
            <h3>Basic</h3>
            <div class="pricing_price"><span class="pricing_currency">$</span>9.90</div>
            <p class="pricing_sentence">Perfect for single freelancers who work by themselves</p>
            <ul class="pricing_list">
              <li class="pricing_feature">Support forum</li>
              <li class="pricing_feature">Free hosting</li>
              <li class="pricing_feature">40MB of storage space</li>
              <li>Social media integration</li>
              <li>1GB of storage space</li>
            </ul>
            <a class="btn_common text-center" href="#.">Choose plan</a>
          </div>
          <div class="pricing_item active wow fadeInUp" data-wow-delay="400ms">
            <h3>Popular</h3>
            <div class="pricing_price"><span class="pricing_currency">$</span>29,90</div>
            <p class="pricing_sentence">Suitable for small businesses with up to 5 employees</p>
            <ul class="pricing_list">
              <li class="pricing_feature">Unlimited calls</li>
              <li class="pricing_feature">Free hosting</li>
              <li class="pricing_feature">10 hours of support</li>
              <li class="pricing_feature">Social media integration</li>
              <li class="pricing_feature">1GB of storage space</li>
            </ul>
            <a class="btn_common text-center" href="#.">Choose plan</a>
          </div>
          <div class="pricing_item dark_gray wow fadeInUp" data-wow-delay="500ms">
            <h3>Premier</h3>
            <div class="pricing_price"><span class="pricing_currency">$</span>59,90</div>
            <p class="pricing_sentence">Great for large businesses with more than 5 employees</p>
            <ul class="pricing_list">
              <li class="pricing_feature">Unlimited calls</li>
              <li class="pricing_feature">Free hosting</li>
              <li class="pricing_feature">Unlimited hours of support</li>
              <li class="pricing_feature">Social media integration</li>
              <li class="pricing_feature">Unlimited storage space</li>
            </ul>
            <a class="btn_common text-center" href="#.">Choose plan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Pricings-->


<!--Paralax -->
<section id="parallax" class="parallax">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow bounceIn">
       <h2>We Believe that Education for Everyone Since</h2>
       <h1 class="margin10">1942</h1>
       <a href="#." class="border_radius btn_common white_border margin10">Gaet a Quote</a>
      </div>
    </div>
  </div>
</section>
<!--Paralax -->


<!-- News-->
<section id="news" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown">
       <h2 class="heading heading_space">Latest News <span class="divider-left"></span></h2>
      </div>
    </div>



    <div class="row">
      <div class="col-md-12">
        <div class="slider_wrapper">
          <div id="news_slider" class="owl-carousel">
            <div class="item">
              <div class="content_wrap">
                <div class="image">
                  
                  <img src="{{asset('frontend/images/11.jpeg')}}" alt=" some facts" class="img-responsive">
                </div>
            </div>
                <div class="news_box border_radius">
                  <h4><a href="blog_detail.html">4 Springtime Color Schemes to Try at Home</a></h4>
                  <ul class="commment">
                    <li><a href="#."><i class="icon-icons20"></i>June 6, 2016</a></li>
                    <li><a href="#."><i class="icon-comment"></i> 02</a></li>
                  </ul>
                  <p>We offer the most complete house Services in the country...</p>
                  <a href="blog_detail.html" class="readmore">Read More</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="content_wrap">
                <div class="image">
                  <img src="">
                  <img src="{{asset('frontend/images/')}}/10.jpeg">                </div>
                <div class="news_box border_radius">
                  <h4><a href="blog_detail.html"> Springtime Color Schemes to Try at Home</a></h4>
                  <ul class="commment">
                    <li><a href="#."><i class="icon-icons20"></i>June 6, 2016</a></li>
                    <li><a href="#."><i class="icon-comment"></i> 02</a></li>
                  </ul>
                  <p>We offer the most complete house Services in the country...</p>
                  <a href="blog_detail.html" class="readmore">Read More</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="content_wrap">
                <div class="image">
                  <img src="{{asset('frontend/images/')}}/12.jpeg" alt='Edua' class="img-responsive border_radius">
                </div>
                <div class="news_box border_radius">
                  <h4><a href="blog_detail.html">4 Springtime Color Schemes to Try at Home</a></h4>
                  <ul class="commment">
                    <li><a href="#."><i class="icon-icons20"></i>June 6, 2016</a></li>
                    <li><a href="#."><i class="icon-comment"></i> 02</a></li>
                  </ul>
                  <p>We offer the most complete house Services in the country...</p>
                  <a href="blog_detail.html" class="readmore">Read More</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="content_wrap">
                <div class="image">
                  <img src="{{asset('frontend/images/')}}/13.jpeg" alt="Edua" class="img-responsive border_radius">
                </div>
                <div class="news_box border_radius">
                  <h4><a href="blog_detail.html">4 Springtime Color Schemes to Try at Home</a></h4>
                  <ul class="commment">
                    <li><a href="#."><i class="icon-icons20"></i>June 6, 2016</a></li>
                    <li><a href="#."><i class="icon-comment"></i> 02</a></li>
                  </ul>
                  <p>We offer the most complete house Services in the country...</p>
                  <a href="blog_detail.html" class="readmore">Read More</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="content_wrap">
                <div class="image">
                  <img src="{{asset('frontend/images/')}}/14.jpeg" alt="Edua" class="img-responsive border_radius">
                </div>
                <div class="news_box border_radius">
                  <h4><a href="blog_detail.html">4 Springtime Color Schemes to Try at Home</a></h4>
                  <ul class="commment">
                    <li><a href="#."><i class="icon-icons20"></i>June 6, 2016</a></li>
                    <li><a href="#."><i class="icon-comment"></i> 02</a></li>
                  </ul>
                  <p>We offer the most complete house Services in the country...</p>
                  <a href="blog_detail.html" class="readmore">Read More</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="content_wrap">
                <div class="image">
                  <img src="{{asset('frontend/images/')}}/news3.jpg" alt="Edua" class="img-responsive border_radius">
                </div>
                <div class="news_box border_radius">
                  <h4><a href="blog_detail.html">4 Springtime Color Schemes to Try at Home</a></h4>
                  <ul class="commment">
                    <li><a href="#."><i class="icon-icons20"></i>June 6, 2016</a></li>
                    <li><a href="#."><i class="icon-comment"></i> 02</a></li>
                  </ul>
                  <p>We offer the most complete house Services in the country...</p>
                  <a href="blog_detail.html" class="readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
</section>

@stop