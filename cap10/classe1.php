<?php


class NovaClasse{
    // ATRIBUTO PRIVADA
    private $texto = "minha primeira classe<br>";

    // METODO PUBLICO
    public function MostraTexto(){
    	//echo $this->$texto;
        return  $this->texto;
    }
}

// INSTANCIA O OBJETO
$obj = new NovaClasse;

// INVOCA O METODO
echo $obj->MostraTexto();


?>