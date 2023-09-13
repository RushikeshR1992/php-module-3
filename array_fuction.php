<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_fuction /php</title>
</head>
<body>
    <form action="" method="post">
        <input type="radio" name="choice" value="display">Display Data<br/>
        <input type="radio" name="choice" value="sort">Sort Data<br/>
        <input type="radio" name="choice" value="duplicate">Duplicate Data<br/>
        <input type="radio" name="choice" value="delete">Delete Data<br/>
        <input type="radio" name="choice" value="search">Search Data<br/>
        <input type="Submit" value="submit">
    </form>
</body>
</html>
<?php

if($_POST){
    $val=$_POST['choice'];
    $country =array("Pakistan","INDIA","Peru","USA","UK","Pakistan","INDIA","Chilli");
    switch ($val) {
        case 'display':

                foreach($country as $values)
                {
                    echo"<br>".$values;
                }

            break;

        case 'sort':

                sort($country);
                foreach($country as $values)
                {
                    echo"<br>",$values;
                }

            break;

        case 'duplicate':
                
                
                echo"<pre>";
               
                print_r(array_unique($country));
               
                echo"</pre>";

            break;
        case 'delete':

                print_r("The Country Is  ");
                echo array_pop($country); 
                echo"<pre>";
                print_r($country);
                echo"<pre>";
                
            break;
        
        case 'search':

                echo array_search("Peru",$country);
        default:

            break;
    }
}

?>