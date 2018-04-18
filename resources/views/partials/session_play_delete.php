<?php
$playlist_index = $_GET['a'];

$a = $playlist_index;
$b = $a + 1;
$list_count = 0;
$list_count = count(Session::get('play_pro_id')) - 1;
$list_count_round = $list_count - $a;

if($list_count == 0 || $a == $list_count){
	Session::forget("play_pro_id." . $a);
	Session::forget("play_pro_title." . $a);
	Session::forget("play_pro_artist." . $a);
	Session::forget("play_pro_path." . $a);
	Session::forget("temp_play_source." . $a);
}

for($i = 0; $i < $list_count_round; $i++) {
	Session::put('play_pro_id.' . $a,  Session::get('play_pro_id.' . $b));
	Session::put('play_pro_title.' . $a,  Session::get('play_pro_title.' . $b));
	Session::put('play_pro_artist.' . $a,  Session::get('play_pro_artist.' . $b));
	Session::put('play_pro_path.' . $a,  Session::get('play_pro_path.' . $b));
	Session::put('temp_play_source.' . $a,  Session::get('temp_play_source.' . $b));

	Session::forget("play_pro_id." . $b);
	Session::forget("play_pro_title." . $b);
	Session::forget("play_pro_artist." . $b);
	Session::forget("play_pro_path." . $b);
	Session::forget("temp_play_source." . $b);

	$a++; $b++;
}
?>