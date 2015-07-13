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
            $pittore = $estrai->estraiContenutoCondizione("*", "Pittori", "iDPittori", $_GET["idPittore"], PDO::FETCH_NUM);
            ?>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Artista
                            <strong><?php echo utf8_encode($pittore[0][1]) . " " . utf8_encode($pittore[0][2]) ?></strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                        <hr class="visible-xs">
                        <p><?php echo utf8_encode($pittore[0][3]) ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center"><?php echo utf8_encode($pittore[0][1]) . " " . utf8_encode($pittore[0][2]) ?>
                            <strong>Galleria</strong>
                        </h2>
                        <hr>

                    </div>
                    <!--un quadro-->
                    <?php
                    $quadri = $estrai->estraiContenutoCondizione("*", "Quadri", "Pittori_idPittori", $_GET["idPittore"], PDO::FETCH_NUM);
                    for ($i = 0; $i < count($quadri); $i++) {
                        echo 
                    '<div class="col-md-4">
                        <h5 class="text-center">
                            <a href<strong>'. utf8_encode($quadri[$i][1]) .'</strong>
                        </h5>
                        <img class="img-responsive btn" href="#quadro'. $i .'" data-toggle="modal" src="'. utf8_encode($quadri[$i][4]) .'" alt=""> 
                        <div class="modal fade" id="quadro'. $i .'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="'. utf8_encode($quadri[$i][4]) .'">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center">
                            <br/>
                        </h5>
                        </br>
                    </div>';
                    }
                    ?>
                    <div class="col-md-4">
                        <h5 class="text-center">
                            <strong>Titolo quadro</strong>
                        </h5>
                        <img class="img-responsive btn" href="#quadro" data-toggle="modal" src="img/slide-1.jpg" alt=""> 
                        <div class="modal fade" id="quadro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
