<?php
 require_once '../connect.php';
 
 
 
$titulo = $_POST["titulo"];
$editora= $_POST["editora"];
$personagem = $_POST["personagem"];
$data = $_POST["data"];
$status = $_POST["sts"];
$loc = $_POST["loc"];



$buscarhqs = $pdo->prepare("INSERT INTO  hqs(titulo,editora,status,personagem,data,loc)VALUES(:titulo,:editora,:status,:personagem,:data,:loc)");
$buscarhqs->bindValue(":titulo", $titulo);
$buscarhqs->bindValue(":editora", $editora);
$buscarhqs->bindValue(":status", $status);
$buscarhqs->bindValue(":personagem", $personagem);
$buscarhqs->bindValue(":data", $data);
$buscarhqs->bindValue(":loc", $loc);

$buscarhqs->execute();

//if ($buscarhqs){
//    
//   echo "Cadastrado com sucesso" ; 
//}else{
//    echo "Erro bruno bugou ";
//}







?>