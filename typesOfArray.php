<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<?php
// INDEXED ARRAY

// $colors = array('red','orange','yellow');  
$colors = ['red','orange','yellow'];
echo $colors[1];

echo "<ul>";
for ($i=0; $i < count($colors); $i++) { 
	echo "<li>".$colors[$i]."</li>";
}
echo "</ul>";



// ASSOCIATIVE ARRAY

$days = array(				
	'January' => 31, 
	'February' => 28, 
	'April' => 30, 
	);

echo $days['April']."<br>";



// MULTI-DIMENSIONAL ARRAY

$names = ['Billy','Peejay'];
$ages = [26,23];

$records = array(				
	'Billy' => 26, 
	'Peejay' => 23, 
	);

for ($i=0; $i < count($names); $i++) { 
	echo $names[$i]." is ".$ages[$i]." years old. <br>";
}

foreach ($records as $name => $age) {
	echo "key: ".$name.", value: " .$age. "<br>";
}

echo "<ul>";
foreach ($colors as $color) {				//to list ALL elements of array
	echo "<li>".$color."</li>";
}
echo "</ul>";

$records = array(				
	'Billy' => ['username'=>'asdf','password'=>'qwerty'], 
	'Peejay' => ['username'=>'asdf','password'=>'qwerty'] 
	);

foreach ($records as $name => $creds) {
	echo $name."<br>";
	foreach ($creds as $key => $value) {
		echo $key.": ".$value."<br>";
	}
}

?>



</body>
</html>