'use strict';

var app = angular
.module('radioApp', [
	'ui.router',
	'ngStorage',
	'mediaPlayer',
	'ui-rangeSlider',
	'ngSanitize',
	'ui.select',
]).run(run);

run.$inject = ['$rootScope', '$location', '$window', '$transitions'];
    function run($rootScope, $location, $window, $transitions) {
        // initialise google analytics
        $window.ga('create', 'UA-109789442-1', 'auto');
 
        // track pageview on state change
        $transitions.onSuccess({},
			function(){ 
        $window.ga('send', 'pageview', $location.path());
        	}
		);
    }

app.controller('MainController', ['$rootScope', '$scope', '$localStorage', '$sessionStorage', '$timeout','$transitions', '$state',
	function($rootScope, $scope, $localStorage, $sessionStorage, $timeout, $transitions, $state) {

		$scope.currentStation = {};
		$scope.stations = [];
		$scope.shouldPlay = false;
		$scope.showHamMenuVar = false;
		$scope.hideHamburger = true;
		$scope.showHideModal = false;

		$scope.title = '';


		console.log($state);


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

		$scope.detachedPlay = function() {
			if ($scope.player.playing) {
				$scope.player.stop();
				$scope.playPausePlayer();
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

		$scope.showHamMenu = function() {
			$scope.showHamMenuVar =!$scope.showHamMenuVar;
			$scope.hideHamburger = !$scope.hideHamburger;

		}



		// $scope.$watch('player.$playlist', function() {
		// 	console.log('promena');
		// 	console.log($scope.currentStation.radioStream[0].src);
		// 	console.log($scope.player.$playlist[0].src);
		// 	if($scope.player.$playlist[0].src == $scope.currentStation.radioStream[0].src) {
		// 		console.log('src e isto');

		// 	} else {
		// 		console.log('src e razlicito');

		// 	}
		// });

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

		$scope.$watch('title', function() {
			
		})
	}

]).controller('SearchController', ['$rootScope', '$scope', '$http',
	function ($rootScope, $scope, $http) {
		// $http.get("/listOfStations")
		// 	.then(function(response) {
		// 		$scope.listOfStations = response.data;
  // 			});		

  			$scope.showResults = false;	
  			$scope.searchText = '';
  			$scope.searchGenre = '';

  			$scope.doSearch = function() {
				$http.get('/search?search=' + $scope.searchText).then(function(response){
				$scope.listOfStations = response.data;
				});
			}

			$scope.doGenresSearch = function() {
				$http.get('/searchGenre?search=' + $scope.searchGenre).then(function(response){
					$scope.listOfGenres = response.data;
				})
			}
    }
]);










