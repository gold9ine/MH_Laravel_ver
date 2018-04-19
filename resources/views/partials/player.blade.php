<!-- player -->
<link rel="stylesheet" type="text/css" href="/css/skin/morning.light/jplayer.morning.light.css"/>
<script src="/js/jquery.jplayer.min.js"></script>
<script src="/js/add-on/jplayer.playlist.min.js"></script>
<script src="/js/add-on/jquery.jplayer.inspector.js"></script>

<script type="text/javascript">
// var baseDir = '/mh';
var baseDir = '/storage';
var filePath = baseDir + '/uploads/album_sound/';
$(function(){     
	var cssSelector = { jPlayer: "#jquery_jplayer_1", cssSelectorAncestor: "#jp_container_1" };
	var playlist = [
	{
		title:"The Title",
    artist:"The Artist", // Optional
    mp3: "filePath"
}
]; // Empty playlist
var options = {
	playlistOptions: {
		autoPlay: true,
		loopOnPrevious: true,
		shuffleOnLoop: true,
		enableRemoveControls: true,
		displayTime: 'slow',
		addTime: 'fast',
		removeTime: 'fast',
		shuffleTime: 'fast'
	},
	swfPath:  baseDir + "/uploads/album_sound",
	supplied: "m4a, oga, mp3",
	smoothPlayBar: true,
	keyEnabled: true,
	audioFullScreen: true
};
myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);
myPlaylist.setPlaylist([
	]);
});



function play_add(playid, playtitle, playartist, playmp3){
	myPlaylist.add({
		title:playtitle,
		artist:playartist,
		mp3:  baseDir + "/uploads/album_sound/" + playmp3
	});
	listShow_temp();
  // session_play_add(playid, playtitle, playartist, playmp3);
}
function play_add_source(playid, playtitle, playartist, playmp3){
	myPlaylist.add({
		title:playmp3,
		artist:playartist,
		mp3:  baseDir + "/uploads/source/" + playmp3
	});
	listShow_temp();
  // session_play_add(playid, playtitle, playartist, playmp3);
}
</script>
<script>
	function listShow(){
		var listShow = $('#play-list');
		if(listShow.hasClass('disTable'))
		{
			listShow.removeClass('disTable');
			listShow.addClass('disNone');
		}
		else
		{
			listShow.removeClass('disNone');
			listShow.addClass('disTable');
		}
	}
	function listShow_temp(){
		var listShow = $('#play-list');
		listShow.removeClass('disNone');
		listShow.addClass('disTable');
		var mark = setTimeout("close_list()", 3000);
	}
	function close_list(){
		var listShow = $('#play-list');
		listShow.removeClass('disTable');
		listShow.addClass('disNone');
	}

	function session_play_add(playid, playtitle, playartist, playmp3){
		var kind='0';
		$(document).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			jQuery.ajax({
				type:"POST",
				url: "session_play_add?a="+playid+"&b="+playtitle+"&c="+playartist+"&d="+playmp3+"&e="+kind,
				success:function(){
					play_add(playid, playtitle, playartist, playmp3);
				}, error: function(xhr,status,error){
					alert(error);
				}
			}); 
		}); 
	}

	function session_play_add_source(playid, playtitle, playartist, playmp3){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		var kind='1';
		$(document).ready(function(){
			jQuery.ajax({
				type:"POST",
				url: "/session_play_add.php?a=" + playid + "&b=" + playtitle + "&c=" + playartist + "&d=" + playmp3 + "&e=" + kind,
				success:function() {
					play_add_source(playid, playtitle, playartist, playmp3);
				}, error: function(xhr,status,error){
					alert(error);
				}
			}); 
		}); 
	}
	var temp_play_pro_id = new Array();
	var temp_play_pro_title = new Array();
	var temp_play_pro_artist = new Array();
	var temp_play_pro_path = new Array();
	var temp_play_source = new Array();
</script>
<?PHP
if ( !Session::has('play_pro_id') ) {
	Session::put('play_pro_id', array());
}
if ( !Session::has('play_pro_title') ) {
	Session::put('play_pro_title', array());
}
if ( !Session::has('play_pro_artist') ) {
	Session::put('play_pro_artist', array());
}
if ( !Session::has('play_pro_path') ) {
	Session::put('play_pro_path', array());
}
if ( !Session::has('temp_play_source') ) {
	Session::put('temp_play_source', array());
}

$play_count = count(Session::get('play_pro_id'));
echo ("<script>var play_count='$play_count';var pc=0;</script>");

for($i = 0; $i < $play_count; $i++){
	$temp_play_pro_id = Session::get('play_pro_id.' . $i);
	$temp_play_pro_title = Session::get('play_pro_title.' . $i);
	$temp_play_pro_artist = Session::get('play_pro_artist.' . $i);
	$temp_play_pro_path = Session::get('play_pro_path.' . $i);
	$temp_play_source = Session::get('temp_play_source.' . $i);

	echo("<script>temp_play_pro_id[pc]='$temp_play_pro_id';</script>");
	echo("<script>temp_play_pro_title[pc]='$temp_play_pro_title';</script>");
	echo("<script>temp_play_pro_artist[pc]='$temp_play_pro_artist';</script>");
	echo("<script>temp_play_pro_path[pc]='$temp_play_pro_path';</script>");
	echo("<script>temp_play_source[pc]='$temp_play_source';pc++;</script>");
}
?>
<script>
	$(function(){
		for(var i = 0; i < play_count; i++) {
			if(temp_play_source[i] == 0) {
				play_add(temp_play_pro_id[i], temp_play_pro_title[i], temp_play_pro_artist[i], temp_play_pro_path[i]);
			}
			else{console.log(temp_play_source[i]);
				play_add_source(temp_play_pro_id[i], temp_play_pro_title[i], temp_play_pro_artist[i], temp_play_pro_path[i]);
			}
		}
	});
</script>
<div id="player-area" class="container">
	<div id="jquery_jplayer_1" class="jp-jplayer"></div>
	<div id="jp_container_1" class="jp-audio">
		
		<div class="jp-type-single">
			<div class="jp-gui jp-interface clearfix">

				<div id="list-button-area" class="" onclick="listShow();">
					<img id="jp-list-button" src="/storage/images/main/player/main_playbar_icon_playlist_over.png">
				</div>

				<div class="">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div id="play-list" class="jp-playlist disTable w300 right0 posAsolute"><ul></ul></div>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-time-holder">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<ul class="jp-toggles">
							<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
							<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off" style="display: none;">repeat off</a></li>
							<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
							<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off" style="display: none;">shuffle off</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

