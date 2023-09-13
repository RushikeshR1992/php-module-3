<?php

function odd($x){
    return $x & 1;
}
function even($x){
    return $x & 1;
}
$arr1 = array(10,11,12,13,14,15,16);
$arr2 = array('a'=> 1, 'b' => 2, 'c'=>3, 'd'=>4,'e'=>5, 'f'=>6);

echo"Even Values From Arr1\n";
#filtering only even values from array1
print_r(array_filter($arr1,"even"));

echo"Odd Values From Arra2 \n";
#filtering only odd Values From array2
print_r(array_filter($arr2,"odd"));
?>