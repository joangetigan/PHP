<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>
<p>Please Login</p>

<form action="session_home.php" method="POST">
	Username:<br>
		<input type="text" name="username"><br>
	Password:<br>
		<input type="password" name="password"><br><br>
		<button>Submit</button><br><br>
</form>

<form action="logout.php" method="POST">
	<button>Logout</button>
</form>


</body>
</html>