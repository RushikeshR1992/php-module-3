<?php
// Fibonacci Serices => 0,1,1,2,3,5,8.....


// echo $n=readline("Enter the N Number:");
// $t1=0;
// $t2=1;

// echo"$t1,$t2";


// for($i=0;$i<$n;$i++)
// {

//     $t3=$t1+$t2;
//     $t1=$t2;
//     $t2=$t3;
//     echo"$t3";
// }

$n=readline("Enter the N Number");

    
        $n1=0;
        $n2=1;
        $n3=0;
        echo"$n1,";
        echo"$n2,";

        for($i=2;$i<$n;$i++)
        
        // while($n3>100)
        {
            $n3=$n1+$n2;
            echo"$n3,";
            $n1=$n2;
            $n2=$n3;
        }
    

?>