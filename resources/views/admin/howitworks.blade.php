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
                Title: <input type="text" name="landing-head-title" class="form-control section-title" value="we made things simple for you">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >In order to provide you with a tailor-made service that is both aethetic and profitable, we always start by carefully defining your wishes, conditions and goals. Bellow is our 4-step process.</textarea>
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
                Title: <input type="text" name="landing-head-title" class="form-control step-title" value="Determine your needs">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >Determine how many raster graphics you would like to vectorize and how fast you would like them back. Leave the rest to us.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/section1/group-5.svg')}}" alt="" class="img-fluid">
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
          <div class="card-header"><h2>Step 2</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control step-title" value="Select a plan that suits your goals ">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >We offer three monthly plans that allow for 15 vector artworks over a period of one month. Where they differ is in how fast you would like the vector artworks to be available.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/section1/group-6.svg')}}" alt="" class="img-fluid">
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
          <div class="card-header"><h2>Step 3</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control step-title" value="Prepare your  raster graphics ">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >Your final vector artworks will be as good as the raster graphics you provide us with. We recommend you spend a few minutes to select the best quality you have.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/section1/group-4.svg')}}" alt="" class="img-fluid">
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
          <div class="card-header"><h2>Step 4</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="landing-head-title" class="form-control step-title" value="Share your raster graphics with us ">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control" cols="30" rows="5"
                >The only thing left is to tell us of any specific needs & share your graphics with us. We’ll collaborate over Dropbox, where you’ll have full access to your files.</textarea>
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/howitworks/section1/group-2.svg')}}" alt="" class="img-fluid">
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

  </div>

@endsection
