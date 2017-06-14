<?php 
function flames($name1,$name2) {
	$name1_array = str_split(strtolower($name1));
	$name2_array = str_split(strtolower($name2));

	$count = 0;
	for ($x=0; $x < count($name1_array); $x++) { 
		$has_match = 'false';
		for ($i=0; $i < count($name2_array); $i++) { 
			if ($name1_array[$x] == $name2_array[$i]) {
				$has_match = 'true';
			}
		}
		if ($has_match == 'false') {
			$count++;
		}
	}

	return $count;

}


 ?>