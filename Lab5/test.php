<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = array("a" => "1", "b" => 2);
$y = array("a" => "1", "b" => "2");
$z = $x + $y; // union of $x and $y
var_dump($z);
//array (size=2) 'a' => string '1' (length=1) 'b' => int 2
var_dump($x == $y); // true (a)
var_dump($x === $y); // false (b)
var_dump($x != $y); // false (c)
var_dump($x <> $y); // false (d)
var_dump($x !== $y); // true (e)
?>
</body>
</html>