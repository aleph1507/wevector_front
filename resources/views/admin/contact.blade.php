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
                Title: <input type="text" name="contact-head-title" class="form-control section-title" value="HOW CAN WE HELP?"
                  data-type="text" data-page="contact" data-placement="s1h">
              </div>
              <div class="form-group">
                Text: <textarea name="contact-page-text" id="contact-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="contact" data-placement="s1p"
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
                Title: <input type="text" name="contact-head-title" class="form-control section-title" value="ADDRESS"
                  data-type="text" data-page="contact" data-placement="addressTitle">
              </div>
              <div class="form-group">
                Street: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="Nikola Trimpare 33 1-4"
                  data-type="text" data-page="contact" data-placement="addressStreet">
              </div>
              <div class="form-group">
                Zip Code: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="1000"
                  data-type="text" data-page="contact" data-placement="addressZip">
              </div>
              <div class="form-group">
                City: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="Skopje"
                  data-type="text" data-page="contact" data-placement="addressCity">
              </div>
              <div class="form-group">
                Country: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="Macedonia"
                  data-type="text" data-page="contact" data-placement="addressCountry">
              </div>
              <div class="form-group">
                Map link: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="https://goo.gl/maps/Fm4eWESxceB2"
                  data-type="link" data-page="contact" data-placement="addressMap">
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
                Title: <input type="text" name="contact-head-title" class="form-control section-title" value="CONTACT"
                  data-type="text" data-page="contact" data-placement="contactTitle">
              </div>
              <div class="form-group">
                Text: <textarea name="contact-page-text" id="contact-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="contact" data-placement="contactText"
                >Please get in touch and let’s have a talk about your challenges.</textarea>
              </div>
              <div class="form-group">
                Name: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="Sasha Jacimic"
                  data-type="text" data-page="contact" data-placement="contactName">
              </div>
              <div class="form-group">
                Email: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="sj@wevector.io"
                  data-type="link" data-page="contact" data-placement="contactEmail">
              </div>
              <div class="form-group">
                Office phone: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value="+389 2310 7005"
                  data-type="text" data-page="contact" data-placement="contactPhone">
              </div>
              <div class="form-group">
                Direct Line: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control" value=" + 389 70 344 130"
                  data-type="text" data-page="contact" data-placement="contactDirect">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <i class="far fa-share-square float-right mr-5 send" data-type="contact"> Save</i>

  </div>

@endsection
