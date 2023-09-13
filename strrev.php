<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String in using Fuction php</title>
</head>
<body>

<h1>Reverse A String</h1>
<form action="" method="POST">
    <label>Enter the String :</label>
    <input type="text" name="str" placeholder="String">
    <input type="Submit" value="submit">
</form>
    
</body>
</html>

<?php
//Global Variable :post, get, serever, session, cookies 
if($_POST)
{
    $val=$_POST['str'];
    $len=strlen($val);
    $size=$len-1;
    for($i=$size;$i>=0;$i--)
    {
        echo"$val[$i]";
    }
}

?>