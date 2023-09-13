<?php
// $sum=0;
// $n=readline("Enter the Number:");
// for($i=1;$i<$n;$i++)
// {

//     if($i%2==1)
//     {
//         echo("$i");  
//         $sum=$sum+$i;  
//     }
// }

// echo"=$sum";

$sum=0;
$n=[12,23,20,22,25,28,29,30,34,40,54,55];
$i=0;
while($i<count($n))
{
    if($n[$i]%2==0)
    {
        echo$n[$i]."\n";
        $sum=$sum+$n[$i];
    }
    $i=$i+1;
}
echo"====\n$sum";
?>
