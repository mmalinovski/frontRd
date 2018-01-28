@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')

<main page-title>
	<h1 ng-hide="true" titlePage>About Page</h1>
	<section class="staticWrapper">
		<p>The creators of Nextuner.com are a global consortium of long time internet radio professionals, web developers and IT & network pros with a passion for their craft and a passion for music.  Nextuner.com currently hosts 44,000 independent, amateur and professional internet radio stations, shows and podcast streams from around the world. Our goal is to list over 100,000 internet radio stations! You will discover music and culture you may never heard of or listened to. We have an integrated internet radio player built into every page and a pop up player in development. Currently we're launched but in beta, (Version 1) or V1. Version 2 or V2 will have dozens of improvements with the ability to sign in, favorite stations, mobile internet radio apps for IOS and Android phones, seamless integration with Sonos, Bose, Apple CarPlay and others are in the works.  Nextuner.com will utilize the latest website technology using Ontology and the Semantic Web. Nextuner will be very intuitive suggesting new stations you may like, connect with users that share the same music interests and much more..</p><br>
		<p>That's the beauty of Nextuner.com. The best part? It's FREE and always will be free! Nextuner will NEVER charge a fee to listen. EVER!</p><br>
		<p>Broadcasters: Nextuner.com will not abandon you like other directories have. We will not compete with your station creating our own stations, only to terminate you and remove you after building their brand! We will become the advocate for the independent internet radio broadcaster in multiple ways. ( to be announced later ) If your station is NOT listed please visit our contact us page and let us know you would like to be listed on Nextuner.com. We will send you the radio submission form. We're Nextuner.com - Stay Tuned!</p>
	</section>
</main>





@endsection