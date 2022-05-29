<?php


    //GET
    //pegamos informacoes da url
    if(isset($_GET['nome'])){
        $nome = htmlspecialchars($_GET['nome']);
    }else{
        $nome='MUNDO';
    }
    if(isset($_GET['cor'])){
        $cor = htmlspecialchars($_GET['cor']);
    }else{
        $cor='white';
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body <?php  if($nome=="Maria"){ echo "style='background:red;color:white'";} ?>>
    <h1>Ola <?php echo $nome ?></h1> <!--PEGAMOS A INFORMACAO DA URL-->

    <!--DADOS DINAMICOS-->
    <a href="index.php?nome=Joao&cor=blue">ir para Joao<br></a>
    <a href="index.php?nome=Paulo&cor=pink">ir para Paulo<br></a>
    <a href="index.php?nome=Maria">ir para Maria<br></a>

    <form method="get">
        <input type="text" name="nome" placeholder="Digite seu nome"><br>
        <input type="text" name="cor" placeholder="Digite sua cor"><br>
        <hr><button type ="submit">Enviar</button></hr>
    </form>

</body>
</html>