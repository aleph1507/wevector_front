@extends('admin.preview.layouts.master')

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

      {{-- <div class="col-md-4">
        <div class="offer">
          <span class="plan-name">standard</span>
          <h1 class="price"><sup class="dollar">$</sup>20<small>per artwork</small></h1>
          <div class="desc">
            <p>Completed within 48 hours</p>
            <p>Two corrections</p>
            <p>Export in different file formats</p>
            <p>Email support</p>

          </div>
          <div class="center">
            <button class="pink-button-lg">buy standard</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="offer">
          <span class="plan-name">basic</span>
          <h1 class="price"><sup class="dollar">$</sup>10<small>per artwork</small></h1>
          <div class="desc">
            <p>Completed within 72 hours</p>
            <p>One correction</p>
            <p>Email support</p>

          </div>
          <div class="center">
            <button class="pink-button-lg">buy basic</button>
          </div>
        </div>
      </div> --}}

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

      {{-- <div class="col-md-5 offset-md-2 qanda">
        <h2>can i switch plans?</h2>

        <p>
            At the moment you cannot switch between plans.
        </p>
      </div>

      <div class="col-md-5 qanda">
        <h2>do you offer annual plans?</h2>

        <p>
            Yes. We have many years of experience with clients that have a continuous need to vector artworks.
            Annual plans benefit from dedicated teams and offer higher level of flexibility.
            Contact our customer service at hello@wevector.io to hear how we can help you.
        </p>
      </div>

      <div class="col-md-5 offset-md-2 qanda">
        <h2>can you complete more then 15 vector artworks?</h2>

        <p>
            Yes. If you need a higher volume of vector artworks, we would like you to send us an email at hello@wevector.io.
            Our customer service will create a custom plan to suit your needs.
        </p>
      </div>

      <div class="col-md-5 qanda">
        <h2>what is meant by correction?</h2>

        <p>
          Once your vector artwork is available for review, depending on your plan, you are able to modify:

          - colours
          - orientation (portrait or landscape)
          - size of artwork elements
          - position of elements
        </p>
      </div>

      <div class="col-md-5 offset-md-2 qanda">
        <h2>Where can i find my vector artworks?</h2>

        <p>
            Once you purchase one of our plans, you will get access to your dedicated space on Dropbox.
            Everything will be stored there for your convenience.
        </p>
      </div>

      <div class="col-md-5 qanda">
        <h2>do you work on weekends?</h2>

        <p>
          No. Weekends are reserved for fun, family &amp; friends.
          Vector artwork requests received outside of business hours will be completed next business day.
        </p>
      </div>

      <div class="col-md-5 offset-md-2 qanda">
        <h2>What is dedicated online support?</h2>

        <p>
            Dedicated online support provides unlimited access to our customer service in order to ensure you reach your goals as fast as possible.
            Dedicated online support is only available during business hours.
        </p>
      </div> --}}
    </div>
  </div>
@endsection
