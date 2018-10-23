<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('admin.preview.partials._head')
  <body>
    @include('admin.preview.partials._navbar')

      <div class="container-fluid nop {{Request::is('preview/howitworks') ? 'thick-pink-border-footer pl-0 pr-0' : ''}}
                                            {{Request::is('preview') ? 'footer-bg' : ''}}
                                    {{Request::is('preview/plans') ? 'thick-purple-border-footer pl-0 pr-0' : ''}}
                                    {{Request::is('preview/contact') ? 'thick-purple-border-footer pl-0 pr-0' : ''}}">
        @yield('content')
        @include('admin.preview.partials._footer')
      </div>
    @include('partials._scripts')
  </body>
</html>
