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

  <div class="container-fluid interim-fluid">
    <div class="row">
      @for($i = 1; $i < 4; $i++)
        <div class="col-md-4">
          <div class="offer">
            <span class="plan-name">
              {{$content->where('placement', 'p' . $i . 'title')->first() != null ? $content->where('placement', 'p' . $i . 'title')->first()->content : ''}}
            </span>
            <h1 class="price"><sup class="dollar">$</sup>
              {{$content->where('placement', 'p' . $i . 'price')->first() != null ? $content->where('placement', 'p' . $i . 'price')->first()->content : ''}}
              <small>per artwork</small>
            </h1>
            <div class="desc">
              <p>
                {{$content->where('placement', 'p' . $i . 'timetable')->first() != null ? $content->where('placement', 'p' . $i . 'timetable')->first()->content : ''}}
              </p>
              <p>
                {{$content->where('placement', 'p' . $i . 'corrections')->first() != null ? $content->where('placement', 'p' . $i . 'corrections')->first()->content : ''}}
              </p>
              @if($content->where('placement', 'p' . $i . 'export')->first() !== null)
                <p>
                  {{$content->where('placement', 'p' . $i . 'export')->first() != null ? $content->where('placement', 'p' . $i . 'export')->first()->content : ''}}
                </p>
              @endif
              <p>
                {{$content->where('placement', 'p' . $i . 'support')->first() != null ? $content->where('placement', 'p' . $i . 'support')->first()->content : ''}}
              </p>

            </div>
            <div class="center">
              <button class="pink-button-lg">buy
                {{$content->where('placement', 'p' . $i . 'title')->first() != null ? $content->where('placement', 'p' . $i . 'title')->first()->content : ''}}
              </button>
            </div>
          </div>
        </div>
      @endfor

    </div>
  </div>

  <div class="container">
    <div class="row faq">
      @for($i = 1; $i <= 8; $i++)
        <div class="col-md-5 offset-md-1 qanda">
          <h2>
            {{$content->where('placement', 'faqq' . $i)->first() != null ? $content->where('placement', 'faqq' . $i)->first()->content : ''}}
          </h2>

          <p>
              {{$content->where('placement', 'faqa' . $i)->first() != null ? $content->where('placement', 'faqa' . $i)->first()->content : ''}}
          </p>
        </div>
      @endfor

    </div>
  </div>
@endsection
