<?php
require_once '../header.php';
require_once '../connect.php';
?>
<!-- Page Content -->
<div class=" col-md-12">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>Historias em Quadrinhos</h1>
            
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Editora</th>
                                <th>Status</th>
                                <th>Personagem</th>
                                <th>Data</th>
                                <th>Localização</th>
                                <th>Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $buscahqs = $pdo->prepare("SELECT * FROM hqs ORDER BY id DESC LIMIT 10");
                            $buscahqs->execute();

                            $linha = $buscahqs->fetchALL(PDO::FETCH_ASSOC);
                            foreach ($linha as $listar) {
                                echo "<tr class=" . "" . ">";
                                echo "<td>" . $listar["id"] . "</td>";
                                echo "<td>" . $listar["titulo"] . "</td>";
                                echo "<td>" . $listar["editora"] . "</td>";
                                echo "<td>" . $listar["status"] . "</td>";
                                echo "<td>" . $listar["personagem"] . "</td>";
                                echo "<td>" . $listar["data"] . "</td>";
                                echo "<td>" . $listar["loc"] . "</td>";
                                //form delete
                                echo '<td><form  action="" method="POST" id="formulario_d">'
                                . ' <input style="display: none;" type="text" class="form-control" id="id" value="' . $listar["id"] . '"  id="id" name="id" >'
                                . '<button  type="submit" class="btn-link  btn-sm"><i style="" class="glyphicon glyphicon-remove "></i></button>'
                                . '<a href="update.php?id=' . $listar["id"] . '"><span  style=" left: 8px;"  class="glyphicon glyphicon-pencil btn-sm "></span></a>'
                                . '</form>'
                                . '</td>';
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table> 

                </div>
            </div>
            <div class="col-md-12">
                <div id="mensagem_delete" class="pull-right" style="display: none;" >
                    <span class="label label-success">Deletado com Sucesso!</span>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group-vertical">

                        <a href="cadastro.php" class="btn btn-primary ">Cadastrar História em Quadrinho</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../footer.php'; ?>
</html>
