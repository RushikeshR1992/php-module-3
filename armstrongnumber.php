<?php
// Armstrong Number is that is equal to the sum of cubes of its digits. for example 153,370,371,407 Are the Armstrong Number

$n=readline("Enter the N number");
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
        echo"The Numbers is Armstrong Number";
    }
    else
    {
        echo"The Number is Not Armstrong Number";
    }

?>