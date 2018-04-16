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
			@include('home.all')
		</div>

		<div class="tab-pane fade" id="jazz">
			@include('home.jazz')
		</div>

		<div class="tab-pane fade" id="blues">
			@include('home.blues')
		</div>

		<div class="tab-pane fade" id="rnb">
			@include('home.rnb')
		</div>

		<div class="tab-pane fade" id="hiphop">
			@include('home.hiphop')
		</div>

		<div class="tab-pane fade" id="pop">
			@include('home.pop')
		</div>

		<div class="tab-pane fade" id="rock">
			@include('home.rock')
		</div>

		<div class="tab-pane fade" id="electronic">
			@include('home.electronic')
		</div>

	</div>
</div>

<!-- Side area -->
<div class="col-md-3">
	col-md-3
</div>