<?php 
// lagi na gamitin ang && at ||
// precedence: &&  =  AND

// $boo1 = true && false;
// var_dump($boo1);

// $boo1 = true AND false;
// var_dump($boo1);


// $count = 1;
// while ($count <= 12) {
// 	echo "$count times 12 is " . $count * 12 . "<br>";
// 	++$count;
// }


// $count = 15;
// do
// {
// 	echo "$count times 12 is " . $count * 12 . "<br>";
// 	++$count;
// } while ($count <= 12)



// $days = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

// $count = 1;
// while ($count <= 28) {
// 	echo "$count) " . $days[$count%7] . "<br>";
// 	++$count;
// }


// $count = 1;
// while ($count <= 12) {
// 	echo "$count squared is " . $count*$count . "<br>";
// 	$count++;
// }



// for ($count=1; $count < 13; $count++) { 
// 	echo "$count squared is " . $count*$count . "<br>";
// }



// $evensum=0;
// $oddsum=0;

// for ($x=1; $x < 51; $x++) { 
// 	if ($x%2==0) {
// 		$evensum += $x;
// 	}else {
// 		$oddsum += $x;
// 	}
// }
// echo "The sum of all even numbers less than 50 is $evensum <br>";
// echo "The sum of all odd numbers less than 50 is $oddsum";



// $x=1;
// while ($x<=50) {
// 	if ($x<=15) 
// 		echo "$x) " . $x*2 . "<br>";
// 	elseif ($x<=35)
// 		echo "$x) " . (30-$x)/2 . "<br>";
// 	else 
// 		echo "$x) " . ($x+6) . "<br>"; //pag plus kelangan may () kasi mas mataas ang precedence ng . sa +

// 	$x++;
// }



// $factorial = 1;

// for ($x=1; $x<7; $x++) 
// {
//   $factorial = $factorial * $x;
//   echo "Factorial of $x is $factorial" . "<br>";
// }


// $count = 1;
// while ($count < 7) {
// 	// $factorial = $factorial * $x;
// 	$factorial *= $count;
// 	echo "Factorial of $count is $factorial" . "<br>";
// 	$count++;
// }



$string = "The quick brown fox.";
// echo $string[4];  //4th character
// echo strlen($string);  //number of characters

// $count=0;								display one letter per row
// while ($count < strlen($string)) {
// 	echo "$string[$count] <br>";
// 	$count++;
// }


// for ($count=0; $count < strlen($string); $count++) {		jejemon 
// 	if($count%2==1){
// 		echo strtoupper($string[$count]);
// 	}else{
// 		echo strtolower($string[$count]);
// 	}
// }


// $counter=0;
// for ($count=0; $count < strlen($string); $count++) { 

// 	if (($string[$count]=='a')||($string[$count]=='e')||
// 		($string[$count]=='i')||($string[$count]=='o')||
// 		($string[$count]=='u')) {

// 		$counter++;
// 	}

// }
// echo "number of vowels: $counter";



	
	


		
		
 ?>