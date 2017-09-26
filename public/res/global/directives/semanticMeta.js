app.directive('semanticMeta', function($compile, $rootScope, $timeout){
	return {
		restrict: 'A',
		scope: {
			execute : "&"
		},
		link: function($scope, element, attrs) {

			var radioEl = element.find('.glavno');
			var audioStream = element.find('#audioPlayer');
			var radioMeta = {
				imageUrl: radioEl.find('img').attr('src'),
				radioTitle: radioEl.find('.currentTrack').find('#stationName').text(),
				radioStream: [
					{
						src: audioStream.find('source').attr('src'),
						type: audioStream.find('source').attr('type')
					}
				]
			}

			
			// console.log(radioMeta);






			// var children = [];
			// var semanticData = element.children();
			
			// $.each(semanticData, function(i, item) {
			// 	children.push(item);
			// });

			// //console.log(children);

			// for (var i = 0; i < children.length; i++) {
			// 	var semanticChildren = $(children[i][0]).children();
				
			// 	$.each(semanticChildren, function(i, item) {
			// 		console.log(item.attr('semantic'));
			// 	});
			// }





			$scope.execute({station: radioMeta});



			// console.log('Radio img path:');
			// console.log(radioMeta.imageUlr);
			// console.log('Radio title: ' + radioMeta.radioTitle);
			//console.log(radioMeta);
			//console.log($scope.semanticResult);
		},
		controller: function($scope) {
		}
	}
});