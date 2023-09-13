<?php

// function column($detail)
// {
//     $res=array_column($detail,'name','roll',);

//     return $res;
// }

// //driver Code

// $detail =array(
//     array('roll'=>5,
//     'name'=>'Akash',
//     'hobby'=>'Cricket',
// ),

//     array(
//         'roll'=>1,
//         'name'=>'Rushi',
//         'hobby'=>'Watching Movies',
//     ),
//     array(
//         'roll'=>2,
//         'name'=>'Vishal',
//         'Hobby'=>'Cricket',
//     ),
//     );

//     print_r(column($detail));



// array_combine /array_merge Diffrence in Program

$array1 = array('1','2','3','4');
$array2 = array('C/C++','PHP','PYTHON','javascript');
$array3 = array('appale','Banana','lichi','mango');
$array4 = array('Rushi','Pooja','Smit','Keyur');

// $final=array_combine($array1,$array2);

$final = array_merge($array1,$array2,$array3,$array4);
print_r($final);

?>