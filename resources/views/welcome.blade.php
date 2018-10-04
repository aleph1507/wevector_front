@extends('layouts.master')
@section('content')
  {{-- <div class="container-fluid footer-bg"> --}}
    <div class="row">
      <div class="section hero-section" id="hero-section">
        <h1>we do <br>one thing well</h1>
        <p class="short">We transform raster graphics into beautiful,
          pixel perfect vector artworks. Through
          considered aesthetic and a firm understanding
          of your business objectives.</p>
        </div>
    </div>

    <div class="row section grey-white-section">
      <!-- <div class="row"> -->
        <div class="col-lg-7 col-12 order-lg-1 mt-5 mt-lg-0 order-2">
          <img src="{{asset('img/section2/Motor.png')}}" class="img-fluid" alt="Motor" id="motor-img">
        </div>

        <div class="col-lg-5 col-11 offset-lg-0 offset-1 order-lg-2 order-1 mt-5 mb-5 mt-lg-0 mb-lg-0 vcenter-flex">
          <h1>crafted with care</h1>
          <p class="short">Details matter. No matter how
            challanging they are, we create each and
            every one by hand. No automation,
            tracing, or magic potions.</p>
          </div>
      <!-- </div> -->
    </div>

    <div class="row section light-blue-white-section">
      <!-- <div class="row"> -->
        <div class="col-lg-5 offset-lg-1 col-11 offset-1 v-padded-top">
          <h1>perfect in any format</h1>

          <p class="short">We take great pride in drawing each and every artwork by hand.
            For us this is the only way to achieve the quality we are known for.</p>
        </div>

        <div class="col-lg-6 col-12 offset-lg-0 mt-5 mt-lg-0">
          <img src="{{asset('img/section3/simple-iphone-x-mockup-for-dribbble.png')}}" class="img-fluid" alt="iphone">
        </div>
      <!-- </div> -->
    </div>

    <div class="row section pink-black-section">
      <!-- <div class="row"> -->
        <div class="col-10 offset-2 col-lg-3 offset-lg-2 order-2 order-lg-1 mt-lg-0 mt-5">
          <img src="{{asset('img/section4/hand-pattern-01.png')}}" class="img-fluid" alt="finger">
        </div>
        <div class="col-11 offset-1 col-lg-5 offset-lg-2 vcenter-flex order-1 order-lg-2 mt-lg-0 mt-5 v-top-padding-compensation">
          <h1>customize every detail</h1>

          <p class="short">Customize every aspect of your vector graphic while always staying
            pixel perfect. Resize. Change colour. Save in different format.
            We are with you every step of the way.</p>
          </div>
      <!-- </div> -->
    </div>

    <div class="row section white-black-section">
      <div class="col-11 offset-1 col-lg-5 offset-lg-2 mt-lg-0 mt-5 vcenter-flex">
        <h1>your dedicated team</h1>

        <p class="short">Based on years of experience, we aim to always provide personized,
          one-on-one experience.</p>
      </div>

      <div class="col-12 col-lg-4 offset-lg-1 mt-lg-0 mt-5 mb-lg-0 mb-5 far-right-flex">
        <img src="{{asset('img/section5/layer-1.png')}}" class="img-fluid" alt="cotton" id="cotton">
      </div>
    </div>

    <div class="row section form-section text-center">
      <div class="col-12 text-center">
        <h1 class="text-center mx-auto" id="form-title">how can we help?</h1>
      </div>

      <div class="col-12 mx-auto">
        <p class="short mx-auto" id="form-p">
          If you would you like to know more about our work and services,
          please get in touch with us. We're available 8.00 AM – 4:00 PM CET,
          Monday through Friday. We do our best to respond to each request
          with a personalized reply within few hours.
        </p>
      </div>

      <div class="container">
        <form class="c-form" action="index.html" id="c-form" method="post">
          <div class="row">
            <div class="col-12 col-lg-6 padded-right">
              <input type="text" placeholder="Your Name *" name="name" class="c-form-input">
              <input type="text" placeholder="Enter address *" name="address" class="c-form-input">
              <input type="text" placeholder="Phone" name="phone" class="c-form-input">
              <input type="text" placeholder="Company *" name="company" class="c-form-input">
              <input type="text" placeholder="City *" name="city" class="c-form-input">
              <input type="text" placeholder="Country" name="country" class="c-form-input">
            </div>
            <div class="col-12 col-lg-6 padded-left text-left">
              <label for="c-form-message" class="c-form-label">
                Please tell us a bit more about you enquiry *
              </label>
              <textarea name="c-form-message" name="msg" id="c-form-message"
              placeholder="Add note here..." class="c-form-input c-form-textarea"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mx-auto">
              <button type="button" name="c-form-submit" id="c-form-submit" class="c-form-submit">send message</button>
            </div>
            <div id="submitMsg" class="col-12 mx-auto">

            </div>
          </div>
        </form>
      </div>
    </div>
  {{-- </div> --}}
@endsection
