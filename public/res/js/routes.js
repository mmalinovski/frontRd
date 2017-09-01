angular.module('radioApp')
	.config(['$stateProvider', '$urlRouterProvider', '$locationProvider',
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
							templateUrl: "/",
							// controller: ""
						}
					}
				})
				.state("genres", {
					url: "/genres",
					views: {
						"Content@": {
							templateUrl: "/genres",
							// controller: ""
						}
					}
				})
				.state("genres.stationsList", {
					url: "/genres/:slug",
					views: {
						"Content@": {
							templateUrl: "/genres/:slug",
							// controller: ""
						}
					}
				})
		}
	])