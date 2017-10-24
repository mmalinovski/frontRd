app.directive('pageTitle', function($compile, $rootScope, $timeout){
	return {
		restrict: 'A',

		link: function($scope, element, attrs) {

			var tempTitle = element.find('[titlePage]').text();
			document.title = tempTitle + "\u00bb NexTuner";

		},
		controller: function($scope) {
		}
	}
});