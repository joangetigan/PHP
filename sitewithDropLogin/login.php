<?php 
session_start();

$users = [
	['username' => 'admin', 'password' => 'secret'],
	['username' => 'joan', 'password' => 'password']
];

if (isset($_POST['login'])) {
	foreach ($users as $user) {
		if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
			header('location:site.php');
		}
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In</title>

<style type="text/css">
.form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=password] {
	box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=password]:focus {
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 input[type=submit] {
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover {
	background: #4691A4;
	box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
</style>
</head>

<body>
<form method="POST">
<ul class="form-style-1">
    <li><label>Username <span class="required">*</span></label><input type="text" name="username"></li>
    <li><label>Password <span class="required">*</span></label><input type="password" name="password"></li>   
    
    <li>
        <input type="submit" name="login" value="Submit" />
    </li>
</ul>
</form>

</body>
</html>
