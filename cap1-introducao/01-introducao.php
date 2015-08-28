<?php
    // 1.2.2 DELIMITADORES DE CODIGO
    // codigo aqui;
    // codigo aqui;
    // codigo aqui;


    // 1.2.3 COMENTARIOS

    // COMENTARIO DE UMA LINHA
    // echo  "a";
    # echo  "a";

    // COMENTARIO DE MUITAS LINHAS
    /*
        echo  "a";
        echo  "b";
    */
    

    // 1.2.4 COMANDOS DE SAIDA

    // echo
    // eh um comando que imprime uma ou mais variaveis no console
    echo 'a', 'b', 'c';
    echo"<br>";
    
    // print
    // eh uma funcao que imprime uma string no console
    print('abcde');
    echo"<br>";
    
    // var_dump ***
    // imprime o conteudo de uma variavel de forma explanativa
    $vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa', 1001, 758.23);
    var_dump($vetor);
    echo"<br>";
    
    // print_r
    // imprime o conteudo de uma variavel de forma explanativa, de forma mais visivel
    $vetor2 = array('Palio', 'Gol', 'Fiesta', 'Corsa', 1001, 758.23);
    print_r($vetor2);    
    echo"<br>";
    
    //  1.3 VARIAVEIS
    // variaveis sao identificadores utilizados para representar valores mutaveis e volateis.
    // que so existem durante a execucao do programa
    $nome = "Mauro Henrique";
    $sobrenome = "PEDREIRA";
    $cidade_atual = "Maringa-PR";
    $ano = 2015;
    echo "$sobrenome, $nome - $cidade_atual / $ano";
    echo"<br>";
    
    
    
    
    
?>