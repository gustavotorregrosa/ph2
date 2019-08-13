<?php 

session_start();
require_once('database.php');

try {
    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $plink->query("delete from produto where id = '$id'");
    $_SESSION["mensagem"] = "Produto ".$nome." deletado com sucesso";
    header('Location: index.php');
    die();
} catch (\Throwable $th) {
    echo $th->getMessage();
}
