<?php
include ($_SERVER["DOCUMENT_ROOT"]."/common/dbconfig.php");

// Jazz 1, Blues 2, R&B 3, HipHop 4, Pop 5, Rock 6, Electronic 7
// $genre = "7";
// $limit = "2";
// all
$genre = isset($genre) ? " and projects.genre='$genre'" : '';
$limit = isset($limit) ? " LIMIT $limit" : '';
$q = "select projects.*, users.name from projects, users where projects.user_id=users.id" . $genre . " order by GOOD_COUNT DESC" . $limit;
$dbq = $pdo->prepare($q);
$dbq->execute();
$q_count = $dbq->rowCount();
$q_result = $dbq->fetchAll(PDO::FETCH_ASSOC);

$i = 0;
foreach ($q_result as $row) :
	$pro_dbid[$i]               = $row['id'];
	$pro_dbALBUM_IMAGE_PATH[$i] = $row['image_path'];
	$pro_dbTITLE[$i]            = $row['title'];
	$pro_dbARTIST[$i]           = $row['name'];
	$pro_dbPROJECT_INFO[$i]     = $row['project_info'];
	$pro_dbpri_user_id[$i]      = $row['user_id'];
	$pro_dbSOUND_PATH[$i]       = $row['sound_path'];
?>

<table class="table table-hover">
	<tr class="">
		<td class="rank-td1"><?php echo("<img onclick=\"getAlbumInfo($pro_dbid[$i]);\" class=\"img-thumbnail\" src=\"/storage/uploads/album_img/$pro_dbALBUM_IMAGE_PATH[$i]\"/>");?></td>
		<td>      
			<?php echo("
				<a type=\"button\" onclick=\"session_play_add($pro_dbid[$i], '$pro_dbTITLE[$i]', '$pro_dbARTIST[$i]', '$pro_dbSOUND_PATH[$i]')\" class=\"smallBtn play-add-button\"></a>
				<a href=\"/storage/uploads/album_sound/$pro_dbSOUND_PATH[$i]\" download=\"$pro_dbSOUND_PATH[$i]\" type=\"button\" class=\"smallBtn download-button\"></a>
				<a type=\"button\" onclick=\"like_project($pro_dbid[$i])\" class=\"smallBtn like-button\"></a>
				"); ?>
			<div class="rank-title"><h5><?php echo("$pro_dbTITLE[$i] - $pro_dbARTIST[$i]"); ?></h3></div>
			<div class="rank-info"><h5><?php echo("$pro_dbSOUND_PATH[$i]"); ?></h4></div>
			<div class="rank-info"><h5><?php echo("$pro_dbPROJECT_INFO[$i]"); ?></h3></div>
		</td>
	</tr>
	<?php $i++; ?>
</table>

<?php
    $i++;
endforeach;
?>