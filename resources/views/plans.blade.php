@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="section2 head-section rect section-cb">
        <h1 class="text-center">OUR PLANS. SIMPLE.</h1>
        <p class="text-center large-spaced-p">
          We offer three plans that allow for 15 vector artworks over a period of 30 days.
          Where they differ is in how fast you would like the vector artworks to be available.
        </p>
      </div>
    </div>
  </div>

  <div class="container-fluid interim-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="offer">
          <span class="plan-name">rush</span>
          <h1 class="price"><sup class="dollar">$</sup>30<small>per artwork</small></h1>
          <div class="desc">
            <p>Completed within 24 hours</p>
            <p>Two corrections</p>
            <p>Export in different file formats</p>
            <p>Dedicated online support</p>

          </div>
          <div class="center">
            <button class="pink-button-lg">buy rush</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
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
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row faq">
      <div class="col-md-5 qanda">
        <h2>how long are your plans?</h2>

        <p>
            Wevector plans are valid for 30 days or 15 artworks from the moment they are purchased.
            You are free to choose when and how many vector artworks you need over that period of time.
        </p>
      </div>

      <div class="col-md-5 offset-md-2 qanda">
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
      </div>
    </div>
  </div>
@endsection
