<?php 
 session_start(); 
 ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php get_title(); ?></title>
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php 
require_once 'partials/header.php';
 ?>

<div class="container">
	<div class="row mid">
		<div class="col-md-10">	
			<?php 
			display_content();
			require_once 'partials/footer.php';
			?>						
		</div>

		<div class="col-md-2">
			<div class="sidebar">
			</div>
		</div>


	</div>
</div>



</body>
</html>