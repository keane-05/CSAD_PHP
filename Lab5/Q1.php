<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 1; $i <=50; $i++) {

        if (($i%7) == 0){ 
            echo "<span style = color:blue>$i</span>" . ", " ; //blue is of more priority so means that it will check through this if statement first then the following if statments
        }

        else if (($i % 2) == 0){ 
            echo "<span style = color:red>$i</span>" . ", " ;

        }
        else {
        echo $i. ", ";
        }
        if (($i % 10) == 0){ 
            echo "<br>";
        }
    }
    ?>
</body>
</html>