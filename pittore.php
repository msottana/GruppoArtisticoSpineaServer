<!DOCTYPE html>
<html lang="it">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Home - Gruppo Artistico Spinea</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">

        <!-- Font-Awesome CSS -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Nostri Custom CSS -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div>
            <a href="index.html">
                <img class="img-responsive img-full" src="img/logoDefinitivo.jpg" alt="">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.html">Gruppo Artistico Spinea</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="galleria.html">Galleria</a>
                        </li>
                        <li>
                            <a href="pittori.html">Pittori</a>
                        </li>
                        <li>
                            <a href="eventi.html">Eventi</a>
                        </li>
                        <li>
                            <a href="chiSiamo.html">Chi siamo</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">
            <?php
            require_once 'ClassiPHP/EstraiDati.php';
            $estrai = new EstraiDati();
            $pittore = $estrai->estraiContenutoCondizione("*", "Pittori", $campoFiltro, $valore, $fetch)
            ?>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Artista
                            <strong>Gino Pierino</strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                        <hr class="visible-xs">
                        <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                        <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Gino Pierino
                            <strong>Galleria</strong>
                        </h2>
                        <hr>

                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>

                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>
                    <!--un quadro-->
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#success" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="img/slide-1.jpg">

                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Informazioni
                            <strong>Aggiuntive</strong>
                        </h2>
                        <hr>
                        <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container -->

        <footer>
            <div class="container" id="footer">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                        <p>
                            <a href="http://www.spinea.gov.it/" target="_blank">Comune di Spinea</a>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                        <p>Copyright &copy; Gruppo Artistico Spinea 2015</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 text-right">
                        <p>Seguici su:
                            <a href="http://facebook.com" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="http://plus.google.com" target="_blank" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="http://twitter.com" target="_blank" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

    </body>

</html>
