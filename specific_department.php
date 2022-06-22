<?php
require_once __DIR__ . "/database.php";

$id = $_GET["id"];
$sql = "SELECT * FROM departments WHERE id = $id;";
$result = $connection->query($sql);
var_dump($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
</head>
<body>
    <h1>Nome</h1>
    <p>head of d</p>

    <h2>Contatti</h2>
    <ul>
        <li>tel</li>
    </ul>
</body>
</html>


