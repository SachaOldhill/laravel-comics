<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Layout test</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    @include('components.header')
    <img class="jumbotron" src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">
    @yield('content')
    @include('components.footer')
  </body>
</html>
