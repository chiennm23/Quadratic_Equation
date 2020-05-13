<?php

class Quadratic{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function get_a(){
        return $this->a;
    }

    public function get_b(){
        return $this->b;
    }

    public function get_c(){
        return $this->c;
    }

    public function getDelta(){
        return (($this->b) * ($this->b) - (4 * $this->a * $this->c));
    }

    public function getRoot1(){
        return (-($this->b) - sqrt($this->getDelta())) / 2 * $this->a;
    }

    public function getRoot2(){
        return (-($this->b) + sqrt($this->getDelta())) / 2 * $this->a;
    }
}