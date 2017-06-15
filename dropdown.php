<?php 
	$SEA = [
		'Brunei' => 'Bandar Seri Begawan', 
		'Thailand' => 'Bangkok', 
		'East Timor' => 'Dili', 
		'Vietnam' => 'Hanoi', 
		'Indonesia' => 'Jakarta', 
		'Malaysia' => 'Kuala Lumpur', 
		'Philippines' => 'Manila', 
		'Myanmar' => 'Naypyidaw', 
		'Cambodia' => 'Phnom Penh', 
		'Singapore' => 'Singapore', 
		'Laos' => 'Vientiane', 
	];

	$select = [
		'male' => 'M', 
		'female' => 'F', 
	];

	if (isset($_POST['submit'])) {
		$capital = $_POST['capital'];
		$gender = $_POST['gender'];
		echo "The capital's country is ".$capital."<br>";
		echo "Selected gender is ".$gender;
	}
 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Countries & Capitals</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
 
<h2>Sample Select Box</h2>
<form method="POST" action="">
	Capital
	<?php create_dropdown('capital',$SEA) ?>
	<br>Gender
	<?php create_dropdown('gender',$select) ?>

	<input type="submit" name="submit" value="Submit">
</form>


<?php 
function create_dropdown($name,$options) {
	echo "<select name='$name'>";
	foreach ($options as $key => $value) {
		echo "<option value='$key'>".$value."</option>";
	}
	echo "</select>";
}

 ?>


</body>
</html>