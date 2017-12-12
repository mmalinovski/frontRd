'use-strict';

var appDetached = angular.module('detached', [
	'ui.router',
	'ngStorage',
	'mediaPlayer',
	'ui-rangeSlider',
	'ngSanitize',
]).run(run);

run.$inject = ['$location', '$window', '$transitions'];
    function run($location, $window, $transitions) {
        // initialise google analytics
        $window.ga('create', 'UA-109789442-1', 'auto');
 
        // track pageview on state change
        $transitions.onSuccess({},
			function(){ 
        $window.ga('send', 'pageview', $location.path());
        	}
		);
    }

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