<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $costs = 4.95; // initalizes variables; costs, milkshakes and coffee to 4.95, 1.95 and 0.85
    $milkshakes = 1.95; 
    $coffee = 0.85; 
    $total = $coffee + $costs + $milkshakes; //adds all the 3 variables together to form a new variable called total
    $tax = (7/100)/$total; //new variable tax = total times 7/100
    echo round($total,2). "<br>";  //round - rounds of the value to a certain amount
    echo round($tax, 2); 
    ?> 

</body>
</html>