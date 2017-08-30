@extends('master')

@section('content')

<main>

	<section class="wrapper">
		<h1 class="headerStyle">
			{{ $station->name }}
		 Radio</h1>
		<div id="radioStation">
			<div id="stationColumn1">
				<a href="#" class="round-button favoriteHeart"><i class="fa fa-heart" aria-hidden="true"></i></a>
				<a href="#">
					<img src="{{ $station->details->logo }}" alt="radio">
				</a>
			</div>
			<div id="stationColumn2">
					<a href="#" class="round-button floatL"><i class="fa fa-pause" aria-hidden="true"></i></a>
					<p class="stationText">Pink Floyd - Another Brick In The Wall</p>
					<a href="#" class="addToFavorite"><i class="fa fa-heart-o" aria-hidden="true"><span> Add to favorites</span></i></a>
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
		<i class="fa fa-info-circle fa-2x" aria-hidden="true"><span>  About Knight Rock Radio 90.2</span></i>
		<p>{{ $station->details->info }} Visit <a href="#">website</a> for more info!</p>
				
	</section>

	<section class="wrapper">
		<h1 class="headerStyle">Related Stations</h1>
		<ul id="featuredStations" class="flex_container">
			<li>
				<a href="#">
					<img src="res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
					<span>Flash Back Rock</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="res/img/latest/ClasMusic.jpg" alt="klymaxx">
					<span>Flash Back Rock</span>
				</a>
			</li>
			<li>
				<button class="moreStations">Log In To See More</button>
			</li>
		</ul>

	</section>

	<section class="wrapper">
				<h1 class="headerStyle">Similar Stations</h1>
					<ul id="similarStations" class="flex_container">
						<li>
							<a href="#">
								<img src="res/img/latest/2059-p1-300X300.png" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#"> 
								<img src="res/img/latest/ClasMusic.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="res/img/latest/KLLG-GRAPHICnoglowSM-300x300.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="res/img/latest/unnamed.png" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>

					</ul>
					<div class="columnItem">
						<button class="moreStations">More Stations</button>
					</div>
			</section>

			<section class="wrapper">
				<h1 class="headerStyle">Recent Stations</h1>
				<ul id="featuredStations" class="flex_container">
					<li>
						<a href="#">
							<img src="res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
							<span>Flash Back Rock</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="res/img/latest/ClasMusic.jpg" alt="klymaxx">
							<span>Flash Back Rock</span>
						</a>
					</li>
					<li>
						<button class="moreStations">Log In To See More</button>
					</li>
				</ul>

			</section>
	</main>

@endsection