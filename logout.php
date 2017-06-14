<?php 
session_start();

session_destroy();
echo $_SESSION['user']." is logged out successfully";


 ?>