<!DOCTYPE>
<html>
<head>
    <html lang="{{ app()->getLocale() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href='{{ URL::asset('css/accueil.css') }}'>
 <!--   <link rel="stylesheet" type="text/css" href='{{ URL::asset('css/login.css') }}'>
    <link rel="stylesheet" type="text/css" href='{{ URL::asset('css/liste.css') }}'>
    -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    
    
    
   <script src="js/script.js"></script>
    <title>@yield('title')</title>
</head>
<body>
<header>
    @include('layout.baseHeader')
    		
</header>
   <main>
     @yield('content')
   
  </main>
  <footer>
     @yield('footer')
  </footer>
</body>
</html>

