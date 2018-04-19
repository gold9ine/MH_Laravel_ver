<!-- 플레시 메시지 -->
@if(session()->has('flash_message'))
<div class="alert alert-info" fole="alert">
    {{ session('flash_message') }}
</div>
@endif

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
<script>
	$(document).ready(function(){
		function readURL(input) {
			if (input.files && input.files[0]) {
            var reader = new FileReader(); //파일을 읽기 위한 FileReader객체 생성
            reader.onload = function (e) { 
            //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
            $('#pro-img').attr('src', e.target.result);
                //이미지 Tag의 SRC속성에 읽어들인 File내용을 지정
                //(아래 코드에서 읽어들인 dataURL형식)
            }                    
            reader.readAsDataURL(input.files[0]);
            //File내용을 읽어 dataURL형식의 문자열로 저장
        }
    }//readURL()--

    //file 양식으로 이미지를 선택(값이 변경) 되었을때 처리하는 코드
    $("#image_path").change(function(){
        // alert(this.value); //선택한 이미지 경로 표시
        readURL(this);
    });
});
</script>
<div class="col-md-3">
	<div class="sideFrame">		
		<div class="form-group alert alert-success margin0 text-center">
			Create Project
		</div>
		<form class="contact_form" id="project-create" action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<fieldset>
				<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control" placeholder="Project Name" value="{{ old('title') }}" minlength="1" maxlength="20"></input>
					{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
				</div>

<!-- 				<div class="form-group {{ $errors->has('artist') ? 'has-error' : '' }}">
					<label for="artist">Artist</label>
					<input type="text" name="artist" class="form-control" value="{{ Auth::user()->name }}"></input>
					{!! $errors->first('artist', '<span class="form-error">:message</span>') !!}
				</div> -->

				<div class="form-group {{ $errors->has('genre') ? 'has-error' : '' }}">
					<label for="genre">Genre</label>
					<select name="genre" id="genre" class="form-control">
						<option value="1">Jazz</option>
						<option value="2">Blues</option>
						<option value="3">R&B</option>
						<option value="4">HipHop</option>
						<option value="5">Pop</option>
						<option value="6">Rock</option>
						<option value="7">Electronic</option>
					</select>
					{!! $errors->first('genre', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('image_path') ? 'has-error' : '' }}">
					<label for="image_path">Image</label>
					<div class="">
						<img id="pro-img" class="img-thumbnail" src="">
					</div>
					<input type="file" name="image_path" id="image_path" class="w100p paddingTop5" oninput="OnInput(event)" size="60" accept=".jpg,.jpeg,.png,.gif,.bmp" /></input>
					{!! $errors->first('image_path', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('sound_path') ? 'has-error' : '' }}">
					<label for="sound_path">Sound</label>
					<input type="file" name="sound_path" id="sound_path" class="w100p" oninput="OnInput(event)" accept=".mp3">
					{!! $errors->first('sound_path', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('project_info') ? 'has-error' : '' }}">
					<label for="project_info">Information</label>
					<textarea class="form-control" type="text" name="project_info" id="project_info" placeholder="Project Information" minlength="1" maxlength="100">{{ old('project_info') }}</textarea>
					{!! $errors->first('project_info', '<span class="help-block">:message</span>') !!}
				</div>

				<button type="submit" class="btn btn-default pull-right">Submit</button>
			</fieldset>
		</form>
	</div>
</div>