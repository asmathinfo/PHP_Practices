<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators </title>
</head>
<body>
    <h1 align ="center">Hello This Buhary Asmath this is First Programming in PHP</h1>
    <h1 align ="center">Hello This Buhary Asmath this is First Programming in PHP</h1>
    <h3 align ="center">Logical Operators</h3>



<?php

/*

&& and gate
|| or gate 
!  Not gate 

*/

$english = 58;
$maths = 48;
$science = 85;
$ict = 89;
$social = 89;

echo "<br>Total :".($english+$maths+$science+$ict+$social);   //Total 
echo "<br>Avarage :".($english+$maths+$science+$ict+$social)/5;   //Avarage 

// if marks 40 or gearter than 40
if($english>=40&&$maths>=40&&$science>=40&&$ict>=40&&$social>=40)  

// if its true and gate only works if coundition all true 
{
    echo "<br>Results : All Pass";
}
else
{
    echo "Results : Fail";
}











?>
</body>
</html>