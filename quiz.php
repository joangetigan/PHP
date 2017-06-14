<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
	#ask, #input, #btn {
		display: none;
	}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<body>
<button id="start">Start</button>

<span id="ask"></span><br>
<input type="text" id="input"><br>
<button id="btn">Next</button>


<script type="text/javascript">
var questions = 
	['Question1: 1+2 = ?',
	'Question2: 1+3 = ?',
	'Question3: 1+4 = ?',
	'Question4: 1+5 = ?',
	'Question5: 1+6 = ?'];

var answers = [3,4,5,6,7];
var correct = 0;

document.getElementById('start').onclick = function() {
	document.getElementById('start').style.display = "none";
	document.getElementById('ask').style.display = "block";
	document.getElementById('ask').innerHTML = questions[0];
	document.getElementById('input').style.display = "block";
	document.getElementById('btn').style.display = "block";


	var counter = 0;
	document.getElementById('btn').onclick = function() {

		var answer = parseInt(document.getElementById('input').value);
		console.log('correct answer: '+answers[counter]);
		if(answer==answers[counter]) {
			correct+=1;
		}
		console.log(correct);		
		
		document.getElementById('input').value = ' ';
		counter++;

		if (counter<5) {	
			document.getElementById('ask').innerHTML = questions[counter];
		} else {
		document.getElementById('ask').innerHTML = 'Thank you for answering.<br>Your score is '+correct;
		document.getElementById('input').style.display = "none";
		document.getElementById('btn').style.display = "none";
		}
	
	}


}






</script>
</body>
</html>