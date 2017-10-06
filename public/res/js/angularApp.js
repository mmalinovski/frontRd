'use strict';

var app = angular
.module('radioApp', [
	'ui.router',
	'ngStorage',
	'mediaPlayer',
	'ui-rangeSlider',
	'ngSanitize',
	'ui.select',
	'angular-google-analytics'
])
.config(['AnalyticsProvider', function (AnalyticsProvider) {
   // Add configuration code as desired
   AnalyticsProvider.setAccount({
   	tracker: 'UA-83841379-2',
   	trackEvent: true
   }).trackPages(true).logAllCalls(true).trackUrlParams(true);
}]).run(['Analytics', function(Analytics) { }])

.controller('MainController', ['$rootScope', '$scope', '$localStorage', '$sessionStorage', '$timeout','$transitions',
	function($rootScope, $scope, $localStorage, $sessionStorage, $timeout, $transitions) {

		$scope.currentStation = {};
		$scope.stations = [];
		$scope.shouldPlay = false;

		$transitions.onSuccess({},
			function(){ 
				// $scope.stations = [];
				document.body.scrollTop = document.documentElement.scrollTop = 0;
			}
		);
		
		// $rootScope.$on('$viewContentLoaded', function() {
		// 	document.body.scrollTop = document.documentElement.scrollTop = 0;
		// });


		$scope.playingStation = {};
		$scope.playPausePlayer = function() {

			if ($scope.playingStation.radioTitle == $scope.currentStation.radioTitle) {

				if($scope.player.playing) {
					$scope.player.stop();
					$scope.shouldPlay = false; 

				}else{

					$timeout(function() {
						$scope.player.play();
					}, 200);
					$scope.shouldPlay = true;

				}
			}
			else {
				$scope.playingStation = angular.copy($scope.currentStation);

				$timeout(function() {
					$scope.player.play();
				}, 200);
				$scope.shouldPlay = true;
			}

		}
		
		$scope.setStation = function(index) {
			
			$scope.currentStation = $scope.stations[index];
			$scope.playPausePlayer();
			
		}

		$scope.resetStations = function() {
			$scope.stations = [];
		}

		$scope.addStation = function(station) {
			$scope.stations.push(station);
		}

		$scope.loading = false;
		$scope.playing = false;
		$scope.volumeSlider = false;

		$scope.volume = {
			max: $localStorage.volume || 100
		}


		$scope.$watch('volume.max', function() {
			$scope.player.setVolume($scope.volume.max/100)
			$localStorage.volume = $scope.volume.max;
		})

		
	}

]).controller('SearchController', ['$scope', '$http',
	function ($scope, $http) {
		$http.get("/listOfStations")
			.then(function(response) {
				$scope.listOfStations = response.data;
  			});		

  			$scope.showResults = false;	
    }
]);










