<?php
function connect()
{
    try
    {
        return new PDO ('mysql:host=localhost;dbname=test1','root','');
    }
    catch (PDOException $e)
    {
        die('Couldnt find Database');
    }
}

$pdo =connect();
$stmt= $pdo->prepare("SELECT * FROM test");
$stmt->execute();
$nam =$stmt->fetchAll(PDO::FETCH_OBJ);


// echo "<pre>";
// var_dump($stmt->fetchAll());
// echo "</pre>";

// foreach ($nam as $name)
// {
//     echo $name['name'];

// }

