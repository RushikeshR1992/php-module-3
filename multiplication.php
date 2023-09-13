<?php
function product($array)
{
    $res=array_product($array);
    return $res;
}
$array=array(5,4,3,2,1);

print_r(product($array));







// $a=array(1,2,3,4,5);
// $b=array(5,4,3,2,1);
// function mul($a,$b)
// {
//     return($a*$b);
// }
// $c=array_map("mul",$a,$b);
// print_r($c);


// 1 to 10 number printed


// $n=10;
// $sum=0;
// $i=1;
// do {
//     echo"$sum,";
//     // array_pop($sum)
//     $sum=$sum+1;
// } while ($sum<=10);



// for ($i=1; $i < $n; $i++) { 
//     $sum=$sum+$i;
// }


// $a=array(15,12,13,25,27,36,18);
// $b=array(10,15,12,20,30,50,40);
// function array_add($p,$q){
// return($p+$q);
// }
// $c=array_map("array_add",$a,$b);
// print_r($c);
?>