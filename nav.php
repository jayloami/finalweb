<?php include 'link.php'; ?>

	<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" >
		<div class="container">
			<div id="werpa" class="navbar-translate">
					<div class="hidnav">
		               <div id="mySidenav" class="sidenav">
			 				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  				<a href="index.php">Home</a>
			  				<div class="hidbut"><a href="login.php">Log-in</a>
			  				<a href="usersignup.php">Sign-up</a></div>
			  				<a href="#" onclick="address(); return false;">Address</a>
			  				<a href="#" onclick="contact(); return false;">Contact</a>
			  				<a href="Github.io"><i class="fab fa-github-alt"> Github.io</i></a>
			  				<a href="Twitter.com"><i class="fab fa-twitter"></i> Twitter.com</a>
			  				<a href="instagram.com"><i class="fab fa-instagram"> Instagram.com</i></a>
						</div>
					</div>
				<span class="hidnav" onclick="openNav()"><i class="fa fa-align-justify"></i></span>
				<a id="webtitle" class="navbar-brand" rel="tooltip" title="Who Are We?" data-placement="bottom" target="_blank"><i class="fas fa-desktop"></i>
                GOT IT
                </a>
		</div>
		<ul id="navi" class="navbar-nav" style="font-family: Francois One">
					<li class="nav-item"><a href="index.php" style="text-decoration: none"><i class="fas fa-home"></i> Home</a></li>
					<li class="nav-item hidbut"><a href="login.php" style="text-decoration: none"><i class="fas fa-sign-in-alt"></i> Log-in</a></li>
					<li class="nav-item loglogout"><a href="logout.php" style="text-decoration: none"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
					<li class="nav-item hidbut"><a href="usersignup.php" style="text-decoration: none"><i class="fas fa-user-plus"></i> Sign-up</a></li>
		</ul>
	</nav>