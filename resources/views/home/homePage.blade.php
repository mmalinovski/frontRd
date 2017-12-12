@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')

<main page-title>

	<section class="header">
		<div class="nadHeder">
				<h1 titlePage>Wellcome to Nextuner</h1>
			</div>


			<!-- S E A R C H -->
		
		<form class="search" method="GET" ng-controller="SearchController">
  			<div class="searchModule" ng-mouseleave="showResults = false">
  				<input  class="inputSearch" type="text" name="search" placeholder="Search Radio Stations" ng-model="searchText"  ng-click="showResults = true" autocomplete="off" ng-keyup="doSearch()">
				<ul class="results" ng-show="showResults">
					<li ng-repeat="station in listOfStations">
						<a href="/stations/@{{station.slug}}">@{{station.name}}</a>
					</li>
				</ul>
  			</div>
		</form>
			<div class="podHeder">
				<h1>A radio network made for you and your taste with stations from all around the world!</h1>
			</div>
	</section>

				<!-- F e a t u r e d   S t a t i o n s -->
				
			<section class="wrapper">
				<h1 class="headerStyle">Featured Stations</h1>
						<ul id="featuredStations" class="flex_container">
							@foreach($randomStations as $random)
								<li>
									<a href="{{ route('station', ['slug' => $random->slug]) }}">
										<img ng-src="{{ $random->logo }}" width="200" height="200" alt="{{$random->name}}">
										<span>{{$random->name}}</span>
									</a>
								</li>
							@endforeach
						</ul>
					<!-- <div class="columnItem"> 
						<button class="moreStations">More Stations</button>
					</div> -->
			</section>



			<!-- E d i t o r s   P i c k -->

			<section class="wrapper">
				<h1 class="headerStyle">Editors Picks</h1>
			</section>

			<div class="adsInMiddle">
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

			<div class="grid">

				 <?php $i = 1 ?>
				 @foreach($randomStationsEditor as $editorStation)
				<a href="{{ route('station', ['slug' => $random->slug]) }}" class="box g{{$i}}">
					<img ng-src="{{ $editorStation->logo }}" alt="{{$editorStation->name}}">
				</a>
			  <?php $i++?>
			  @endforeach
			</div>
			<!-- <div class="columnItem">
				<button class="moreStations">More Radios</button>
			</div> -->



			<!-- M o s t   P o p u l a r -->


			<section class="wrapper">
				<h1 class="headerStyle">Most Popular</h1>
				<ul id="mostPopular" class="flex_container">
					@foreach($randomStationsPopular as $popular)
					<li>
						<a href="{{ route('station', ['slug' => $popular->slug]) }}">
							<img  ng-src="{{ $popular->logo }}" width="70" height="70" alt="{{$popular->name}}">
							<span class="currentTrack">
								<span>{{$popular->name}}</span>
								<span>{{str_limit(ucfirst(strtolower($popular->details->info)), 12)}}</span>
								@if(empty($popular->details->info))
								<span>Click for more!</span>
								@endif
							</span>
						</a>
					</li>
					@endforeach
				</ul> 
				<!-- <div class="columnItem">
					<button class="moreStations">More Radios</button>
				</div> -->
			</section>	


			<!-- G e n r e s -->

			<section class="wrapper">
				<h1 class="headerStyle">Genres</h1>

				<div class="adsInMiddle">
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
				
				<ul class="flex_container">
					@foreach($genres as $genre)
						<li>
							<a href="{{route('genre', ['slug' => $genre->slug])}}" class="forGenre">{{$genre->name}}</a>
						</li>
					@endforeach
						

				</ul>
				<div class="columnItem">
					<button class="moreStations">More Genres</button>
				</div>
			</section>

		</main>



		

		@endsection