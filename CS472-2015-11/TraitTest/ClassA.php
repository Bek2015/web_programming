<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassA
 *
 * @author mzijlstra
 */
trait HelloSayer {
    private $x; // number?
    
    public function sayHello($name) {
        return "Hello $name";
    }
    public function add($a, $b) {
        return $a + $b;
    }
    public function setX($x) {
        $this->x = $x;
    }
    public function getX() {
        return $this->x;
    }
    
}

trait Traiter {
    public function add($a, $b) {
        return $a - $b;
    }
    
}

class ClassA {
    use HelloSayer;
    //use Traiter;
}
class ClassB extends ClassA {
    //use HelloSayer;
    //use Traiter;
}
