<?php
    $texto="Eae galera";
    $html="<p>Posso criar tags com php </p>";
    $js="<script>alert('Script criado com PHP')</script>"


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html e php</title>
</head>
<body>
    <h1>Ola html e PHP</h1>
    <p><?php echo $texto; ?></p>
    <?php echo $html; ?>
    <?php echo $js ; ?>

    <!--Mescalando php e html-->
    <?php $online = "sim"; ?>
    <?php if ($online=="sim"){ ?>
        <h1>VOCE ESTA ONLINE</h1>
    <?php }else{ ?>
        <h1>Voce esta offline</h1>
    <?php } ?>


</body>
</html>