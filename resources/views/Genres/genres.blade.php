@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')



<main data-ng:init="resetStations()" page-title>

	<section id="genreSection">

		<aside>
			<h1 titlePage>Genres</h1>
			
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
					{{ $genres->active->name }} Stations</h1>
				<ul id="genresContainer" class="flex_container">	
					<?php $s = $stations->byGenre($genres->active->slug) ?>
					<?php $i = 0 ?>
					@foreach($s as $station)

					<li semantic-meta execute="addStation(station)">

						<a href="{{ route('station', ['slug' => $station->slug]) }}" class="glavno" semantic-slug="{{ $station->slug }}">
							<img semantic-logo="src" src="{{ $station->logo }}" alt="{{$station->name}}">
							<span class="currentTrack">
								<span semantic-name class="stationName">{{$station->name }}</span>
								<span id="stationDetails">{{str_limit(ucfirst(strtolower(@$station->info)), 60)}}</span>
								@if(empty(@$station->info))
								<span id="stationDetails">Click for more!</span>
								@endif
							</span>
						</a>

						 <!-- Audio Player -->
						 <audio semantic-playlist id="audioPlayer" preload="none">
						 @foreach($streams->byStation($station->id) as $stream) 
							<source semantic-src="src" src="{{$stream->listenurl}}" semantic-type="type" type="{{$stream->type}}" semantic-playlist-source="src" semantic-playlist-type="type">
							
						 @endforeach 
						</audio>
						<button class="plej round-button" data-ng:click="setStation({{ $i }})"><i class="fa" 
							data-ng:class="{
								'fa-pause': player.playing && (currentStation.slug == '{{ $station->slug }}'),
								'fa-spinner fa-pulse': !player.playing && (currentStation.slug == '{{ $station->slug }}') && shouldPlay,
								'fa-play': (currentStation.slug != '{{$station->slug }}') || (!player.playing && (currentStation.slug == '{{ $station->slug }}') && !shouldPlay)
							}"
							aria-hidden="true"></i></button>
					</li>

					<?php $i++?>
					@endforeach
					
				</ul>
		</div>
		{{ $genres->links() }}

	</section>


</main>



<script>
	$("main").animate({ scrollTop: 0 }, 0);
</script>

@endsection