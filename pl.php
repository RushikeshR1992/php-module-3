<?php

#Palindrome No Using Fuction 121 Output=121

// $n=readline("Enter the N Number:");

// $c=$n;
// $s=0;

// while($n>0)
// {
//     $r=$n%10;
//     $s=$r+($s*10);
//     $n=$n/10;
// }
// if($c==$s)
// {
//     echo"The Number is Palindrome No..";
// }
// else
// {
//     echo"The Number Is Not Palindrome no..";
// }


#using Fuction Palindrome No

$n=readline("Enter the no:");
function fun($n)  {

    
    $c=$n;
    $s=0;
 
    while($n>0)
    {
        $r=$n%10;
        $s=$r+($s*10);
        $n=$n/10;
    }
    if ($c==$s) {
        echo"The No Is Palindrome No:";
    }
    else
    {
        echo"The No Is Not Palindrome No:";
    }
}
$res=fun($n);


    





?>