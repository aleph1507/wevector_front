@extends('admin.preview.layouts.master')
@section('content')
  {{-- <div class="container-fluid footer-bg"> --}}
    <div class="row">
      <div class="section hero-section" id="hero-section">
        <h1>{{$content->where('placement', 's1h')->first() != null ? $content->where('placement', 's1h')->first()->content : ''}}</h1>
        <p class="short">
          {{$content->where('placement', 's1p')->first() != null ? $content->where('placement', 's1p')->first()->content : ''}}
        </p>
        </div>
    </div>

    <div class="row section grey-white-section">
      <!-- <div class="row"> -->
        <div class="col-lg-7 col-12 order-lg-1 mt-5 mt-lg-0 order-2">
          @if($content->where('placement', 's2i')->first() != null)
            <img
              src="{{asset('img/landing/' . $content->where('placement', 's2i')->first()->content)}}"
              class="img-fluid" alt="Motor" id="s2i">
          @else
            <img
              src="{{asset('img/landing/Motor.png')}}"
              class="img-fluid" alt="Motor" id="s2i">
          @endif
          {{-- <img src="{{asset('img/landing/Motor.png')}}" class="img-fluid" alt="Motor" id="motor-img"> --}}
        </div>

        <div class="col-lg-5 col-11 offset-lg-0 offset-1 order-lg-2 order-1 mt-5 mb-5 mt-lg-0 mb-lg-0 vcenter-flex">
          <h1>{{$content->where('placement', 's2h')->first() != null ? $content->where('placement', 's2h')->first()->content : ''}}</h1>
          <p class="short">
            {{$content->where('placement', 's2p')->first() != null ? $content->where('placement', 's2p')->first()->content : ''}}
          </p>
          </div>
      <!-- </div> -->
    </div>

    <div class="row section light-blue-white-section">
      <!-- <div class="row"> -->
        <div class="col-lg-5 offset-lg-1 col-11 offset-1 v-padded-top">
          <h1>{{$content->where('placement', 's3h')->first() != null ? $content->where('placement', 's3h')->first()->content : ''}}</h1>

          <p class="short">
            {{$content->where('placement', 's3p')->first() != null ? $content->where('placement', 's3p')->first()->content : ''}}
          </p>
        </div>

        <div class="col-lg-6 col-12 offset-lg-0 mt-5 mt-lg-0">
          @if($content->where('placement', 's3i')->first() != null)
            <img
              src="{{asset('img/landing/' . $content->where('placement', 's3i')->first()->content)}}"
              class="img-fluid" alt="iphone" id="s3i">
          @else
            <img
              src="{{asset('img/landing/simple-iphone-x-mockup-for-dribbble.png')}}"
              class="img-fluid" alt="iphone" id="s3i">
          @endif
          {{-- <img src="{{asset('img/landing/simple-iphone-x-mockup-for-dribbble.png')}}" class="img-fluid" alt="iphone"> --}}
        </div>
      <!-- </div> -->
    </div>

    <div class="row section pink-black-section">
      <!-- <div class="row"> -->
        <div class="col-10 offset-2 col-lg-3 offset-lg-2 order-2 order-lg-1 mt-lg-0 mt-5">
          @if($content->where('placement', 's4i')->first() != null)
            <img
              src="{{asset('img/landing/' . $content->where('placement', 's4i')->first()->content)}}"
              class="img-fluid" alt="finger" id="s4i">
          @else
            <img
              src="{{asset('img/landing/hand-pattern-01.png')}}"
              class="img-fluid" alt="finger" id="s4i">
          @endif
          {{-- <img src="{{asset('img/landing/hand-pattern-01.png')}}" class="img-fluid" alt="finger"> --}}
        </div>
        <div class="col-11 offset-1 col-lg-5 offset-lg-2 vcenter-flex order-1 order-lg-2 mt-lg-0 mt-5 v-top-padding-compensation">
          <h1>{{$content->where('placement', 's4h')->first() != null ? $content->where('placement', 's4h')->first()->content : ''}}</h1>

          <p class="short">
            {{$content->where('placement', 's4p')->first() != null ? $content->where('placement', 's4p')->first()->content : ''}}
          </p>
          </div>
      <!-- </div> -->
    </div>

    <div class="row section white-black-section">
      <div class="col-11 offset-1 col-lg-5 offset-lg-2 mt-lg-0 mt-5 vcenter-flex">
        <h1>{{$content->where('placement', 's5h')->first() != null ? $content->where('placement', 's5h')->first()->content : ''}}</h1>

        <p class="short">
          {{$content->where('placement', 's5p')->first() != null ? $content->where('placement', 's5p')->first()->content : ''}}
        </p>
      </div>

      <div class="col-12 col-lg-4 offset-lg-1 mt-lg-0 mt-5 mb-lg-0 mb-5 far-right-flex">
        @if($content->where('placement', 's5i')->first() != null)
          <img
            src="{{asset('img/landing/' . $content->where('placement', 's5i')->first()->content)}}"
            class="img-fluid" alt="cotton" id="s5i">
        @else
          <img
            src="{{asset('img/landing/layer-1.png')}}"
            class="img-fluid" alt="cotton" id="s5i">
        @endif
        {{-- <img src="{{asset('img/landing/layer-1.png')}}" class="img-fluid" alt="cotton" id="cotton"> --}}
      </div>
    </div>

    <div class="row section form-section text-center">
      <div class="col-12 text-center">
        <h1 class="text-center mx-auto" id="form-title">
          {{$content->where('placement', 's6h')->first() != null ? $content->where('placement', 's6h')->first()->content : ''}}
        </h1>
      </div>

      <div class="col-12 mx-auto">
        <p class="short mx-auto" id="form-p">
          {{$content->where('placement', 's6p')->first() != null ? $content->where('placement', 's6p')->first()->content : ''}}
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
