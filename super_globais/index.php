<?php

    //Variaveis super globais
    //variaveis ja prontas que ja vem com php

    //$GLOBALS
    //torna variaveis globais

    $a = 2343;
    $b = 21534;

    function soma(){
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
        // outra forma global $a,$b,$b
    }

    soma();

    echo $c."<br>";

    //$_SERVER eh um array
    //da informacoes 

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    //... e por ai vai