<?php

// Factorial no


// $n=readline("Enter the Number :");

// $fact=1;

// if($n<0)
// {
//     echo"Error! Undefine Varaible :";
// }
// else
// {
//     for($i=1;$i<$n;$i++)
//     $fact=$fact*$i;
// }
// echo"$n=>$fact";

$n=readline("Enter the N number :");
function Factorial($n)
{
$fact=1;

    if($n<0)
    {
        echo"Error! Undefine Varaible :";
    }
    else
    {
        for($i=1;$i<=$n;$i++)
            $fact=$fact*$i;
    }
    echo"The Factorial No Is $n=>$fact";
}
$res=Factorial($n);
echo"$res";








?>