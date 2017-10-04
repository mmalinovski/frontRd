app.directive('semanticMeta', function($compile, $rootScope, $timeout){
	return {
		restrict: 'A',
		scope: {
			execute : "&"
		},
		link: function($scope, element, attrs) {

			var radioMeta = {};

				var semanticSlug = element.find('[semantic-slug]')[0];
				radioMeta.slug = semanticSlug.getAttribute('semantic-slug');
				// console.log(semanticSlug);

			radioMeta.radioTitle = element.find('[semantic-name]').text();

			var logo = element.find('[semantic-logo]')[0];
			radioMeta.imageUrl = logo.getAttribute(logo.getAttribute('semantic-logo'));

			radioMeta.radioStream = []

			var streamDetails = {}

			try{
				var streamSrc = element.find('[semantic-src]')[0];
				streamDetails.src = streamSrc.getAttribute(streamSrc.getAttribute('semantic-src'));
				var streamType = element.find('[semantic-type]')[0];
				streamDetails.type = streamType.getAttribute(streamType.getAttribute('semantic-type'));

				radioMeta.radioStream.push(streamDetails);
				}catch(e) {
					console.log('The error is: ',e);
				}

			$scope.execute({station: radioMeta});

		},
		controller: function($scope) {
		}
	}
});