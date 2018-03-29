@extends('layouts.master')

@section('content')
<div class="container h100p">
	<div class="w100p h100p disTable">
		<div class="disTableCell verticalMid">

			<div class="col-md-12 disInline w100p text-right">
				<nav class="navbar navbar-right">
					<div class="container-fluid">
						<div class="navbar-header">
							<form class="form-inline" role="form" action="/login/login.php" method="post">
								<div class="checkbox text-left">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail3">Email address</label>
									<input type="email" class="form-control" name="userEmail" id="InputEmail" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword3">Password</label>
									<input type="password" class="form-control" name="userPassword" id="InputPassword" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-default">로그인</button>
							</form>
						</div>
					</div>
				</nav>
			</div>

			<div class="col-md-12">
				<div  class="col-md-8">
					<img id="welcome-img">
				</div>
				<div class="col-md-4">
					<form onsubmit="return registcheck(this)" name="register-form" role="form" action="/login/regist.php" method="post" class="">
						<div class="form-group">
							<h4>Register</h4>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Email</label>
							<input type="email" name="userEmail" class="form-control" id="email" placeholder="Email">
						</div>

						<div class="form-group">
							<label for="inputName" class="control-label">Name</label>
							<div>
								<input type="text" name="userName" class="form-control" id="name" placeholder="Name">
							</div>
						</div>

						<div class="form-group">
							<label for="inputPassword" class="control-label">Password</label>
							<div class="">
								<input type="password" id="password" name="userPassword" class="form-control" placeholder="Password">
							</div>
						</div>

						<div class="form-group">
							<label for="inputPassword" class="control-label">Confirm Password</label>
							<div class="">
								<input type="password" name="userCPassword" class="form-control" id="passwordagain" placeholder="Confirm Password">
							</div>
						</div>

						<div class="form-group">
							<label for="inputPart" class="control-label">Instrument Part</label>
							<div class="">
								<select type="text" name ="userPart" class="form-control" id="inputGanre" placeholder="INSTRUMENT PART">
									<option>Vocal</option>
									<option>Drum</option>
									<option>Synthesizer</option>
									<option>Electric Guitar</option>
									<option>Bass Guitar</option>
									<option>Classic Guitar</option>
									<option>Acoustic Guitar</option>
								</select>
							</div>
						</div>

						<div class="form-group text-right">
							<button type="submit" class="btn btn-default">계정 만들기</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection