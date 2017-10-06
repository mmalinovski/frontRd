	app.config(['$stateProvider', '$urlRouterProvider', '$locationProvider',
		function ($stateProvider, $urlRouterProvider, $locationProvider) {
			$locationProvider.html5Mode({
				enabled: true,
				requireBase: false
			});
			$stateProvider
				.state("home", {
					url: "/",
					views: {
						"Content@": {
							templateUrl: "/?ajax=true",
							// controller: ""
						}
					}
				})
				.state("genres", {
					url: "/genres",
					views: {
						"Content@": {
							templateUrl: "/genres/?ajax=true",
							// controller: ""
						}
					}
				})
				.state("genres.stationsList", {
					url: "/:slug",
					views: {
						"Content@": {
							templateUrl: function($stateParams) {
								return "/genres/"+$stateParams.slug+'?ajax=true';
							},

							// controller: ""
						}
					}
				})
				.state("about", {
					url: "/about.html",
					views: {
						"Content@": {
							templateUrl: "/about.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("contact", {
					url: "/contact.html",
					views: {
						"Content@": {
							templateUrl: "/contact.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("station", {
					url: "/stations/:slug",
					views: {
						"Content@": {
							templateUrl: function($stateParams) {
								return "/stations/"+$stateParams.slug+'?ajax=true';
							},		

							// controller: ""
						}
					}
				})
		}
	])







