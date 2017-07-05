<!doctype html>
<html lang="{{ config('app.locale') }}"
  prefix="mo: http://purl.org/ontology/mo/
  dc: http://purl.org/dc/elements/1.1/
  xsd: http://www.w3.org/2001/XMLSchema#
  tl: http://purl.org/NET/c4dm/timeline.owl#
  event: http://purl.org/NET/c4dm/event.owl#
  foaf: http://xmlns.com/foaf/0.1/
  rdfs: http://www.w3.org/2000/01/rdf-schema#"
>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- S T Y L E S -->
        <script src="https://use.fontawesome.com/32c9731015.js"></script>

        {!!
            Minify::stylesheet([
                "/res/css/reset.css",
                "/res/css/base.css",
                "/res/css/style.css",
                "/res/css/player.css",
                "/res/css/genres.css",
                "/res/css/stations.css",

            ])
        !!}


       <!--  
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/base.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/player.css">
        <link rel="stylesheet" type="text/css" href="css/genres.css">
        <link rel="stylesheet" type="text/css" href="css/stations.css"> -->


        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <!-- S c r i p t s -->
    <script src="http://kumanovonews.com/_assets/js/jquery-1.10.2.min.js"></script>
    <!-- <script type="text/javascript" src="res/js/zaheder.js"></script> -->

        <title>Player</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>

        <!-- <div>
            @if (Route::has('login'))
                <div>
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div> -->
        @include('header')
        @yield('content')
        @include('playerFixed')
        @include('footer')


    </body>
</html>