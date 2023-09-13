<?php
// The alphabet is made up of 26 letters, 5 of which are vowels (a, e, i, o, u) 
// and the rest of which are consonants.


$name=(string)readline("Enter the Character:");

$assci=ord($name);

print_r($assci);

if($assci == '65' || $assci == '69' || $assci == '73' || $assci== '79' || $ascci == '85')
{
    echo "It is Uppercase Vowel";
}else if ($assci == '97' || $assci == '101' || $assci == '105' || $assci == '111' || $assci == '117') {
    echo"Its Lowercase Vowel";

} else {
    echo"It's consonants";
}


// if($assci <= 65 || $assci >=90)
// {
//     echo"It is vowels:";
// }
// elseif($assci <= 97  || $assci >= 122)
// {
//     echo"It is consonants ";
// }
// else
// {
//     echo"Its is Undefing Values / Character:";
// }


?>