<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.error{
    border: 1px solid; 
    border-color: red;
    margin-left: 30%;
    margin-right: 35%;
    padding: 1.5% 7%;
    font-size: 100%;
    font-family: Helvetica, Arial, sans-serif;
    color: #cc0033;
    background-color: #ffcccb;
}

.correct{
    margin-left: 40%;
    border: 1px solid; 
    border-color: green;
    margin-left: 30%;
    margin-right: 35%;
    padding: 1.5% 7%;
    font-size: 100%;
    font-family: verdana;
}
.welcome{
    margin-left: 42%;
}

</style>
<body >
    
    <?php
    
    if(isset($_POST['register'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $remail = $_POST['remail'];
        echo "<h1 class='welcome'>Welcome</h1>";
        #firstname 
        $totalnumOfFName = strlen($firstname);
        if ($totalnumOfFName < 2 ){
            echo   "<p class='error' > First name should be greater than 2 <br> </p>";
        }elseif($totalnumOfFName >25 ){
            echo "<p  class='error' > First name should be less than 25  <br> </p>";
        }else{
            echo "<p class='correct' >" . "First Name is "  . $firstname. "</p>"  ;
        }
    
        #lastname
        $totalnumOfLName = strlen($lastname);
        if ($totalnumOfLName < 2 ){
            echo "<p class='error'> Last name should be grerater than 2 <br>  </p>";
        }elseif($totalnumOfLName >25 ){
            echo "<p class='error'>  Last name should be less than 25  <br>  </p>";
        }else{
            echo "<p class='correct'>" . "Last Name is "  . $lastname. " <br> </p>"  ;
        }
    
        #address 
        echo "<p class='correct'> Your adress is " . $address  . "<br>  </p>" ;
    
        #email 
        $emailpattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        if (preg_match($emailpattern, $remail)){
            echo "<p class='correct'>" . $remail  . "<br> </p>";
        }else{
            echo "<p class='error'> Invalid Email Format <br> </p>";
        }
        }
    ?>
</body>
</html>

