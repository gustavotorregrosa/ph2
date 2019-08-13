<?php 
require_once('database.php'); 

$id = addslashes($_GET['id']);
$resultado = mysqli_query($plink, "select * from produto where id = '$id'");
$produto = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
header('Content-Type: application/json');
echo json_encode($produto);
