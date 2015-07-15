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

        <!-- Logo -->
        <?php require("logo.php"); ?>

        <!-- Navigation -->
        <?php require("navbar.php"); ?>

        <div class="container">
            <?php
            try {
                require_once 'ClassiPHP/EstraiDati.php';
                $estrai = new EstraiDati();
                $pittore = $estrai->estraiContenutoCondizione("*", "Pittori", "idPittori", $_GET["idPittore"], PDO::FETCH_NUM);
                if (count($pittore) == 0) {
                    header('Location: 404/404.php');
                }
            } catch (Exception $e) {
                header('Location: 404/404.php');
            }
            ?>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center"> <?php echo iconv('cp1252', 'utf-8', $pittore[0][1]) ?>
                            <strong><?php echo " " . utf8_encode($pittore[0][2]) ?></strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left fotoPittore" src="<?php echo iconv('cp1252', 'utf-8', $pittore[0][5]) ?>" alt="">
                        <hr class="visible-xs">
                        <p><?php echo iconv('cp1252', 'utf-8', $pittore[0][3]) ?></p>
                        <p class="text-right"><strong><?php echo iconv('cp1252', 'utf-8', $pittore[0][4]) ?></strong></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center"><?php echo iconv('cp1252', 'utf-8', $pittore[0][1]) . " " . iconv('cp1252', 'utf-8', $pittore[0][2]) ?>
                            <strong>Galleria</strong>
                        </h2>
                        <hr>

                    </div>
                    <!--un quadro-->
                    <?php
                    try {
                        $quadri = $estrai->estraiContenutoCondizione("*", "Quadri", "Pittori_idPittori", $_GET["idPittore"], PDO::FETCH_NUM);
                        for ($i = 0; $i < count($quadri); $i++) {
                            echo
                            '<div class="col-md-4">
                        <h5 class="text-center">
                            <a href="quadro.php?idQuadro=' . $quadri[$i][0] . '"><strong>' . iconv('cp1252', 'utf-8', $quadri[$i][1]) . '</strong></a>
                        </h5>
                        <img class="img-responsive btn" href="#quadro' . $i . '" data-toggle="modal" src="' . iconv('cp1252', 'utf-8', $quadri[$i][4]) . '" alt=""> 
                        <div class="modal fade" id="quadro' . $i . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-success">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <img class="img-responsive" src="' . iconv('cp1252', 'utf-8', $quadri[$i][4]) . '">
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
                    } catch (Exception $e) {
                        echo '<p class="text-center">Si è verificato un errore nel caricamento dei quadri.</p>';
                    }
                    ?>
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
