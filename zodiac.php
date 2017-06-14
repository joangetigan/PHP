<!DOCTYPE html>
<html>

<head>
<title>Date</title>
</head>

<body>
<?php 
	$input = "30/12/2016";
	//February 3, 2016	 dd/mm/yyyy format

	$input = explode('/', $input);
	$dd = $input[0]/1;
	$mm = $input[1]/1;
	$yyyy = $input[2];

	$months = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December',
	];

	$zodiac = [
		'Capricorn',
		'Aquarius',
		'Pisces',
		'Aries',
		'Taurus',
		'Gemini',
		'Cancer',
		'Leo',
		'Virgo',
		'Libra',
		'Scorpio',
		'Sagittarius',
	];

	$zodiac_border_days = [
		20,
		19,
		21,
		20,
		21,
		21,
		23,
		23,
		23,
		23,
		22,
		22
	];

	echo $months[$mm-1].' '.$dd.', '.$yyyy;
	
	if ($dd < $zodiac_border_days[$mm-1]) {
		echo "<br> Zodiac is ".$zodiac[$mm-1];
	} else {
		echo "<br> Zodiac is ".$zodiac[$mm];
	}

 ?>


</body>
</html>