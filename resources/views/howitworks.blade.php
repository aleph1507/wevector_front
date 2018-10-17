@extends('layouts.master')

@section('content')
  {{-- <div class="container-fluid thick-pink-border"> --}}
    <div class="container">
      <div class="row">
        <div class="section2 head-section rect section-cb">
          <h1 class="text-center"><span class="br-span">we made</span>  things simple for you</h1>
          <p class="text-center large-spaced-p">
            In order to provide you with a tailor-made service that is both aethetic and profitable,
            we always start by carefully defining your wishes, conditions and goals. Bellow is our 4-step process.
          </p>
        </div>
      </div>
      <div class="s1">
        <div class="row flex-row s1row">
          <div class="col-md-4 text-center half-column">
            <img src="{{asset('img/howitworks/group-5.svg')}}" alt="" class="img-fluid">
            <div class="text text-left pulled-header">
              <span class="step">step one</span>
              <h2>Determine your needs</h2>
              <p>Determine how many raster graphics you would like to vectorize and how fast you would like them back. Leave the rest to us.</p>
            </div>
          </div>
          <div class="col-md-4 offset-md-3 text-center half-column">
            <img src="{{asset('img/howitworks/group-6.svg')}}" alt="" class="img-fluid">
            <div class="text text-left">
              <span class="step">step two</span>
              <h2>Select a plan that suits your goals </h2>
              <p>We offer three monthly plans that allow for 15 vector artworks over a period of one month.
                Where they differ is in how fast you would like the vector artworks to be available.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="s1 mt-sec">
        <div class="row flex-row s1row">
          <div class="col-md-4 text-center half-column">
            <img src="{{asset('img/howitworks/group-4.svg')}}" alt="" class="img-fluid">
            <div class="text text-left">
              <span class="step">step three</span>
              <h2>Prepare your  raster graphics </h2>
              <p>Your final vector artworks will be as good as the raster graphics you provide us with. We recommend you spend a few minutes to select the best quality you have.</p>
            </div>
          </div>
          <div class="col-md-4 offset-md-3 text-center half-column">
            <img src="{{asset('img/howitworks/group-2.svg')}}" alt="" class="img-fluid">
            <div class="text text-left">
              <span class="step">step four</span>
              <h2>Share your raster graphics with us</h2>
              <p >The only thing left is to tell us of any specific needs & share your graphics with us. We’ll collaborate over Dropbox, where you’ll have full access to your files.</p>
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
