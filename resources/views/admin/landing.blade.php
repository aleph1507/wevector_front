@extends('layouts.app')

@section('content')
  <div class="card-header">Dashboard - Landing page</div>
  <div class="card-body">
    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Section 1</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text"
                      name="landing-head-title" class="form-control section-title"
                      data-type="text" data-page="landing" data-placement="s1h"
                      value="we do one thing well">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                      class="form-control" cols="30" rows="5"
                      data-type="text" data-page="landing" data-placement="s1p"
                >We transform raster graphics into beautiful, pixel perfect vector artworks. Through considered aesthetic and a firm understanding of your business objectives.</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Section 2</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text"
                name="landing-head-title" class="form-control section-title"
                data-type="text" data-page="landing" data-placement="s2h"
                value="crafted with care">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                class="form-control" cols="30" rows="5"
                data-type="text" data-page="landing" data-placement="s2p"
                >Details matter. No matter how challanging they are, we create each and every one by hand. No automation, tracing, or magic potions.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section2/Motor.png')}}" class="img-fluid" alt="Motor" id="s2i">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" data-type="img" class="upload-input" name="upfile"
                        data-page="landing" data-placement="s2i">
                      <i class="fas fa-cloud-upload-alt"></i> Change image
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Section 3</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control section-title"
                        data-type="text" data-page="landing" data-placement="s3h"
                        value="perfect in any format">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s3p"
                >We take great pride in drawing each and every artwork by hand. For us this is the only way to achieve the quality we are known for.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section3/simple-iphone-x-mockup-for-dribbble.png')}}" class="img-fluid" id="s3i" alt="iphone">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input"
                        data-type="img" data-page="landing" data-placement="s3i"
                        name="upfile">
                      <i class="fas fa-cloud-upload-alt"></i> Change image
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Section 4</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control section-title"
                data-type="text" data-page="landing" data-placement="s4h"
                value="CUSTOMIZE EVERY DETAIL">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s4p"
                >Customize every aspect of your vector graphic while always staying pixel perfect. Resize. Change colour. Save in different format. We are with you every step of the way.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section4/hand-pattern-01.png')}}" class="img-fluid" id="s4i" alt="finger">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input"
                        data-type="img" data-page="landing" data-placement="s4i"
                        name="upfile">
                      <i class="fas fa-cloud-upload-alt"></i> Change image
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Section 5</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control section-title"
                  data-type="text" data-page="landing" data-placement="s5h"
                  value="YOUR DEDICATED TEAM">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s5p"
                >Based on years of experience, we aim to always provide personized, one-on-one experience.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section5/layer-1.png')}}" class="img-fluid" alt="cotton" id="s5i">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input"
                        data-type="img" data-page="landing" data-placement="s5i"
                        name="upfile">
                      <i class="fas fa-cloud-upload-alt"></i> Change image
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Section 6</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" data-type="text" name="landing-head-title" class="form-control section-title"
                  data-page="landing" data-placement="s6h"
                  value="HOW CAN WE HELP?">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control"
                 cols="30" rows="5"
                 data-type="text" data-page="landing" data-placement="s6p"
                >If you would you like to know more about our work and services, please get in touch with us. We're available 8.00 AM – 4:00 PM CET, Monday through Friday. We do our best to respond to each request with a personalized reply within few hours.</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <i class="far fa-share-square float-right mr-5 send" data-type="landing"> Save</i>

  </div>
@endsection
