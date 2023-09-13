<?php

//Sumation Of Evevn Number 
// $n=readline("Enter the Any Number: ");
// $i=0;
// $sum=0;
// while($i<=$n)
// {
//     if($i%2==0)
//     {
//         echo"The even Number :$i\n";
//         $sum=$sum+$i;
//     }
//     $i++;
// }
// echo"Sumation Of Even Number: $sum";

function addNumber(...$num)
{
    $sum=0;
    $i=0;
    
    foreach($num as $i)
    {
        if($i%2==0)
        {
            return ;
        }
    }
    $i++;
}
$res=addNumber();
echo"$res";

?>