<?php


include  'conexxao.php';


$verificando = isset($_POST['rec_edicoes']) ? $_POST['rec_edicoes'] : 'nada';


switch ($verificando) {

    case "nada":

        header('location: formularioeditarcadastro.php');

    case "formularioeditarheader";

        $id = $_POST['id'];
        $tematicaSite = $_POST['tematicaSite'];
        $nomeEducador = $_POST['nomeEducador'];
        $texto = $_POST['texto'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoHeader = "UPDATE headerpart 
                            SET tematicaSite = '$tematicaSite', nomeEducador = '$nomeEducador', texto = '$texto', dataCadastro = now()
                            WHERE id = '$id'";
        $queryHeader = mysqli_query($connex, $recebendoHeader);

        header('location: ../index.php ');

        break;


    case "formularioeditarservices";

        $id = $_POST['id'];
        $texto = $_POST['texto'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoServices = "UPDATE servicespart 
                            SET texto = '$texto', dataCadastro = now()
                            WHERE id = '$id'";
        $queryServices = mysqli_query($connex, $recebendoServices);

        header('location: ../index.php ');

        break;


    case "formularioeditarabout1";

        $id = $_POST['id'];
        $textoEscalaComprimento = $_POST['textoEscalaComprimento'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoAbout1 = "UPDATE aboutpart1 
                            SET textoEscalaComprimento = '$textoEscalaComprimento', dataCadastro = now()
                            WHERE id = '$id'";
        $queryAbout1 = mysqli_query($connex, $recebendoAbout1);

        header('location: ../index.php ');

        break;


    case "formularioeditarabout2";

        $id = $_POST['id'];
        $textoRevolucaoNanotec = $_POST['textoRevolucaoNanotec'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoAbout2 = "UPDATE aboutpart2 
                            SET textoRevolucaoNanotec = '$textoRevolucaoNanotec', dataCadastro = now()
                            WHERE id = '$id'";
        $queryAbout2 = mysqli_query($connex, $recebendoAbout2);

        header('location: ../index.php ');

        break;


    case "formularioeditarabout3";

        $id = $_POST['id'];
        $textoAlotropicosCarbono = $_POST['textoAlotropicosCarbono'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoAbout3 = "UPDATE aboutpart3 
                            SET textoAlotropicosCarbono = '$textoAlotropicosCarbono', dataCadastro = now()
                            WHERE id = '$id'";
        $queryAbout3 = mysqli_query($connex, $recebendoAbout3);

        header('location: ../index.php ');

        break;


    case "formularioeditarteam1";

        $id = $_POST['id'];
        $textonanotubosCarb = $_POST['textonanotubosCarb'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoTeam1 = "UPDATE teampart1
                            SET textonanotubosCarb = '$textonanotubosCarb', dataCadastro = now()
                            WHERE id = '$id'";
        $queryTeam1 = mysqli_query($connex, $recebendoTeam1);

        header('location: ../index.php ');

        break;


    case "formularioeditarteam2";

        $id = $_POST['id'];
        $textoFulereno = $_POST['textoFulereno'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoTeam2 = "UPDATE teampart2
                            SET textoFulereno = '$textoFulereno', dataCadastro = now()
                            WHERE id = '$id'";
        $queryTeam2 = mysqli_query($connex, $recebendoTeam2);

        header('location: ../index.php ');

        break;


    case "formularioeditarteam3";

        $id = $_POST['id'];
        $textoGrafeno = $_POST['textoGrafeno'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoTeam3 = "UPDATE teampart3
                            SET textoGrafeno = '$textoGrafeno', dataCadastro = now()
                            WHERE id = '$id'";
        $queryTeam3 = mysqli_query($connex, $recebendoTeam3);

        header('location: ../index.php ');

        break;


    case "formularioeditarvideo";

        $id = $_POST['id'];
        $textoRiscosNanotec = $_POST['textoRiscosNanotec'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoVideo = "UPDATE videocounterpart
                            SET textoRiscosNanotec = '$textoRiscosNanotec', dataCadastro = now()
                            WHERE id = '$id'";
        $queryVideo = mysqli_query($connex, $recebendoVideo);

        header('location: ../index.php ');

        break;


    case "formularioeditarfooter";

        $id = $_POST['id'];
        $textoComplementar = $_POST['textoComplementar'];
        $dataCadastro = $_POST['dataCadastro'];

        $recebendoFooter = "UPDATE footerpart 
                            SET textoComplementar = '$textoComplementar', dataCadastro = now()
                            WHERE id = '$id'";
        $queryFooter = mysqli_query($connex, $recebendoFooter);

        header('location: ../index.php ');

        break;
}
