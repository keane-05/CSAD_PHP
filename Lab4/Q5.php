<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 1; $i<6; $i++){
        $result = 1;
        for ($k = 1; $k <= $i ;$k++){ 
             $result*=2;
        }
        echo $i ."->". $result;
        echo "<br>";
        
    }
    ?>
</body>
</html>