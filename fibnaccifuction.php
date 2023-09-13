<?php
// Fibonacci Series in using Fuction



function displayData($n1=0,$n2=1,$n3=0)
{
    $n=readline("Enter the N Number");
    echo"$n1";
    echo"$n2";

    while($n3<$n)
    {
        $n3=$n1+$n2;
        echo"$n3";
        $n1=$n2;
        $n2=$n3;
    }
}


?>