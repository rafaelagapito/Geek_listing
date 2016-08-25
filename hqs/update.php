<?php
require_once '../header.php';
require_once '../connect.php';
?>


<div id="page-content-wrapper">
    <div class="container-fluid">
        
        <?php
        //Pega os dados da tabela que vai ser editada
        $id = $_GET['id'];

        $buscahqs = $pdo->prepare("SELECT * FROM hqs WHERE ID=:id");
        $buscahqs->bindValue(":id", $id);
        $buscahqs->execute();

        $linha = $buscahqs->fetchALL(PDO::FETCH_ASSOC);
        foreach ($linha as $listar) {
            
        }
        ?>
        <table class="table table-striped table-hover " id="editar"  >
            <tbody>
                <?php
//form do update 
                echo '<div> '
                . '  <div>'
                . ' <form class="form-horizontal" action="" method="POST" id="formulario_update">'
                . ' <fieldset>
                        <legend>Atulizar Historias em Quadrinhos by ID: <strong class="text-primary">' . $listar["id"] . '</strong></legend>'
                        . '<input style="display:none;"  type="text" class="form-control" value="' . $listar["id"] . '"  id="id" name="id" >  '

//         
                . '<div class="form-group">'
                . '<label for="inputEmail" class=" control-labell">Titulo</label>'
                . ' <input  type="text" class="form-control" value="' . $listar["titulo"] . '"  id="titulo" name="titulo" >    '
                . '</div>'
//      
                . '<div class="form-group">'
                . '<label for="inputEmail" class=" control-label">Editora</label>'
                . ' <input  type="text" class="form-control"  value="' . $listar["editora"] . '"  id="editora" name="editora" >    '
                . '</div>'

//
                . '<div class="form-group">'
                . '<label for="inputEmail" class=" control-label">Status</label>'
                . ' <input  type="text" class="form-control" " value="' . $listar["status"] . '"  id="sts" name="sts" >    '
                . '</div>'

//
                . '<div class="form-group">'
                . '<label for="inputEmail" class=" control-label">Peronagem</label>'
                . ' <input  type="text" class="form-control"  value="' . $listar["personagem"] . '"  id="personagem" name="personagem" >    '
                . '</div>'

//
                . '<div class="form-group">'
                . '<label for="inputEmail" class="control-label">Data</label>'
                . ' <input  type="text" class="form-control"  value="' . $listar["data"] . '"  id="data" name="data" >    '
                . '</div>'

//
                . '<div class="form-group">'
                . '<label for="inputEmail" class=" control-label">Localização</label>'
                . ' <input  type="text" class="form-control"  value="' . $listar["loc"] . '"  id="loc" name="loc" >    '
                . '</div>'
                . '<div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                            <div class="col-md-12">
                                <div id="mensagem_update" class="pull-right"  style="display: none;">
                                    <span class="label label-success">Atualização Realizada com Sucesso!</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="mensagem_erro_update" class="pull-right"  style="display: none;">
                                    <span class="label label-danger">Atualização Não realizada, Tente novamente</span>
                                </div>
                            </div>
                        </div>'
                . '   </fieldset>'
                . '</form> '
                . ' </div> '
                . '</div>';
                ?>
            </tbody>
        </table> 

    </div>



</div>























<?php require_once '../footer.php'; ?>




























































