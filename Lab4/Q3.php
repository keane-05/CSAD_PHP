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
    $number1 = 2; 
    $number2 = 1;
    $total = $coffee + $costs + $milkshakes;
    $tax = (7/100)/$total;
    echo round($total,2). "<br>";  //round - rounds of the value to a certain amount
    echo round($tax, 2);
    // adding a table from code below
    echo "<table>  
    <th> Items </th>
    <th >Price </th>
    <th>Quantitiy</th>
    <th>Total</th>
    <tr>
    <td> Hamburgers <br> Chocolate Milkshakes <br> Coffee</td> 
    <td> $costs <br> $milkshakes<br>$coffee </td>

    <td> $number1 <br> $number2 <br> $number2 <br> Total Before Tax <br> Post-Tax <br> Pre-Tax Tip <br> Total Cost</td>
    </tr>
    </table>";

    ?> 
</body>
</html>