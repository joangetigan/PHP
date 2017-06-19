<?php 

require_once "register.php";

$member = $new_user[$_GET['id']];
$name = $member['name'];
$email = $member['email'];
$pic = $member['pic'];

echo "<div>";
echo "$name<br>
	$email<br>
	<img src='$pic' width=50px height=50px><br><br>";
echo "</div>";



 ?>