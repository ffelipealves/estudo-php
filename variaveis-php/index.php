<?php 

    //VARIAVEIS
    $cor = "azul";
    $cor = "laranja";
    echo "$cor<br>";

    $x=10;
    $y=5;

    echo $x +$y;

    function teste(){
        global $x;
        echo "<br>a variveal $x nao funfa aqui(a nao ser q seja global)";

    }
    teste();
    echo "<br>o valor da variavel $x aqui funfa";

?>