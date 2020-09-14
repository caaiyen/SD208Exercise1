<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
        function countWords($str){
            $word = explode(' ', strtolower($str));
           print_r(array_count_values($word)) ;
        }

        countWords("I am Ailyn Albores. I am 19 years old.")
    ?>
</body>
</html>