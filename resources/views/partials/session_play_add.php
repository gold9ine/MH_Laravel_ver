<?php
$project_id = $_GET['a'];
$project_title = $_GET['b'];
$project_artist = $_GET['c'];
$project_path = $_GET['d'];
$project_togle = $_GET['e'];

Session::push('play_pro_id', $project_id);
Session::push('play_pro_title', $project_title);
Session::push('play_pro_artist', $project_artist);
Session::push('play_pro_path', $project_path);
Session::push('temp_play_source', $project_togle);
?>