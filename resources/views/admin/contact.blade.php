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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="HOW CAN WE HELP?">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >If you would you like to know more about our work and services, please get in touch with us. We're available 8.00 AM – 4:00 PM CET, Monday through Friday. We do our best to respond to each request with a personalized reply within a few hours.</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Address</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="ADDRESS">
              </div>
              <div class="form-group">
                Street: <input type="text" name="landing-page-text" id="landing-page-text" class="form-control" value="Nikola Trimpare 33 1-4">
              </div>
              <div class="form-group">
                Zip Code: <input name="landing-page-text" id="landing-page-text" class="form-control" value="1000">
              </div>
              <div class="form-group">
                City: <input name="landing-page-text" id="landing-page-text" class="form-control" value="Skopje">
              </div>
              <div class="form-group">
                Country: <input name="landing-page-text" id="landing-page-text" class="form-control" value="Macedonia">
              </div>
              <div class="form-group">
                Map link: <input name="landing-page-text" id="landing-page-text" class="form-control" value="https://goo.gl/maps/Fm4eWESxceB2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Contact</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="CONTACT">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >Please get in touch and let’s have a talk about your challenges.</textarea>
              </div>
              <div class="form-group">
                Name: <input name="landing-page-text" id="landing-page-text" class="form-control" value="Sasha Jacimic">
              </div>
              <div class="form-group">
                Email: <input name="landing-page-text" id="landing-page-text" class="form-control" value="sj@wevector.io">
              </div>
              <div class="form-group">
                Office phone: <input name="landing-page-text" id="landing-page-text" class="form-control" value="+389 2310 7005">
              </div>
              <div class="form-group">
                Direct Line: <input name="landing-page-text" id="landing-page-text" class="form-control" value=" + 389 70 344 130">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
