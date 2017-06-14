<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
<?php 

	$names1 = array("joan","gean","shane","kevin","ray");

	$names2 = array("mavs","mark","joel","emman","nico");

	echo $names2[0];

?>

<ul>
	<li><?php echo $names1[0]; ?></li>
	<li><?php echo $names1[1]; ?></li>
	<li><?php echo $names1[2]; ?></li>
	<li><?php echo $names1[3]; ?></li>
	<li><?php echo $names1[4]; ?></li>
</ul>

<?php 
echo "<ul>
	<li>$names2[0]</li>
	<li>$names2[1]</li>
	<li>$names2[2]</li>
	<li>$names2[3]</li>
	<li>$names2[4]</li>
</ul>"
 ?>

<table class="table table-bordered">
	<tr>
		<th>Names 1</th>
		<th>Names 2</th>
	</tr>
	
	<tr>
		<td><?php echo $names1[0]; ?></td>
		<td><?php echo $names2[0]; ?></td>
	</tr>
	
	<tr>
		<td><?php echo $names1[1]; ?></td>
		<td><?php echo $names2[1]; ?></td>
	</tr>

	<tr>
		<td><?php echo $names1[2]; ?></td>
		<td><?php echo $names2[2]; ?></td>
	</tr>

	<tr>
		<td><?php echo $names1[3]; ?></td>
		<td><?php echo $names2[3]; ?></td>
	</tr>

	<tr>
		<td><?php echo $names1[4]; ?></td>
		<td><?php echo $names2[4]; ?></td>
	</tr>
</table>



</body>
</html>