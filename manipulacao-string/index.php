<?php

// MANIPULACAO DE STRIN

    //mostra o tamanho da string
    echo "strlen: ";
    echo strlen('eae galera');

    //mostra a quantidade de palavras
    echo '<br>';
    echo "str_word_count: ";
    echo str_word_count('Desci do onibus e peguei uma moeda');

    //Inverte o tring
    echo '<br>';
    echo "strrev: ";
    echo strrev('Arroz');

    //Mostra onde ta o string no vetor
    echo '<br>';
    echo "strpos: ";
    echo strpos("Bom dia flor do dia","flor");

    //Substitui um string
    echo '<br>';
    echo "str_replace: ";
    $palavra = "ola, mundo";
    echo str_replace("mundo","Felipe",$palavra);

    //concatenaçao .
    echo '<br>';
    $nome = "Felipe";
    $sobrenome = "Alves";
    $nome_completo = $nome . $sobrenome;
    echo $nome_completo;

    