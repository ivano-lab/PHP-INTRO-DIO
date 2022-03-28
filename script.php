<?php
session_start();

error_reporting(0);
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
/*print_r($categorias);*/

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['Menssagem de ERRO'] = "O nome não pode ser vazio. Por favor, preecha-o novamente.";
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3)
{
    $_SESSION['Menssagem de ERRO'] = "O nome deve ter mais de 3 caracteres.";
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['Menssagem de ERRO'] = "O nome não pode ser tão extenso.";
    header('location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['Menssagem de ERRO'] = "Informe um número para a idade.";
    header('location: index.php');
    return;
}

if ($idade >= 6 && $idade <= 12) {
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'infantil') 
        {   
            $_SESSION['Menssagem de SUCESSO'] = "O nadador " .$nome. " compete na categoria infantil";
            header('location: index.php');
            return;
        }
    }
}
else if ($idade >=13 && $idade <= 18) {
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'adolescente') 
        {
            $_SESSION['Menssagem de SUCESSO'] = "O nadador " .$nome. " compete na categoria adolescente";
            header('location: index.php');
            return;
        }
    }
}
else {
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'adulto') 
        {
            $_SESSION['Menssagem de SUCESSO'] = "O nadador " .$nome. " compete na categoria adulto";
            header('location: index.php');
            return;
        }
    }
}