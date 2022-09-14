@extends('layouts.frontend.main')

@section('content')

<div>
    <!-- why section -->

    <section class="why_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Why Choose Us
          </h2>
        </div>
      </div>
      <div class="container ">
        <div class="row">
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/w1.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Best Workers
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
          <div class="col-md-6 col-lg-4 mx-auto ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/w2.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Best Materials
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
          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('frontend/images/w3.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Best Service
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
  
    <!-- end why section -->
  
    
</div>


@endsection