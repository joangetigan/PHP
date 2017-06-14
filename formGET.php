<?php
session_start();
echo "Hi ".$_SESSION['user'];

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="get_example.php" method="GET">
	Input1:<br>
		<input type="text" name="input1"><br>
	Name:<br>
		<input type="text" name="name"><br><br>
		<input type="submit" value="Submit">

</form>

</body>
</html>