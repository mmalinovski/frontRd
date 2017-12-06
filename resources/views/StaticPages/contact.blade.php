@extends(($params->isAjax ? 'layouts.ajax' : 'layouts.master'))

@section('content')

<main pageTitle>
	<!-- <h1 ng-hide="true" titlePage>Contact Page</h1> -->
	
		<h1 class="headerStyle" titlePage>Contact Page</h1>

		<form method="post" name="emailForm" action="/mail.php" id="contactForm">
			<div class="textEmail">
				<input type="text" name="name" placeholder="Full Name">
				<input type="text" name="email" placeholder="E-mail">
			</div>
			<div class="messageForm">
				<!-- <input type="text" name="" placeholder="Your Message"> -->
				<textarea name="message" placeholder=" Your Message..."></textarea>
			</div>
			<!-- <div class="g-recaptcha center-text" data-sitekey="6LfNfzYUAAAAAHx2aqRaesQschAPBUiChnZhFnU_" ></div> -->
			<input class="moreStations" type="submit" value="Send" name="submit">

		</form>
</main>

@endsection