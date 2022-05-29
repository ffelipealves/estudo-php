<?php



    function escreveOi($nome){
        echo "Oi $nome <br>";
    }

    for($i=0;$i<10;$i++){
        escreveOi("Felipe");
    }
    
    escreveOi("Paulo");
    escreveOi("Fernanda");

    function soma(int $valor1, int $valor2){
        echo $valor1 + $valor2;
    }

    soma(124,435);

    function juntaPalavra($palavra1, $palavra2){
        echo $palavra1.$palavra2;
    }

    juntaPalavra("mosca","boi");