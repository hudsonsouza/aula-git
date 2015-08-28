<?php

class calculoAvancado{
    
    private $vlr1;
    private $vlr2;
    
    public function passaValor($valor1, $valor2){
        $this->vlr1 = $valor1;
        $this->vlr2 = $valor2;
        
        $respota = "<br>Adicao...: " . calculoAvancado::/* @var $resposta ClassName */adicao();
        
        return $resposta;
    }
    
    public function adicao(){
        $soma = $this->vlr1 + $this->vlr2;
        return $soma;
    }
    
    
}    
    
    // INSTANCIA
    $obj2 = new calculoAvancado();
    $obj2->passaValor(20, 8)
    
    


?>