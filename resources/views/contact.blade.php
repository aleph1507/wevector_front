@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="section2 head-section rect section-cb">
        <h1 class="text-center">
          {{$content->where('placement', 's1h')->first() != null ? $content->where('placement', 's1h')->first()->content : ''}}
        </h1>
        <p class="text-center large-spaced-p">
          {{$content->where('placement', 's1p')->first() != null ? $content->where('placement', 's1p')->first()->content : ''}}
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row spaced-top-mod">
      <div class="col-md-5 offset-md-1 inplace-container">
        <form class="contact-page-form" id="c-form" method="post">
          <div class="form-group name">
            <input type="text" name="name" placeholder="Your Name *" class="form-control" autocomplete="off" required>
          </div>
          <div class="form-group email">
            <input type="email" name="address" placeholder="Email address *" class="form-control" autocomplete="off" required>
          </div>
          <div class="form-group phone">
            <input type="phone" name="phone" placeholder="Phone" class="form-control" autocomplete="off">
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
            <textarea name="c-form-message" id="c-form-message"
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
          <div class="col-12 mx-auto">
            {!! app('captcha')->render(); !!}
          </div>

          <button type="submit" class="pink-button-lg spaced-top" id="sendMessagePage">send message</button>
        </form>
        <img src="{{asset('img/contact/undraw-mail-cg-1-t.svg')}}" alt="Message" id="msgImg" class="transparent inplace">
      </div>
      <div class="col-md-4 offset-md-1">
        <h2 class="contact-info-title">
          {{$content->where('placement', 'addressTitle')->first() != null ? $content->where('placement', 'addressTitle')->first()->content : ''}}
        </h2>
        <p class="contact-info">
          <span>
            {{$content->where('placement', 'addressStreet')->first() != null ? $content->where('placement', 'addressStreet')->first()->content : ''}}
          </span>
          <span>
            {{$content->where('placement', 'addressZip')->first() != null ? $content->where('placement', 'addressZip')->first()->content : ''}}
            {{$content->where('placement', 'addressCity')->first() != null ? $content->where('placement', 'addressCity')->first()->content : ''}}
          </span>
          <span>
            {{$content->where('placement', 'addressCountry')->first() != null ? $content->where('placement', 'addressCountry')->first()->content : ''}}
          </span>

          <a
            href="{{$content->where('placement', 'addressMap')->first() != null ? $content->where('placement', 'addressMap')->first()->content : ''}}"
            class="map">View map
          </a>
        </p>

        <h2 class="contact-info-title spaced-top">
          contact
        </h2>
        <p class="contact-info">
          <span>
            {{$content->where('placement', 'contactText')->first() != null ? $content->where('placement', 'contactText')->first()->content : ''}}
          </span>

          <span class="spaced-top-mod"><b>
            {{$content->where('placement', 'contactName')->first() != null ? $content->where('placement', 'contactName')->first()->content : ''}}
          </b></span>

          <span>
            {{$content->where('placement', 'contactTitle')->first() != null ? $content->where('placement', 'contactTitle')->first()->content : ''}}
          </span>

          <span>
            <a
              href="{{$content->where('placement', 'contactEmail')->first() != null ? $content->where('placement', 'contactEmail')->first()->content : ''}}"
              class="mailto">
              {{$content->where('placement', 'contactEmail')->first() != null ? $content->where('placement', 'contactEmail')->first()->content : ''}}
            </a>
          </span>
          <span>
            {{$content->where('placement', 'contactPhone')->first() != null ? $content->where('placement', 'contactPhone')->first()->content : ''}}
          </span>
          <span>
            {{$content->where('placement', 'contactDirect')->first() != null ? $content->where('placement', 'contactDirect')->first()->content : ''}}
          </span>
        </p>
      </div>
    </div>
    <div id="submitMsg" class="col-xs-10 col-md-6 col-lg-4 alert mx-auto mt-5">
      <i class="fa fa-spinner fa-spin" style="font-size:48px;color:black;"></i>
    </div>
  </div>
@endsection
