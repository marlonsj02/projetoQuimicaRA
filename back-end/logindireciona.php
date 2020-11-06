<?php

include('conexxao.php');


$senhaADM = mysqli_real_escape_string($connex, $_POST['senhaADM']);

//echo $email.$senha;

$query = "SELECT *
FROM loginadm 
WHERE senhaADM = '$senhaADM'";
$result = mysqli_query($connex, $query);
$row = mysqli_num_rows($result);


if ($row == 1) {
    // echo "1";
    header('Location: ../edicoesIndex.php');
    exit();
} else {
    // echo "2";
    header('Location: ../index.php');
    exit();
}
