<div class="card-body">
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="howitworks" value="{{$content->where('page', 'howitworks')->first()->content}}" id="howitworks">
      linking to <a href="{{route('howitworks')}}">How it works</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="howitworks" id="menu-placement1">
      <option value="1" {{$content->where('page', 'howitworks')->first()->placement == 1 ? 'selected' : ''}}>1</option>
      <option value="2" {{$content->where('page', 'howitworks')->first()->placement == 2 ? 'selected' : ''}}>2</option>
      <option value="3" {{$content->where('page', 'howitworks')->first()->placement == 3 ? 'selected' : ''}}>3</option>
      <option value="4" {{$content->where('page', 'howitworks')->first()->placement == 4 ? 'selected' : ''}}>4</option>
    </select>
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="plans" value="{{$content->where('page', 'plans')->first()->content}}">
      linking to <a href="{{route('plans')}}">Plans</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="plans" id="menu_index_select">
      <option value="1" {{$content->where('page', 'plans')->first()->placement == 1 ? 'selected' : ''}}>1</option>
      <option value="2" {{$content->where('page', 'plans')->first()->placement == 2 ? 'selected' : ''}}>2</option>
      <option value="3" {{$content->where('page', 'plans')->first()->placement == 3 ? 'selected' : ''}}>3</option>
      <option value="4" {{$content->where('page', 'plans')->first()->placement == 4 ? 'selected' : ''}}>4</option>
    </select>
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="contact" value="{{$content->where('page', 'contact')->first()->content}}">
      linking to <a href="{{route('contact')}}">Contact</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="contact" id="menu_index_select">
      <option value="1" {{$content->where('page', 'contact')->first()->placement == 1 ? 'selected' : ''}}>1</option>
      <option value="2" {{$content->where('page', 'contact')->first()->placement == 2 ? 'selected' : ''}}>2</option>
      <option value="3" {{$content->where('page', 'contact')->first()->placement == 3 ? 'selected' : ''}}>3</option>
      <option value="4" {{$content->where('page', 'contact')->first()->placement == 4 ? 'selected' : ''}}>4</option>
    </select>
  </div>
  <hr>
  <div class="mt-4">
    Menu item <input type="text" class="send-input" data-type="menu" data-page="customers" value="{{$content->where('page', 'customers')->first()->content}}">
      linking to <a href="#">Customers</a>, at position
    <select name="menu_index_select" class="send-input" data-type="menu" data-page="customers" id="menu_index_select">
      <option value="1" {{$content->where('page', 'customers')->first()->placement == 1 ? 'selected' : ''}}>1</option>
      <option value="2" {{$content->where('page', 'customers')->first()->placement == 2 ? 'selected' : ''}}>2</option>
      <option value="3" {{$content->where('page', 'customers')->first()->placement == 3 ? 'selected' : ''}}>3</option>
      <option value="4" {{$content->where('page', 'customers')->first()->placement == 4 ? 'selected' : ''}}>4</option>
    </select>
  </div>
  <hr>
  <i class="far fa-share-square float-right mr-5 send" data-type="menu"> Save</i>
</div>
