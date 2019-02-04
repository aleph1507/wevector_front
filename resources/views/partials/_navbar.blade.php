<nav id="navbar" class="navbar navbar-expand">
  <a href="{{Request::is('/') ? '#' : "/"}}"
    class="brand" id="brand">
    <img src="{{asset('img/navbar/wevector.png')}}" alt="WeVector" class="img-fluid">
  </a>
  {{--<div class="navbar-collapse collapse">--}}
  {{--<div class="collapse navbar-collapse pl-auto" id="navbarSupportedContent">--}}
      {{--@if($m1 != null)--}}
        {{--<a href="{{route($m1 != null ? $m1->page : '#')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">--}}
          {{--{{$m1 != null ? $m1->content : ''}}--}}
        {{--</a>--}}
      {{--@endif--}}
      {{--@if($m2 != null)--}}
        {{--<a href="{{route($m2 != null ? $m2->page : '#')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">--}}
          {{--{{$m2 != null ? $m2->content : ''}}--}}
        {{--</a>--}}
      {{--@endif--}}
      {{--@if($m3 != null)--}}
        {{--<a href="{{route($m3 != null ? $m3->page : '#')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">--}}
          {{--{{$m3 != null ? $m3->content : ''}}--}}
        {{--</a>--}}
      {{--@endif--}}

      {{-- <a href="{{route('howitworks')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">how it works</a>
      <a href="{{route('plans')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">packages</a>
      <a href="{{route('contact')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">contact</a> --}}
      <a class="nav-button d-flex" href="{{route('contact')}}" id="contact-nav-link" style="color:black; border: 2px solid black;">
        contact us
      </a>
  {{--</div>--}}
  {{--<a class="btn btn-lg" href="{{route('contact')}}" id="contact-nav-link" style="color:black; border: 2px solid black;">--}}
      {{--contact us--}}
  {{--</a>--}}

  {{--<a href="javascript:void(0);"--}}
    {{--class="icon nav-link navbar-toggler" data-target="#navbarSupportedContent"--}}
    {{--style="{{Request::is('/') ? : 'color:black'}}"--}}
    {{--onclick="mobile_menu()">--}}
    {{--<i class="fa fa-bars"></i>--}}
  {{--</a>--}}
</nav>
