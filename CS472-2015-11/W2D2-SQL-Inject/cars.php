<?php
require 'db.php';

$user = filter_input(INPUT_GET, "user");
if (!$user) {
    die("please login first");
}


$color = filter_input(INPUT_GET, "color");
$sql = "SELECT * FROM car ";

if ($color) {
    $sql .= " WHERE color = '$color'";
}
$cars = $db->query($sql);


?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SQL Inject Example 2</title>
        <style>
            #hello {
                position: absolute;
                top: 10px;
                right: 20px;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            td, th {
                border: 1px solid black;
            }
            input[type="text"] {
                width: 600px;
            }
        </style>
    </head>
    <body>
        <h1>Available Cars:</h1>
        <div id="hello">Welcome: <?= $user ?></div>
        <form action="" method="get">
            <input type="hidden" name="user" value="<?= $user ?>">
            Filter Color<input type="text" name="color" />
            <input type="submit" />
        </form>
        <table>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
            </tr>
            <?php foreach ($cars as $car) : ?>
            <tr>
                <td><?= $car['make'] ?></td>
                <td><?= $car['model'] ?></td>
                <td><?= $car['year'] ?></td>
                <td><?= $car['color'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
