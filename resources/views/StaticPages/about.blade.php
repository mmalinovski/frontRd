@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')

<main page-title>
	<h1 ng-hide="true" titlePage>About Page</h1>
	<section class="staticWrapper">
		<p><b>Internet Radio</b> offers more than 30.000 radio stations and podcasts and reports a number of 4 million monthly uniqe users and 20 million app downloads worldwide. The website of Internet Radio offers free access to radio stations and podcasts from all over the world. Discover the world of radio directly in your browser. With the Internet radio apps you have the entire range of radio stations on your smartphone or tablet. Listen to your favorite stations or discover new ones from around the world.</p>
	</section>
</main>



@endsection