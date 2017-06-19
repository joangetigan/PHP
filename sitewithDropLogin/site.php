<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hot for food</title>
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
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
					<li><a href="" target="block">being vegan</a></li>
					<li><a href="" target="block">recipes</a></li>
					<li><a href="" target="block">resources</a></li>
					<li>
						<a id="login-trigger" href="#">
				        login&nbsp/&nbspregister <span>▼</span>
				      	</a>
				      	<div id="login-content">
				        	<form method="POST">
							<ul class="form-style-1">
							    <li><label>Username <span class="required">*</span></label><input type="text" name="username"></li>
							    <li><label>Password <span class="required">*</span></label><input type="password" name="password"></li>  
							    <li>
							        <input type="submit" name="login" value="Submit">
							    </li>
								<li><a href="register.php" target="block" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Not yet a member?</a></li>

								
							</ul>
							</form>
				        </div>                	
					</li>

				</ul>
			</div>
			</div>

		</div>
  	</nav>
</header>


<div class="container">
	<div class="row">

		<div class="col-md-10">	
			<?php 
			function create_dropdown($name,$options) {
				echo "<select name='$name'>";
					echo "<option>All</option>";
					foreach ($options as $value) {
						if(isset($_POST[$name]) && $_POST[$name]==$value) {
						echo "<option selected value='$value'>".$value."</option>";
						} else {
						echo "<option value='$value'>".$value."</option>";
						}
					}
				echo "</select>";
			}

			$menu = [
				['img' => "<img src='vegan/breakfast1.jpg' class='img-thumbnail'>",
				'name' => '<h3>Fluffy Pancakes</h3>',
				'desc' => '<p>Going vegan doesn\'t mean you have to forgo a stack of pillowy pancakes. Here, Fat Free Vegan recreates them with a surprising secret ingredient—sparkling water—which gives these vegan pancakes an airy texture.</p>',
				'set' => 'breakfast'],

				['img' => "<img src='vegan/breakfast2.jpg' class='img-thumbnail'>",
				'name' => '<h3>Strawberry Cream Cheese Stuffed French Toast</h3>',
				'desc' => '<p>Freshly chopped strawberries, lemon juice, cream cheese with cinnamon, maple syrup and vanilla extract.</p>',
				'set' => 'breakfast'],

				['img' => "<img src='vegan/breakfast3.jpg' class='img-thumbnail'>",
				'name' => '<h3>Coconut Cinna-Ring</h3>',
				'desc' => '<p>Everyone will want seconds of these vegan cinnamon rolls. This brunch treat can be made ahead of time, stashed in the fridge, and then popped in the oven to bake when your friends arrive.</p>',
				'set' => 'breakfast'],

				['img' => "<img src='vegan/lunch1.jpg' class='img-thumbnail'>",
				'name' => '<h3>Spiralized Asian Quinoa Salad with Peanut Dressing</h3>',
				'desc' => '<p>Get in your veggies with this Asian Quinoa Salad. It soaks up the flavor of the peanut dressing as it sits, so it’s perfect for making at the beginning of the week and having for lunch for days!</p>',
				'set' => 'lunch'],

				['img' => "<img src='vegan/lunch2.jpg' class='img-thumbnail'>",
				'name' => '<h3>Thai Tempeh Buddha Bowl from Fit Mitten Kitchen</h3>',
				'desc' => '<p>Buddha bowls are all the rage, for good reason. Just stuff a bunch of nourishing ingredients into a bowl (or container) and you’re good to go. This makes it easy for you by giving you the perfect high-protein Buddha bowl formula.</p>',
				'set' => 'lunch'],

				['img' => "<img src='vegan/lunch3.jpg' class='img-thumbnail'>",
				'name' => '<h3>Spicy Buffalo Chickpea Wraps from Minimalist Baker</h3>',
				'desc' => '<p>Sick of sandwiches? Go for a wrap. The spicy chickpeas will give you a mid-day kick and will definitely fill you up. Pack this with a piece of fruit or some veggies!</p>',
				'set' => 'lunch'],
			];


			echo "<div class='row'>";
			foreach ($menu as $item) {

			if (!isset($_POST['submit']) || $item['set']==$_POST['select'] || $_POST['select']=='All') {
				echo "<div class='col-md-4'>";
					echo $item['img'];
					echo $item['name'];
					echo $item['desc'];
					echo "<button>"."ADD TO ORDER"."</button>";
				echo "</div>";
				}
			}
			echo "</div>";

			?>						

			<footer>
				<i class="fa fa-facebook fa-lg fa-fw"></i>
				<i class="fa fa-twitter fa-lg fa-fw"></i>
				<i class="fa fa-instagram fa-lg fa-fw"></i>
				<i class="fa fa-pinterest-p fa-lg fa-fw"></i>
				<i class="fa fa-google-plus fa-lg fa-fw"></i>
			</footer>
		</div>

		<!-- SIDEBAR -->
		<div class="col-md-2">
			<div class="sidebar">
			<?php 
				echo "<form method='POST' action=''>";
					$category = array_column($menu, 'set');
					$category = array_unique($category);
					create_dropdown('select',$category);
					echo "<input type='submit' name='submit' value='Submit'><br><br>";
				echo "</form>";

			 ?>
			</div>
		</div>


	</div>
</div>



<script src=dropLogin.js></script>
</body>
</html>