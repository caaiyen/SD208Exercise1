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
    .grid-container {
        display: grid;
        grid-template-columns: auto 97%auto auto;
        grid-gap: 10px;
        padding: 10px;
        background-image: url('unnamed.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 10%;
        margin-left: 30%;
        margin-right: 30%;
    }
    
    .register {
        font-size: 250%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-align-last: center;
    }
    
    .inline {
        display: inline;
    }
    
    .inline input {
        padding: 2% 2%;
        margin-left: 6%;
    }
    
    .input {
        padding: 2% 2%;
        margin-left: 6%;
        width: 84%;
    }
</style>

<body>
<?php
        if (isset($_POST['register'])){
            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['lastname'] = $_POST['lastname'];
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['remail'] = $_POST['remail'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['c_password'] = $_POST['c_password'];
            if ( isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && isset($_SESSION['address']) 
                    && isset($_SESSION['remail']) && isset($_SESSION['password']) && isset($_SESSION['c_password']) ){
                        if ( $_SESSION['password'] ==  $_SESSION['c_password']){
                            header('Location: ./login_form.php');
                        }else {
                            echo '<style>
                                #c_password{
                                    border-color: red;
                                    toggle
                                }
                            </style>';
                        }
                }
        }
    ?>
    <div class="grid-container">
        <div></div>
        <div>
            <form action="./register_form.php" method="POST">
                <p class="register">Register</p>
                <span class="inline">
                    <input   placeholder="Firstname" type="text" id="firstname" name="firstname" required value = "<?php echo (isset($_POST['firstname']))?$_POST['firstname']: ""; ?>">
                    <input   placeholder="Lastname" type="text" id="lastname" name="lastname" required value = "<?php echo (isset($_POST['lastname']))?$_POST['lastname']: ""; ?>"><br><br><br>
                </span>
                <input class="input" placeholder="Address" type="text" name="address" required value =  "<?php echo  (isset($_POST['address']))?$_POST['address']:"" ; ?>" ><br><br><br>
                <input class="input" placeholder="Email" type="text" id="email" name="remail" required value =  "<?php echo  (isset($_POST['remail']))?$_POST['remail']:"" ; ?>" ><br><br><br>
                <input class="input" placeholder="Confirm Email" type="text" id="email" name="remail" required value =  "<?php echo  (isset($_POST['remail']))?$_POST['remail']:"" ; ?>" ><br><br><br>
                <input class="input" placeholder="Password" type="password" id="password" name="password" required value = "<?php echo (isset($_POST['password']))?$_POST['password']:"" ;?>"><br><br><br>
                <input class="input" placeholder="Confirm Password" type="password" id="c_password" name="c_password" required><br><br><br>
                <center>
                    <button name = "register" type="submit" style="padding: 2% 24%; width: 88%; font-size: 100%; background-color:rgb(80, 130, 20); color: white;" name="register">Register</button>
                </center>
                <br><br>
                <input style="float: left; margin-left: 22%;" id="remember" type="checkbox">
                <label style=" font-family: Arial, Helvetica, sans-serif;" for="remember">I accept the Terms of Use & Privay Policy</label>
                <br><br>
            </form>
        </div>
    </div>
</body>

</html>