<?php

/**
 * @author Romero Rossi
 * @version 1.0
 * @created 15-ago-2015 05:42:01 p.m.
 */
class DAOPuestoVotacion {

    function agregarPuestoVotacion($departamento, $municipio, $puesto, $dir_puesto, $mesa) {
        $conexion = new Conexion();
        $dao = new DAOPuestoVotacion();

        $consultaBD = $dao->consultarPuestoVotacionBD($departamento, $municipio, $puesto, $dir_puesto, $mesa);
        if ($consultaBD == 1500) {
            
        }
        if ($consultaBD != 1500) {
            $consulta = "INSERT INTO `censo_votacion`.`puesto_votacion` (`departamento`, `municipio`, `puesto`, `direccion`, `mesa`) VALUES ('" . $departamento . "', '" . $municipio . "', '" . $puesto . "', '" . $dir_puesto . "', '" . $mesa . "')";
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
        }
        //
    }

    function modificarPuestoVotacion($id_puesto_votacion, $departamento, $municipio, $puesto, $dir_puesto, $mesa) {
        $conexion = new Conexion();
        $consulta = "UPDATE `censo_votacion`.`puesto_votacion` SET `departamento` = '" . $departamento . "', `municipio` = '" . $municipio . "', `puesto` = '" . $puesto . "', `direccion` = '" . $dir_puesto . "', `mesa` = '" . $mesa . "' WHERE `puesto_votacion`.`id_puesto_votacion` = " . $id_puesto_votacion;
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }

    public function consultarPuestoVotacionBD($departamento, $municipio, $puesto, $dir_puesto, $mesa) {
        $conexion = new Conexion();
        $consulta = "SELECT `id_puesto_votacion` FROM `puesto_votacion` WHERE `departamento` LIKE '" . $departamento . "' AND `municipio` LIKE '" . $municipio . "' AND `puesto` LIKE '" . $puesto . "' AND `direccion` LIKE '" . $dir_puesto . "' AND `mesa` LIKE '" . $mesa . "'";
        $resultado = $conexion->consultar_servidor($consulta);
        $fila = mysql_fetch_array($resultado);
        $conexion->cerrar_conexion();
        $aux = 15000;
        //echo $fila[0];
        for ($x = 1; $x < 13000; $x++) {
            if ($fila[0] == $x) {
                $aux = $x;
            }
        }
        if ($aux == 15000) {
            return 0;
        } else {
            return $aux;
        }
    }

    function eliminarPuestoVotacion($id_puesto_votacion) {
        $conexion = new Conexion();
        $consulta = "DELETE FROM `censo_votacion`.`puesto_votacion` WHERE `puesto_votacion`.`id_puesto_votacion` = " . $id_puesto_votacion;
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }

    function muestraPuestoVotacion($cc_votante) {
        $conexion = new Conexion();
        $consulta = "SELECT `id_puesto` FROM `zonificacion` WHERE `cc_votante` = " . $cc_votante;
        $resultado = $conexion->consultar_servidor($consulta);
        $fila = mysqli_fetch_array($resultado);
        $consulta = "SELECT * FROM `puesto_votacion` WHERE `id_puesto_votacion` = " . $fila[0];
        $resultado = $conexion->consultar_servidor($consulta);
        $fila = mysqli_fetch_array($resultado);
        $dao = new PuestoVotacion($fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5]);
        //echo $fila[0];
        //echo $fila[1];
        $conexion->cerrar_conexion();
        return $dao;
    }

}

?>
