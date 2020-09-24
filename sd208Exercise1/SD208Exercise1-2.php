<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<center>
<table width="50%"  cellspacing="0px" cellpadding= "0px" border="1px">
<h2>Chess Board</h2>
    <?php
        for ($r = 1; $r <= 8; $r++){
            echo "<tr>"; 
            for ($c = 1; $c <= 8; $c++){
                $t = $r + $c;
                if ($t % 2 ==0){
                    echo ("<td bgcolor=black height=80px  </td>");
                }
                else{
                    echo ("<td bgcolor=white </td>");
                }
            }
            echo "</tr>";
        }   
    ?>
    </table>
    </center>
</body>
</html>
