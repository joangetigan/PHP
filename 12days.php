<?php 
	$days = [
		'First',
		'Second',
		'Third',
		'Fourth',
		'Fifth',
		'Sixth',
		'Seventh',
		'Eighth',
		'Ninth',
		'Tenth',
		'Eleventh',
		'Twelfth'
	];

	$lyrics = [
		"a Partridge in a Pear Tree",
		"Two Turtle Doves and", 
		"Three French Hens", 
		"Four Calling Birds", 
		"Five Gold Rings", 
		"Six Geese a-Laying", 
		"Seven Swans a-Swimming", 
		"Eight Maids a-Milking", 
		"Nine Ladies Dancing", 
		"Ten Lords a-Leaping", 
		"Eleven Pipers Piping", 
		"Twelve Drummers Drumming"
	];
 ?>


<!DOCTYPE html>
<html>

<head>
<title>Twelve Days of Christmas</title>
<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

<style type="text/css">
	body {
	font-family: 'Dosis', sans-serif;
	font-size: 2em;
	}
</style>

</head>


<body>
<div class="container">

	<h1>Twelve Days of Christmas</h1>
	
	<?php  
	if (isset($_POST['counter'])) {
		$counter = $_POST['counter']+1;
	} else {
		$counter=0;
	}
	
	if ($counter<12) {
		echo "On the ".$days[$counter]." day of Christmas my true love send to me <br>";
		for ($i=$counter; $i>=0; $i--) { 
			echo $lyrics[$i]."<br>";
		}
	} else {
		$counter=-1;
	}
	?> 

	<form method="POST">
		<input class="btn-success" type="submit" name="next" value="Next">
		<input type="hidden" name="counter" value="<?php echo $counter; ?>">

	</form>

</div>


</body>
</html>