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
                      value="{{$content->where('placement', 's1h')->first()->content}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                      class="form-control" cols="30" rows="5"
                      data-type="text" data-page="landing" data-placement="s1p"
                >{{$content->where('placement', 's1p')->first()->content}}</textarea>
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
                value="{{$content->where('placement', 's2h')->first()->content}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                class="form-control" cols="30" rows="5"
                data-type="text" data-page="landing" data-placement="s2p"
                >{{$content->where('placement', 's2p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/landing/' . $content->where('placement', 's2i')->first()->content)}}" class="img-fluid" alt="Motor" id="s2i">
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
                        value="{{$content->where('placement', 's3h')->first()->content}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s3p"
                >{{$content->where('placement', 's3p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/landing/' . $content->where('placement', 's3i')->first()->content)}}" class="img-fluid" id="s3i" alt="iphone">
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
                value="{{$content->where('placement', 's4h')->first()->content}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s4p"
                >{{$content->where('placement', 's4p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/landing/' . $content->where('placement', 's4i')->first()->content)}}" class="img-fluid" id="s4i" alt="finger">
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
                  value="{{$content->where('placement', 's5h')->first()->content}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s5p"
                >{{$content->where('placement', 's5p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/landing/' . $content->where('placement', 's5i')->first()->content)}}" class="img-fluid" alt="cotton" id="s5i">
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
                  value="{{$content->where('placement', 's6h')->first()->content}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control"
                 cols="30" rows="5"
                 data-type="text" data-page="landing" data-placement="s6p"
                >{{$content->where('placement', 's6p')->first()->content}}</textarea>
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
