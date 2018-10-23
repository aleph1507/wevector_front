<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('partials._head')
  <body>
    @include('partials._navbar')

      <div class="container-fluid nop {{Request::is('howitworks') ? 'thick-pink-border-footer pl-0 pr-0' : ''}}
                                            {{Request::is('/') ? 'footer-bg' : ''}}
                                    {{Request::is('plans') ? 'thick-purple-border-footer pl-0 pr-0' : ''}}
                                    {{Request::is('contact') ? 'thick-purple-border-footer pl-0 pr-0' : ''}}">
        @yield('content')
        @include('partials._footer')
      </div>
    @include('partials._scripts')
  </body>
</html>
