<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WeVector</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  {{-- <script src='https://www.google.com/recaptcha/api.js' async defer></script> --}}
  <style media="screen">
    .c-form-input::placeholder {
      color: {{$content->where('placement', 's6fontcolor')->first() != null ? $content->where('placement', 's6fontcolor')->first()->content : '#ffffff'}};
    }

    .c-form-input::-ms-input-placeholder {
      color: {{$content->where('placement', 's6fontcolor')->first() != null ? $content->where('placement', 's6fontcolor')->first()->content : '#ffffff'}};
    }

    .c-form-input:-ms-input-placeholder {
      color: {{$content->where('placement', 's6fontcolor')->first() != null ? $content->where('placement', 's6fontcolor')->first()->content : '#ffffff'}};
    }

    .c-form-textarea::placeholder {
      color: #f0386b;
    }

    .c-form-textarea::-ms-input-placeholder {
      color: #f0386b;
    }

    .c-form-textarea:-ms-input-placeholder {
      color: #f0386b;
    }
  </style>
    @include('partials/recaptcha')
</head>
