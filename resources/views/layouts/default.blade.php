<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','My Blog')</title>
     <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
   @include('layouts._header')
  <div class="container">
      <div class="col-md-10 col-md-offset-1">
          @include('shared._messages')
          @yield('content')
          @include('layouts._footer')
      </div>
  </div>
  </body>
</html>