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
	['img' => "<img src='vegan/breakfast1.jpg' class='img-thumbnail'>",
	'name' => '<h3>Fluffy Pancakes</h3>',
	'desc' => '<p>Going vegan doesn\'t mean you have to forgo a stack of pillowy pancakes. Here, Fat Free Vegan recreates them with a surprising secret ingredient—sparkling water—which gives these vegan pancakes an airy texture.</p>',
	'set' => 'breakfast'],

	['img' => "<img src='vegan/breakfast2.jpg' class='img-thumbnail'>",
	'name' => '<h3>Strawberry Cream Cheese Stuffed French Toast</h3>',
	'desc' => '<p>Freshly chopped strawberries, lemon juice, cream cheese with cinnamon, maple syrup and vanilla extract.</p>',
	'set' => 'breakfast'],

	['img' => "<img src='vegan/breakfast3.jpg' class='img-thumbnail'>",
	'name' => '<h3>Coconut Cinna-Ring</h3>',
	'desc' => '<p>Everyone will want seconds of these vegan cinnamon rolls. This brunch treat can be made ahead of time, stashed in the fridge, and then popped in the oven to bake when your friends arrive.</p>',
	'set' => 'breakfast'],

	['img' => "<img src='vegan/lunch1.jpg' class='img-thumbnail'>",
	'name' => '<h3>Spiralized Asian Quinoa Salad with Peanut Dressing</h3>',
	'desc' => '<p>Get in your veggies with this Asian Quinoa Salad. It soaks up the flavor of the peanut dressing as it sits, so it’s perfect for making at the beginning of the week and having for lunch for days!</p>',
	'set' => 'lunch'],

	['img' => "<img src='vegan/lunch2.jpg' class='img-thumbnail'>",
	'name' => '<h3>Thai Tempeh Buddha Bowl from Fit Mitten Kitchen</h3>',
	'desc' => '<p>Buddha bowls are all the rage, for good reason. Just stuff a bunch of nourishing ingredients into a bowl (or container) and you’re good to go. This makes it easy for you by giving you the perfect high-protein Buddha bowl formula.</p>',
	'set' => 'lunch'],

	['img' => "<img src='vegan/lunch3.jpg' class='img-thumbnail'>",
	'name' => '<h3>Spicy Buffalo Chickpea Wraps from Minimalist Baker</h3>',
	'desc' => '<p>Sick of sandwiches? Go for a wrap. The spicy chickpeas will give you a mid-day kick and will definitely fill you up. Pack this with a piece of fruit or some veggies!</p>',
	'set' => 'lunch'],
];


echo "<form method='POST' action=''>";
	$category = array_column($menu, 'set');
	$category = array_unique($category);
	create_dropdown('select',$category);
	echo "<input type='submit' name='submit' value='Submit'><br><br>";
echo "</form>";

echo "<div class='row'>";
foreach ($menu as $item) {
if (!isset($_POST['submit']) || $item['set']==$_POST['select'] || $_POST['select']=='All') {
	echo "<div class='col-md-4'>";
		echo $item['img'];
		echo $item['name'];
		echo $item['desc'];
		echo "<button>"."ADD TO ORDER"."</button>";
	echo "</div>";
	}
}
echo "</div>";


?>