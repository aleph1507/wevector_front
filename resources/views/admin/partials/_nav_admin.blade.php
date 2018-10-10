@if(Auth::check())
  <div class="card vmenu-admin">
      <div class="card-header">
        Hello, {{Auth::user()->name}}
      </div>
      <div class="card-body">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="{{route('admin')}}" class="{{Request::is('admin') ? 'nav-link active-vma' : 'nav-link'}}">Menu</a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin_landing')}}" class="{{Request::is('admin/landing') ? 'nav-link active-vma' : 'nav-link'}}">Landing Page</a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin_howitworks')}}" class="{{Request::is('admin/howitworks') ? 'nav-link active-vma' : 'nav-link'}}">How it works</a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin_packages')}}" class="{{Request::is('admin/packages') ? 'nav-link active-vma' : 'nav-link'}}">Packages</a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin_contact')}}" class="{{Request::is('admin/contact') ? 'nav-link active-vma' : 'nav-link'}}">Contact</a>
        </li>
        <li class="nav-item">
          <a href="#" class="{{Request::is('admin/hireus') ? 'nav-link active-vma' : 'nav-link'}}">Hire Us</a>
        </li>
      </ul>
    </div>
  </div>
@endif
