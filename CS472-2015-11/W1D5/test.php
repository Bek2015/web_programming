<?php
$g = "I'm global";

function test() {
    global $g;
    $g = "inside the function";
    echo "The value of g is: " . $g;
    
}

test();

echo "This is outside: " . $g;

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
<!--        
        <?php
        $a = array('a', 'b', 'c');
        print_r($a);
        ?> 

        <br />

        <?php
        $a[] = 'd';
        print_r($a);
        ?>

        <br />

        <?php
        $a['test'] = 'things';
        print_r($a);
        ?>

        <br />

        <?php
        $a[] = 'e';
        print_r($a);
        ?>

        <br />

        <?php
        $a[1000] = 'f';
        print_r($a);
        ?>
        <br />

        <?php
        $a[] = 'g';
        print_r($a);
        ?>
-->
    </body>
</html>
