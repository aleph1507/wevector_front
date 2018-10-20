<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('admin.preview.partials._head')
  <body>
    @include('admin.preview.partials._navbar')

      <div class="container-fluid nop {{Request::is('howitworks') ? 'thick-pink-border-footer' : ''}}
                                            {{Request::is('preview') ? 'footer-bg' : ''}}
                                    {{Request::is('plans') ? 'thick-purple-border-footer' : ''}}
                                    {{Request::is('contact') ? 'thick-purple-border-footer' : ''}}">
        @yield('content')
        @include('admin.preview.partials._footer')
      </div>
    @include('partials._scripts')
  </body>
</html>
