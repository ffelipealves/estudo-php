<?php
    
    if(isset($_POST['nome']) && isset($_POST['idade'])){
        $nome=limpaPost($_POST['nome']);
        $idade=limpaPost($_POST['idade']);
        echo "<h2>Nome: $nome<br>Idade: $idade</h2>";
    }
    
    function limpaPost($valor){
        $valor = trim($valor);
        $valor = stripcslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
    }

    //serve para mandar informacoes para uma pagina que a gente queira
?>