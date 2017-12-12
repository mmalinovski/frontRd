@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))
@section('content')

	



	<main page-title>
		<!-- G e n r e s -->

			<section class="wrapper">
				<h1 titlePage class="headerStyle" >Genres</h1>

					<!-- SEARCH GENRES -->
				<form class="searchGenres" method="GET" ng-controller="SearchController">
  					<div class="searchDiv" ng-mouseleave="showResults = false">
	  					<input type="text" name="search" placeholder="Search Genres" ng-model="searchGenre"  ng-click="showResults = true" autocomplete="off" ng-keyup="doGenresSearch()">
						<ul ng-show="showResults">
							<li ng-repeat="genres in listOfGenres">
								<a href="/genres/@{{genres.slug}}">@{{genres.name}}</a>
							</li>
						</ul>
  					</div>
				</form>

				<ul class="flex_container clearfix">
					@foreach($genres as $genre)
						<li>
							<a href="{{route('genre', ['slug' => $genre->slug])}}" class="forGenre">{{$genre->name}}</a>
						</li>

					@endforeach	
				</ul>

					{{ $genres->links() }}

				<div class="columnItem">
					<!-- <button class="moreStations">More Genres</button> -->
				</div>
			</section>

	</main>

	



@endsection