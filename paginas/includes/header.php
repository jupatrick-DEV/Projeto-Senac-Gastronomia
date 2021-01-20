<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Senac Gastronomia</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"/>

        <!--plugins-->
        <link rel="stylesheet" href="plugins/Icomoon/Icomoon.css"/>

        <!--Meu CSS-->
        <link rel="stylesheet" href="estilo/administrativa.css"/>
        <link rel="stylesheet" href="assets/css/stilofooter.css" />
        <link rel="stylesheet" href="assets/css/estilosite.css"/>


        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <meta name="apple-mobile-web-app-   capable" content="yes">

        <meta name="mobile-web-app-capable" content="yes">

        <link rel="shortcut icon" href="https://www.dn.senac.br/wp-content/themes/senac/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="painel/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="painel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="painel/dist/css/adminlte.min.css">
        <!--Css Páginas-->
        <?php
        $pg = isset($_GET['pg']);
        if ($pg) {
            echo ($_GET['pg'] == 'contato') ? '<link rel="stylesheet" href="assets/css/estiloContato.css"/>' : '';
            echo ($_GET['pg'] == 'inicio') ? '<link rel="stylesheet" href="plugins/Icomoon/Icomoon.css"/>' : '';
        }
        ?>

    </head>

    <body>
        <!-- Menu NAvBAR -->

        <div class="container-fluid table-light alert-link">
            <div class="container">
                <div class="row">
                    <div class="col">                   
                        <nav class="navbar  navbar-expand-lg navbar-info">
                            <img src="assets/img/logo_senac.png" alt="" class="img-fluid w-25">
                            <a class="navbar-brand" href="#"></a>
                    </div>     
                    <div class="col">
                        <ul class="navbar navbar-expand-lg navbar-info ">
                            <li class="nav active">
                                <a class="nav-link" href="?pg=inicio"> <span class=""> </span> Inicial </a></li>
                            <li class="nav active">
                                <a class="nav-link " href="?novidades"> <span class=""> </span> Destaques </a></li>
                            <li class="nav active">
                                <a class="nav-link " href="?pg=sobre"><span class=""></span> Aluno </a></li>
                            <li class="nav active">
                                <a class="nav-link " href="?pg=contato"> <span class=""> Contato</span></a></li>
                        </ul>
                    </div>
                    </nav>


                    <div class="col"><nav class="social text-right m-4">
                            <a href="https://www.facebook.com/SenacBrasil" target="_blank"><i class="Juli-facebook2" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/senacbrasil/" target="_blank"><i class=" Juli-instagram1" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/SenacBrasil" target="_blank"><i class="Juli-twitter1" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/user/SenacPernambuco" target="_blank"><i class="Juli-youtube2" aria-hidden="true"></i></a>
                        </nav> 
                    </div>
                </div>
            </div>  
        </div>
        <hr class="text-color-warning">

        <!-- Header -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </body>
</html>