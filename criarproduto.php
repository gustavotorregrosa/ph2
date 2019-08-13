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
    $nome = addslashes($_POST['nome']);
    $preco = sanitizaPreco($_POST['preco']);
    $descricao = addslashes($_POST['descricao']);
    $plink->query("insert into produto (nome, preco, descricao) values ('$nome', '$preco', '$descricao')");
    $_SESSION["mensagem"] = "Produto ".$nome." adicionado com sucesso";
    header('Location: index.php');
    die();
} catch (\Throwable $th) {
    echo $th->getMessage();
}
