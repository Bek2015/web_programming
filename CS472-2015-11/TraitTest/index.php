<?php
require 'ClassA.php';
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
        <?php
        $a = new ClassA();
        $b = new ClassB();
        echo $a->sayHello("Anne");
        echo "<br />";
        echo $b->sayHello("Bob");
        echo "<br />";
        echo $a->add(3, 4);
        echo "<br />";
        echo $b->add(2.5, 8.1);
        
        $a->setX(5);
        
        $b->setX(7);
        echo "<br />";
        echo $a->getX();
        echo "<br />";
        echo $b->getX();
        ?>
    </body>
</html>
