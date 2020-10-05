


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.bmi{ 

    background-image: url("bg.jpg");
    background-repeat: no-repeat;
    background-position: center;
    text-align:center;
    font-size: 150% ;
    font-family: arial;
}
.result{
    font-size: 250%;
    text-align: center;
}

.back{
    height: 50px;
    background-color: purple;
    color: white;
    border-style: groove;
}
</style>
<body>
<?php
    if (isset($_POST['compute'])){
        echo "<p class='result'>Result</p>";
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $heightinM= $height /100;
        $heights= $heightinM * $heightinM;
        $bmi = $weight/$heights;
        

        if ($bmi < 18.5){
            echo "<p class='bmi'> Your BMI is " . $bmi . " <br>You are Under weight  <br> You need to eat more!   </p>";
        }elseif($bmi >= 18.5 && $bmi <= 24.9){
            echo "<p class='bmi'> Your BMI is " . $bmi ."<br>Congratulations!! <br> You are Normal </p>";
        }elseif($bmi >= 25 && $bmi <= 29.9){
            echo "<p class='bmi'> Your BMI is " . $bmi . " <br>You are Over weight  <br> You need to have a diet!   </p>";
        }elseif($bmi > 30){
            echo "<p class='bmi'> Your BMI is " . $bmi . " <br>You are OBESE <br> You need to have a diet!   </p>";
        }
    }
?>
<center>
<form action="home.php">
    <button class="back">Back to Calculator</button>
</form>
</center>
</body>
</html>