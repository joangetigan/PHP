<?php 
session_start();
//$_SESSION['username'] = $_POST['username'];		//never put password sa SESSION

$username =htmlspecialchars($_POST['username']);
$password =htmlspecialchars($_POST['password']);

if (authenticate($username,$password)) {
	echo "User is valid";

	$_SESSION['user'] = $username;

} else {
	echo "Incorrect login details";
}


function authenticate($username,$password) {
	if ($username == 'admin' && $password == 'secret') {
		return true;
	} else {
		return false;
	}
}

//session_unset();		target one to erase, empty () erases everything instantly
//session_destroy();	forget upon logout, can still use on the page e.g. ___ is logged 							out successfully


 ?>