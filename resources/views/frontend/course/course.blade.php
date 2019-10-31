@extends('frontend.master')


@section('mainContent')

<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Student Courses</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="{{url('/')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Courses</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->



<!-- Courses -->
<section id="course_all" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
          <div class="image bottom25">
            <img src="{{asset('frontend/images/')}}/courses1.jpg" alt="Course" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="course_detail.html">Accounting Technologies</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="course_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="course margin_top wow fadeIn" data-wow-delay="500ms">
          <div class="image bottom25">
            <img src="{{asset('frontend/images/')}}/courses2.jpg" alt="Course" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="course_detail.html">Modern Technologies</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="course_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="course margin_top wow fadeIn" data-wow-delay="600ms">
          <div class="image bottom25">
            <img src="{{asset('frontend/images/')}}/courses3.jpg" alt="Course" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="course_detail.html">Modern Languages</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="#.">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="course margin_top  wow fadeIn" data-wow-delay="700ms">
          <div class="image bottom25">
            <img src="{{asset('frontend/images/')}}/courses4.jpg" alt="Course" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="course_detail.html">Computer Technologies</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="course_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="course margin_top wow fadeIn" data-wow-delay="800ms">
          <div class="image bottom25">
            <img src="{{asset('frontend/images/')}}/courses5.jpg" alt="Course" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="course_detail.html">Development Studies</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="course_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{asset('frontend/images/')}}/courses6.jpg" alt="Course" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="course_detail.html">Electrical & Electronic</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="course_detail.html">view details</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Courses ends -->

@endsection