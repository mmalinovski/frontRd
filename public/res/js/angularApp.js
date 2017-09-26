'use strict';

var app = angular
.module('radioApp', [
	'ui.router',
	'ngStorage',
	'mediaPlayer',
	'ui-rangeSlider'
])

.controller('MainController', ['$scope', '$localStorage', '$sessionStorage', '$timeout',
	function($scope, $localStorage, $sessionStorage, $timeout) {

		$scope.currentStation = {};
		$scope.stations = [];
		$scope.shouldPlay = false;


		$scope.playPausePlayer = function() {
			//console.log('fixed play button pressed!');
			//console.log($scope.player);
			// $scope.player.playPause();

			if($scope.player.playing) {
				$scope.player.stop();
				$scope.shouldPlay = false; 

			}else{
				$scope.player.play();
				$scope.shouldPlay = true;
			}
		}
		
		$scope.setStation = function(index) {
			$scope.currentStation = $scope.stations[index];
			

			$timeout(function() {
				$scope.playPausePlayer();
				// $scope.player.playing ? $scope.player.stop() : $scope.player.play();
			}, 500);
			// console.log($scope.player);
			//console.log('Play button clicked!');
		}



		$scope.addStation = function(station) {
			// console.log(station);
			$scope.stations.push(station);
			//console.log('Staion pushed to array!');
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

]);
