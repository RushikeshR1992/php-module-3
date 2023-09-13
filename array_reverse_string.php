<?php
#array reverse without using fuction 


// $a=array(12,45,64,78,21,32);
// $size=sizeof($a)-1;

// for ($i=$size;$i>=0;$i--)
// {
//     print_r("$a[$i],");
   
    
// }


# array string without using fuction

$str="Rushikesh";


$count=strlen($str)-1;

for($i=$count;$i>=0;$i--)
{
    echo"$str[$i]";
    
}
echo "\n";
echo"$str";

echo"String_split using fcution :";

$spt=str_split($str[$i]);

// echo"<pre>";

print_r($spt);

echo"</pre>";




?>