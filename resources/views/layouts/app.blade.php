<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('pageTitle') | Comics</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
 
  @include("partials.headerBox")
  @include("partials.jumbotronBox")
  
  <div>
    @yield('main-content')
  </div>
  
  @include('partials.headerMain')
  @include("partials.footer")
  @include("partials.headerFooterBox")
  

</body>

</html>