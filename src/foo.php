<?php

class Foo {

    private $foo;


    function __construct(){
        $this->foo='fou';
    }

    public function setFoo($s){
        $this->foo=$s;
    }

    public function getFoo(){
        return $this->foo;
    }

    public function returnTrue(){
        //return false; // decommentez pour voir ...
        return true;
    }

    public function divise($a,$b){
        return $a/$b;
    }


}
