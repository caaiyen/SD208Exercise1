<?php
    $clickBait_words = array(
      "scientists",
      "scientist",
      "doctors",
      "doctor",
      "hate",
      "stupid",
      "weird",
      "trick",
      "shocked me",
      "shocking",
      "you'll never believe",
      "hack",
      "epic",
      "unbelievable"
    );

    
    $replacement_words  = array(
      "so-called scientists",
      "so-called scientist",
      "so-called doctors",
      "so-called doctor",
      "aren't threatened by",
      "average",
      "completely normal",
      "ineffective",
      "method",
      "is no different from others",
      "you wont really be suprised by",
      "slightly improve",
      "boring",
      "normal"
      );
      
  function clickBait($clickBait_words, $replacement_words, $headline) {
    return  str_replace($clickBait_words, $replacement_words, strtolower($headline));
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.header{
  font-size: 30px;
  margin-left: 17%;
  
}
input{
  border-color: red;
}
.headline_input{
  border-style: groove;
  height: 50px;
  width: 500px;
}
body{
  margin-top: 5%;
  margin-left: 30%;
}
.submit_button{
  background-color: #900603;
  height: 40px;
  width: 150px;
  border-style: groove;
  color: white;
  
}
.honest{
  font-size: 40px;
}
</style>
<body >
<form method="post" action ="sd208Exercise3.php">
<label for="headline" class="header">Write a headline</label><br><br>
    <input class="headline_input" type="text" id="headline" name = "headline" placeholder="Input your headline here!"><br><br>
    <button class="submit_button" type="submit" name ="submitbutton">display it honest</button><br>
    
    <?php
       if (isset($_POST['submitbutton'])){
        echo "<p class='honest'>" . clickBait($clickBait_words, $replacement_words, $_POST['headline']) ."</p>"; 
       }
    ?>
</form>
      
  
</body>
</html> 

