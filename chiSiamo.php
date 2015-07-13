<!DOCTYPE html>
<html lang="it">

    <head>

        <meta charset="utf-8">
        <!--
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Chi siamo - Gruppo Artistico Spinea</title>

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

        <!-- Logo -->
        <?php require("logo.php"); ?>

        <!-- Navigation -->
        <?php require("navbar.php"); ?>

        <div class="container">

            <?php
            require_once 'ClassiPHP/EstraiDati.php';
            $estrai = new EstraiDati();
            $gruppo = $estrai->estraiContenuto("Gruppo");
            ?>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Chi Siamo
                            <strong>Gruppo Artistico Spinea</strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="  <?php echo utf8_encode($gruppo[0][1]) ?> " alt="">
                        <hr class="visible-xs">
                        <p> <?php echo utf8_encode($gruppo[0][2]) ?> </p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Spinea
                            <strong>Dove Trovarci</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-md-8">
                        <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22374.584715611916!2d12.1582911!3d45.493507150000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eca0f598818eb%3A0xdd3c2dd33777520f!2sSpinea+VE!5e0!3m2!1sit!2sit!4v1429950037528"></iframe>
                    </div>
                    <div class="col-md-4">
                        <p>Numero:</p>
                        <p>
                            <strong> <?php echo utf8_encode($gruppo[0][4]) ?></strong>
                        </p>
                        <br>
                        <p>Email: </p>
                        <p>
                            <strong><a href="<?php echo "mailto:" . ($gruppo[0][5]) ?>"><?php echo utf8_encode($gruppo[0][5]) ?></a></strong>
                        </p>
                        <br>
                        <p>Indirizzo:</p>
                        <p>
                            <strong> <?php echo utf8_encode($gruppo[0][3]) ?></strong>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require("footer.php"); ?>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
