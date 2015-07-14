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
                        <h2 class="intro-text text-center">' . utf8_encode($pittori[$i][1]) .
                        ' <strong>'. utf8_encode($pittori[$i][2]) . '</strong>' .
                    '</h2>
                        <hr>
                        <img class="img-responsive img-border img-left fotoPittore" src="' . utf8_encode($pittori[$i][5]) . '" alt="">' .
                    '<hr class="visible-xs">
                        <p>' . utf8_encode($pittori[$i][3]) . '</p><p class="text-right"><strong>'. utf8_encode($pittori[$i][4]) .'</strong></p>'.
                    '<a href="pittore.php?idPittore='. utf8_encode($pittori[$i][0]) .'"><button type="button" class="btn btn-default bottoneDX">Galleria pittore</button></a>
                        </br>
                    </div>
                </div>
            </div>';
            }
            ?>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Sergio
                            <strong>Vozza</strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left fotoPittore" src="img/sergiovozza/foto_sergio.jpg" alt="">
                        <hr class="visible-xs">
                        <p>Artista dal portato gradevole, sia per quanto riguarda la forma e sia per quanto concerne l’uso del colore, Sergio si caratterizza per una serie di opere segnate da un evidente, ma oltremodo originale, richiamo alle matrici surrealistiche e metafisiche. Attraverso queste due accezioni stilistiche, l’autore, da felice ed intuitivo autodidatta, è riuscito ad elaborare, nel corso degli anni, un proprio linguaggio, caratterizzato da visioni immaginifiche, ma non prive di una certa adesione al realismo contemporaneo.
                            Fra architetture classiche, scene di vita quotidiana, strutture inverosimili, si sviluppano diversi soggetti spesso resi bidimensionalmente, ma sempre dipinti in modo tale da accentuare la semplicità di ogni singolo elemento strutturale. Ogni particolare di qualsiasi quadro è reso accuratamente, nulla è lasciato al caso; protagonista indiscusso è inoltre il colore, concepito come una sorta di materia da spalmare delicatamente, senza che possa urtare con gli stessi soggetti o con le architetture raffigurate. I temi scelti sono la chiara espressione dei sentimenti provati dall’artista, il quale riesce, attraverso i propri occhi e la propria mente, ad evocare l’universo circostante, caratterizzato spesso da una esasperante quotidianità; ma in ognuno dei lavori è anche possibile percepire una altra dimensione in cui a primeggiare sono la fantasia e l’incanto. </p>
                        <a href="sergioVozza.html"><button type="button" class="btn btn-default bottoneDX">Galleria pittore</button></a>
                        </br>
                    </div>
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

    </body>

</html>
