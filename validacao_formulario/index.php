
<?php

    $erroSenha="";
    $erroEmail="";
    $erroNome="";
    $erroRepeteSenha="";
    
    if($_SERVER['REQUEST_METHOD']=='POST'){

        //VERIFICAR SE ESTA VAZIO O POST[NOME]
        if(empty($_POST['nome'])){
            $erroNome="Por favor preencha o nome";
        }else{
            //PEGA O VALOR DO POST E LIMPAR
            $nome = limpaPost($_POST['nome']);
            //VERIFICA SE TEM APENAS CARACTERS VALIDOS
            if(!preg_match("/^[a-zA-Z-' ]*$/",$nome)){
                $erroNome = "Digite letras de A-Z";
            }
        }

        //VERIFICAR SE ESTA VAZIO O POST[EMAIL]
        if(empty($_POST['email'])){
            $erroEmail="Digite um email valido";
        }else{
            //PEGA O VALOR DO POST E LIMPAR
            $email = limpaPost($_POST['email']);
            //VERIFICA SE O EMAIL EH VALIDO
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail = "Esse nao eh um email valido";
            }
        }

        //VERIFICAR SE ESTA VAZIO O POST[SENHA]
        if(empty($_POST['senha'])){
            $erroSenha="senha invalida";
        }else{
            //PEGA O VALOR DO POST E LIMPAR
            $senha = limpaPost($_POST['senha']);
            //VERIFICA SE A SENHA EH VALIDA
            if(strlen($senha)<6){
                $erroSenha = "Senha muito curta";
            }
        }

        //VERIFICAR SE ESTA VAZIO O POST[SENHA]
        if(empty($_POST['repete_senha'])){
            $erroRepeteSenha="Repita a senha";
        }else{
            //PEGA O VALOR DO POST E LIMPAR
            $repete_senha = limpaPost($_POST['repete_senha']);
            //VERIFICA SE O EMAIL EH VALIDO
            if($repete_senha != $senha){
                $erroRepeteSenha = "as senhas nao batem";
            }
        }

        //CASO NAO HAJA ERROS REDIRECIONA PARA A PAGINA OBRIGADO
        if(($erroEmail=="")&&($erroNome=="")&&($erroRepeteSenha=="")&&($erroSenha=="")){
            header('location: obrigado.php');
        }

    }

    

    //limpa nosso valor do post para nao ter scripts
    function limpaPost($valor){
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <main>

        <h1><span>AULA PHP</span>Validacao de Formulario:</h1>

        <form method="post">

            <label>Nome Completo</label>
            <input type="text" <?php if(!empty($erroNome)){echo "class='invalido'";} ?> <?php if(isset($_POST['nome'])){echo "value='".$_POST['nome']."'";} ?> name="nome" placeholder="Digite Seu nome" >
            <br><span class="erro"><?php echo $erroNome; ?></span>

            <label>Email</label>
            <input type="email" <?php if(!empty($erroEmail)){echo "class='invalido'";} ?> <?php if(isset($_POST['email'])){echo "value='".$_POST['email']."'";} ?> name="email" placeholder="Digite o email" >
            <br><span class="erro"><?php echo $erroEmail; ?></span>

            <label>Senha</label>
            <input type="password" <?php if(!empty($erroSenha)){echo "class='invalido'";} ?> name="senha" placeholder="Digite uma senha" >
            <br><span class="erro"><?php echo $erroSenha; ?></span>

            <label>Repete Senha</label>
            <input type="password" <?php if(!empty($erroRepeteSenha)){echo "class='invalido'";} ?> name="repete_senha" placeholder="Repita a senha" >
            <br><span class="erro"><?php echo $erroRepeteSenha; ?></span>

            <button type="submit">Enviar Formulario</button>

        </form>
    </main>



</body>
</html>