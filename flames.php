<!DOCTYPE html>
<html>

<head>
<title>FLAMES</title>
<!-- CSS -->
<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style type="text/css">
	body {
		font-family: 'Architects Daughter', cursive;
		color: white;
		font-size: 1.8em;
	}
	.container {
		background-color: #D64541;
		border: 1px solid #D64541;
		margin-top: 20px;
		margin-bottom: 20px;
		width: 350px;
		padding: 20px;
	}
	#button {
		background-color: #96281B;
		padding: 10px;
	}
</style>

</head>


<body>
<div class="container">
<div style="width:100%;height:0;padding-bottom:68%;position:relative;"><iframe src="https://giphy.com/embed/3o6gb6QTJvNSytYVXy" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/flirting-tinder-swipe-right-3o6gb6QTJvNSytYVXy">via GIPHY</a></p>

<h1>FLAMES</h1>
<form method="POST">
	First Name:<br>
		<input type="text" name="name1"><br>
	Second Name:<br>
		<input type="text" name="name2"><br><br><br>
		<input type="submit" name="submit" value="Compute for FLAMES" id="button"><br><br>
</form>

<?php 
if(isset($_POST['submit'])) {
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];

	require_once('flames_lib.php');

	$total = flames($name1,$name2) + flames($name2,$name1);
	$flames = ['friends', 'lovers', 'anger', 'marriage', 'engagement', 'soulmates'];
	$display = $flames[$total%6-1];

	echo $name1." and ".$name2." are "."<h3>"."<i class='fa fa-heart'>"."</i> ".$display."</h3>";
}

 ?>


</div>
</body>
</html>
