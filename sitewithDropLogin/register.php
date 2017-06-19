<?php 
// $new_user = [
// 	[
// 		'name' => 'Shane',
// 		'email' => 'marshala@protonmail.com',
// 		'pic' => 'pic.png'
// 	],
// 	[
// 		'name' => 'Joan',
// 		'email' => 'joan.getigan@gmail.com',
// 		'pic' => 'pic.png'
// 	]
// ];

// $fp = fopen('user.json','w');
// fwrite($fp, json_encode($new_user, JSON_PRETTY_PRINT));
// fclose($fp);

$list = file_get_contents('user.json');
$new_user = json_decode($list, true);

function display_user($arr) {
	foreach ($arr as $value) {
		$i = array_keys($arr, $value);

		$name = $value['name'];
		$email = $value['email'];
		$pic = $value['pic'];

		echo "<a href='display.php?id=$i[0]'";
		echo "<div>";
		echo "$name<br>
			$email<br>
			<img src='$pic' width=50px height=50px><br><br>";
		echo "</div>";
		echo "</a>";
	}
}

if (isset($_POST['register'])) {
		$new_member = [];
		$new_member['name'] = $_POST['name'];
		$new_member['email'] = $_POST['email'];
		$new_member['pic'] = $_POST['pic'];
		$new_user[] = $new_member;
		$fp = fopen('user.json', 'w');
		fwrite($fp, json_encode($new_user, JSON_PRETTY_PRINT));
		fclose($fp);
}

 ?>


<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="register.css">

</head>

<body>
<form method="POST">
<ul class="form-style-1">
    <li><label>Username<span class="required">*</span></label><input type="text" name="name"></li>
    <li><label>Email<span class="required">*</span></label><input type="text" name="email"></li>

    <li><label>Password<span class="required">*</span></label><input type="password" name="password"></li>
    <li><label>Retype Password<span class="required">*</span></label><input type="password" name="retype"></li>

    <li><label>Upload pic</label><input type="file" name="pic"></li>

    <li><input type="submit" name="register" value="Submit"/></li>
</ul>
</form>

<div>
	<?php display_user($new_user); ?>
</div>

</body>
</html>
