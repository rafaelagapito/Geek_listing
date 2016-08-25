
<?php require_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title . ' ' . $version; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Bootstrap Core CSS -->
        <link href="../custom/bootstrap.css" rel="stylesheet">
        <link href="../custom/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--    <link href="custom/bootstrap.css" rel="stylesheet">-->
        <!-- Custom CSS -->
        <link href="../custom/simple-sidebar.css" rel="stylesheet">
        <!--      <link href="custom/simple-sidebar.css" rel="stylesheet">-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
          <script src="../bower_components/respond/dest/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">

                    <li class="sidebar-brand">
                        <a href="#">
                            <?php echo $title; ?><span  onclick="location.reload();"  class=" glyphicon glyphicon-refresh "></span>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Geek_Listing/hqs/">Histórias em Quadrinhos</a>
                    </li>
                    <li>
                        <a href="#">Séries</a>
                    </li>
                    <li>
                        <a href="#">Filmes</a>
                    </li>
                    <li>
                        <a href="#">Animaçõe</a>
                    </li>
                    <li>
                        <a href="#">Ideias</a>
                    </li>
                    <li>
                        <a href="#">Trabalhos</a>
                    </li>
                    <li>
                        <a href="#">Tarefas</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->