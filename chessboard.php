<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.box1 {
		background-color: green;
		width: 50px;
		height: 50px;
		float: left;
	}
	.box2 {
		background-color: white;
		width: 50px;
		height: 50px;
		float: left;
	}
	.clear {
		display: block;
		content: "";
		clear: both;
	}
	</style>

</head>


<body>
<div class="container">
	<input type="text" id="input">
	<button id="loop">Loop</button>
	<div id="box"></div>
</div>


<script type="text/javascript">
	document.getElementById('loop').onclick = function() {
		var input = parseInt(document.getElementById('input').value);

// loop for *
		// for (i=0; i < input; i++) {
		// 	document.getElementById('greet').innerHTML += '* ';
		// }

// loop with CSS
		// for (i=0; i < input; i++) {
			document.getElementById('box').innerHTML = ' ';
		// }

		// for (i=0; i < input; i++) {
		// 	document.getElementById('greet').innerHTML += '<div class="box"></div>';
		// }


// loop for chessboard
		for (i=0; i < input; i++) {
			for (j=0; j < input; j++) {

				if((i+j)%2==0) {
					document.getElementById('box').innerHTML += '<div class="box1"></div>';
				}else {
					document.getElementById('box').innerHTML += '<div class="box2"></div>';
				}
			}
			document.getElementById('box').innerHTML += '<div class="clear"></div>';
		}


	}
	

</script>


</body>
</html>