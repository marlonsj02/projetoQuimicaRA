<?php

include('./back-end/conexxao.php');

$buscar_aboutpart1 = "SELECT * FROM aboutpart1";
$query_aboutpart1 = mysqli_query($connex, $buscar_aboutpart1);

$buscar_aboutpart2 = "SELECT * FROM aboutpart2";
$query_aboutpart2 = mysqli_query($connex, $buscar_aboutpart2);

$buscar_aboutpart3 = "SELECT * FROM aboutpart3";
$query_aboutpart3 = mysqli_query($connex, $buscar_aboutpart3);

$buscar_footerpart = "SELECT * FROM footerpart";
$query_footerpart = mysqli_query($connex, $buscar_footerpart);

$buscar_headerpart = "SELECT * FROM headerpart";
$query_headerpart1 = mysqli_query($connex, $buscar_headerpart);
$query_headerpart2 = mysqli_query($connex, $buscar_headerpart);
$query_headerpart3 = mysqli_query($connex, $buscar_headerpart);

$buscar_servicespart = "SELECT * FROM servicespart";
$query_servicespart = mysqli_query($connex, $buscar_servicespart);

$buscar_teampart1 = "SELECT * FROM teampart1";
$query_teampart1 = mysqli_query($connex, $buscar_teampart1);

$buscar_teampart2 = "SELECT * FROM teampart2";
$query_teampart2 = mysqli_query($connex, $buscar_teampart2);

$buscar_teampart3 = "SELECT * FROM teampart3";
$query_teampart3 = mysqli_query($connex, $buscar_teampart3);

$buscar_videocounterpart = "SELECT * FROM videocounterpart";
$query_videocounterpart = mysqli_query($connex, $buscar_videocounterpart);

?>


<!doctype html>
<html class="no-js" lang="pt">

