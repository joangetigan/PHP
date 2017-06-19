<?php 
// $new_user = [
// 	[
// 		'name' => 'Shane',
// 		'pw' => 'secret',
// 	],
// 	[
// 		'name' => 'Joan',
// 		'pw' => 'asdfgh'
// 	]
// ];

// $fp = fopen('passwords.json','w');
// fwrite($fp, json_encode($new_user, JSON_PRETTY_PRINT));
// fclose($fp);


if (isset($_POST['change_pw'])) {
$list = file_get_contents('passwords.json');
if ($list)
	$array = json_decode($list, true);
$name = $_POST['name'];
$old_pw = $_POST['old_pw'];
$new_pw = $_POST['new_pw'];
$retype = $_POST['retype'];

$index;

foreach ($array as $key => $value) {
	if ($value['name'] == $name 
		&& $value['pw'] == $old_pw
		&& $new_pw == $retype) {
		$index = $key;
		echo "password changed";
		$array[$index]['pw'] = $new_pw;
	}
}

$fp = fopen('passwords.json', 'w');
fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));
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
<h2>Change Password</h2>
<ul class="form-style-1">
    <li><label>Username<span class="required">*</span></label><input type="text" name="name"></li>

    <li><label>Old Password<span class="required">*</span></label><input type="password" name="old_pw"></li>
    <li><label>New Password<span class="required">*</span></label><input type="password" name="new_pw"></li>
    <li><label>Retype New Password<span class="required">*</span></label><input type="password" name="retype"></li>

    <li><input type="submit" name="change_pw" value="Submit"/></li>
</ul>
</form>



</body>
</html>