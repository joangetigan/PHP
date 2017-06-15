<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Lora" rel="stylesheet">

	<style type="text/css">
	body {
		font-family: 'Montserrat', sans-serif;
	}
	h2, h3 {
		font-family: 'Lora', serif;
	}
	h3 {
		color: #7ab829;
	}
	button {
		color: #7ab829;
		font-size: 1em;
		background-color: white;
		padding: 5px 30px;
		border-radius: 5px;
		text-align: center;
		margin-bottom: 50px;
		box-shadow: none;
		border: 1px solid #7ab829;
		width: 50%;
	}
	button:hover {
		color: white;
		background-color: #7ab829;
		text-decoration: none;
	}
	</style>
</head>

<body>
<div class="menu container">	
	<h2>Menu</h2>
	
	<?php 
	function create_dropdown($name,$options) {
		echo "<select name='$name'>";
			echo "<option>All</option>";
			foreach ($options as $value) {
				if(isset($_POST[$name]) && $_POST[$name]==$value) {
				echo "<option selected value='$value'>".$value."</option>";
				} else {
				echo "<option value='$value'>".$value."</option>";
				}
			}
		echo "</select>";
	}

	$menu = [
		['img' => "<img src='menu/breakfast1.jpg' class='img-thumbnail'>",
		'name' => '<h3>Lumberjack Breakfast</h3>',
		'price' => '&#8369 125.00',
		'desc' => '<p>With 3 extra large farm-fresh eggs, choices of applewood-smoked bacon, plus 3 Brioche french toast slices.</p>',
		'set' => 'breakfast'],

		['img' => "<img src='menu/breakfast2.jpg' class='img-thumbnail'>",
		'name' => '<h3>Israeli Breakfast</h3>',
		'price' => '&#8369 125.00',
		'desc' => '<p>Fresh bread, a variety of hard and soft cheeses, fresh juice, olives, jam and butter are all regulars on the Israeli breakfast plate.</p>',
		'set' => 'breakfast'],

		['img' => "<img src='menu/breakfast3.jpg' class='img-thumbnail'>",
		'name' => '<h3>Polish Breakfast</h3>',
		'price' => '&#8369 125.00',
		'desc' => '<p>Traditional Polish breakfast consists of scrambled eggs covered with slices of custom-made kielbasa and joined by two potato pancakes.</p>',
		'set' => 'breakfast'],

		['img' => "<img src='menu/lunch1.jpg' class='img-thumbnail'>",
		'name' => '<h3>Country House Salad with Grilled Chicken</h3>',
		'price' => '&#8369 125.00',
		'desc' => '<p>Country House Salad with grilled chicken and lots of fixin’s. Served with your choice of dressing and either a Baked Sweet Potato or Baked Potato or a Cup of Soup.</p>',
		'set' => 'lunch'],

		['img' => "<img src='menu/lunch2.jpg' class='img-thumbnail'>",
		'name' => '<h3>Grilled Pork Chops</h3>',
		'price' => '&#8369 125.00',
		'desc' => '<p>Two bone-in Grilled Country Pork Chops with choice of two Country Vegetables plus made-from-scratch Buttermilk Biscuits or Corn Muffins.</p>',
		'set' => 'lunch'],

		['img' => "<img src='menu/lunch3.jpg' class='img-thumbnail'>",
		'name' => '<h3>Fish Fry</h3>',
		'price' => '&#8369 125.00',
		'desc' => '<p>Four Cod fillets, hand-dipped in our own special batter and fried. We suggest enjoying them with Homestyle Fries and Cole Slaw.</p>',
		'set' => 'lunch'],
	];


	echo "<form method='POST' action=''>";
		$category = array_column($menu, 'set');
		$category = array_unique($category);
		create_dropdown('select',$category);
		echo "<input type='submit' name='submit' value='Submit'>";
	echo "</form>";


	echo "<div class='row'>";
	foreach ($menu as $item) {

	if (!isset($_POST['submit']) || $item['set']==$_POST['select'] || $_POST['select']=='All') {
		echo "<div class='col-md-7'>";
			echo $item['img'];
			echo $item['name'];
			echo $item['price'];
			echo $item['desc'];
			echo "<button>"."ADD TO ORDER"."</button>";
		echo "</div>";
		}
	}
	echo "</div>";



	 ?>

</div>
		
</body>
</html>