<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
        foreach ($nam as $db)
        if($db->COMP==0)
        {
            {
                echo "<li>".$db->name."</li>";
            }
        }
        else
        {
            {
                echo "<li>"."<strike>".$db->name."</strike>"."---  COMPLETED"."</li>";
            }
        }

  
        ?>
    </ul>
</body>
</html>