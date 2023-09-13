<?php

# Armstrong Number is that is equal to the sum of cubes of its digits. for example 153,370,371,407 Are the Armstrong Number

// $sum=0;

// $n=readline("Enter the Number :");

// $temp=$n;

// while($n>0)
// {
//     $r=$n%10;
//     $sum=$sum+($r*$r*$r);
//     $n=$n/10;
// }
// if($temp==$sum)
// {
//     echo"The number is Armstrong No :";
// }
// else
// {
//     echo"The Number is Not Armstrong No:";
// }

$n=readline("Enter the  Number :");

function arm($n)
{
    $sum=0;
    $temp=$n;
    while($n>0)
    {
        $r=$n%10;
        $sum=$sum+($r*$r*$r);
        $n=$n/10;
    }
    if($temp==$sum)
    {
        echo"The Number is Armstrong No:";
    }
    else
    {
        echo"The Number  is Not Armstrong No:";
    }
}
    $res=arm($n);
    echo"$res";
?>