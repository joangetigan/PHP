<!DOCTYPE html>
<html>

<head>
<title>Zodiac</title>
<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<style type="text/css">
	body {
		font-family: 'Pacifico', cursive;
		font-size: 1.5em;
		line-height: 2em;
	}
	.container {
		background-color: #FDE3A7;
		border: 1px solid #FDE3A7;
		margin-top: 20px;
		margin-bottom: 20px;
		width: 350px;
		padding-bottom: 20px;
	}
	#button {
		background-color: #F2784B;
		padding-left: 15px;
		padding-right: 15px;
	}
</style>

</head>


<body>
<div class="container">
<h1>Know your Zodiac</h1>
<form method="POST">
	Birthday:<br>
		<input type="text" name="bday" placeholder="dd/mm/yyyy"><br><br>
		<input type="submit" name="submit" value="Submit" id="button"><br><br>
</form>

<?php

if(isset($_POST['submit'])) {
	$input = $_POST['bday'];
	//February 3, 2016	 dd/mm/yyyy format
	
	if ($input=="" || strlen($input)!=10) {
		echo "Please input a valid date";
	}else {

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

		if ($dd>21 && $mm==12) {
			echo "<br> Zodiac is "."<h3>".$zodiac[0]."</h3>";
		} else {

			if ($dd < $zodiac_border_days[$mm-1]) {
				echo "<br> Zodiac is "."<h3>".$zodiac[$mm-1]."</h3>";
			} else {
				echo "<br> Zodiac is "."<h3>".$zodiac[$mm]."</h3>";
			}	

		}
	}

}

 ?>


</div>
</body>
</html>