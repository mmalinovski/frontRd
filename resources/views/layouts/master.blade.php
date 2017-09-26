<!doctype html >
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
        {!!
            Minify::stylesheet([
                "/res/css/reset.css",
                "/res/css/base.css",
                "/res/css/style.css",
                "/res/css/player.css",
                "/res/css/genres.css",
                "/res/css/stations.css",
                "/res/css/slider.css"

            ])
        !!}

        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <!-- S c r i p t s -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="http://kumanovonews.com/_assets/js/jquery-1.10.2.min.js"></script> -->
    <!-- <script type="text/javascript" src="res/js/zaheder.js"></script> -->

        <title>Player</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body data-ng:controller="MainController" ng-app="radioApp" ng-cloak>

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
        <section ui-view="Content">
            @yield('content')
        </section>
        @include('footer')
        @include('playerFixed')


        <script src="https://use.fontawesome.com/32c9731015.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
        <script src="//unpkg.com/angular-ui-router/release/angular-ui-router.min.js"></script>
        <script src="{{ asset('/res/js/angularApp.js') }}"></script>
        <script src="{{ asset('/res/js/routes.js') }}"></script>
        <script src="{{ asset('/res/global/directives/semanticMeta.js') }}"></script>
        <script src="{{ asset('/res/global/directives/mediaPlayer.js') }}"></script>
        <script src="{{ asset('/res/global/modules/ngStorage.js') }}"></script>
        <script src="{{ asset('/res/global/directives/rangeSlider.js') }}"></script>





    </body>
</html>
