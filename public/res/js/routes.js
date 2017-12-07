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
				.state("genres.paginate", {
					url: "?page",
					views: {
						"Content@": {
							templateUrl: function($stateParams) {
								console.log($stateParams);
								return "/genres?page="+$stateParams.page+'&ajax=true';
							}
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
				.state("genres.stationsList.paginate", {
					url: "?page",
					views: {
						"Content@": {
							templateUrl: function($stateParams) {
								return "/genres/" + $stateParams.slug + "?page=" + $stateParams.page + "&ajax=true";
							}
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
				.state("iPhone", {
					url: "/iPhone.html",
					views: {
						"Content@": {
							templateUrl: "/iPhone.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("iPad", {
					url: "/iPad.html",
					views: {
						"Content@": {
							templateUrl: "/iPad.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("android", {
					url: "/android.html",
					views: {
						"Content@": {
							templateUrl: "/android.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("help", {
					url: "/help-faq.html",
					views: {
						"Content@": {
							templateUrl: "/help-faq.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("broadcasters", {
					url: "/broadcasters.html",
					views: {
						"Content@": {
							templateUrl: "/broadcasters.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("terms-and-conditions", {
					url: "/terms-and-conditions.html",
					views: {
						"Content@": {
							templateUrl: "/terms-and-conditions.html?ajax=true",
							// controller: ""
						}
					}
				})
				.state("privacy-policy", {
					url: "/privacy-policy.html",
					views: {
						"Content@": {
							templateUrl: "/privacy-policy.html?ajax=true",
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
				.state("detached", {
					url: "/stations/:slug.html",
					// views: {
					// 	"Content@": {
					// 		templateUrl: function($stateParams) {
					// 			return "/stations/"+$stateParams.slug+'?ajax=true';
					// 		},		

					// 		// controller: ""
					// 	}
					// }
				})
		}
	])







