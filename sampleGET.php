<?php 
echo "Input: ";

echo htmlspecialchars($_GET['input1']);  
//append url with ?input1=hello
//can input <hr> in url
//to sanitize the user input para di mabago ang page -htmlspecialchars
//use %20 for space (name=Rody%20Duterte)

echo "<br>";
echo "Hello ";
echo $_GET['name'];
//echo shortcut <?=   \?\> but server dependent



 ?>