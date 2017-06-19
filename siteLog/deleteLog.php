<?php 
// $new_user = [
// 	[
// 		'name' => 'shane',
// 		'pw' => 'abc',
// 	],
// 	[
// 		'name' => 'joan',
// 		'pw' => 'asd'
// 	]
// ];

// $fp = fopen('passwords.json','w');
// fwrite($fp, json_encode($new_user, JSON_PRETTY_PRINT));
// fclose($fp);


if (isset($_POST['del'])) {
$list = file_get_contents('passwords.json');
if ($list)
	$array = json_decode($list, true);
$name = $_POST['name'];
$password = $_POST['password'];

$index;

foreach ($array as $key => $value) {
	if ($value['name'] == $name 
		&& $value['pw'] == $password) {
		$index = $key;
		echo "deleted";
		unset($array[$index]);
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
<title>Change Password</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="register.css">

</head>

<body>
<form method="POST">
<ul class="form-style-1">
	<h2>Delete Account</h2>	
    <li><label>Username<span class="required">*</span></label><input type="text" name="name"></li>

    <li><label>Password<span class="required">*</span></label><input type="password" name="password"></li>

    <li><input type="submit" name="del" value="Delete"/></li>
</ul>
</form>



</body>
</html>