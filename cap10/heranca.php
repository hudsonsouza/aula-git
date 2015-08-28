<?php

class mae{
    
    private $vlr1;
    private $vlr2;
     
    public function __construct($valor1, $valor2){
        $this->vlr1 = $valor1;
        $this->vlr2 = $valor2;
        echo "<br>vlr1...: " . $this->vlr1;
        echo "<br>vlr2...: " . $this->vlr2;
        // return;
    }
   
}

class adicao extends mae{
    
    function __construct($valor1, $valor2) {
        parent::__construct($valor1, $valor2);
        echo "<br>vlr3...: " . $this->vlr1;
        echo "<br>vlr4...: " . $this->vlr2;
        $soma = $this->vlr1 + $this->vlr2;
        echo $soma;
        return $soma;
    }
     
}

echo "Soma...: " . $obj3 = new adicao(10,25);





?>