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
                      value="{{$content->where('placement', 's1h')->first() != null ? $content->where('placement', 's1h')->first()->content : ''}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                      class="form-control" cols="30" rows="5"
                      data-type="text" data-page="landing" data-placement="s1p"
                >{{$content->where('placement', 's1p')->first() != null ? $content->where('placement', 's1p')->first()->content : ''}}</textarea>
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Background color for this section: <input type="color" name="s1color"
                  value="{{$content->where('placement', 's1bgcolor')->first() != null ? $content->where('placement', 's1bgcolor')->first()->content : '#15053a'}}"
                  data-type="text" data-page="landing" data-placement="s1bgcolor">
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Font color for this section: <input type="color" name="s1fontcolor"
                  value="{{$content->where('placement', 's1fontcolor')->first() != null ? $content->where('placement', 's1fontcolor')->first()->content : '#ffffff'}}"
                  data-type="text" data-page="landing" data-placement="s1fontcolor">
              </div>

              <div class="form-group">
                <div class="upload-btns">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      @if($content->where('placement', 's2ibg')->first() != null)
                        <img
                          src="{{asset('img/landing/' . $content->where('placement', 's2ibg')->first()->content)}}"
                          class="img-fluid" alt="Group-210" id="s2ibg">
                      @else
                        <img
                          src="{{asset('img/landing/Motor.png')}}"
                          class="img-fluid" alt="Group-210" id="s2ibg">
                      @endif
                    </div>
                    <div class="col-md-5 col-sm-12 form-group nlp">
                      <label class="btn btn-lg btn-outline-dark input-btn">
                        <input type="file" data-type="img" class="upload-input" name="upfile"
                          data-page="landing" data-placement="s2ibg">
                        <i class="fas fa-cloud-upload-alt"></i> Change background image
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group mb-5">
                <input type="checkbox" name="shows2bgi"
                  data-type="toggleBtn" data-page="landing"
                  data-placement="shows2bgi"
                  value="shows2bgi" id="shows2bgi"
                  {{$content->where('placement', 'shows2bgi')->first() != null ?
                    $content->where('placement', 'shows2bgi')->first()->content == '1' ? 'checked' : '' : ''}}
                  > Show the background image of this section
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
                value="{{$content->where('placement', 's2h')->first() != null ? $content->where('placement', 's2h')->first()->content : ''}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                class="form-control" cols="30" rows="5"
                data-type="text" data-page="landing" data-placement="s2p"
                >{{$content->where('placement', 's2p')->first() != null ? $content->where('placement', 's2p')->first()->content : ''}}</textarea>
              </div>

              <div class="form-group">
                Button text: <input type="text"
                  value="{{$content->where('placement', 's2b')->first() != null ? $content->where('placement', 's2b')->first()->content : ''}}"
                  class="form-control"
                  data-type="text" data-page="landing" data-placement="s2b">
              </div>

              <div class="form-group">
                Button url: <input type="text"
                  value="{{$content->where('placement', 's2burl')->first() != null ? $content->where('placement', 's2burl')->first()->content : ''}}"
                  class="form-control"
                  data-type="link" data-page="landing" data-placement="s2burl">
              </div>

              <div class="form-group mb-5">
                <input type="checkbox" name="shows2b"
                  data-type="toggleBtn" data-page="landing"
                  data-placement="shows2b"
                  value="shows2b" id="shows2b"
                  {{$content->where('placement', 'shows2b')->first() != null ?
                    $content->where('placement', 'shows2b')->first()->content == '1' ? 'checked' : '' : ''}}
                  > Show button in this section
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Background color for this section: <input type="color" name="s2color"
                  value="{{$content->where('placement', 's2bgcolor')->first() != null ? $content->where('placement', 's2bgcolor')->first()->content : '#464646'}}"
                  data-type="text" data-page="landing" data-placement="s2bgcolor">
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Font color for this section: <input type="color" name="s2fontcolor"
                  value="{{$content->where('placement', 's2fontcolor')->first() != null ? $content->where('placement', 's2fontcolor')->first()->content : '#ffffff'}}"
                  data-type="text" data-page="landing" data-placement="s2fontcolor">
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    @if($content->where('placement', 's2i')->first() != null)
                      <img
                        src="{{asset('img/landing/' . $content->where('placement', 's2i')->first()->content)}}"
                        class="img-fluid" alt="Motor" id="s2i">
                    @else
                      <img
                        src="{{asset('img/landing/Motor.png')}}"
                        class="img-fluid" alt="Motor" id="s2i">
                    @endif
                    {{-- <img
                      src="{{asset('img/landing/' . $content->where('placement', 's2i')->first()->content : 'Motor.png'))}}"
                      class="img-fluid" alt="Motor" id="s2i"> --}}
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
                        value="{{$content->where('placement', 's3h')->first() != null ? $content->where('placement', 's3h')->first()->content : ''}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s3p"
                >{{$content->where('placement', 's3p')->first() != null ? $content->where('placement', 's3p')->first()->content : ''}}</textarea>
              </div>

              <div class="form-group">
                Button text: <input type="text"
                  value="{{$content->where('placement', 's3b')->first() != null ? $content->where('placement', 's3b')->first()->content : ''}}"
                  class="form-control"
                  data-type="text" data-page="landing" data-placement="s3b">
              </div>

              <div class="form-group">
                Button url: <input type="text"
                  value="{{$content->where('placement', 's3burl')->first() != null ? $content->where('placement', 's3burl')->first()->content : ''}}"
                  class="form-control"
                  data-type="link" data-page="landing" data-placement="s3burl">
              </div>

              <div class="form-group mb-5">
                <input type="checkbox" name="shows3b"
                  data-type="toggleBtn" data-page="landing"
                  data-placement="shows3b"
                  value="shows3b" id="shows3b"
                  {{$content->where('placement', 'shows3b')->first() != null ?
                    $content->where('placement', 'shows3b')->first()->content == '1' ? 'checked' : '' : ''}}
                  > Show button in this section
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Background color for this section: <input type="color" name="s3color"
                  value="{{$content->where('placement', 's3bgcolor')->first() != null ? $content->where('placement', 's3bgcolor')->first()->content : '#a9d7d5'}}"
                  data-type="text" data-page="landing" data-placement="s3bgcolor">
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Font color for this section: <input type="color" name="s3fontcolor"
                  value="{{$content->where('placement', 's3fontcolor')->first() != null ? $content->where('placement', 's3fontcolor')->first()->content : '#ffffff'}}"
                  data-type="text" data-page="landing" data-placement="s3fontcolor">
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    @if($content->where('placement', 's3i')->first() != null)
                      <img
                        src="{{asset('img/landing/' . $content->where('placement', 's3i')->first()->content)}}"
                        class="img-fluid" alt="iphone" id="s3i">
                    @else
                      <img
                        src="{{asset('img/landing/simple-iphone-x-mockup-for-dribbble.png')}}"
                        class="img-fluid" alt="iphone" id="s3i">
                    @endif
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
                value="{{$content->where('placement', 's4h')->first() != null ? $content->where('placement', 's4h')->first()->content : ''}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s4p"
                >{{$content->where('placement', 's4p')->first() != null ? $content->where('placement', 's4p')->first()->content : ''}}</textarea>
              </div>

              <div class="form-group">
                Button text: <input type="text"
                  value="{{$content->where('placement', 's4b')->first() != null ? $content->where('placement', 's4b')->first()->content : ''}}"
                  class="form-control"
                  data-type="text" data-page="landing" data-placement="s4b">
              </div>

              <div class="form-group">
                Button url: <input type="text"
                  value="{{$content->where('placement', 's4burl')->first() != null ? $content->where('placement', 's4burl')->first()->content : ''}}"
                  class="form-control"
                  data-type="link" data-page="landing" data-placement="s4burl">
              </div>

              <div class="form-group mb-5">
                <input type="checkbox" name="shows4b"
                  data-type="toggleBtn" data-page="landing"
                  data-placement="shows4b"
                  value="shows4b" id="shows4b"
                  {{$content->where('placement', 'shows4b')->first() != null ?
                    $content->where('placement', 'shows4b')->first()->content == '1' ? 'checked' : '' : ''}}
                  > Show button in this section
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Background color for this section: <input type="color" name="s4color"
                  value="{{$content->where('placement', 's4bgcolor')->first() != null ? $content->where('placement', 's4bgcolor')->first()->content : '#fddfdf'}}"
                  data-type="text" data-page="landing" data-placement="s4bgcolor">
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Font color for this section: <input type="color" name="s4fontcolor"
                  value="{{$content->where('placement', 's4fontcolor')->first() != null ? $content->where('placement', 's4fontcolor')->first()->content : '#000000'}}"
                  data-type="text" data-page="landing" data-placement="s4fontcolor">
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    @if($content->where('placement', 's4i')->first() != null)
                      <img
                        src="{{asset('img/landing/' . $content->where('placement', 's4i')->first()->content)}}"
                        class="img-fluid" alt="finger" id="s4i">
                    @else
                      <img
                        src="{{asset('img/landing/hand-pattern-01.png')}}"
                        class="img-fluid" alt="finger" id="s4i">
                    @endif
                    {{-- <img src="{{asset('img/landing/' . $content->where('placement', 's4i')->first() != null ? $content->where('placement', 's4i')->first()->content : 'hand-pattern-01.png')}}"
                     class="img-fluid" id="s4i" alt="finger"> --}}
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
                  value="{{$content->where('placement', 's5h')->first() != null ? $content->where('placement', 's5h')->first()->content : ''}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text"
                  class="form-control" cols="30" rows="5"
                  data-type="text" data-page="landing" data-placement="s5p"
                >{{$content->where('placement', 's5p')->first() != null ? $content->where('placement', 's5p')->first()->content : ''}}</textarea>
              </div>

              <div class="form-group">
                Button text: <input type="text"
                  value="{{$content->where('placement', 's5b')->first() != null ? $content->where('placement', 's5b')->first()->content : ''}}"
                  class="form-control"
                  data-type="text" data-page="landing" data-placement="s5b">
              </div>

              <div class="form-group">
                Button url: <input type="text"
                  value="{{$content->where('placement', 's5burl')->first() != null ? $content->where('placement', 's5burl')->first()->content : ''}}"
                  class="form-control"
                  data-type="link" data-page="landing" data-placement="s5burl">
              </div>

              <div class="form-group mb-5">
                <input type="checkbox" name="shows5b" value="shows5b"
                  data-placement="shows5b"
                  data-type="toggleBtn" data-page="landing" id="shows5b"
                  {{$content->where('placement', 'shows5b')->first() != null ?
                    $content->where('placement', 'shows5b')->first()->content == '1' ? 'checked' : '' : ''}}
                  > Show button in this section
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Background color for this section: <input type="color" name="s5color"
                  value="{{$content->where('placement', 's5bgcolor')->first() != null ? $content->where('placement', 's5bgcolor')->first()->content : '#ffffff'}}"
                  data-type="text" data-page="landing" data-placement="s5bgcolor">
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Font color for this section: <input type="color" name="s5fontcolor"
                  value="{{$content->where('placement', 's5fontcolor')->first() != null ? $content->where('placement', 's5fontcolor')->first()->content : '#000000'}}"
                  data-type="text" data-page="landing" data-placement="s5fontcolor">
              </div>

              <div class="upload-btns">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    @if($content->where('placement', 's5i')->first() != null)
                      <img
                        src="{{asset('img/landing/' . $content->where('placement', 's5i')->first()->content)}}"
                        class="img-fluid" alt="cotton" id="s5i">
                    @else
                      <img
                        src="{{asset('img/landing/layer-1.png')}}"
                        class="img-fluid" alt="cotton" id="s5i">
                    @endif
                    {{-- <img src="{{asset('img/landing/' . $content->where('placement', 's5i')->first() != null ? $content->where('placement', 's5i')->first()->content : 'layer-1.png')}}"
                     class="img-fluid" alt="cotton" id="s5i"> --}}
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
                  value="{{$content->where('placement', 's6h')->first() != null ? $content->where('placement', 's6h')->first()->content : ''}}">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="landing-page-text" class="form-control"
                 cols="30" rows="5"
                 data-type="text" data-page="landing" data-placement="s6p"
                >{{$content->where('placement', 's6p')->first() != null ? $content->where('placement', 's6p')->first()->content : ''}}</textarea>
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Background color for this section: <input type="color" name="s6color"
                  value="{{$content->where('placement', 's6bgcolor')->first() != null ? $content->where('placement', 's6bgcolor')->first()->content : '#15053a'}}"
                  data-type="text" data-page="landing" data-placement="s6bgcolor">
              </div>

              <div class="form-group mt-5 ml-0 mb-5">
                Font color for this section: <input type="color" name="s6fontcolor"
                  value="{{$content->where('placement', 's6fontcolor')->first() != null ? $content->where('placement', 's6fontcolor')->first()->content : '#ffffff'}}"
                  data-type="text" data-page="landing" data-placement="s6fontcolor">
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
