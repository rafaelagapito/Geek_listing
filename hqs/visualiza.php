<?php
require_once '../header.php';
require_once '../connect.php';
?>

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <h1 class="text-primary">Historias em Quadrinhos</h1>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Editora</th>
                            <th>Status</th>
                            <th>Personagem</th>
                             <th>Data</th>
                        </tr>
                    </thead>
                    
                  
                    <tbody>
                       
                        <?php
                     
                        $buscahqs = $pdo->prepare("SELECT * FROM hqs ORDER BY id DESC LIMIT 10");
                        $buscahqs->execute();

                        $linha = $buscahqs->fetchALL(PDO::FETCH_ASSOC);
                        foreach ($linha as $listar) {
                            echo "<tr>";
                            echo "<td>".$listar["id"]."</td>" ;
                            echo "<td>".$listar["titulo"]."</td>";
                            echo "<td>".$listar["editora"]."</td>" ;
                            echo "<td>".$listar["status"]."</td>";
                            echo "<td>".$listar["personagem"]."</td>";
                            echo "<td>".$listar["data"]."</td>";
                            echo "</tr>";
                           
                        }
                        ?>
                      

                    </tbody>

                </table> 
            </div>

        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->


<?php
//$buscahqs = $pdo->prepare("SELECT * FROM hqs");
//$buscahqs->execute();
//while($linha = $buscahqs->fetch(PDO::FETCH_ASSOC)){
//echo "Titulo: ".$linha["titulo"]."<br>";
//echo "Editora: ".$linha["editora"]."<br>";
//echo "Personagem: ".$linha["personagem"]."<br>";
//echo "Status: ".$linha["status"]."<br>";
//echo "Data: ".$linha["data"]."<br>";
//}
//$linha = $buscahqs->fetchALL(PDO::FETCH_ASSOC);
//foreach ($linha as $listar){
//   echo "Data: ".$listar["data"]."<br>";
//}

//$linha = $buscahqs->fetchALL(PDO::FETCH_ASSOC);
//foreach ($linha as $listar) {
//    echo "ID: " . $listar["id"] . "<br>";
//    echo "Titulo: " . $listar["titulo"] . "<br>";
//    echo "Editora: " . $listar["editora"] . "<br>";
//    echo "Status: " . $listar["status"] . "<br>";
//    echo "Personagem: " . $listar["personagem"] . "<br>";
//    echo "Data: " . $listar["data"] . "<br>";
//}
?>








<?php require_once '../footer.php'; ?>

