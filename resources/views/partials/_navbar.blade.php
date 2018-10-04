<div id="navbar" class="navbar">
  <a class="brand" id="brand">
    <img src="{{asset('img/navbar/wevector.png')}}" alt="WeVector" class="img-fluid">
  </a>
  <a href="{{route('howitworks')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">how it works</a>
  <a href="{{route('plans')}}" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">packages</a>
  <a href="#" class="nav-link" style="{{Request::is('/') ? : 'color:black'}}">contact</a>
  <a class="nav-button" id="contact-nav-link" style="{{Request::is('/') ? : 'color:black; border: 2px solid black;'}}">
    hire us
  </a>
  <a href="javascript:void(0);"
    class="icon nav-link"
    style="{{Request::is('/') ? : 'color:black'}}"
    onclick="mobile_menu()">
    <i class="fa fa-bars"></i>
  </a>
</div>
