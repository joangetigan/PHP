<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<input type="text" id="input1">
<input type="text" id="input2">
<!-- <button id="add">Add</button> -->
<!-- <button id="subtract">Subtract</button> -->
<button id="compare">Eval</button>
<h3 id="greet"></h3>



<script type="text/javascript">
	document.getElementById('compare').onclick = function() {

		var input1 = parseInt(document.getElementById('input1').value);
		var input2 = parseInt(document.getElementById('input2').value);

		if (input1>input2) 
			document.getElementById('greet').innerHTML = 'input1 is greater than input2';
		else if(input1<input2)
			document.getElementById('greet').innerHTML = 'input1 is less than input2';
		else
			document.getElementById('greet').innerHTML = 'input1 is equal to input2';
		
	}

	// document.getElementById('subtract').onclick = function() {
	// 	var input1 = document.getElementById('input1').value;
	// 	var input2 = document.getElementById('input2').value;
		
	// 	document.getElementById('greet').innerHTML = 'Difference is ' + (parseInt(input1) - parseInt(input2));
	// }
</script>
</body>
</html>