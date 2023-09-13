<?php
#simple Interest using Fuction
function simpl_Interest($p,$r,$t){

    $si=$p*$r*$t/100;

    return $si;

}
$p=readline("Enter the Principal Amount:");
$r=readline("Enter the Rate OF Amount:");
$t=readline("Enter the Total OF Amount:");

$res=simpl_Interest($p,$r,$t);

echo"$res";


?>