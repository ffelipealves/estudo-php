<?php

/*
TIPOS DE DADOS;
String
Integer
Float
Boolean
Array
Object
NULL
*/

    $string = "Felipe";
    $integer = 20;
    $float = 5.50;
    $boolean = true;


    echo "<h3>string: $string, inteiro: $integer, flutuante: $float, bol: $boolean</h3>";
    //devolve o tipo variavel
    var_dump($integer);

    echo "<br>";

    $pessoas=array("felipe","joao","maria","daniel");
    var_dump($pessoas);

    echo "<br>";

    //fabrica de carros
    class carro {
        public $cor;
        public $modelo;

        public function __construct($cor,$modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function mensagem(){
            return "O carro é $this->cor e o modelo é $this->modelo";
        }
    }

    //criamos o carro com o construtor e armazenamos em carro1
    $carro1 = new carro("Branco","Fusca");

    //damos um echo no atributo cor do carro1
    echo $carro1->cor;
    echo "<br>";
    //vamos chamar o metodo mensagem da classe carro para o carro1
    echo $carro1->mensagem();
?>