<?php

session_start();
include_once getcwd() . '\DAO\Conexion.php';

class DAOSesion {

    function __construct() {
        
    }

    function iniciarSesion($user, $pass) {
        try {
            $conexion = new Conexion();
            $consulta = "SELECT * FROM `login` WHERE `cc_usuario` = " . $user . " and `contrasena` = " . $pass;
            $result = $conexion->consultar_servidor($consulta);
            if ($result != NULL) {
                if (mysql_num_rows($result) > 0) {
                    while ($row = mysql_fetch_array($result)) {
                        $_SESSION['user'] = $row['cc_usuario'];
                        $_SESSION['tipo'] = $row['tipo_usuario'];
                    }
                } else {
                    return "No found";
                }
                mysql_free_result($result);
            }
        } catch (Exception $e) {
            return null;
        }
    }

}
