@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')

<main data-ng:init="resetStations()"  page-title>
	<section class="wrapper" execute="addStation(station)" semantic-meta>

		<div class="googleAds">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Nextuner Responsive -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-2606840313857646"
			     data-ad-slot="5750088194"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<h1 class="headerStyle" titlePage>
			{{ ucfirst($station->name) }}
			
		</h1>
		<button class="moreStations btnMoreStations" id="reportStation" ng-click="showHideModal = true">Station not working? Click to Report!</button>

		<div id="radioStation">
			<div id="stationColumn1">
				<a href="#" class="round-button favoriteHeart"><i class="fa fa-heart" aria-hidden="true"></i></a>
				<a href="#">
					<img src="{{$station->logo}}" alt="radio" semantic-logo="src">
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

					<p semantic-name class="stationText" semantic-slug="{{ $station->slug }}">{{ ucfirst($station->name) }}</p>
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

			<div class="addPlace">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Nextuner Responsive -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-2606840313857646"
				     data-ad-slot="5750088194"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			
		</div>
		
	</section>

	<section id="aboutStation" class="">
		<i class="fa fa-info-circle fa-2x" aria-hidden="true"><span>  About {{$station->name}}</span></i>
		<p>{{$station->details->info}}</p>
		<p> Visit <a href="#">website</a> for more info!</p>
				
	</section>


	
	</main>
	<script>
		$("main").animate({ scrollTop: 0 }, 0);
	</script>

	
	<!-- ***************   M  O  D  A  L   *************** -->

	<div id="myModal" class="modal" ng-show="showHideModal">

		<!-- Modal content -->
		<div class="modal-content">
		 <span class="close" ng-click="showHideModal = false">&times;</span>
		 <h1 class="headerStyle" titlePage>Report Station</h1>

		 		<form method="post" name="reportForm" action="/reportStation.php" id="contactForm">
		 			<div class="messageForm">
		 				<input type="hidden" name="stationSlug" placeholder="{{ $station->slug }}" value="{{ $station->slug }}">
		 				<!-- <input type="text" name="name" placeholder="Full Name"> -->
		 				<!-- <input type="text" name="email" placeholder="E-mail"> -->
		 				<!-- <textarea class="textWidth" name="message" placeholder=" Your Message..."></textarea> -->
		 				<input type="radio" name="report" value="Stream doesn't want to start" checked> Stream doesn't want to start!<br>
		 				<input type="radio" name="report" value="Information about the radio isn't correct" > Information about the radio isn't correct!<br>
		 				<input type="radio" name="report" value="Station plays another station stream" > Station plays another station stream!<br>
		 				<input type="radio" name="report" value="This radio station is not avaliable in your country message" > This radio station is not avaliable in your country message!<br>
		 				<input type="radio" name="report" value="Station is streaming inappropriate content" > Station is streaming inappropriate content!<br>
		 			</div>
		 			<!-- <div class="g-recaptcha center-text" data-sitekey="6LfNfzYUAAAAAHx2aqRaesQschAPBUiChnZhFnU_" ></div> -->
		 			<input class="moreStations" type="submit" value="Send" name="submit">

		 		</form>
		</div>

	</div>





@endsection