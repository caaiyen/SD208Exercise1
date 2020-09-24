<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" margin-left: 45%">
    <?php
    
        for($i = 1; $i<100; $i++){

            if ($i % 3 == 0 and $i %5==0){
                echo( $i . "---FizzBuzz");
                echo "<br>";
            }elseif($i % 3 == 0){
                echo( $i . "---Fizz");
                echo "<br>";
            }elseif($i % 5 == 0){
                echo( $i . "---Buzz");
                echo "<br>";
            }else{
                
                echo($i);
                echo "<br>";               
            }
        }
      
    ?>
</body>
</html>