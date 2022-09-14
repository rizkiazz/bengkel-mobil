@extends('layouts.frontend.main')

@section('content')

<div>
    <!-- service section -->

    <section class="service_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Our Services
          </h2>
        </div>
      </div>
      <div class="container ">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  General Maintenance
                </h4>
                <p>
                  Generators on the Internet tend to repeat predefined chunks as necessary
                </p>
                <a href="">
                  Read More
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
  
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Repair and Replacement
                </h4>
                <p>
                  Generators on the Internet tend to repeat predefined chunks as necessary
                </p>
                <a href="">
                  Read More
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
  
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Tire Repair and Replacement
                </h4>
                <p>
                  Generators on the Internet tend to repeat predefined chunks as necessary
                </p>
                <a href="">
                  Read More
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s4.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Wheel Alignment
                </h4>
                <p>
                  Generators on the Internet tend to repeat predefined chunks as necessary
                </p>
                <a href="">
                  Read More
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
  
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s5.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Fuel System Repair
                </h4>
                <p>
                  Generators on the Internet tend to repeat predefined chunks as necessary
                </p>
                <a href="">
                  Read More
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/s6.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Tune Up
                </h4>
                <p>
                  Generators on the Internet tend to repeat predefined chunks as necessary
                </p>
                <a href="">
                  Read More
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- end service section -->
  
</div>


@endsection