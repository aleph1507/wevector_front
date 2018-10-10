@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="section2 head-section rect section-cb">
        <h1 class="text-center">how can we help?</h1>
        <p class="text-center large-spaced-p">
          If you would you like to know more about our work and services,
          please get in touch with us. We're available 8.00 AM – 4:00 PM CET,
          Monday through Friday. We do our best to respond to each request
          with a personalized reply within a few hours.
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row spaced-top-mod">
      <div class="col-md-5 offset-md-1 inplace-container">
        <form class="contact-page-form" id="contact-page-form" method="post">
          <div class="form-group name">
            <input type="text" name="name" placeholder="Your Name *" class="form-control" autocomplete="off" required>
          </div>
          <div class="form-group email">
            <input type="email" name="email" placeholder="Email address *" class="form-control" autocomplete="off" required>
          </div>
          <div class="form-group phone">
            <input type="text" name="phone" placeholder="Phone" class="form-control" autocomplete="off">
          </div>
          <div class="form-group company">
            <input type="text" name="company" placeholder="Company *" class="form-control" autocomplete="off" required>
          </div>
          <div class="form-group city">
            <input type="text" name="city" placeholder="City *" class="form-control" autocomplete="off" required>
          </div>
          <div class="form-group country">
            <input type="text" name="country" placeholder="Country *" class="form-control" autocomplete="off" required>
          </div>

          <label for="note" class="blink notdec spaced-top-mod">Please tell us more about your enquiry *</label>
          <div class="form-group note">
            <textarea name="note" id="note"
            cols="30" rows="10" placeholder="Add note here..." class="form-control" required></textarea>
          </div>

          {{-- <div class="upload-btns">
            <div class="row">
              <div class="col-md-5 col-sm-12 form-group nlp">
                <label class="btn btn-lg btn-outline-dark input-btn">
                  <input type="file" class="upload-input" name="upfile">
                  <i class="fas fa-cloud-upload-alt"></i> Upload file
                </label>
              </div>
              <div class="col-md-5 col-sm-12 offset-md-1 form-group">
                <label class="form-note">Max files size 10Mb.</label>
              </div>
            </div>
            <div class="row">
              <a href="#" class="blink">Upload another file</a>
            </div>
          </div> --}}

          <button type="button" class="pink-button-lg spaced-top" id="sendMessagePage">send message</button>
        </form>
        <img src="{{asset('img/contact/undraw-mail-cg-1-t.svg')}}" alt="Message" id="msgImg" class="transparent inplace">
      </div>
      <div class="col-md-4 offset-md-1">
        <h2 class="contact-info-title">address</h2>
        <p class="contact-info">
          <span>Nikola Trimpare 33 1-4</span>
          <span>1000 Skopje</span>
          <span>Macedonia</span>

          <a href="#" class="map">View map</a>
        </p>
        <h2 class="contact-info-title spaced-top">contact</h2>
        <p class="contact-info">
          <span>Please get in touch and let’s have a talk about your challenges.</span>

          <span class="spaced-top-mod"><b>Sasha Jacimic</b></span>
          <span>Managing Director</span>
          <span><a href="mailto:sj@wevector.io" class="mailto">sj@wevector.io</a></span>
          <span>Office +389 2310 7005</span>
          <span>Direct + 389 70 344 130</span>
        </p>
      </div>
    </div>
  </div>
@endsection
