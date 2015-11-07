<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = array("0" => array('1', 2, 3), "1" => "b", "c");
$b = array('a', 'b', 'c');

$a[] = 'd';
$b[] = 'd';

var_dump($a);
var_dump($b);

?>