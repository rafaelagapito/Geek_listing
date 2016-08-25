<?php
 require_once '../connect.php';
 
 $id = $_POST['id'];

$deletar_hq = $pdo->prepare("DELETE FROM hqs WHERE ID=:id");
$deletar_hq->bindValue(":id", $id);
$deletar_hq->execute();
?>