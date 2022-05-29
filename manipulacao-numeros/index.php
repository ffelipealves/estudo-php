<?php

    //MANIPULACAO DE NUMEROS
    //php eh bem inteligente
    $valor = "800" + 684;
    var_dump($valor);

    //convertendo valor
    $valor2 = "45.5";
    $valor_convertido = (float) $valor2;
    echo '<br>';
    var_dump($valor2);
    echo '<br>';
    var_dump($valor_convertido);

    //checando o tipo
    $valor3 = "45";
    echo '<br>';
    var_dump(is_int($valor3));
    echo '<br>';
    var_dump(is_float($valor3));
    echo '<br>';
    var_dump(is_string($valor3));