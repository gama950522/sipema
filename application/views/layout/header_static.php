<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- <link rel="icon" href="../../favicon.ico"> -->

        <title></title>
        <link rel="shortcut icon" href="<?php echo site_url('public/icon/icon_2_small.png') ?>">
        <link href="<?php echo site_url('assets/dist/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" id="bootstrap-css">
        <link href="<?php echo site_url('assets/dist/bootstrap/css/justified-nav.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/dist/bootstrap/css/carousel.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/dist/bootstrap/css/signin.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/dist/waitme/waitMe.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/dist/datepicker/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/dist/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">


        <link href="<?php echo site_url('assets/build/css/custom.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/build/css/style.css') ?>" rel="stylesheet">
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
        <script src="<?php echo site_url('assets/dist/jquery/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/build/js/escala_colores.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/build/js/funciones.js') ?>"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body style="padding-top: 70px">

        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url('public/images/logo_barra_ppal.png') ?>" alt="Brand" style="height: 20px">
                        SEMARNATH
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('sipema/'); ?>">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">S<small>IPEMA</small> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('sipema/cartadescriptiva') ?>">Carta descriptiva</a></li>
                                <li><a href="<?php echo base_url('#') ?>">Beneficios</a></li>
                                <li><a href="<?php echo base_url('#') ?>">Presupuesto desaregado</a></li>
                                <li><a href="<?php echo base_url('#') ?>">Programación de metas</a></li>
                                <li><a href="<?php echo base_url('#') ?>">Viáticos</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('sipema/reportes') ?>">Reportes</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><?php echo $personal['titulo'] .' '. $personal['nombre'] . ' ' . $personal['ap_paterno'] . ' ' . $personal['ap_materno'] . '.'?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('login/destruir/') ?>">Abandonar sesión</a></li>
                                <!-- <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>