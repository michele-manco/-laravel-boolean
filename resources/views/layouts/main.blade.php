<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Careers</title>
    <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e23757acf7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>


  </head>
  <body>
    @include('layouts.menu')
    @yield('content')
    @include('layouts.footer')


  </body>
</html>
