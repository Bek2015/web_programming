<?php
$sid = filter_input(INPUT_GET, 'sid');
$asignment = filter_input(INPUT_GET, 'asignment');

$hw = file_get_contents("$sid/{$asignment}.txt");

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
        <title></title>
    </head>
    <body>
        <h1>Thanks for submitting the following</h1>
        <p>
            <?= $hw ?>
        </p>
    </body>
</html>



