<?php

// #calculation using  for  "if while loop and switch case"


while(1)
{
   

    $ch=readline("Enter an operation (+,-,*,/) If Want to exit press 'x' ");

    if($ch=='x')
    {
        exit(0);
    }
    $a=readline("Enter the A:");
    $b=readline("Enter the B:");

    switch ($ch) {
        case '+':
            $c= $a+$b;
            echo"Addition For :$c\n";
            break;
        
        case '-':
            $c=$a-$b;
            echo"Subtraction For :$c\n";
            break;

        case '*':
            $c=$a*$b;
            echo"Multiplication For :$c";
            break;

        case '/':
            $c=$a/$b;
            echo"Subtraction For:$c";
            break;

        case '%':
            $c=$a%$b;
            echo "Modulation For :$c";
            break;
        default:
            echo"Error! please write a valid no \n";
            break;
    }
}


?>