@extends('layouts.app')

@section('content')

  <div class="card-header">Dashboard - Packages page</div>
  <div class="card-body">
    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Head Section</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="packages-head-title" class="form-control section-title" value="{{$content->where('placement', 's1h')->first()->content}}"
                  data-type="text" data-page="packages" data-placement="s1h">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="packages" data-placement="s1p"
                >{{$content->where('placement', 's1p')->first()->content}}</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @for($i = 1; $i < 4; $i++)
      <div class="mt-4">
        <div class="admin-section">
          <div class="card">
            <div class="card-header"><h2>Package: {{$i}} - {{$content->where('placement', 'p' . $i . 'title')->first()->content}}</h2></div>
            <div class="card-body">
              <div class="mt-4">
                <div class="form-group">
                  Title: <input type="text" name="packages-head-title" class="form-control section-title"
                    value="{{$content->where('placement', 'p' . $i . 'title')->first()->content}}"
                    data-type="text" data-page="packages" data-placement="{{'p' . $i . 'title'}}">
                </div>
                <div class="form-group">
                  Price (in USD): <input type="text" name="landing-page-text" id="packages-page-text" class="form-control"
                    value="{{$content->where('placement', 'p' . $i . 'price')->first()->content}}"
                    data-type="text" data-page="packages" data-placement="{{'p' . $i . 'price'}}">
                </div>
                <div class="form-group">
                  Timetable: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control"
                    value="{{$content->where('placement', 'p' . $i . 'timetable')->first()->content}}"
                    data-type="text" data-page="packages" data-placement="{{'p' . $i . 'timetable'}}">
                </div>
                <div class="form-group">
                  Corrections: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control"
                    value="{{$content->where('placement', 'p' . $i . 'corrections')->first()->content}}"
                    data-type="text" data-page="packages" data-placement="{{'p' . $i . 'corrections'}}">
                </div>
                @if($content->where('placement', 'p' . $i . 'export')->first() !== null)
                  <div class="form-group">
                    Export: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control"
                      value="{{$content->where('placement', 'p' . $i . 'export')->first()->content}}"
                      data-type="text" data-page="packages" data-placement="{{'p' . $i . 'export'}}">
                  </div>
                @endif
                <div class="form-group">
                  Support: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control"
                    value="{{$content->where('placement', 'p' . $i . 'support')->first()->content}}"
                    data-type="text" data-page="packages" data-placement="{{'p' . $i . 'support'}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endfor

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>FAQ</h2></div>
          <div class="card-body">
            <div class="mt-4">

              @for($i = 1; $i <= 8; $i++)
                <div class="form-group">
                  <div class="form-group">
                    Question: <input type="text" name="packages-head-title" class="form-control section-title" value="{{$content->where('placement', 'faqq' . $i)->first()->content}}"
                      data-type="text" data-page="packages" data-placement="{{'faqq' . $i}}">
                  </div>
                  <div class="form-group">
                    Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                      data-type="text" data-page="packages" data-placement="{{'faqa' . $i}}"
                    >{{$content->where('placement', 'faqa' . $i)->first()->content}}</textarea>
                  </div>
                </div>
              @endfor

            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <i class="far fa-share-square float-right mr-5 send" data-type="packages"> Save</i>

  </div>

@endsection
