<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>
<p>Please provide length and width of triangle</p>

<form action="" method="POST">
	Length:<br>
		<input type="text" name="length" value="0"><br>
	Width:<br>
		<input type="text" name="width" value="0"><br><br>
		<input type="submit" name="Submit"><br><br>
</form>

<?php 
if(isset($_POST['Submit'])) {
	$length = $_POST['length'];
	$width = $_POST['width'];

	function solve_area($l,$w) {
		return "Area: ".$l * $w;
	}

	echo solve_area($length,$width);
}

 ?>


</body>
</html>