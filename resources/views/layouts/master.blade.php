<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('partials._head')
  <body>
    @include('partials._navbar')

      <div class="container-fluid nop {{Request::is('howitworks') ? 'thick-pink-border-footer' : ''}}
                                            {{Request::is('/') ? 'footer-bg' : ''}}
                                    {{Request::is('plans') ? 'thick-purple-border-footer' : ''}}
                                    {{Request::is('contact') ? 'thick-purple-border-footer' : ''}}">
        @yield('content')
        @include('partials._footer')
      </div>
    @include('partials._scripts')
  </body>
</html>
