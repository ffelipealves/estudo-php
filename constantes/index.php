<?php
    //Constantes

    //nome da constante, valor
    define("teste",10);

    echo teste;

    //define("teste",49) nao podemos atribuir outro valor
    //constantes sao globais

    function exemplo(){
        echo teste;
    }

    exemplo();