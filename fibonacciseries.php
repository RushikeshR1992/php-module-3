<?php
// Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,34

// $t1=0;
// $t2=1;

// $n=readline("Enter the N number :");

// echo"$t1,";
// echo"$t2,";
// for($i=2;$i<=$n;$i++)
// {
//     $t3=$t1+$t2;
//     echo"$t3,";
//     $t1=$t2;
//     $t2=$t3;
// }

# Fibonacci series using Fuction 


  
/* Recursive function for fibonacci series. */  
// What is Recursive Fuction:
// Recursive fuction is to call itself repeatedly untill the certain conditon
$n=readline("Enter th N number :"); 
function fibo($n){

    if($n==0)
    {
        return 0;
    }
    else if($n==1)
    {
        return 1;
    }
    else
    {
        return (fibo($n-1)) + (fibo($n-2));
    }
}
    for ($i=0; $i < $n; $i++)  
    {    
        #var_dump(fibo($i));
        echo fibo($i);
        // var_export(fibo($i));
    }


?>