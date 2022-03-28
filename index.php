<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<p>FORMULARIO DE INSCRICAO PARA COMPETIDORES</p>

<form action="script.php" method="post">
    <?php 
        $MenssagemDeSucesso = isset($_SESSION['Menssagem de SUCESSO']) ? $_SESSION['Menssagem de SUCESSO'] : '';
        if(!empty($MenssagemDeSucesso))
        {
            echo $MenssagemDeSucesso;
        }
        $MenssagemDeErro = isset($_SESSION['Menssagem de ERRO']) ? $_SESSION['Menssagem de ERRO'] : '';
        if(!empty($MenssagemDeErro))
        {
            echo $MenssagemDeErro;
        }
    ?>
    <p><input type="text" name="nome"></p>
    <p><input type="text" name="idade"></p>
    <p><input type="submit" value="Enviar Dados do Competidor"></p>
</form>

</body>
</html>
