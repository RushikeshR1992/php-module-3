<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_fun_radio/php</title>
</head>
<body>

<form action="" method="post">
<input type="radio" name="choice" value="Display">Display<br>
<input type="radio" name="choice" value="unique">Unique<br>
<input type="radio" name="choice" value="sort">Sort <br>
<input type="radio" name="choice" value="reverse">reverse <br>
<input type="radio" name="choice" value="add"> Sumation <br>
<input type="radio" name="choice" value="search"> Search <br>
<input type="submit" value="submit">
</form>

</body>
</html>


<?php
if($_POST){
    $value=$_POST['choice'];
    $arr=array(1,2,3,1,2,3,4,5,1,2,3,4,5,6,5,4,7,8,9,4);
    switch($value){

        case 'Display':
                foreach($arr as $values)
                {
                    echo"<br> $values";
                }
            break;
        
        case 'unique':
            
                $res=array_unique($arr);
                print_r($res);
            break;
        case 'sort':

                sort($arr);
                foreach($arr as $values)
                {
                    print_r($values);
                }
                
            break;
        case 'reverse' :

                $res=array_reverse($arr);
                print_r($res);

            break;
        
        case 'add':

                $res=array_sum($arr);
                print_r($res);

            break;

        case 'search':

                $res=array_search(3,$arr);
                print_r($res);

    }

    
}  
?>