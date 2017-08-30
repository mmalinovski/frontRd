@extends('master')

@section('content')

<main>


	<section id="genreSection">

		<aside>
			<h1>Genres</h1>
			
			<ul>

				@foreach ($genres as $g) 
					<?php $active = ''; ?>
					@if($g->slug == $genre->slug)
						<?php $active = ' class="active"'; ?>
					@endif
					<li>
						<a href="{{route('genre', ['slug' => $g->slug])}}" {!! $active !!}>{{ $g->name }}</a>
						
					</li>

				@endforeach
			</ul>
			
		</aside>

		<div id="genresContent">
				<h1 class="">
				@if(isset($genre))
					{{ $genre->name }}

				@endif

				 Stations</h1>
				<form id="searchbox" action="">
					<input id="search" type="text" placeholder="Search genres">
					<input id="submit" type="submit" value="Search">
				</form>
				<ul id="genresContainer" class="flex_container">
					@foreach($genre->stations as $station)
					<li>
						<a href="#" class="glavno">
							<img src="/logos/{{ @$station->slug }}.png" alt="klymaxx">
							<span class="currentTrack">
								<span>{{$station->name }}</span>
								<span>{{@$station->details->info}}</span>
							</span>
						</a>

						<audio controls>
						@foreach($station->streams as $stream)
							<source src="{{$stream->listenurl}}" type="{{$stream->type}}">
						@endforeach
						</audio>
						<a href="#" class="plej round-button"><i class="fa fa-play" aria-hidden="true"></i></a>
					</li>
					@endforeach
					
				</ul>
		</div>

	</section>

</main>




@endsection