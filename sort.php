<?php

$array=array('banana','orange','apple','mango','duhat','bayabas');

echo "Unsorted array is: ";
echo "<br />";
print_r($array);


for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if(strcmp($array[$i], $array[$i+1]) > 0) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }
    }
}

echo "Sorted Array is: ";
echo "<br />";
print_r($array);

?>