<div class="col-md-9">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" id="myTab">
		<li class="active"><a href="#all" data-toggle="tab">All</a></li>
		<li><a href="#jazz" data-toggle="tab">Jazz</a></li>
		<li><a href="#blues" data-toggle="tab">Blues</a></li>
		<li><a href="#rnb" data-toggle="tab">R & B</a></li>
		<li><a href="#hiphop" data-toggle="tab">Hip Hop</a></li>
		<li><a href="#pop" data-toggle="tab">Pop</a></li>
		<li><a href="#rock" data-toggle="tab">Rock</a></li>
		<li><a href="#electronic" data-toggle="tab">Electronic</a></li>
	</ul>

	<div class="tab-content">

		<div class="tab-pane fade in active" id="all">
			<?php $limit = "40"; ?>
			@include('home.table')
		</div>

		<div class="tab-pane fade" id="jazz">
			<?php $genre = "1"; $limit = "10"; ?>
			@include('home.table')
		</div>

		<div class="tab-pane fade" id="blues">
			<?php $genre = "2"; $limit = "10"; ?>
			@include('home.table')
		</div>

		<div class="tab-pane fade" id="rnb">
			<?php $genre = "3"; $limit = "10"; ?>
			@include('home.table')
		</div>

		<div class="tab-pane fade" id="hiphop">
			<?php $genre = "4"; $limit = "10"; ?>
			@include('home.table')
		</div>

		<div class="tab-pane fade" id="pop">
			<?php $genre = "5"; $limit = "10"; ?>
			@include('home.table')
		</div>

		<div class="tab-pane fade" id="rock">
			<?php $genre = "6"; $limit = "10"; ?>
			@include('home.table')
		</div>

		<div class="tab-pane fade" id="electronic">
			<?php $genre = "7"; $limit = "10"; ?>
			@include('home.table')
		</div>

	</div>
</div>

<!-- Side area -->
<div class="col-md-3">
	col-md-3
	<?php
	$data = Session::all();
	echo "<pre>";
	var_dump($data);
	echo "</pre>";

	?>
</div>