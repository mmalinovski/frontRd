<!doctype html >
<html lang="{{ config('app.locale') }}"
  prefix="mo: http://purl.org/ontology/mo/
  dc: http://purl.org/dc/elements/1.1/
  xsd: http://www.w3.org/2001/XMLSchema#
  tl: http://purl.org/NET/c4dm/timeline.owl#
  event: http://purl.org/NET/c4dm/event.owl#
  foaf: http://xmlns.com/foaf/0.1/
  rdfs: http://www.w3.org/2000/01/rdf-schema#"
data-ng:controller="MainController" ng-app="radioApp" ng-cloak>
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
                "/res/css/search.css",
                "/res/css/slider.css",
                "/res/css/uiSelect.css",
                "/res/css/aboutForm.css"

            ])
        !!}

        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/css/selectize.default.css">
    <!-- S c r i p t s -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    </script>

        <title>
            {{ isset($station) ? $station->name : 'NextTuner' }}
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>

        @include('header')
        <section ui-view="Content">
            @yield('content')
        </section>
        @include('footer')
        @include('playerFixed')




        <script src="https://use.fontawesome.com/32c9731015.js"></script>
        </script>


        {!!
            Minify::javascript([
                "/res/js/angular_v_1_6_5.js",
                "/res/js/angular_ui_router_v_1_0_3.js",
                "/res/js/angularApp.js",
                "/res/js/routes.js",
                "/res/global/directives/semanticMeta.js",
                "/res/global/directives/pageTitle.js",
                "/res/global/directives/targetBlank.js",
                "/res/global/directives/mediaPlayer.js",
                "/res/global/modules/ngStorage.js",
                "/res/global/directives/rangeSlider.js",
                "/res/js/sanitize.js",
                "/res/js/uiSelect.js"
            ])
        !!}


       
        





    </body>
</html>
