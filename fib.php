<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<?php  

// FIBONACCI

$previous = 0;
$current = 1;

for($i = 0; $i < 15; $i++) {
	echo $current.' ';

	$next = $previous + $current;

	$previous = $current;
	$current = $next;
}

 ?>

</body>
</html>