<?php

require_once '../connect.php';


$idd = $_POST['id'];
$titulo = $_POST['titulo'];
$editora = $_POST['editora'];
$sts = $_POST['sts'];
$personagem = $_POST['personagem'];
$data = $_POST['data'];
$loc = $_POST['loc'];

$updatehq = $pdo->prepare(" UPDATE hqs SET titulo=:titulo, editora=:editora, status=:status, personagem=:personagem, data=:data, loc=:loc   WHERE  ID=:id");
$updatehq->bindValue(":id", $idd);
$updatehq->bindValue(":titulo", $titulo);
$updatehq->bindValue(":editora", $editora);
$updatehq->bindValue(":status", $sts);
$updatehq->bindValue(":personagem", $personagem);
$updatehq->bindValue(":data", $data);
$updatehq->bindValue(":loc", $loc);
$updatehq->execute();
