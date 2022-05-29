<?php

    //Estruturas de condicao if
    echo "<br>Estruturas de condicao<br>";

    $hora = 22;

    if($hora < 12){
        echo "Bom dia";
    }elseif($hora <18){
        echo "Boa Tarde";
    }else{
        echo "Boa Noite";
    }

    //switch

    $nota=10;

    switch($nota){
        case 10:
            echo "Nota Maxima";
            break;
        case 0:
            echo "Nota Minima";
            break;
        default:
            echo "Nota entre 10 e 0";
            break;
    }
    echo "<br>Estruturas de repeticao<br>";

    //WHILE
    $i=0;
    while($i<10){
        echo "contando $i<br>";
        $i++;
    }

    //FOR
    $j=0;
    for($j=0;$j<500;$j+=10){
        echo "contando com for $j<br>";
    }

    //DO WHILE
    $k=0;
    do{
        $k+=10;
        echo "contando com dowhile $k<br>";
    }while($k<11);

    //FOREACH percorre o vetor
    $cores = ["azul","verde","rosa","preto"];

    foreach($cores as $valor){
        echo "A cor eh $valor<br>";
    }
