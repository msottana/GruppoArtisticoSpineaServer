<!DOCTYPE html>
<html lang="it">

    <head>

        <meta charset="utf-8">

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

        <!--<div class="brand">Gruppo Artistico Spinea</div>
        <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>-->
        
        <div>
            <a href="index.html">
                <img class="img-responsive img-full" src="img/logoDefinitivo.jpg" alt="">
            </a>
        </div>

                <!-- Navigation -->
        <?php require("navbar.php"); ?>

        <div class="container">
            <?php
            require_once 'ClassiPHP/EstraiDati.php';
            $estrai = new EstraiDati();
            $evento = $estrai->estraiContenutoCondizione("*", "Eventi", "iDEventi", $_GET["idEvento"], PDO::FETCH_NUM);
            ?>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Evento
                            <strong><?php echo utf8_encode($evento[0][1]) ?></strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="<?php echo ($evento[0][6]) ?>" alt="">
                        <hr class="visible-xs">
                        <br/>
                        <p><?php echo ($evento[0][2]) ?></p>
                    </div>
                </div>
            </div>
            
            
            
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong>Galleria</strong>
                        </h2>
                        <hr>
                        <?php
                        $quadri = $estrai->estraiContenutoCondizione("*", "Quadri", "Eventi_idEventi", $_GET["idEvento"], PDO::FETCH_NUM);
                        for ($i = 0; $i < count($quadri); $i++) {
                            echo 
                        '<div class="col-md-4">
                            <h5 class="text-center">
                                <a href="quadro.php?idQuadro='. $quadri[$i][0] .'"><strong>'. utf8_encode($quadri[$i][1]) .'</strong></a>
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
                    </div>
                    

                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Come
                            <strong>Arrivare</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                        <iframe width="100%" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22374.584715611916!2d12.1582911!3d45.493507150000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eca0f598818eb%3A0xdd3c2dd33777520f!2sSpinea+VE!5e0!3m2!1sit!2sit!4v1429950037528"></iframe>
                    </div>
                    <div class="col-md-6">
                        <p>Indirizzo:
                            <strong>
                               <?php echo utf8_encode($evento[0][3]) ?></strong>
                        </p>
                        <br>
                        <p>Data di inizio:
                            <strong>
                                <?php echo utf8_encode($evento[0][4]) ?></strong>
                        </p>
                        <br>
                        <p>L'evento terminerá il:
                            <strong>
                                <?php echo utf8_encode($evento[0][5]) ?></strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <!-- /.container -->

                <!-- footer -->
        <?php require("footer.php"); ?>

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
