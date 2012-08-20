<div class='navbar'>
	<div class='navbar-inner'>
		<div class='container'>
			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="brand newfont" href="#">TravelExpo</a>

			<!-- Everything you want hidden at 940px or less, place within here -->
			<div class="nav-collapse">
				<ul class="nav">
					<li class="divider-vertical"></li>
					<li <?php if($title=='Map') echo 'class="active"';?>>
						<a href="../travelexpo/map.php">Map</a>
					</li>
					<li class="divider-vertical"></li>
					<li <?php if($title=='Friends') echo 'class="active"';?>><a href="../travelexpo/friends.php">Friends</a></li>
					<li class="divider-vertical"></li>
					<li <?php if($title=='Trips') echo 'class="active"';?>><a href="../travelexpo/trip.php">Trips</a></li>
					<li class="divider-vertical"></li>
					<li <?php if($title=='Stats') echo 'class="active"';?>><a href="../travelexpo/stats.php">Stats</a></li>
					<li class="divider-vertical"></li>
				</ul>
				<form class="navbar-form pull-right">
					<input type="text" class="search-query span2" placeholder="Search Friends">
				</form>
				<ul class="nav pull-right">
					<li><a href="#">Settings</a></li>
					<li class="divider-vertical"></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Username <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>