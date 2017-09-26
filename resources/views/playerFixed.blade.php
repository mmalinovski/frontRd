<div ng-show="currentStation.radioStream" id="playerFixed" class="flex_container">
	<audio media-player="player" data-playlist="currentStation.radioStream" id="audioPlayer" preload="none">
		<source ng-repeat="stream in currentStation.radioStream" ng-src="@{{ stream.src }}" type="@{{ stream.type }}"></source>

	</audio>
	<div class="columnImagePlaying">
		<img ng-src="@{{ currentStation.imageUrl }}" alt="klymaxx">
		<!-- <a href="#" class="round-button"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
	</div>
	<div class="columnButtons">
		<button class="round-button" ng-click="playPausePlayer()"><i class="fa" data-ng:class="{'fa-play': !player.playing, 'fa-pause': player.playing  }" aria-hidden="true"></i></button>
	</div>
	<div class="columnButtons" data-ng:click="volumeSlider = !volumeSlider">
		<a href="#" class="roundVolume"><i class="fa fa-volume-off" aria-hidden="true"></i></a>
	</div>
	<div class="volumeTrack">
		<div id="track">
			<ul>
				<li>@{{player.formatTime}}</li>
				<li ng-hide="volumeSlider === true">@{{ currentStation.radioTitle }}</li>
			</ul>
		</div>
			<div range-slider min="0" max="100" model-max="volume.max" pin-handle="min" data-ng:show="volumeSlider === true"></div>
			
	</div>

	<div class="columnButtons">
		<button class="round-button"><i class="fa fa-th-list" aria-hidden="true"></i></button>
	</div>
	<div class="columnButtons">
		<a href="#" class="roundVolume"><i class="fa fa-window-restore" aria-hidden="true"></i></a>
	</div>
</div>