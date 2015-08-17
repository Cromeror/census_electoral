<?php

class DAOCandidato
{

////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES      
	public function agregarCandidato($cc_candidato, $nombre_candidato, $apellido_candidato, $id_aspiracion, $id_partido_politico, $tel_candidato, $cel_candidato, $dir_candidato)
        {   
            $conexion = new Conexion();
            $consulta ="SELECT `cc_candidato` FROM `candidato` WHERE `cc_candidato` = ".$cc_candidato;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_array($resultado);
            if($fila[0]==$cc_candidato){
                $conexion->cerrar_conexion();
                echo 'El Candidato se encuentra registrado';
                return 1;
            }else{
                $consulta = "INSERT INTO `censo_votacion`.`candidato` (`cc_candidato`, `nombre_candidato`, `apellido_candidato`, `id_aspiracion`, `id_partido_politico`, `tel_candidato`, `cel_candidato`, `dir_candidato`) VALUES ('".$cc_candidato."', '".$nombre_candidato."', '".$apellido_candidato."', '".$id_aspiracion."', '".$id_partido_politico."', '".$tel_candidato."', '".$cel_candidato."', '".$dir_candidato."')";
                $resultado=$conexion->consultar_servidor($consulta);
                $conexion->cerrar_conexion();
                if ($resultado==TRUE){
                    //El candidato se agrego a la Base de Datos
                   return 2;
                }
                if ($resultado==FALSE){
                    //Error al momento de agregar el Candidato a la Base de Datos
                    return 3;
                }
            }   
            $conexion->cerrar_conexion();
	}
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES      
	function eliminarCandidato($cc_candidato)
	{
            $conexion = new Conexion();
            $consulta = "DELETE FROM `candidato` WHERE `cc_candidato` = ".$cc_candidato;
            $resultado = $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
            if($resultado==TRUE){
                //echo 'Candidato eliminado';
                return TRUE; //TRUE, El candidato se elimino Exitosamente
            }
            if($resultado==FALSE){
                //echo 'Error al eliminar Candidato';
                return FALSE;//Error al eliminar Candidato de la Base de Datos
            }
            
	}
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES      
	function mostrarCandidato($cc_candidato)
	{
            $conexion = new Conexion();
            $consulta = "SELECT `cc_candidato`, `nombre_candidato`, `apellido_candidato`, `id_aspiracion`, `id_partido_politico`, `tel_candidato`, `cel_candidato`, `dir_candidato` FROM `candidato` WHERE `cc_candidato` = ".$cc_candidato;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_array($resultado);
            $conexion->cerrar_conexion();
            if($cc_candidato==$fila[0]){
            return new Candidato($fila[0], $fila[1], $fila[2], $fila[3], $fila[4],$fila[5],$fila[6],$fila[7]);
            }else{
                echo "No se encuentra Candidato en la Base de Datos";
            }
            
        }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES      

    function modificarCandidato($cc_candidato, $nombre_candidato, $apellido_candidato, $id_aspiracion, $id_partido_politico, $tel_candidato, $cel_candidato, $dir_candidato){
        $conexion = new Conexion();
        $consulta="UPDATE `candidato` SET `nombre_candidato`= '".$nombre_candidato."',`apellido_candidato`='".$apellido_candidato."',`id_aspiracion`='".$id_aspiracion."',`id_partido_politico`='".$id_partido_politico."',`tel_candidato`='".$tel_candidato."',`cel_candidato`='".$cel_candidato."',`dir_candidato`='".$dir_candidato."' WHERE `cc_candidato`=".$cc_candidato;
        $resultado=$conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
        if($resultado==TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
}
?>