<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$bottles = 99;
$drink = "milk";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bottles on the Wall</title>
    </head>
    <body>

        <?php for ($i = $bottles; $i > 0; $i--) : ?>

            <?= $i ?> bottles of <?= $drink ?> 
            on the wall, <?php echo $i ?> bottles of <?= $drink ?>. Take 
            one down and pass it around, <?= ($i - 1) ?> bottles of 
            <?= $drink ?> on the wall <br />

        <?php endfor; ?>

    </body>
</html>