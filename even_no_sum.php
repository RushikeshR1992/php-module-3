<?php
$sum=0;
$n=readline("Enter the Number:");
for($i=1;$i<$n;$i++)
{

    if($i%2==0)
    {
        echo("$i");  
        $sum=$sum+$i;  
    }
}

echo"=$sum";