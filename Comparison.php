<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison </title>
</head>
<body>
<h1 align ="center">Hello This Buhary Asmath this is First Programming in PHP</h1>
    <h1 align ="center">Hello This Buhary Asmath this is First Programming in PHP</h1>
    <h3 align ="center">Comparison </h3>


<?php

/*

Operator |  operation
>           Greater Than   
<           Less Than
>=          Greater than or equal
<=          Less than or equal
==          Equal      --we can check the both values Equality
===         Identical    -- we can check Equal and same data type
!           Not Equal   -- differnt values check 

*/

$a=12;
$b=20;

if($a>$b)
{
    echo "$a is Greater than $b";
}
else
{
    echo "$b is Greater than $a";

}


$maths=34;
$science=41;

if($maths>=35 && $maths<=100)
{
    echo "<br>Maths Pass";

    if($science>=40&&$science<=100)
    {
        echo "<br> Science Pass";
    }
    else
    {
        echo "<br> Science Fail";

    }
}
else
{
    echo "<br> Maths Fail";

}

?>

</body>
</html>