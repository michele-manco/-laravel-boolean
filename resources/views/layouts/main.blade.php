<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Careers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/scss/bootstrap.scss')}}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

  </head>
  <body>
    @include('layouts.menu')
    @yield('content')


  </body>
</html>
