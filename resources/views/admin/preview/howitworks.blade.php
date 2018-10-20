@extends('admin.preview.layouts.master')

@section('content')
  {{-- <div class="container-fluid thick-pink-border"> --}}
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
      <div class="s1">
        <div class="row flex-row s1row">
          <div class="col-md-4 text-center half-column">
            @if($content->where('placement', 's2i')->first() != null)
              <img
                src="{{asset('img/howitworks/' . $content->where('placement', 's2i')->first()->content)}}"
                class="img-fluid" alt="" id="s2i">
            @else
              <img
                src="{{asset('img/howitworks/group-5.svg')}}"
                class="img-fluid" alt="" id="s2i">
            @endif
            {{-- <img src="{{asset('img/howitworks/group-5.svg')}}" alt="" class="img-fluid"> --}}
            <div class="text text-left pulled-header">
              <span class="step">step one</span>
              <h2>
                {{$content->where('placement', 's2h')->first() != null ? $content->where('placement', 's2h')->first()->content : ''}}
              </h2>
              <p>
                {{$content->where('placement', 's2p')->first() != null ? $content->where('placement', 's2p')->first()->content : ''}}
              </p>
            </div>
          </div>
          <div class="col-md-4 offset-md-3 text-center half-column">
            @if($content->where('placement', 's3i')->first() != null)
              <img
                src="{{asset('img/howitworks/' . $content->where('placement', 's3i')->first()->content)}}"
                class="img-fluid" alt="" id="s3i">
            @else
              <img
                src="{{asset('img/howitworks/group-6.svg')}}"
                class="img-fluid" alt="" id="s3i">
            @endif
            {{-- <img src="{{asset('img/howitworks/group-6.svg')}}" alt="" class="img-fluid"> --}}
            <div class="text text-left">
              <span class="step">step two</span>
              <h2>
                {{$content->where('placement', 's3h')->first() != null ? $content->where('placement', 's3h')->first()->content : ''}} 
              </h2>
              <p>
                {{$content->where('placement', 's3p')->first() != null ? $content->where('placement', 's3p')->first()->content : ''}}
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="s1 mt-sec">
        <div class="row flex-row s1row">
          <div class="col-md-4 text-center half-column">
            @if($content->where('placement', 's4i')->first() != null)
              <img
                src="{{asset('img/howitworks/' . $content->where('placement', 's4i')->first()->content)}}"
                class="img-fluid" alt="" id="s4i">
            @else
              <img
                src="{{asset('img/howitworks/group-4.svg')}}"
                class="img-fluid" alt="" id="s4i">
            @endif
            {{-- <img src="{{asset('img/howitworks/group-4.svg')}}" alt="" class="img-fluid"> --}}
            <div class="text text-left">
              <span class="step">step three</span>
              <h2>
                {{$content->where('placement', 's4h')->first() != null ? $content->where('placement', 's4h')->first()->content : ''}} 
              </h2>
              <p>
                {{$content->where('placement', 's4p')->first() != null ? $content->where('placement', 's4p')->first()->content : ''}}
              </p>
            </div>
          </div>

          <div class="col-md-4 offset-md-3 text-center half-column">
            @if($content->where('placement', 's5i')->first() != null)
              <img
                src="{{asset('img/howitworks/' . $content->where('placement', 's5i')->first()->content)}}"
                class="img-fluid" alt="" id="s5i">
            @else
              <img
                src="{{asset('img/howitworks/group-2.svg')}}"
                class="img-fluid" alt="" id="s5i">
            @endif
            {{-- <img src="{{asset('img/howitworks/group-2.svg')}}" alt="" class="img-fluid"> --}}
            <div class="text text-left">
              <span class="step">step four</span>
              <h2>
                {{$content->where('placement', 's5h')->first() != null ? $content->where('placement', 's5h')->first()->content : ''}} 
              </h2>
              <p>
                {{$content->where('placement', 's5p')->first() != null ? $content->where('placement', 's5p')->first()->content : ''}}
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="next-btn">
        <div class="row flex-row-center">
          <button class="pink-button-lg">select a plan</button>
        </div>
      </div>
    </div>
  {{-- </div> --}}
@endsection
