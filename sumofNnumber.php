<?php
// without using fuction
// $n=readline("Enter the N Number: ");

// $i=0;
// $sum=0;

// while($i<=$n)
// {
//     $sum=$sum+$i;
//     $i++;   
// }
// echo"The Total Number OF Sumation :$sum ";

// with using fuction

function sumatinNaturalnum($n)
{
    $sum=0;
    $i=0;
    while($i<=$n)
    {
        $sum=$sum+$i;
        $i++;
    }
    return $sum;
      
}
  $sum=sumatinNaturalnum($n);
  {

  $num=readline("Enter the Any Number:");
  echo"The Sumation OF Natural Number:$sum";
  }


?>