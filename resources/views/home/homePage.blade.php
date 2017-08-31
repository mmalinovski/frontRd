@extends('layouts.master')

@section('content')

<main>

	<section class="header">
		<div class="nadHeder">
				<h1>Wellcome to Live Radio</h1>
			</div>


			<!-- S E A R C H -->
			
		<form id="searchbox" action="">
			<input id="search" type="text" placeholder="Type here">
			<input id="submit" type="submit" value="Search">
		</form>
			<div class="podHeder">
				<h1>A radio network made for you and your taste with more than 1 000 000 stations included!</h1>
			</div>
	</section>

				<!-- F e a t u r e d   S t a t i o n s -->
			<section class="wrapper">
				<h1 class="headerStyle">Featured Stations</h1>
					<ul id="featuredStations" class="flex_container">
						<li>
							<a href="#">
								<img src="/res/img/latest/2059-p1-300X300.png" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#"> 
								<img src="/res/img/latest/ClasMusic.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/KLLG-GRAPHICnoglowSM-300x300.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/unnamed.png" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/unnamed.png" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/2059-p1-300X300.png" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/KLLG-GRAPHICnoglowSM-300x300.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/res/img/latest/ClasMusic.jpg" alt="klymaxx">
								<span>Flash Back Rock</span>
							</a>
						</li>

					</ul>
					<div class="columnItem">
						<button class="moreStations">More Stations</button>
					</div>
			</section>



			<!-- E d i t o r s   P i c k -->

			<section class="wrapper">
				<h1 class="headerStyle">Editors Picks</h1>
			</section>
			<div class="grid">
				<a href="#" class="box g1">
					<img src="/res/img/latest/ClasMusic.jpg" alt="klymaxx">
				</a>
			  <a href="#" class="box g2">
					<img src="/res/img/latest/KLLG-GRAPHICnoglowSM-300x300.jpg" alt="klymaxx">
				</a>
			  <a href="#" class="box g3">
					<img src="/res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
				</a>
			  <a href="#" class="box g4">
					<img src="/res/img/latest/2059-p1-300X300.png" alt="klymaxx">
				</a>
			  <a href="#" class="box g5">
					<img src="/res/img/latest/unnamed.png" alt="klymaxx">
				</a>
				<a href="#" class="box g6">
					<img src="/res/img/latest/ClasMusic.jpg" alt="klymaxx">
				</a>
				<a href="#" class="box g7">
					<img src="/res/img/latest/KLLG-GRAPHICnoglowSM-300x300.jpg" alt="klymaxx">
				</a>
			</div>
			<div class="columnItem">
				<button class="moreStations">More Radios</button>
			</div>



			<!-- M o s t   P o p u l a r -->


			<section class="wrapper">
				<h1 class="headerStyle">Most Popular</h1>
				<ul id="mostPopular" class="flex_container">
					<li>
						<a href="#">
							<img src="/res/img/latest/2059-p1-300X300.png" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/ClasMusic.jpg" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/KLLG-GRAPHICnoglowSM-300x300.jpg" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/unnamed.png" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/unnamed.png" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/2059-p1-300X300.png" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/KLLG-GRAPHICnoglowSM-300x300.jpg" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/Run-a-radio-station-off-of-your-PC-300x300.jpg" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="/res/img/latest/ClasMusic.jpg" alt="klymaxx">
							<span class="currentTrack">
								<span>Amazing Smooth and jazz</span>
								<span>Igor Gerzina</span>
							</span>
						</a>
					</li>
				</ul>
				<div class="columnItem">
					<button class="moreStations">More Radios</button>
				</div>
			</section>	


			<!-- G e n r e s -->

			<section class="wrapper">
				<h1 class="headerStyle">Genres</h1>
				<ul class="flex_container">

						<li>
							<a href="#" class="forGenre">Rock</a>
						</li>

						<li>
							<a href="#" class="forGenre">Pop</a>
						</li>

						<li>
							<a href="#" class="forGenre">House</a>
						</li>

						<li>
							<a href="#" class="forGenre">Techno</a>
						</li>

						<li>
							<a href="#" class="forGenre">Jazz</a>
						</li>

						<li>
							<a href="#" class="forGenre">Folk</a>
						</li>

						<li>
							<a href="#" class="forGenre">Classic</a>
						</li>

						<li>
							<a href="#" class="forGenre">Punk</a>
						</li>

						<li>
							<a href="#" class="forGenre">80S</a>
						</li>

						<li>
							<a href="#" class="forGenre">Blues</a>
						</li>

						<li>
							<a href="#" class="forGenre">Country</a>
						</li>

						<li>
							<a href="#" class="forGenre">Soul</a>
						</li>
						<li>
							<a href="#" class="forGenre">Blues</a>
						</li>

						<li>
							<a href="#" class="forGenre">Country</a>
						</li>

						<li>
							<a href="#" class="forGenre">Soul</a>
						</li>

				</ul>
				<div class="columnItem">
					<button class="moreStations">More Genres</button>
				</div>
			</section>

		</main>

		@endsection