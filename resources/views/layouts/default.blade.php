<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','My Blog')</title>
     <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
   @include('layouts._header')
  <div class="container">
      <div>
          @yield('content')
          @include('layouts._footer')
      </div>
  </div>
  </body>
</html>