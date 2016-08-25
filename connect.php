<?php

//CONFIG BANCO
$host = "localhost";
$user = "root";
$pass = "";
$dbname ="banco";


//$conexao = mysql_connect($host, $user, $pass);
//$db = mysql_select_db($dbname);
//
//if (isset($_get["id"])) {
//    $consulta = mysql_query("SLECT * FROM hqs WHERE id=$id");
//}

try{
    $pdo=new PDO("mysql:host=localhost;dbname=banco","root","");
}catch(PDOException $e){
    echo $e->getCode();
    
}

//$id = $_GET["id"];
//$buscarhqs=$pdo->query("SELECT * FROM hqs WHERE id=$id");
//
//$buscarhqs=$pdo->prepare("SELECT * FROM hqs WHERE id=:id");
//$buscarhqs->bindValue(":id",1);
//$buscarhqs->execute();
//
//echo $buscarhqs->rowCount();
