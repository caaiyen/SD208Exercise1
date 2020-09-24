<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-image: url('unnamed.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
.name{
    margin-left: 10%;
    font-family: Arial;
    margin-top: 5%;
}
</style>
<body >
    <h1 class="name">  Hi! &nbsp
        <?php
        if (isset($_SESSION['firstname']) ||  isset($_SESSION['lastname']) || isset($_SESSION['address']) || isset($_SESSION['email']) ){
          echo $_SESSION['firstname'];
          echo $_SESSION['lastname'];
          echo '<br>';
          echo "From: ";
          echo $_SESSION['address'] ;
          echo "<br> email: ";
          echo $_SESSION['lemail'] ;
        }

        ?>
    </h1>
        
</body>
</html>