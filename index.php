<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h3>Pair Program 1</h3>
</body>
</html>

<?php
include("functions.php");

$numbers = array(7,9,8,9,8,8,6);

printArr($numbers);

$biggest = largest($numbers);

echo "Largest number is: $biggest";
echo "<br>";
$average = average($numbers);
echo "Average is $average<br>";

echo "Removing duplicates: <br>New Array:<br>";
$noDup = removeDups($numbers);
printArr($noDup);

echo "How many of each number?<br>";
printKeyValue(distribution($numbers));
