<?php

// Write a PHP program to enter marks of five subjects Physics, Chemistry, 
// Biology, Mathematics and Computer, calculate percentage and grade by if 
// else 


//Input marks

$phs=readline("Enter the Physics Marks:");
$came=readline("Enter the Physics Marks:");
$bio=readline("Enter the Physics Marks:");
$maths=readline("Enter the Physics Marks:");
$com=readline("Enter the Physics Marks:");

// Total and Percentage of Subjects

$tot=$phs+$came+$bio+$maths+$com;
$per=($tot/5);

//condtion

if ($per >=95 || $per > 85) 
{
    // echo"A Grade";
    $grade="A";
}
elseif($per >=85 || $per > 70)
{
    // echo"B Grade";
    $grade="B";
}
elseif($per >=70 || $per > 60)
{
    // echo"C Grade";
    $grade="C";
}
elseif($per >=60 || $per > 50)
{
    // echo"D Grade";
    $grade="D";
}
else{
    // echo"E Grade";
    $grade="E";
}

    // OUTPUT PRINTED

echo"The Total Of The MArks :$tot\n";
echo"\tThe Percentage :$per%\n";
echo"\t\tThe Grade $grade:";
?>