<head>

    <!-- <script type="text/javascript">
        var url = window.location.href; // Retorna a url completa
        console.log(url);

        var valida = "https://quimicaaumentada.com.br/";

        if (url != valida) {

            window.location.href = valida;

        }
    </script> -->

    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>NANOTECNOLOGIA - RA</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <img src="assets/images/topo1.png" alt="Logo">
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <form action="back-end/edicoes.php" method="post">
                                <textarea class="subscribe-title wow fadeInUp form-control" data-wow-duration="1.3s" data-wow-delay="0.2s" name="tematicaSite" id="editorheader1">
                                    <?php

                                    $recebeuHeader1 = mysqli_fetch_array($query_headerpart1);
                                    $id = $recebeuHeader1['id'];
                                    $tematicaSite = $recebeuHeader1['tematicaSite'];

                                    echo $tematicaSite;
                                    ?>
                                </textarea>
                                <textarea class="subscribe-title wow fadeInUp form-control" data-wow-duration="1.3s" data-wow-delay="0.5s" name="nomeEducador" id="editorheader2">
                                    <?php

                                    $recebeuHeader2 = mysqli_fetch_array($query_headerpart2);
                                    $id = $recebeuHeader2['id'];
                                    $nomeEducador = $recebeuHeader2['nomeEducador'];

                                    echo $nomeEducador;
                                    ?>
                                </textarea>
                                <textarea class="subscribe-title wow fadeInUp form-control" data-wow-duration="1.3s" data-wow-delay="0.8s" name="texto" id="editorheader3">
                                    <?php

                                    $recebeuHeader3 = mysqli_fetch_array($query_headerpart3);
                                    $id = $recebeuHeader3['id'];
                                    $texto = $recebeuHeader3['texto'];

                                    echo $texto;
                                    ?>
                                </textarea>
                                <input type="hidden" name="rec_edicoes" value="formularioeditarheader">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type=" submit" class="btn btn-warning">Editar</button>
                            </form>
                        </div>
                        <!-- header hero content -->
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="assets/images/header-hero.png" alt="hero">
                        </div>
                        <!-- header hero image -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div>
        <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== BRAMD PART START ======-->



    <!--====== BRAMD PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div>
                            <!-- <a class="btn btn-success" href="ra/index.html" target="_blank">RA COM VÍDEOS</a>  -->
                            <a class="btn btn-primary" href="ra/index2.html" target="_blank">BAIXE OS QR'CODES E CLIQUE
                                AQUI PARA VER</a>
                            <p>Sugestão: Abra o site no celular e depois clique no link acima e depois aponte a câmera
                                para os qr'codes.</p><img src="ra/todos.png">
                        </div>
                        <br>
                        <div class="line m-auto"></div>
                        <form action="back-end/edicoes.php" method="POST">
                            <textarea class="title form-control" name="texto" rows="10" id="editorservices">
                            <?php

                            $recebeuServices = mysqli_fetch_array($query_servicespart);
                            $id = $recebeuServices['id'];
                            $texto = $recebeuServices['texto'];

                            echo $texto;
                            ?>
                            </textarea>
                            <input type="hidden" name="rec_edicoes" value="formularioeditarservices">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>
                    </div>
                    <!-- section title -->
                </div>
            </div>
        </div>
        <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Escalas <span> de comprimento</span></h3>
                        </div>
                        <!-- section title -->
                        <form action="back-end/edicoes.php" method="POST">
                            <textarea class="text form-control" rows="10" name="textoEscalaComprimento" id="editorabout1">
                                <?php

                                $recebeuAbout1 = mysqli_fetch_array($query_aboutpart1);
                                $id = $recebeuAbout1['id'];
                                $textoEscalaComprimento = $recebeuAbout1['textoEscalaComprimento'];

                                echo $textoEscalaComprimento;
                                ?>
                            </textarea>
                            <input type="hidden" name="rec_edicoes" value="formularioeditarabout1">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>

                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/fig1.png" alt="about">
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="assets/images/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">A revolução <span> Nanotecnológica</span></h3>
                        </div>
                        <!-- section title -->
                        <form action="back-end/edicoes.php" method="POST">
                            <textarea class="text form-control" name="textoRevolucaoNanotec" rows="10" id="editorabout2">
                                <?php

                                $recebeuAbout2 = mysqli_fetch_array($query_aboutpart2);
                                $id = $recebeuAbout2['id'];
                                $textoRevolucaoNanotec = $recebeuAbout2['textoRevolucaoNanotec'];

                                echo $textoRevolucaoNanotec;
                                ?>
                            </textarea>
                            <input type="hidden" name="rec_edicoes" value="formularioeditarabout2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>

                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/fig2.png" alt="about">
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Alotrópicos </span> do carbono</h3>
                        </div>
                        <!-- section title -->
                        <form action="back-end/edicoes.php" method="POST">
                            <textarea class="text form-control" name="textoAlotropicosCarbono" rows="10" id="editorabout3">
                                <?php

                                $recebeuAbout3 = mysqli_fetch_array($query_aboutpart3);
                                $id = $recebeuAbout3['id'];
                                $textoAlotropicosCarbono = $recebeuAbout3['textoAlotropicosCarbono'];

                                echo $textoAlotropicosCarbono;
                                ?>
                            </textarea>
                            <input type="hidden" name="rec_edicoes" value="formularioeditarabout3">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>

                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/nanos1.png" alt="about">
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->


    <!--====== ABOUT PART ENDS ======-->


    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>NANOESTRUTURAS </span> DE CARBONO</h3>
                    </div>
                    <!-- section title -->
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="assets/images/nanotubo1.png" alt="Team">
                            <video width="370" height="310" controls>
                                <source src="ra/nano1.mp4" type="video/mp4">
                                Seu navegador n~~ao suporta tags de vídeo.
                            </video>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name">Nanotubos de Carbono</h5>
                            <form action="back-end/edicoes.php" method="POST">
                                <textarea class="text form-control" name="textonanotubosCarb" rows="10" id="editorteam1">
                                    <?php

                                    $recebeuTeam1 = mysqli_fetch_array($query_teampart1);
                                    $id = $recebeuTeam1['id'];
                                    $textonanotubosCarb = $recebeuTeam1['textonanotubosCarb'];

                                    echo $textonanotubosCarb;
                                    ?>
                                </textarea>
                                <input type="hidden" name="rec_edicoes" value="formularioeditarteam1">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>
                        </div>
                    </div>
                    <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="assets/images/fulereno1.png" alt="Team">
                            <video width="370" height="310" controls>
                                <source src="ra/fulereno.mp4" type="video/mp4">
                                Seu navegador n~~ao suporta tags de vídeo.
                            </video>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name">FULERENO</h5>
                            <form action="back-end/edicoes.php" method="POST">
                                <textarea class="text form-control" rows="10" name="textoFulereno" id="editorteam2">
                                    <?php

                                    $recebeuTeam2 = mysqli_fetch_array($query_teampart2);
                                    $id = $recebeuTeam1['id'];
                                    $textoFulereno = $recebeuTeam2['textoFulereno'];

                                    echo $textoFulereno;
                                    ?>
                                </textarea>
                                <input type="hidden" name="rec_edicoes" value="formularioeditarteam2">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>
                        </div>
                    </div>
                    <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="assets/images/grafeno1.png" alt="Team">
                            <video width="370" height="310" controls>
                                <source src="ra/grafeno.mp4" type="video/mp4">
                                Seu navegador n~~ao suporta tags de vídeo.
                            </video>

                        </div>
                        <div class="team-content">
                            <h5 class="holder-name">O grafeno</h5>
                            <form action="back-end/edicoes.php" method="POST">
                                <textarea class="text form-control" rows="10" name="textoGrafeno" id="editorteam3">
                                    <?php

                                    $recebeuTeam3 = mysqli_fetch_array($query_teampart3);
                                    $id = $recebeuTeam1['id'];
                                    $textoGrafeno = $recebeuTeam3['textoGrafeno'];

                                    echo $textoGrafeno;
                                    ?>
                                </textarea>
                                <input type="hidden" name="rec_edicoes" value="formularioeditarteam3">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>
                        </div>
                    </div>
                    <!-- single team -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->


    <!--====== VIDEO COUNTER PART START ======-->

    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="assets/images/dots.svg" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="assets/images/risco1.png" alt="video">
                            </div>

                        </div>
                        <!-- video wrapper -->
                    </div>
                    <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">RISCOS <span> DA NANOTECNOLOGIA</span></h3>
                            </div>
                            <!-- section title -->
                            <form action="back-end/edicoes.php" method="POST">
                                <textarea class="text form-control" name="textoRiscosNanotec" rows="10" id="editorvideocounter">
                                    <?php

                                    $recebeuVideo = mysqli_fetch_array($query_videocounterpart);
                                    $id = $recebeuTeam1['id'];
                                    $textoRiscosNanotec = $recebeuVideo['textoRiscosNanotec'];

                                    echo $textoRiscosNanotec;
                                    ?>
                                </textarea>
                                <input type="hidden" name="rec_edicoes" value="formularioeditarvideo">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>
                        </div>
                        <!-- counter content -->
                    </div>
                    <!-- counter wrapper -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== VIDEO COUNTER PART ENDS ======-->


    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <form action="back-end/edicoes.php" method="post">
                <textarea class="subscribe-area wow fadeIn form-control" data-wow-duration="1s" data-wow-delay="0.5s" name="textoComplementar" rows="15" id="editorfooter">
                    <?php

                    $recebeuFooter = mysqli_fetch_array($query_footerpart);
                    $id = $recebeuFooter['id'];
                    $textoComplementar = $recebeuFooter['textoComplementar'];

                    echo $textoComplementar;
                    ?>
                </textarea>
                <input type="hidden" name="rec_edicoes" value="formularioeditarfooter">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-warning">Editar</button>
            </form>

            <!-- row -->
        </div>
        <!-- subscribe area -->
        <div class="footer-widget pb-100">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a class="logo" href="#">
                            <img src="assets/images/topo1.png" alt="logo">
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        <ul class="social">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul>
                    </div>
                    <!-- footer about -->
                </div>
                <div class="col-lg-5 col-md-7 col-sm-7">
                    <div class="footer-link d-flex mt-50 justify-content-md-between">
                        <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="footer-title">
                                <h4 class="title">Quick Link</h4>
                            </div>
                            <ul class="link">
                                <li><a href="#">Road Map</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Pricing</a></li>
                            </ul>
                        </div>
                        <!-- footer wrapper -->
                        <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="footer-title">
                                <h4 class="title">Resources</h4>
                            </div>
                            <ul class="link">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <!-- footer wrapper -->
                    </div>
                    <!-- footer link -->
                </div>
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="footer-title">
                            <h4 class="title">Contact Us</h4>
                        </div>
                        <ul class="contact">
                            <li>+809272561823</li>
                            <li>info@gmail.com</li>
                            <li>www.yourweb.com</li>
                            <li>123 Stree New York City , United <br> States Of America 750.</li>
                        </ul>
                    </div>
                    <!-- footer contact -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright d-sm-flex justify-content-between">
                        <div class="copyright-content">
                            <p class="text">Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                        </div>
                        <!-- copyright content -->
                    </div>
                    <!-- copyright -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- footer copyright -->
        </div>
        <!-- container -->
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="assets/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="assets/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    <script>
        CKEDITOR.replace('editorheader1');
    </script>
    <script>
        CKEDITOR.replace('editorheader2');
    </script>
    <script>
        CKEDITOR.replace('editorheader3');
    </script>
    <script>
        CKEDITOR.replace('editorservices');
    </script>
    <script>
        CKEDITOR.replace('editorabout1');
    </script>
    <script>
        CKEDITOR.replace('editorabout2');
    </script>
    <script>
        CKEDITOR.replace('editorabout3');
    </script>
    <script>
        CKEDITOR.replace('editorteam1');
    </script>
    <script>
        CKEDITOR.replace('editorteam2');
    </script>
    <script>
        CKEDITOR.replace('editorteam3');
    </script>
    <script>
        CKEDITOR.replace('editorvideocounter');
    </script>
    <script>
        CKEDITOR.replace('editorfooter');
    </script>

</body>

</html>