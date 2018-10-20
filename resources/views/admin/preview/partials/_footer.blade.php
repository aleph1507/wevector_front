<div class="container-fluid footer-bg">
  <div class="container spaced-top-mod">
    <div class="row section footer" id="footer">
      <div class="col-12 col-md-6 col-lg-3 mx-auto mt-lg-0 mt-5 mb-lg-0 mb-5">
        @if($footer->where('placement', 'fi1')->first() != null)
          <img
            src="{{asset('img/footer/' . $footer->where('placement', 'fi1')->first()->content)}}"
            class="img-fluid" alt="Logo" id="fi1">
        @else
          <img
            src="{{asset('img/footer/we_vector_logo.svg')}}"
            class="img-fluid" alt="Logo" id="fi1">
        @endif
        {{-- <img src="{{asset('img/footer/we_vector_logo.svg')}}" alt="Logo" class="img-fluid" id="logo-img"> --}}
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <h3 class="footer-heading">
          {{$footer->where('placement', 'fc2h1')->first() != null ? $footer->where('placement', 'fc2h1')->first()->content : ''}}
        </h3>

        <p class="footer-p">
          {{$footer->where('placement', 'fc2p1')->first() != null ? $footer->where('placement', 'fc2p1')->first()->content : ''}}
          <br><br>
          {{$footer->where('placement', 'fc2phone1')->first() != null ? $footer->where('placement', 'fc2phone1')->first()->content : ''}}
          {{$footer->where('placement', 'fc2mail1')->first() != null ? $footer->where('placement', 'fc2mail1')->first()->content : ''}}
        </p>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <h3 class="footer-heading">
          {{$footer->where('placement', 'fc3h1')->first() != null ? $footer->where('placement', 'fc3h1')->first()->content : ''}}
        </h3>

        <p class="footer-p">
          <span>
            {{$footer->where('placement', 'fc2l1')->first() != null ? $footer->where('placement', 'fc2l1')->first()->content : ''}}
          </span>
          <span>
            {{$footer->where('placement', 'fc2l2')->first() != null ? $footer->where('placement', 'fc2l2')->first()->content : ''}}
          </span>
          <span>
            {{$footer->where('placement', 'fc2l3')->first() != null ? $footer->where('placement', 'fc2l3')->first()->content : ''}}
          </span>
        </p>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <h3 class="footer-heading">stay updated</h3>
        <div id="social-div" class="social-div mt-lg-0 mt-4">
          <a
            href="{{$footer->where('placement', 'fc4link1')->first() != null ? $footer->where('placement', 'fc4link1')->first()->content : ''}}">
            <img src="{{asset('img/footer/logo-facebook.png')}}" alt="facebook" class="social-img">
          </a>
          <a href="{{$footer->where('placement', 'fc4link2')->first() != null ? $footer->where('placement', 'fc4link2')->first()->content : ''}}">
            <img src="{{asset('img/footer/logo-linkedin.png')}}" alt="linkedin" class="social-img">
          </a>
          <a href="{{$footer->where('placement', 'fc2link3')->first() != null ? $footer->where('placement', 'fc2link3')->first()->content : ''}}">
            <img src="{{asset('img/footer/logo-pinterest.png')}}" alt="pinterest" class="social-img">
          </a>
        </div>
      </div>
      <div class="col-12">
        <div class="footer-hr"></div>
        <p class="txt-copyright">© Copyright Wevector 2018</p>
      </div>
    </div>
  </div>
</div>
