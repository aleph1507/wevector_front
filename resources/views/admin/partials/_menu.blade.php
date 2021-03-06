<div class="card-body">
  <div class="mt-4">

    {{-- <div class="form-group mt-5 ml-0 mb-5">
      Menu font color: <input type="color" name="menufontcolor"
        value="{{$content->where('placement', 'menu')->first() != null ? $content->where('placement', 'menu')->first()->content : '#ffffff'}}"
        data-type="menu" data-page="menu" data-placement="menufontcolor">
    </div> --}}

    Menu item <input disabled type="text" class="send-input" data-type="menu" data-page="howitworks"
      value="{{$content->where('page', 'howitworks')->first() != null ? $content->where('page', 'howitworks')->first()->content : ''}}" id="howitworks">
      linking to <a class="disabled" href="{{--route('howitworks')--}}">How it works</a>, at position
    <select disabled name="menu_index_select" class="send-input" data-type="menu" data-page="howitworks" id="menu-placement1">
      <option value="1"
        {{$content->where('page', 'howitworks')->first() != null ? ($content->where('page', 'howitworks')->first()->placement == 1 ? 'selected' : '') : ''}}>1</option>
      <option value="2"
        {{$content->where('page', 'howitworks')->first() != null ? $content->where('page', 'howitworks')->first()->placement == 2 ? 'selected' : '' : ''}}>2</option>
      <option value="3"
        {{$content->where('page', 'howitworks')->first() != null ? $content->where('page', 'howitworks')->first()->placement == 3 ? 'selected' : '' : ''}}>3</option>
      <option value="4"
        {{$content->where('page', 'howitworks')->first() != null ? $content->where('page', 'howitworks')->first()->placement == 4 ? 'selected' : '' : ''}}>4</option> --
    </select>
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input disabled type="text" class="send-input" data-type="menu" data-page="plans"
      value="{{$content->where('page', 'plans')->first() != null ? $content->where('page', 'plans')->first()->content : ''}}">
      linking to <a class="disabled" href="{{--route('plans')--}}">Plans</a>, at position
    <select disabled name="menu_index_select" class="send-input" data-type="menu" data-page="plans" id="menu_index_select">
      <option value="1"
        {{$content->where('page', 'plans')->first() != null ? $content->where('page', 'plans')->first()->placement == 1 ? 'selected' : '' : ''}}>1</option>
      <option value="2"
        {{$content->where('page', 'plans')->first() != null ? $content->where('page', 'plans')->first()->placement == 2 ? 'selected' : '' : ''}}>2</option>
      <option value="3"
        {{$content->where('page', 'plans')->first() != null ? $content->where('page', 'plans')->first()->placement == 3 ? 'selected' : '' : ''}}>3</option>
      <option value="4"
        {{$content->where('page', 'plans')->first() != null ? $content->where('page', 'plans')->first()->placement == 4 ? 'selected' : '' : ''}}>4</option>
    </select>
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input disabled type="text" class="send-input" data-type="menu" data-page="contact"
      value="{{$content->where('page', 'contact')->first() != null ? $content->where('page', 'contact')->first()->content : ''}}">
      linking to <a class="disabled" href="{{--route('contact')--}}">Contact</a>, at position
    <select disabled name="menu_index_select" class="send-input" data-type="menu" data-page="contact" id="menu_index_select">
      <option value="1"
        {{$content->where('page', 'contact')->first() != null ? $content->where('page', 'contact')->first()->placement == 1 ? 'selected' : '' : ''}}>1</option>
      <option value="2"
        {{$content->where('page', 'contact')->first() != null ? $content->where('page', 'contact')->first()->placement == 2 ? 'selected' : '' : ''}}>2</option>
      <option value="3"
        {{$content->where('page', 'contact')->first() != null ? $content->where('page', 'contact')->first()->placement == 3 ? 'selected' : '' : ''}}>3</option>
      <option value="4"
        {{$content->where('page', 'contact')->first() != null ? $content->where('page', 'contact')->first()->placement == 4 ? 'selected' : '' : ''}}>4</option>
    </select>
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input disabled type="text" class="send-input" data-type="menu" data-page="customers"
      value="{{$content->where('page', 'customers')->first() != null ? $content->where('page', 'customers')->first()->content : ''}}">
      linking to <a class="disabled" href="#">Customers</a>, at position
    <select disabled name="menu_index_select" class="send-input" data-type="menu" data-page="customers" id="menu_index_select">
      <option value="1"
        {{$content->where('page', 'customers')->first() != null ? $content->where('page', 'customers')->first()->placement == 1 ? 'selected' : '' : ''}}>1</option>
      <option value="2"
        {{$content->where('page', 'customers')->first() != null ? $content->where('page', 'customers')->first()->placement == 2 ? 'selected' : '' : ''}}>2</option>
      <option value="3"
        {{$content->where('page', 'customers')->first() != null ? $content->where('page', 'customers')->first()->placement == 3 ? 'selected' : '' : ''}}>3</option>
      <option value="4"
        {{$content->where('page', 'customers')->first() != null ? $content->where('page', 'customers')->first()->placement == 4 ? 'selected' : '' : ''}}>4</option>
    </select>
  </div>
  <hr>
  <i class="far fa-share-square float-right mr-5 send" data-type="menu"> Save</i>
</div>
