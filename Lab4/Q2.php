<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $costs = 4.95;
    $milkshakes = 1.95; 
    $coffee = 0.85; 
    $total = $coffee + $costs + $milkshakes;
    $tax = (7/100)/$total;
    echo round($total,2). "<br>";  //round - rounds of the value to a certain amount
    echo round($tax, 2);
    ?> 
    <!-- <?php
$cars=array("Volvo","BMW","Toyota");
echo $cars[0];
// array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
?> 
<?php
class Car
{
var $color;
//name of the function cannot be the same as the class name
function __construct($color="green") {
$this->color = $color;
}
function what_color() {
return $this->color;
}
}
$myCar = new Car(); // use the default value. “green”
echo $myCar->what_color(); // green
echo "<br>";
$yourCar = new Car("black"); // use the parameter value, “black”
echo $yourCar->what_color(); // black
echo var_dump() // this allows the output to have both the value and the data type
?>-->


</body>
</html>