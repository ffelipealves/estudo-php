<?php

    $personagens = ["goku","naruto","vegeta","gon"];

    for($i=0;$i<4;$i++){
        echo "$personagens[$i]<br>";
    }

    
    echo "Quantidade de coisas no vetor: ".count($personagens);

    foreach($personagens as $nomes){
        echo "<br> $nomes";
    }

    //ARRAYS POR CHAVES

    $idade = ["Felipe"=>"20","Maria"=>"28","Carlos"=>"45"];

    // vai retornar pela CHAVE ex. "KEY"=>VALOR
    echo "<br>".$idade["Carlos"]."<br>";

    //mostrando todos 
    foreach($idade as $chave => $valor){
        echo "A chave eh $chave eh o valor eh $valor<br>";
    }

    $carros = ["fusca","saveiro","landrover","celta","uno"];
    //organizar o array
    sort($carros);
    foreach($carros as $modelo){
        echo $modelo."<br>";
    }
    //faz o reverso
    rsort($carros);
    foreach($carros as $modelo){
        echo $modelo."<br>";
    }