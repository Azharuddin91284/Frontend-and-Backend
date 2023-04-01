<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php building</title>
    <style>
        .container{
            background-color: pink;
            margin: auto;
            padding: 25px;
            box-sizing: border-box;
            width: 60%;
        }
    </style>
</head>
<body>
    <div class="container">
        This is what i wanted to show you.
    </div>

<?php

use JetBrains\PhpStorm\Language;

$num1=7;
$num2=8;
$sum=$num1+$num2;
echo $sum;
echo "<br>";
$languge= array("python","php","Nodejs");
echo count($languge);
echo "<br>";
echo var_dump($languge);
echo "<br>";
$n1=50;
if($n1>18){
    echo "Eligible for vote.";



}else{
    echo "Not eligible for vote.";
}
echo "<br>";
$Pi = 3.14;
define($Pi,3.14);
echo $Pi;
?>
    
    </body>
</html>