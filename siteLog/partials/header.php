<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		
			<!-- LOGO AND BURGER-->
			<div class="navbar-header">
				<a href="#"> <img src="logo.png" alt="logo" id="logo"> </a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
	  
			<!-- RIGHT HAND MENU -->
			<div class="collapse navbar-collapse" id="myNavbar">
			<div class="options">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">being vegan</a></li>
					<li><a href="menu.php" target="block">recipes</a></li>
					<li><a href="">resources</a></li>
					<?php 
					if(!isset($_SESSION['is_logged_in'])) {
					echo '<li><a href="login.php" target="block">member login</a></li>
					<li><a href="register.php" target="block">register</a></li>';
					} else {
					echo "<li><a href=''>".$_SESSION['message']."</a></li>
					<li><a href='logout.php'>logout</a></li>";
					}
					?>
				</ul>
			</div>
			</div>

		</div>
  	</nav>
</header>

