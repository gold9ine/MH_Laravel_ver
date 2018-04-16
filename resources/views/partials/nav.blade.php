<!-- <nav class="navbar navbar-default navbar-static-top"> -->
<nav class="navbar navbar-default navbar-fixed-top">
	<!-- user area -->
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<!-- <a id="modeChangeButton" class="navbar-brand" href="{{ url('/') }}"> -->
			<a id="appName" class="navbar-brand cursorPointer">
				{{ config('app.name', 'MH') }}
				<!-- <img id="modeChangeButton" class="tilt modeChangeButton"> -->
			</a>

			<!-- Music Title -->
			<a id="sound-title-artist-area" class="navbar-brand">
				<img id="music-icon" src="/storage/images/main/icon/music.png">
				<h5><div id="sound-title-artist" class="jp-title2">Oh HY - What is love</div></h5>
			</a>

		</div>



		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@guest
				<li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="{{ route('register') }}">Register</a></li>
				@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
				@endguest
			</ul>
		</div>
	</div>

	<!-- player -->
	@include('partials.player')
	 
</nav>