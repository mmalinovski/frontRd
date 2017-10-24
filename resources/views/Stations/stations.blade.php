@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')

<main data-ng:init="resetStations()"  page-title>
	<section class="wrapper" execute="addStation(station)" semantic-meta>
		<h1 class="headerStyle" titlePage>
			{{ $station->name }} Radio
		</h1>
		<div id="radioStation">
			<div id="stationColumn1">
				<a href="#" class="round-button favoriteHeart"><i class="fa fa-heart" aria-hidden="true"></i></a>
				<a href="#">
					<img src="{{$station->details->logo}}" alt="radio" semantic-logo="src">
				</a>
			</div>
			<div id="stationColumn2">


				 <!-- Audio Player -->
						 <audio id="audioPlayer" preload="none">
						 @foreach($streams->byStation($station->id) as $stream) 
							<source semantic-src="src" src="{{$stream->listenurl}}" semantic-type="type" type="{{$stream->type}}">
							
						 @endforeach 
						</audio>

					<button id="playButton" ng-click="setStation(0)" class="round-button floatL"><i class="fa" 
						data-ng:class="{
								'fa-pause': player.playing && (currentStation.slug == '{{$station->slug }}'),
								'fa-spinner fa-pulse': !player.playing && (currentStation.slug == '{{$station->slug }}') && shouldPlay,
								'fa-play': (currentStation.slug != '{{$station->slug }}') || (!player.playing && (currentStation.slug == '{{$station->slug }}') && !shouldPlay)
							}"
						aria-hidden="true"></i></button>

					<p semantic-name class="stationText" semantic-slug="{{ $station->slug }}">{{ $station->name }}</p>
					<!-- <a href="#" class="addToFavorite"><i class="fa fa-heart-o" aria-hidden="true"><span> Add to favorites</span></i></a> -->
					<div class="socialMediaButtonsForStations">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google"></a>
					</div>
					<div class="mobileApps">
						<a href="#">
							<img src="/res/img/mobile/android.png" alt="android" width="150" height="50">
						</a>
						<a href="#">
							<img src="/res/img/mobile/ios.png" alt="android" width="150" height="50">
						</a>
					</div>
			</div>
		</div>
		
	</section>

	<section id="aboutStation" class="wrapper">
		<i class="fa fa-info-circle fa-2x" aria-hidden="true"><span>  About {{$station->name}}</span></i>
		<p>{{$station->details->info}}</p>
		<p> Visit <a href="#">website</a> for more info!</p>
				
	</section>

	
	</main>
	<script>
		$("main").animate({ scrollTop: 0 }, 0);
	</script>

@endsection