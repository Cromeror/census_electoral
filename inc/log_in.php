<?php

include_once getcwd() . '\DAO\DAOSesion.php';

if (isset($_POST['loginUsername']) && isset($_POST["loginPassword"])) {
    $sesion = new DAOSesion();
    $sesion->iniciarSesion($_POST['loginUsername'], $_POST["loginPassword"]);
    header('Location: http://localhost/census_electoral/index.php');
}