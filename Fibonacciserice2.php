<?php
// Write a program in PHP to print Fibonacci series. 0,1,1,2,4,8,16,32,64,128, 

$n=readline("Enter the N Numbers");
$n1=0;$n2=1;$n3=0;
echo"$n1,";
echo"$n2,";

for($i=2;$i<$n;$i++)
{
    $n3=$n1+$n2;
    $n1=$n2;
    $n2=$n3;
    echo"$n3,";
    $n1=$n2;
    $n2=$n3;
}
?>