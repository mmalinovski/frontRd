@extends('master')

@section('content')

	


	<main>
		<!-- G e n r e s -->

			<section class="wrapper">
				<h1 class="headerStyle">Genres</h1>


				<ul class="flex_container">
					@foreach($genres as $genre)
						<li>
							<a href="{{route('genre', ['slug' => $genre->slug])}}" class="forGenre">{{$genre->name}}</a>
						</li>

					@endforeach	
				</ul>

					{{ $genres->render() }}
				<div class="columnItem">
					<!-- <button class="moreStations">More Genres</button> -->
				</div>
			</section>

	</main>



@endsection