<?php

class DAOVotante
{


	function agregaVotante($cc_votante, $nombre_votante, $apellido_votante, $tel_votante, $cel_votante, $dir_votante)
	{
            $conexion = new Conexion();
            $consulta ="SELECT `cc_votante` FROM `votante` WHERE `cc_votante` = ".$cc_votante;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_array($resultado);
            if($fila[0]==$cc_votante){
                echo 'El Candidato se encuentra registrado';
                $conexion->cerrar_conexion();
                return 1;
            }else{
                $consulta = "INSERT INTO `censo_votacion`.`votante` (`cc_votante`, `nombre_votante`, `apellido_votante`, `tel_votante`, `cel_votante`, `dir_votante`) VALUES ('".$cc_votante."', '".$nombre_votante."', '".$apellido_votante."', '".$tel_votante."', '".$cel_votante."', '".$dir_votante."');";
                $resultado=$conexion->consultar_servidor($consulta);
                $conexion->cerrar_conexion();
                if ($resultado==TRUE){
                    //El Lider se agrego a la Base de Datos
                   return 2;
                }
                if ($resultado==FALSE){
                    //Error al momento de agregar el Lider a la Base de Datos
                    return 3;
                }
            }   
            
	}

        
	function modificarVotante($cc_votante, $nombre_votante, $apellido_votante, $tel_votante, $cel_votante, $dir_votante)
	{
            $conexion = new Conexion();
            $consulta="UPDATE `votante` SET `nombre_votante`= '".$nombre_votante."',`apellido_votante`='".$apellido_votante."',`tel_votante`='".$tel_votante."',`cel_votante`='".$cel_votante."',`dir_votante`='".$dir_votante."' WHERE `cc_votante`=".$cc_votante;
            $resultado=$conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
            if($resultado==TRUE){
            return TRUE;
            }else{
            return FALSE;
            }
	}

        
	function eliminarVotante($cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "DELETE FROM `votante` WHERE `cc_votante` = ".$cc_votante;
            $resultado = $conexion->consultar_servidor($consulta);
            if($resultado==TRUE){
                //echo 'Candidato eliminado';
                return TRUE; //TRUE, El candidato se elimino Exitosamente
            }
            if($resultado==FALSE){
                //echo 'Error al eliminar Candidato';
                return FALSE;//Error al eliminar Candidato de la Base de Datos
            }
            $conexion->cerrar_conexion();
	}

        
	function mostrarVotante($cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "SELECT `cc_votante`, `nombre_votante`, `apellido_votante`, `tel_votante`, `cel_votante`, `dir_votante` FROM `votante` WHERE `cc_votante`  = ".$cc_votante;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_array($resultado);
            $conexion->cerrar_conexion();
            if($cc_votante==$fila[0]){
            return new Votante($fila[0], $fila[1], $fila[2], $fila[3], $fila[4],$fila[5]);
            }else{
                return new Votante(0, 0, 0, 0, 0,0);
            }
	}

}
?>