'use-strict';

var appDetached = angular.module('detached', [
	'ngStorage',
	'mediaPlayer',
	'ui-rangeSlider',
	'ngSanitize',
])
appDetached.controller('detachedController', ['$scope', '$localStorage', '$sessionStorage', '$timeout',
	function($scope, $localStorage, $sessionStorage, $timeout) {
		$scope.loading = false;
		$scope.playing = false;


		$scope.volume = {
			max: $localStorage.volume || 100
		}

		$scope.$watch('volume.max', function() {
			$scope.player.setVolume($scope.volume.max/100)
			$localStorage.volume = $scope.volume.max;
		})

		$timeout(function() {
			window.player = $scope.player;
			$scope.player.playPause();
		}, 500);

	}

]);