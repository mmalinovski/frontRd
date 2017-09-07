@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')



<main>


	<section id="genreSection">

		<aside>
			<h1>Genres</h1>
			
			<ul>
				@foreach ($genres->all() as $g) 
					<?php $active = ''; ?>
					@if($g->active)
						<?php $active = ' class="active" '; ?>
					@endif
					<li>
						<a href="{{route('genre', ['slug' => $g->slug])}}" {!! $active !!}>{{ $g->name }}</a>
						
					</li>

				@endforeach
			</ul>
		</aside>

		<div id="genresContent">
				<h1 class="">
					{{ $genres->active->name }}

				 Stations</h1>
				<form id="searchbox" action="">
					<input id="search" type="text" placeholder="Search genres">
					<input id="submit" type="submit" value="Search">
				</form>
				<ul id="genresContainer" class="flex_container">
					<?php $s = $stations->byGenre($genres->active->slug) ?>
					@foreach($s as $station)
					<li>
						<a href="{{ route('station', ['slug' => $station->slug]) }}" class="glavno">
							<img src="/logos/{{ @$station->slug }}.png" alt="{{$station->name}}">
							<span class="currentTrack">
								<span id="stationName">{{$station->name }}</span>
								<span id="stationDetails">{{str_limit(ucfirst(strtolower(@$station->info)), 60)}}</span>
								@if(empty(@$station->info))
								<span id="stationDetails">Click for more!</span>
								@endif
							</span>
						</a>

						 <!-- Audio Player -->
						 <audio id="audioPlayer" preload="none">
						 @foreach($streams->byStation($station->id) as $stream) 
							<source src="{{$stream->listenurl}}" type="{{$stream->type}}">
							
						 @endforeach 
						</audio>
						
						<a id="playButton" class="plej round-button"><i class="fa fa-play" aria-hidden="true"></i></a>
					</li>
					@endforeach
					
				</ul>
		</div>

	</section>

</main>





@endsection