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
    $_SESSION['Mensagem de ERRO'] = "O nome não pode ser vazio. Por favor, preecha-o novamente.";
    header('location: index.php');
}

if(strlen($nome) > 0 && strlen($nome) < 3)
{
    $_SESSION['Mensagem de ERRO'] = "O nome deve ter mais de 3 caracteres.";
    header('location: index.php');
}

if(strlen($nome) > 40)
{
    $_SESSION['Mensagem de ERRO'] = "O nome não pode ser tão extenso.";
    header('location: index.php');
}

if(!is_numeric($idade))
{
    $_SESSION['Mensagem de ERRO'] = "Informe um número para a idade.";
    header('location: index.php');
}

if ($idade >= 6 && $idade <= 12) {
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'infantil') 
            echo "O nadador " .$nome. " compete na categoria infantil";
    }
}
else if ($idade >=13 && $idade <= 18) {
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'adolescente') 
            echo "O nadador " .$nome. " compete na categoria adolescente";
    }
}
else {
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'adulto') 
            echo "O nadador " .$nome. " compete na categoria adulto";
    }
}