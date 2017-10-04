'use strict';

var app = angular
.module('radioApp', [
	'ui.router',
	'ngStorage',
	'mediaPlayer',
	'ui-rangeSlider',
	'ngSanitize',
	'ui.select',
])

.controller('MainController', ['$rootScope', '$scope', '$localStorage', '$sessionStorage', '$timeout',
	function($rootScope, $scope, $localStorage, $sessionStorage, $timeout) {

		$scope.currentStation = {};
		$scope.stations = [];
		$scope.shouldPlay = false;

		$rootScope.$on('$stateChangeEnd', 
			function(event, toState, toParams, fromState, fromParams, options){ 
				$scope.stations = [];
			}
		);
		$rootScope.$on('$viewContentLoaded', function() {
			console.log('dali ulaza u state scange');
		   document.body.scrollTop = document.documentElement.scrollTop = 0;
		});


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
				console.log('treba da gi napravi isti');
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










