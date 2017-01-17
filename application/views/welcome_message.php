<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your,Keywords">
        <meta name="author" content="ResponsiveWebInc">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="<?php echo site_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" href="<?php echo site_url('assets/build/css/settings.css') ?>" media="screen" />
        <!-- Pretty Photo CSS -->
        <link href="<?php echo site_url('assets/build/css/prettyPhoto.css') ?>" rel="stylesheet">
        <!-- Parallax slider -->
        <link rel="stylesheet" href="<?php echo site_url('assets/build/css/slider.css') ?>">
        <!-- Flexslider -->
        <link rel="stylesheet" href="<?php echo site_url('assets/build/css/flexslider.css') ?>">
        <!-- Font awesome CSS 	
        <link href="<?php echo site_url('assets/build/css/font-awesome.min.css') ?>" rel="stylesheet">	-->
        <!-- Custom CSS -->
        <link href="<?php echo site_url('assets/build/css/style.css') ?>" rel="stylesheet">
        <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
        <link href="<?php echo site_url('assets/build/css/lblue.css') ?>" rel="stylesheet">

    </head>

    <body>

        <!-- Header Starts -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="logo">
                            <div class="row">
                                <div class="col-md-4"><img src="<?php echo site_url('public/images/hidalgocrececontigo.png') ?>" class="img-responsive"></div>
                                <div class="col-md-4"><img src="<?php echo site_url('public/images/hidalgo_logo.png') ?>" class="img-responsive"></div>
                                <div class="col-md-4"><img src="<?php echo site_url() ?>" class="img-responsive"></div>
                            </div>
                            <!-- <h1><a href="#">Metro <span class="color">Mania</span></a></h1>
                      <div class="hmeta">Responsive Metro Styled Theme</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Navigation bar starts -->

        <div class="navbar bs-docs-nav" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a href="#" >Inicio</a></li> 
                        <li><a href="#" >Pases de salida</a></li> 
                        <li><a href="#" >Contrarecivos</a></li> 
                        <li><a href="#" >Inventarios</a></li> 
                        <li><a href="#" >Correspondencia</a></li> 
                        <li><a href="<?php echo site_url('index.php/welcome/login') ?>">SIPEMA</a></li>

                    </ul>
                </nav>
            </div>
        </div>

        <!-- Navigation bar ends -->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Javascript files -->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo site_url('assets/dist/js/bootstrap.min.js') ?>"></script>

    </body>	

    <!-- Mirrored from ashobiz.asia/wrapbootstrap/metromania485/lblue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 18:11:20 GMT -->
</html>