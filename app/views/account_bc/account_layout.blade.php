<!DOCTYPE html>
<html lang="en">

<head>
	@include('_partials/head')

	<link rel="stylesheet" href="{{ asset('css/account.css') }}" type="text/css" />

	@yield('custom_css')
</head>

<body>

<section class="hbox stretch">
	<!-- .aside -->
	<aside class="bg-black lter aside nav-vertical" id="nav">
		<section class="vbox">

			<!-- 	TOP Header for XS	-->
			<header class="bg-black nav-bar">
				<!-- 	TOP (left) menu for XS 	-->
				<a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-primary" id="menu" title="Menu">
					<i class="fa fa-bars"></i>
				</a>

				<!-- 	Logo & Title 	-->
				<a href="{{ url('account/dashboard') }}" class="nav-brand" title="Go to Dashboard">
					<img src="{{ asset('img/logo_60x60.png') }}" alt="ScorEvents">
					<span id="site_title" class="visible-xs">{{ Config::get('const.proj_name') }}</span>
				</a>

				<!-- 	TOP (right) menu for XS 	-->
				<a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse" id="search" title="Search">
					<i class="fa fa-search"></i>
				</a>
			</header>

			<section class="scrollable">
				<!-- 	nav 	-->
				<nav class="nav-primary hidden-xs">
					<ul class="nav">

						<!-- 	User (only for XS displays) 	-->
						<li class="dropdown visible-xs">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{{ asset('img/avatar_default.jpg') }}" class="img-circle" id="user-avatar">
								<div id="user-full-name">{{ $user['first_name'].' '.$user['last_name'] }}</div>
								<b class="caret"></b>
							</a>

							<ul class="dropdown-menu animated">
								<li><a href="{{ url('account/profile') }}">Profile</a></li>
								<li><a href="{{ url('account/settings') }}">Settings</a></li>
								<li><a href="{{ url('auth/logout') }}">Logout</a></li>
							</ul>
						</li>

						<!-- 	Dashboard 	-->
						<li {{ Request::is('account/dashboard') ? 'class="active"' : '' }}>
							<a href="{{ url('account/dashboard') }}" title="Go to Dashboard">
								<i class="fa fa-list-alt"></i><span>Dashboard</span>
							</a>
						</li>

						<!-- 	Calendar 	-->
						<li {{ (Request::is('account/events') OR Request::is('account/events/*')) ? 'class="active"' : '' }}>
							<a href="{{ url('account/events') }}" title="Go to Calendar">
								<i class="fa fa-calendar"></i><span>Calendar</span>
							</a>
						</li>

						<!-- 	Friends 	-->
						<li {{ Request::is('account/friends') ? 'class="active"' : '' }}>
							<a href="{{ url('account/friends') }}" title="Go to Friends">
								<i class="fa fa-group"></i><span>Friends</span>
							</a>
						</li>

						<!-- 	Map 	-->
						<li>
							<a href="{{ url('account/map') }}" title="Go to Map">
								<i class="fa fa-map-marker"></i><span>Map</span>
							</a>
						</li>

						<!-- 	Profile 	-->
						<li {{ Request::is('account/profile') ? 'class="active"' : '' }}>
							<a href="{{ url('account/profile') }}" title="Go to Profile">
								<i class="fa fa-user"></i><span>Profile</span>
							</a>
						</li>

						<!-- 	Settings 	-->
						<li {{ Request::is('account/settings') ? 'class="active"' : '' }}>
							<a href="{{ url('account/settings') }}" title="Go to Settings">
								<i class="fa fa-cogs"></i><span>Settings</span>
							</a>
						</li>

					</ul>
				</nav><!-- 	/nav 	-->

			</section>

		</section><!-- 	/.vbox 	-->
	</aside><!-- 	/aside 	-->

	<!-- 	#content 	-->
	<section id="content">
		<section class="vbox">
			<header class="header bg-black navbar navbar-inverse">
				<div class="collapse navbar-collapse pull-in">
					<ul class="nav navbar-nav m-l-n">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/') }}">About</a></li>
						<li><a href="{{ url('/') }}">Contact Us</a></li>
					</ul>

					<!-- 	Search form 	-->
					<form class="navbar-form navbar-left m-t-sm" id="searchbar" role="search">
						<div class="form-group">
							<div class="input-group input-s-lg">
								<input type="text" class="form-control input-sm no-border bg-dark dk" placeholder="Search ..." />
								<span class="input-group-btn">
									<button type="submit" class="btn btn-sm btn-primary btn-icon"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</form>

					<!-- 	User name (hidden from XS screens) 	-->
					<ul class="nav navbar-nav navbar-right hidden-xs">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{{ asset('img/avatar_default.jpg') }}" class="img-circle" id="user-avatar">
								<div id="user-full-name">
									{{ $user['first_name'].' '.$user['last_name'] }}
								</div>
								<b class="caret"></b>
							</a>

							<ul class="dropdown-menu animated aside-md">
								<li><a href="{{ url('account/profile') }}">Profile</a></li>
								<li><a href="{{ url('account/settings') }}">Settings</a></li>
								<li><a href="{{ url('auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</header>

			<section class="scrollable">
				<section class="hbox stretch">
					<section id="content">
						<section class="vbox">
							<header class="header bg-white" id="page-header"><p>{{ $page_title }}</p></header>
							<section class="scrollable">
								<section class="hbox stretch">
									@yield('content')
								</section>
							</section>
						</section>
					</section>
				</section>
			</section>

		</section>

		<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
	</section><!-- 	/#content 	-->

</section><!-- 	/.hbox.stretch 	-->

<!-- 	jQuery (1.10.2) 	-->
<script src="{{ asset('packages/todo/js/jquery.min.js') }}"></script>
<!-- 	Bootstrap (3.1.1) 	-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- 	App 	-->
<script src="{{ asset('packages/todo/js/app.js') }}"></script>
<script src="{{ asset('packages/todo/js/app.plugin.js') }}"></script>
<script src="{{ asset('packages/todo/js/app.data.js') }}"></script>
<script src="{{ asset('packages/todo/js/slimscroll/jquery.slimscroll.min.js') }}" cache="false"></script>

@yield('custom_js')

</body>

</html>