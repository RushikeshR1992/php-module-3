<?php
//parameter reised fuction in Addition

function addNumber(...$num)
{
    
    $sum=0;
    foreach($num as $n)
    {
        $sum=$sum+$n;
    }
    return $sum;
    
}
$res=addNumber(25,25,25);
print("Addition of Number are :$res");



?>