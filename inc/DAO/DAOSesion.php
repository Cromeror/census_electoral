<?php
include_once getcwd() . '\DAO\Conexion.php';

class DAOSesion {

    function __construct() {
        
    }

    function iniciarSesion($user, $pass) {
        $conexion = new Conexion();
        $consulta = "SELECT * FROM `login` WHERE `cc_usuario` = " . $user . " and `contraseña` = " . $pass;
        $result = $conexion->query_server($consulta);
        if ($result != NULL) {
            echo 'Es distinto de nulll';
            if (mysql_num_rows($result) > 0) {
                while ($row = mysql_fetch_array($result)) {
                    echo $row[3];
                }
            } else {
                //no results, you can put a message here...
            }
            mysql_free_result($result);
        }

        echo $user . ' - ' . $pass;
    }

}
