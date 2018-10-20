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
                Title: <input type="text" name="contact-head-title" class="form-control section-title"
                  value="{{$content->where('placement', 's1h')->first() != null ? $content->where('placement', 's1h')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="s1h">
              </div>
              <div class="form-group">
                Text: <textarea name="contact-page-text" id="contact-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="contact" data-placement="s1p"
                >{{$content->where('placement', 's1p')->first() != null ? $content->where('placement', 's1p')->first()->content : ''}}</textarea>
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
                Title: <input type="text" name="contact-head-title" class="form-control section-title"
                  value="{{$content->where('placement', 'addressTitle')->first() != null ? $content->where('placement', 'addressTitle')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="addressTitle">
              </div>
              <div class="form-group">
                Street: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'addressStreet')->first() != null ? $content->where('placement', 'addressStreet')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="addressStreet">
              </div>
              <div class="form-group">
                Zip Code: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'addressZip')->first() != null ? $content->where('placement', 'addressZip')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="addressZip">
              </div>
              <div class="form-group">
                City: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'addressCity')->first() != null ? $content->where('placement', 'addressCity')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="addressCity">
              </div>
              <div class="form-group">
                Country: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'addressCountry')->first() != null ? $content->where('placement', 'addressCountry')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="addressCountry">
              </div>
              <div class="form-group">
                Map link: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'addressMap')->first() != null ? $content->where('placement', 'addressMap')->first()->content : ''}}"
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
                Text: <textarea name="contact-page-text" id="contact-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="contact" data-placement="contactText"
                >{{$content->where('placement', 'contactText')->first() != null ? $content->where('placement', 'contactText')->first()->content : ''}}</textarea>
              </div>
              <div class="form-group">
                Contact Name: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'contactName')->first() != null ? $content->where('placement', 'contactName')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="contactName">
              </div>
              <div class="form-group">
                Contact Title: <input type="text" name="contact-head-title" class="form-control section-title"
                  value="{{$content->where('placement', 'contactTitle')->first() != null ? $content->where('placement', 'contactTitle')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="contactTitle">
              </div>
              <div class="form-group">
                Email: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'contactEmail')->first() != null ? $content->where('placement', 'contactEmail')->first()->content : ''}}"
                  data-type="link" data-page="contact" data-placement="contactEmail">
              </div>
              <div class="form-group">
                Office phone: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'contactPhone')->first() != null ? $content->where('placement', 'contactPhone')->first()->content : ''}}"
                  data-type="text" data-page="contact" data-placement="contactPhone">
              </div>
              <div class="form-group">
                Direct Line: <input type="text" name="contact-page-text" id="contact-page-text" class="form-control"
                  value="{{$content->where('placement', 'contactDirect')->first() != null ? $content->where('placement', 'contactDirect')->first()->content : ''}}"
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
