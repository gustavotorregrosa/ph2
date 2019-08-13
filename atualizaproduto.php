<?php 
session_start();
require_once('database.php');


function sanitizaPreco($precoString)
{
    $precoString = addslashes(str_replace(",", "v", $precoString));
    $precoString = str_replace(".", "", $precoString);
    $precoString = str_replace("v", ".", $precoString);
    return (float) $precoString;
}

try {
    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $preco = sanitizaPreco($_POST['preco']);
    $descricao = addslashes($_POST['descricao']);
    $plink->query("update produto set nome = '$nome', preco = '$preco', descricao = '$descricao' where id = '$id'");
    $_SESSION["mensagem"] = "Produto ".$nome." atualizado com sucesso";
    header('Location: index.php');
    die();
} catch (\Throwable $th) {
    echo $th->getMessage();
}


