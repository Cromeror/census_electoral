<?php

include_once getcwd() . '\DAO\DAOSesion.php';

if (isset($_POST['loginUsername'])) {
    $sesion = new DAOSesion();
    $sesion->iniciarSesion($_POST['loginUsername'], "123");
}
    