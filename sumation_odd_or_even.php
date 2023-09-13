<?php

// ***********************************************
# Odd Even NUmber using Fuction
// function oddeven($n){
    
//     if($n%2==0)
//     {
//         echo"The NUmber is Even NUmber";
//     }
//     else{
//         echo"The NUmber Is odd NUmber:";
//     }
// }
// **********************************************



// $n=readline("Enter the NUmber :");

// $res=oddeven($n);
// echo"$res";


// Sumation OF odd number
// $sum=0;
// $n=readline("Enter the N Number :");

//     for($i=0;$i<=$n;$i++)
//     {
//         {
//             echo",$i";
//             $sum=$sum+$i;
//         }
       
//     }
//     echo"=$sum"


// **********************************************


#sumation OF Odd Number and Even Number :


// $n=readline("Enter the N NUmber :");
// $odd=0;
// $even=0;
//     for ($i=0; $i <$n ; $i++) { 
        
//         if($i%2==0)
//         {
//             $even=$sum+$i;
            
//             }
//         else
//         {
            
//             $odd=$sum+$i;
//         }

//     }
//     echo"Sumation OF even NUmber:=$even";
//     echo"Sumation OF odd NUmber:=$odd";

// ********************************************




#sumation OF Odd Numbers :
function OddSum($n){
$odd=0;
$even=0;
   for ($i=0; $i <=$n ; $i++) { 
        if($i%2==0)
        {
            $even=$even+$i;
        }
        else{
            $odd=$odd+$i;
        }
   }
   echo"Sumation OF odd Number :=$odd \n";
   echo"Sumation Of odd NUmber :=$even \n";
}

$n=readline("Enter the N Number :");
$res=OddSum($n);
echo"$res";
?>