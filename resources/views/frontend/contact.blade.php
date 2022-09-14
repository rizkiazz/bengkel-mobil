@extends('layouts.frontend.main')

@section('content')

<div>
      <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container ">
              <h2>
                Get In Touch
              </h2>
            </div>
            <form action="#">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('frontend/images/contact-img.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

</div>

@endsection
