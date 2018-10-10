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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="we do one thing well">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="crafted with care">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >Details matter. No matter how challanging they are, we create each and every one by hand. No automation, tracing, or magic potions.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section2/Motor.png')}}" class="img-fluid" alt="Motor" id="motor-img">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile">
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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="perfect in any format">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >We take great pride in drawing each and every artwork by hand. For us this is the only way to achieve the quality we are known for.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section3/simple-iphone-x-mockup-for-dribbble.png')}}" class="img-fluid" alt="iphone">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile">
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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="CUSTOMIZE EVERY DETAIL">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >Customize every aspect of your vector graphic while always staying pixel perfect. Resize. Change colour. Save in different format. We are with you every step of the way.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section4/hand-pattern-01.png')}}" class="img-fluid" alt="finger">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile">
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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="YOUR DEDICATED TEAM">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >Based on years of experience, we aim to always provide personized, one-on-one experience.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/section5/layer-1.png')}}" class="img-fluid" alt="cotton" id="cotton">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile">
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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="HOW CAN WE HELP?">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >If you would you like to know more about our work and services, please get in touch with us. We're available 8.00 AM – 4:00 PM CET, Monday through Friday. We do our best to respond to each request with a personalized reply within few hours.</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Footer</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                <span class="mb-5">Column 1:</span>
                <div class="upload-btns mt-5">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <img src="{{asset('img/footer/we_vector_logo.svg')}}" alt="Logo" class="img-fluid" id="logo-img">
                    </div>
                    <div class="col-md-5 col-sm-12 form-group nlp">
                      <label class="btn btn-lg btn-outline-dark input-btn">
                        <input type="file" class="upload-input" name="upfile">
                        <i class="fas fa-cloud-upload-alt"></i> Change Logo
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <span class="mt-5 mb-2" style="display:block;">Column 2:</span>
                <div class="form-group">
                  Title: <input type="text" name="landing-head-title" class="form-control section-title" value="get in touch">
                </div>
                <div class="form-group">
                  Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                  >Would you like to hear more about our service and how we can help you? Please get in touch and let’s have a talk about your challenges.</textarea>
                </div>
                <div class="form-group">
                  Phone: <input type="text" name="landing-page-text" id="landing-page-text" class="form-control" value="Office +389 2310 7005">
                </div>
                <div class="form-group">
                  Mail: <input type="text" name="landing-page-text" id="landing-page-text" class="form-control" value="hello@wevector.io">
                </div>
              </div>

              <div class="form-group">
                <span class="mt-5 mb-2" style="display:block;">Column 3:</span>
                <div class="form-group">
                  Title: <input type="text" name="landing-head-title" class="form-control section-title" value="address">
                </div>
                <div class="form-group">
                  Line 1: <input type="text" class="form-control" value="Wevector">
                </div>
                <div class="form-group">
                  Line 2: <input type="text" class="form-control" value="Nikola Trimpare 33, 1-4 ">
                </div>
                <div class="form-group">
                  Line 3: <input type="text" class="form-control" value="1000 Skopje Macedonia">
                </div>
              </div>

              <div class="form-group">
                <span class="mt-5 mb-2" style="display:block;">Column 4:</span>
                <div class="form-group">
                  Facebook Link: <input type="text" class="form-control" value="http://www.facebook.com">
                </div>
                <div class="form-group">
                  Linkedin Link: <input type="text" class="form-control" value="http://www.linkedin.com">
                </div>
                <div class="form-group">
                  Pinterest Link: <input type="text" class="form-control" value="http://www.pinterest.com">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
