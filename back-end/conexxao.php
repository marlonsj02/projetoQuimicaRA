<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'nanotec_ra';

$connex = mysqli_connect($host, $user, $password, $db_name) or die ('Não foi possível conectar');
