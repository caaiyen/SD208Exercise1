<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .grid-container {
        
        display: grid;
        grid-template-columns: auto 97%auto auto;
        grid-gap: 10px;
        padding: 10px;
        background-image: url('./images/unnamed.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 10%;
        margin-left: 30%;
        margin-right: 30%;
    }
</style>
<body>
<?php
session_start();
    if (isset($_POST['login'])){
         $_SESSION['lemail'] = $_POST['lemail'];
         $_SESSION['lpassword'] = $_POST['lpassword'];
        
        if (($_SESSION['lemail'] == $_SESSION['remail']) && $_SESSION['lpassword'] == $_SESSION['password']){
           header('Location: bio.php');
        }else {
            echo '<script> alert("Invalid gmail or password!") </script>';
        }
        
    }



?>
    <div class="grid-container">
        <div></div>
        <div>
            <center><br>
                <form action="./login_form.php" method="post">
                    <img src="login.jpg" alt="" style="width: 25%; height: 40%; border-radius: 50%;"><br><br>
                    <input placeholder="Email" style="padding: 2% 2%; width: 70%;" type="text" id="email" name="lemail">
                    <br><br>
                    <input placeholder="password" style="padding: 2% 2%; width: 70%;" type="password" id="password" name="lpassword"><br><br>
                    <button name= "login" style="padding: 2% 24%; font-size: 100%; width: 75%; background-color:rgb(80, 130, 20); color: white;">Login</button>
                    <br><br>
                    <input style="float: left; margin-left: 22%;" id="remember" type="checkbox">
                    <label style="float: left; font-family: Arial, Helvetica, sans-serif;" for="remember">Remember me? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; forgot password?</label>
                    <br><br>
                </form>
            </center>
        </div>
    </div>
</body>

</html>
