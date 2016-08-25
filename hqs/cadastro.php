<?php require_once '../header.php'; ?>
<!--<button  onclick="location.reload();" class="btn btn-primary">Reload</button>-->


<!-- Page Content -->
<div class=" col-md-12">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <form class="form-horizontal" action="" method="POST" id="formulario">
                    <fieldset>
                        <legend>Cadastro hqs</legend>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Titulo</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="titulo" placeholder="Titulo" id="titulo" name="titulo" required="true" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Editora</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="editora" placeholder="DC/MARVEL/Outras"  id="editora" name="editora" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Status</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="sts" placeholder="Visto/Baixado/interesse" id="sts" name="sts" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Personagem</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="personagem" placeholder="Flash/Superman/Liga da Justiça" id="personagem" name="personagem" required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Data de Visualização</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="data" placeholder="DC/MARVEL/Outras" name="data" id="data" required="true" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Localização</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control"  placeholder="Meu computador/WEB" name="loc" id="loc" required="true" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                            <div class="col-md-12">
                                <div id="mensagem" class="pull-right"  style="display: none;">
                                    <span class="label label-success">Cadastro Realizado com Sucesso!</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="mensagem_erro" class="pull-right"  style="display: none;">
                                    <span class="label label-danger">Cadastro Não realiza Tente novamente</span>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>


<?php require_once '../footer.php'; ?>
</html>

