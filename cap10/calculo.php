<?php

class calcular{
    
    private $vlr1;
    private $vlr2;
    
    public function passaVlr($valor1){
        $this->vlr1 = $valor1;
        return ($this->vlr1); 
    }
    
    public function adicao($valor1, $valor2){
        $this->vlr1 = $valor1;
        $this->vlr2 = $valor2;
        $soma = $this->vlr1 + $this->vlr2;
        return $soma;
    }

    public function subtracao($valor1, $valor2){
        $this->vlr1 = $valor1;
        $this->vlr2 = $valor2;
        $menos = $this->vlr1 - $this->vlr2;
        return $menos;
    }

    public function multiplicacao($valor1, $valor2){
        $this->vlr1 = $valor1;
        $this->vlr2 = $valor2;
        $vezes = $this->vlr1 * $this->vlr2;
        return $vezes;
    }
    

    public function divisao($valor1, $valor2){
        $this->vlr1 = $valor1;
        $this->vlr2 = $valor2;
        $por = $this->vlr1 / $this->vlr2;
        return $por;
    }
    
}


// INSTANCIA
$obj1 = new calcular();

// INVOCA O METODO E PASSA O VALOR POR PARAMETRO
echo "Vlr passado por Parametro...: " . $obj1->passaVlr(8);

// ADICAO
echo "<br>Soma............: " . $obj1->adicao(10,15);

// SUBTRACAO
echo "<br>Subtracao.......: " . $obj1->subtracao(8,3);

// MULTIPLICACAO
echo "<br>Multiplicacao...: " . $obj1->multiplicacao(2,7);

// DIVISAO
echo "<br>Divisao.........: " . $obj1->divisao(27,3);
        
        
?>