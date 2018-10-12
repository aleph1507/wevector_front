<div class="card-body">
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="howitworks" value="How it works" id="howitworks">
      linking to <a href="{{route('howitworks')}}">How it works</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="howitworks" id="menu-placement1">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select> {{--<i
              data-type="menu" data-page="howitworks"
              data-placement="1" data-content="How it works"
              data-placement-control="#menu-placement1"
              data-content-control="#howitworks"
              class="far fa-share-square send float-right mr-5 send"> Save</i>--}}
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="plans" value="Packages">
      linking to <a href="{{route('plans')}}">Plans</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="plans" id="menu_index_select">
      <option value="1">1</option>
      <option value="2" selected>2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select> {{--<i class="far fa-share-square send float-right mr-5 send"> Save</i>--}}
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="contact" value="Contact">
      linking to <a href="{{route('contact')}}">Contact</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="contact" id="menu_index_select">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3" selected>3</option>
      <option value="4">4</option>
    </select> {{--<i class="far fa-share-square send float-right mr-5 send"> Save</i>--}}
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="customers" value="Hire us">
      linking to <a href="#">Customers</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="customers" id="menu_index_select">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4" selected>4</option>
    </select> {{--<i class="far fa-share-square send float-right mr-5 send"> Save</i> --}}
  </div>
  <hr>
  <i class="far fa-share-square float-right mr-5 send" data-type="menu"> Save</i>
  {{-- <i class="far fa-share-square send float-right mr-3 send"> Publish</i> --}}
</div>
