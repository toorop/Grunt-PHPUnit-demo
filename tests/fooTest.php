<?php

require 'src/foo.php';

class fooTest extends PHPUnit_Framework_TestCase
{

    protected $objTotest;

    protected function setUp()
    {
        $this->objTotest = new Foo();
    }

    // on test que l'objet est bien initialisé
    public function testInit()
    {
        $this->assertInstanceOf('Foo', $this->objTotest);
    }

    // On test que returnTrue retourne true
    public function testReturnTrue()
    {
        $this->assertTrue($this->objTotest->returnTrue());
    }

    // on teste que par defaut getFoo() retourne foo
    public function testDefaultGetfoo()
    {
        $this->assertEquals($this->objTotest->getFoo(), 'foo');
    }

    // On teste les getter et setter
    public function testGetterSetter()
    {
        $this->objTotest->setFoo('bar');
        $this->assertEquals($this->objTotest->getFoo(), 'bar');
    }

    // test de division
    public function testDivise()
    {
        $this->objTotest->divise(3, 1);
        //$this->objTotest->divise(3,'a'); // va entrainer un erreur
    }


}
