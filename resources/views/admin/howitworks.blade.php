@extends('layouts.app')

@section('content')

  <div class="card-header">Dashboard - How it works page</div>
  <div class="card-body">
    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Head Section</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                 {{-- value="we made things simple for you" --}}
                 <?pp var_dump($content); die(); ?>
                Title: <input type="text" name="howitworks-head-title" class="form-control section-title" value="{{$content->where('placement', 's1h')->first()->content}}"
                  data-type="text" data-page="howitworks" data-placement="s1h">
              </div>
              <div class="form-group">
                Text: <textarea name="howitworks-page-text" id="howitworks-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="howitworks" data-placement="s1p"
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
          <div class="card-header"><h2>Step 1</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="howitworks-head-title" class="form-control step-title" value="{{$content->where('placement', 's2h')->first()->content}}"
                  data-type="text" data-page="howitworks" data-placement="s2h">
              </div>
              <div class="form-group">
                Text: <textarea name="howitworks-page-text" id="howitworks-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="howitworks" data-placement="s2p"
                >{{$content->where('placement', 's2p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/' . $content->where('placement', 's2i')->first()->content)}}" alt="" class="img-fluid" id="s2i">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile"
                        data-type="img" data-page="howitworks" data-placement="s2i">
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
          <div class="card-header"><h2>Step 2</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="howitworks-head-title" class="form-control step-title" value="{{$content->where('placement', 's3h')->first()->content}} "
                  data-type="text" data-page="howitworks" data-placement="s3h">
              </div>
              <div class="form-group">
                Text: <textarea name="howitworks-page-text" id="howitworks-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="howitworks" data-placement="s3p"
                >{{$content->where('placement', 's3p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/' . $content->where('placement', 's3i')->first()->content)}}" alt="" class="img-fluid" id="s3i">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile"
                        data-type="img" data-page="howitworks" data-placement="s3i">
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
          <div class="card-header"><h2>Step 3</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="howitworks-head-title" class="form-control step-title" value="{{$content->where('placement', 's4h')->first()->content}}"
                  data-type="text" data-page="howitworks" data-placement="s4h">
              </div>
              <div class="form-group">
                Text: <textarea name="howitworks-page-text" id="howitworks-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="howitworks" data-placement="s4p"
                >{{$content->where('placement', 's4p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/' . $content->where('placement', 's4i')->first()->content)}}" alt="" class="img-fluid" id="s4i">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile"
                        data-type="text" data-page="howitworks" data-placement="s4i">
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
          <div class="card-header"><h2>Step 4</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="howitworks-head-title" class="form-control step-title" value="{{$content->where('placement', 's5h')->first()->content}} "
                  data-type="text" data-page="howitworks" data-placement="s5h">
              </div>
              <div class="form-group">
                Text: <textarea name="howitworks-page-text" id="howitworks-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="howitworks" data-placement="s5p"
                >{{$content->where('placement', 's5p')->first()->content}}</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/' . $content->where('placement', 's5i')->first()->content)}}" alt="" class="img-fluid" id="s5i">
                  </div>
                  <div class="col-md-5 col-sm-12 form-group nlp">
                    <label class="btn btn-lg btn-outline-dark input-btn">
                      <input type="file" class="upload-input" name="upfile"
                        data-type="img" data-page="howitworks" data-placement="s5i">
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

    <hr>
    <i class="far fa-share-square float-right mr-5 send" data-type="howitworks"> Save</i>

  </div>

@endsection
