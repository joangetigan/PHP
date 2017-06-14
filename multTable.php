<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<?php  
// MULTIPLICATION TABLE

for ($i=1; $i < 6; $i++) { 
	echo "<div class='row'>";
		for ($j=1; $j < 6; $j++) {
			echo "<div class='col-xs-1'>" .  $i*$j . "</div>";
		}
	echo "</div>";
}




?>



</body>
</html>