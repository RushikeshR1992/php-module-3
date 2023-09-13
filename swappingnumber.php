<?php

# Swapping Number without using third variable
function swapping($n1,$n2){

    $n1=$n1+$n2;
    $n2=$n1-$n2;
    $n1=$n1-$n2;

    echo"The After Swapping NUmber $n1:";
    echo"The After Swapping NUmber $n2:";

}


$n1=readline("Enter the First Number:");
$n2=readline("Enter the Second Number:");

$res=swapping($n1,$n2);

echo"$res";

?>