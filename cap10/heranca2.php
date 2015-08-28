<?php

class Mae{
    
    private $var1;
    private $var2;
    private $var4 = 9;
    public $var5 = 11;
    
    function __construct($vlr1,$vlr2) {
        $this->var1 = $vlr1;
        $this->var2 = $vlr2;
    }
    
    function imprime(){
        echo "<br>Variavel 1 ...: " . $this->var1;
        echo "<br>Variavel 2 ...: " . $this->var2;
    }
    
}

$obj = new Mae(12, 23);
$obj->imprime();


class Filho extends Mae{
    
    private $var3 = 54;
    
    function mostra(){
        echo "<br>Variavel 3 ...: " . $this->var3;
        echo "<br>Variavel 4 ...: " . $this->var4;
        echo "<br>Variavel 5 ...: " . $this->var5;
        echo "<br>Variavel dos outros ...: " . $this->imprime();
    }
    
}

$obj2 = new Filho();
$obj2->mostra();


