<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<h3>Guess the number!</h3>
<input type="text" id="input">
<button id="check">Check</button>
<h3 id="greet"></h3>


<script type="text/javascript">
	var number = Math.floor((Math.random() * 100) + 1);

	document.getElementById('check').onclick = function() {
		var input = parseInt(document.getElementById('input').value);

		if (number>input) 
			document.getElementById('greet').innerHTML = 'Higher!';
		else if(number<input)
			document.getElementById('greet').innerHTML = 'Lower!';
		else
			document.getElementById('greet').innerHTML = 'Correct!';
	}
	

</script>


</body>
</html>