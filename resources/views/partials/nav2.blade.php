<div class="container">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        <img id="modeChangeButton" class="tilt modeChangeButton">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

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
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

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
        </nav>


<!-- 	<div>
		<div class="w50p headerHeight posAsolute top0 left0 bgc494c9c"></div>
		<div class="w50p headerHeight posAsolute top0 right0 bgcb6507D"></div>
		<div class="w100p h30"></div>
		<div class="verticalMid w100p bannerHeight m0 posRelative bannerImg">
		</div>
	</div>
 -->


	<div id="topBanner-extention" class="topBanner-hight">
<!-- 		<div class="topBanner-extention-left"></div>
		<div class="topBanner-extention-right"></div> -->
		<div id="topBanner" class="">
			<div class="">
				<!-- <div id="banner-user-search-area">
					<div id="banner-user-area">
						<ul id="banner-user-ul">
							<li class="banner-user-li">
								<img id="user-icon" src="/images/main/button/user-button.png"></img>
							</li>
							<li class="banner-user-li">
								<a id="user-nickname" style="background: transparent; cursor:pointer;">
									<h3 class="banner-user-h3">{{ Auth::user()->name }}</h3>
								</a>
							</li>
							<li class="banner-user-li" id="logout-button-li">
								<a id="user-logout" value="delete" TITLE="Log out" style="background: transparent; cursor:pointer;">
									<img id="logout-button" src="/images/main/button/logout-button.png"></img>
								</a>
							</li>
						</ul>
					</div>
					<fieldset id="banner-fildset">
						<img id="search-text" src="/images/main/background/search.png"></img>
						<div id="banner-form-group">
							<input id="search-box" type="search" required="required" placeholder=" The hall of fame" results="5" name="search-key" autosave="unique"></input>
						</div>
						<button type="submit" onClick="searchAction();" id="search-button"class="search-button"></button>
					</fieldset>
				</div> -->

				<div id="modeChange-area">
					<img id="modeChangeButton" class="tilt modeChangeButton"></img>
				</div>
			</div>
		</div>
	</div>

<!-- 	<div id="topMenu" class="container" style="text-align: center;">
		<div id="menu-btn-group" class="middleArea menu_none" style="margin-left: 5px;">
			<img class="top-menu-btn" id="harmonyChartButton" name="harmonyChartButton"></img>
			<img class="top-menu-btn" id="artistRankingButton" name="artistRankingButton"></img>
			<img class="top-menu-btn" id="myProjectButton" name="myProjectButton"></img>
			<img class="top-menu-btn" id="timelineButton" name="timelineButton"></img>
		</div>
	</div> -->
</div>
