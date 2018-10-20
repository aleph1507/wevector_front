<div id="navbar" class="navbar">
  <a href="{{Request::is('/') ? '#' : route('preview')}}"
    class="brand" id="brand">
    <img src="{{asset('img/navbar/wevector.png')}}" alt="WeVector" class="img-fluid">
  </a>
  @if($m1 != null)
    <a href="{{route('preview', ['page' => $m1 != null ? $m1->page : '#'])}}" class="nav-link" style="{{Request::is('preview') ? : 'color:black'}}">
      {{$m1 != null ? $m1->content : ''}}
    </a>
  @endif
  @if($m2 != null)
    <a href="{{route('preview', ['page' => $m2 != null ? $m2->page : '#'])}}" class="nav-link" style="{{Request::is('preview') ? : 'color:black'}}">
      {{$m2 != null ? $m2->content : ''}}
    </a>
  @endif
  @if($m3 != null)
    <a href="{{route('preview', ['page' => $m3 != null ? $m3->page : '#'])}}" class="nav-link" style="{{Request::is('preview') ? : 'color:black'}}">
      {{$m3 != null ? $m3->content : ''}}
    </a>
  @endif
  <a class="nav-button" id="contact-nav-link" style="{{Request::is('preview') ? : 'color:black; border: 2px solid black;'}}">
    hire us
  </a>
  <a href="javascript:void(0);"
    class="icon nav-link"
    style="{{Request::is('preview/') ? : 'color:black'}}"
    onclick="mobile_menu()">
    <i class="fa fa-bars"></i>
  </a>
</div>
