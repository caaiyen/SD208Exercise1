
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    .body{
        margin-top: 5%;
        background-image: url("bg.jpg");
        background-repeat: no-repeat;
        background-position: center;
        
    }
    input{
        padding: 2% 1%; 
        text-align: center;
    }
    .label{
        font-size: 150%;
        margin-right: 3%; 
    }
    .computeButton{
        margin-left: 12%;
        width: 15.5%;
        height: 60px;
    }
</style>

<body>
<center>
<div class="body"><br>
    <h2>Wanna know Your BMI?</h2>
    <form action="bmi.php" method="POST">
        <label for="heightInput" class="label">Height(cm)</label>
        <input type="text"  name="height" id="heightInput" required placeholder="Enter your height here!" ><br><br>
        <label for="weight" class="label">Weight(kg)</label>
        <input type="text" name="weight" id="weight" required placeholder="Enter your weight here!" ><br><br>
        <button name= "compute" class="computeButton" >Compute BMI</button>
        <br><br><br>
    </form>
</div>
    </center>
</body>
</html>