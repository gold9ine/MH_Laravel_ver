@extends('layouts.master')

@section('content')
<div class="container h100p">
	<div class="w100p h100p disTable">
		<div class="disTableCell verticalMid">

			<!-- login form -->
			<div class="col-md-12 disInline w100p text-right">
				<nav class="navbar navbar-right">
					<div class="container-fluid">
						<div class="navbar-header">
							<form class="form-inline" role="form" method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}

								<div class="checkbox">
									<a class="btn btn-link" href="{{ route('password.request') }}">
										Forgot Your Password?
									</a>
									<label>
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									</label>
								</div>

								<div class="form-group">
									<div class="form-group{{ $errors->has('login_email') ? ' has-error' : '' }}">
										<label class="sr-only" for="login_email">E-Mail Address</label>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
										<!-- <input id="login_email" type="email" class="form-control" name="login_email" value="{{ old('login_email') }}" placeholder="Enter email" required autofocus> -->
									</div>
									<div class="form-group">
										<label class="sr-only" for="login_password">Password</label>
										<input id="password" type="password" class="form-control" name="password" required>
										<!-- <input id="login_password" type="password" class="form-control" name="login_password" required> -->
									</div>
								</div>

								<button type="submit" class="btn btn-default">로그인</button>

							</form>
						</div>
					</div>
				</nav>
			</div>

			<!-- Register form -->
			<div class="col-md-12">
				<div  class="col-md-8">
					<img id="welcome-img">
				</div>
				<div class="col-md-4">
					<form onsubmit="return registcheck(this)" name="register-form" role="form" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<div class="form-group">
							<h4>Register</h4>
						</div>
						<div class="form-group">
							<label for="email" class="control-label">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group">
							<label for="name" class="control-label">Name</label>
							<div>
								<input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}" required>
								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							<div class="">
								<input type="password" id="password" name="password" class="form-control" placeholder="Password">
								@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="password-confirm" class="control-label">Confirm Password</label>
							<div class="">
								<input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Confirm Password">
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