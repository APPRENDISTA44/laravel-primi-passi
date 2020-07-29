<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
  </head>
  <body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="{{  asset('js/app.js') }}">

    </script>
  </body>
</html>
