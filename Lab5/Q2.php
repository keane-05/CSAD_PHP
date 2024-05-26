<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 1;
        do { 

            if(($x%7) === 0){ 
                echo "<span style = 'color:blue'>$x</span>". ", ";
            }
            else if(($x%2) === 0){ 
                echo "<span style = 'color:red'>$x</span>". ", ";
            }
            else { 
                echo $x . ", ";
            }

            if (($x%10)===0){ 
                echo "<br>";
            }
            $x ++;
        }while ($x <= 50)
    ?>
</body>
</html>