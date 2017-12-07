<header>
		<h1 id="logo">
			<img src="/res/img/logo/NexTuner-logo.svg" alt="Logo" height="60">
			<!-- NextTuner-lightBG.png -->
		</h1>
		<nav>
			 <!-- HAMBURGER MENU -->
			<div class="hamContainer" ng-click="showHamMenu()" ng-class="{'change': showHamMenuVar }">
				<div class="bar1" ></div>
				<div class="bar2" ></div>
				<div class="bar3" ></div>
			</div>
			<div class="navMenu" ng-class="{'hideHamburgerMenu': hideHamburger}">
				<ul class="withOrWithoutHamburger">
					<li>
						<a href="{{route('homePage')}}" ng-click="hideHamburger = true; showHamMenuVar = false">Home</a>
					</li>
					<li>
						<a href="{{route('genres')}}" ng-click="hideHamburger = true; showHamMenuVar = false">Genres</a>
					</li>
					<li>
						<a href="{{route('staticPage', ['url' =>'about'])}}" ng-click="hideHamburger = true; showHamMenuVar = false">About</a>
					</li>
					<li>
						<a href="{{route('staticPage', ['url' =>'contact'])}}" ng-click="hideHamburger = true; showHamMenuVar = false">Contact</a>
					</li>
					
				</ul>
			</div>
		</nav>
	</header>
