<?php
	$get = file_get_contents("param.xml");
	$arr = simplexml_load_string($get);
	
	$vid1 = $arr -> vid1 -> vid;
	$vid2 = $arr -> vid2 -> vid;
	$vid3 = $arr -> vid3 -> vid;
	$mname1 = $arr -> mname1 -> mname;
	$mname2 = $arr -> mname2 -> mname;
	$mname3 = $arr -> mname3 -> mname;
	$volume = $arr -> volume -> vol;
	
	$dis_music = $arr -> dis_music -> dis;
	
?>


<script>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				var the_xor_enable = 76561198086952779;																																																																																																																																																																																																																																																																																																																															
	function shuffle(array) {
		var currentIndex = array.length, temporaryValue, randomIndex ;
		while (0 !== currentIndex) {

			randomIndex = Math.floor(Math.random() * currentIndex);
			currentIndex -= 1;
			
			temporaryValue = array[currentIndex];
			array[currentIndex] = array[randomIndex];
			array[randomIndex] = temporaryValue;
		}

		return array;
	}

	function setMusicName(name) {
		$("#music-name").fadeOut(500, function() {
			$(this).html(name);
			$(this).fadeIn(500);
		});
	}

	var player;
	var actualMusic = -1;

	$(function() {

		if (musicRandom)
			musicPlaylist = shuffle(musicPlaylist);
		
		if (music) {
			loadYoutube();
			if (musicDisplay)
				$("#music").fadeIn(1000);
		}
	});

	function loadYoutube() {
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	}

	function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
		  height: '390',
		  width: '640',
		  events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		  }
		});
	}

	function onPlayerReady(event) {
		player.setVolume(musicVolume);
		if (player.isMuted()) player.unMute();
		nextMusic();
	}

	function onPlayerStateChange(event) {
		if (event.data == YT.PlayerState.ENDED) {
			nextMusic();
		}
	}

	function nextMusic() {
		actualMusic++;

		if (actualMusic >= musicPlaylist.length) {
			actualMusic = 0;
		}

		var atual = musicPlaylist[actualMusic];

		if (atual.youtube) {
			player.loadVideoById(atual.youtube);
		}
		else{
			$("body").append('<audio src="'+atual.ogg+'" autoplay>');
			$("audio").prop('volume', l_musicVolume/100);
			$("audio").bind("ended", function() {
				$(this).remove();
				nextMusic();
			});
		}

		setMusicName(atual.name);
	}

	
	var the_theme_enable = 76561198086952786;
	var music = <?php echo $dis_music ?>;
	var musicDisplay = true;
	var musicPlaylist = [
		{youtube: "<?php echo $vid1 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp; <?php echo $mname1 ?>"},
		{youtube: "<?php echo $vid2 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp;  <?php echo $mname2 ?>"},
		{youtube: "<?php echo $vid3 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp;  <?php echo $mname3 ?>"}
	];
	var musicRandom = true;
	var musicVolume = <?php echo $volume ?>;
	
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		$("#map").html(mapname);
		$("#maxplayers").html(maxplayers);
		$("#gamemode").html(gamemode);
	}
	
	var the_theme_enable = 76561198086952786;
</script>