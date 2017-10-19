<!DOCTYPE html>
<html
  prefix="mo: http://purl.org/ontology/mo/
	dc: http://purl.org/dc/elements/1.1/
	xsd: http://www.w3.org/2001/XMLSchema#
	tl: http://purl.org/NET/c4dm/timeline.owl#
	event: http://purl.org/NET/c4dm/event.owl#
	foaf: http://xmlns.com/foaf/0.1/
	rdfs: http://www.w3.org/2000/01/rdf-schema#">

<head>
	<title>Player</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/res/css/detached/cssDetached/reset.css">
	<link rel="stylesheet" type="text/css" href="/res/css/detached/cssDetached/media.css">
	<link rel="stylesheet" type="text/css" href="/res/css/detached/cssDetached/style.css">
	<link rel="stylesheet" type="text/css" href="/res/css/detached/cssDetached/player.css">
	<link rel="stylesheet" type="text/css" href="/res/css/detached/cssDetached/detached.css">
	<link rel="stylesheet" type="text/css" href="/res/css/slider.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/css/selectize.default.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body ng-app="detached" data-ng:controller="detachedController">
 <div class="page-bg">
 </div>


 	<div>

		<div class="flex_container">
			<div class="columnItemLogo">
				<img  src="{{$station->details->logo}}" alt="klymaxx" width="320px">
			</div>

		</div>
		<div class="flex_container">
			<div class="columnItem">
				<a href="#"><h1>{{ $station->name }}</h1></a>
				<p>@{{player.formatTime}}</p>
			</div>
		</div>

		 <!-- Audio Player -->
		 <audio id="audioPlayer" media-player="player" data-playlist="playlist" preload="none">
		 @foreach($streams->byStation($station->id) as $stream) 
			<source src="{{$stream->listenurl}}" type="{{$stream->type}}">
		 @endforeach 
		</audio>


		<div class="flex_container">
			<div class="columnButtons">
				<a href="#" class="round-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
			</div>
			<div class="columnButtons">
				<a href="#" class="round-button"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</div>
			<div class="columnButtons">
				<a href="#" class="round-button"><i class="fa fa-th-list" aria-hidden="true"></i></a>
			</div>
			<div class="columnButtons">
				<a href="#" class="round-button"><i class="fa fa-download" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="flex_container">
			<div class="columnButtons">
				<a href="#" class="roundVolume"><i class="fa fa-volume-down" aria-hidden="true"></i></a>
			</div>
			<!-- <div class="columnItem">
				<div id="progress">
				</div>
			</div> -->

			<!-- Range Slider -->
			<div range-slider min="0" max="100" model-max="volume.max" pin-handle="min">
			</div>

			<div class="columnButtons">
				<a href="#" class="roundVolume"><i class="fa fa-volume-up" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="flex_container">
			<div class="columnButtons">
				<a href="#"><i class="fa fa-repeat" aria-hidden="true"></i></a>
			</div>
			<div class="columnButtons">
				<a href="#" class="round-button"><i class="fa fa-step-backward" aria-hidden="true"></i></a>
			</div>
			<div class="columnButtons">
				<a href="#" class="round-button" ng-click="player.playPause()"><i class="fa" data-ng:class="{
					'fa-play': !player.playing,
					'fa-pause': player.playing,
					'fa-spinner fa-pulse': !player.playing && shouldPlay
				  }" aria-hidden="true"></i></a>
			</div>
			<div class="columnButtons">
				<a href="#" class="round-button"><i class="fa fa-step-forward" aria-hidden="true"></i></a>
			</div>
			<div class="columnButtons">
				<a href="#"><i class="fa fa-random" aria-hidden="true"></i></a>
			</div>
		</div>

	</div>




        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.3/angular-ui-router.min.js">
        </script>
        <script src="{{ asset('/res/js/detachedPlayer.js') }}"></script>
        <script src="{{ asset('/res/global/directives/mediaPlayer.js') }}"></script>
        <script src="{{ asset('/res/global/modules/ngStorage.js') }}"></script>
        <script src="{{ asset('/res/global/directives/rangeSlider.js') }}"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-sanitize.js"></script>

</body>
</html>