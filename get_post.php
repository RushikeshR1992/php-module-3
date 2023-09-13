<?php

if(isset($_GET['name'])){

    $name=$_GET['name'];
    echo "$name";
    
}
?>

<form method="get">
    Name: <input type="textbox" name="Name">
    <input type="submit">


</form>