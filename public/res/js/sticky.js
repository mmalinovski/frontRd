function player_relocate() {
	var window_top = $(window).scrollTop();
	var div_top = $('#player-anchor').offset().top;
	if (window_top > div_top) {
		$('#player').addClass('stick');
		$('#player-anchor').height($('#player').outerHeight());
	} else {
		$('#player').removeClass('stick');
		$('#player-anchor').height(0);
	}
}

$(function() {
	$(window).scroll(player_relocate);
	player_relocate();
});

var dir = 1;
var MIN_TOP = 200;
var MAX_TOP = 350;

// function autoscroll() {
//     var window_top = $(window).scrollTop() + dir;
//     if (window_top >= MAX_TOP) {
//         window_top = MAX_TOP;
//         dir = -1;
//     } else if (window_top <= MIN_TOP) {
//         window_top = MIN_TOP;
//         dir = 1;
//     }
//     $(window).scrollTop(window_top);
//     window.setTimeout(autoscroll, 100);
// }
