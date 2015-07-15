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

        <title>Pittori - Gruppo Artistico Spinea</title>

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
            try {
                require_once 'ClassiPHP/EstraiDati.php';
                $estrai = new EstraiDati();
                $pittori = $estrai->estraiContenuto("Pittori");
                for ($i = 0; $i < count($pittori); $i++) {
                    echo
                    '
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">' . iconv('cp1252', 'utf-8', $pittori[$i][1]) .
                    ' <strong>' . iconv('cp1252', 'utf-8', $pittori[$i][2]) . '</strong>' .
                    '</h2>
                        <hr>
                        <img class="img-responsive img-border img-left fotoPittore" src="' . utf8_encode($pittori[$i][5]) . '" alt="">' .
                    '<hr class="visible-xs">
                        <p>' . iconv('cp1252', 'utf-8', $pittori[$i][3]) . '</p><p class="text-right"><strong>' . iconv('cp1252', 'utf-8', $pittori[$i][4]) . '</strong></p>' .
                    '<a href="pittore.php?idPittore=' . iconv('cp1252', 'utf-8', $pittori[$i][0]) . '"><button type="button" class="btn btn-default bottoneDX">Galleria pittore</button></a>
                        </br>
                    </div>
                </div>
            </div>';
                }
            } catch (Exception $e) {
                echo ''
                . '<div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong>Errore</strong>
                        </h2>
                        <hr>
                        <p class="text-center">Si è verificato un errore nel caricamento dei pittori.</p>
                        </div>
                    </div>
                </div>';
            }
            ?>

        </div>
        <!-- /.container -->

        <!-- footer -->
        <?php require("footer.php"); ?>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
