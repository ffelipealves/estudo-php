<?php

    //Funcoes Matematica

    $x=10;
    $y=5;

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;

    echo "<br>";
    //Valor de pi
    echo pi();

    //Min e Max
    echo "<br>";
    $numeros = [23,45,123,7,34,32,213,];
    echo min($numeros);
    echo "<br>";
    echo max($numeros);

    //Valor absoluto
    $numero=-234;
    echo "<br>";
    echo abs($numero);

    //Raiz quadrada
    echo "<br>";
    echo sqrt($x);

    //aredondar
    $numero=10.8;
    echo "<br>";
    echo round($numero);

    //Valor aleatorio
    echo "<br>";
    $randNumero = rand(0,56000);
    echo $randNumero;