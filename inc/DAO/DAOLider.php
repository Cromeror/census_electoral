<?php

/**
 * @author Romero Rossi
 * @version 1.0
 * @created 15-ago-2015 03:55:22 p.m.
 */
class DAOLider
{

	
    
	function agregarLider($cc_lider, $nombre_lider, $apellido_lider, $tel_lider, $cel_lider, $dir_lider)
	{
            $conexion = new Conexion();
            $consulta ="SELECT `cc_lider` FROM `lider` WHERE `cc_lider` = ".$cc_lider;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_array($resultado);
            if($fila[0]==$cc_lider){
                echo 'El Candidato se encuentra registrado';
                $conexion->cerrar_conexion();
                return 1;
            }else{
                $consulta = "INSERT INTO `censo_votacion`.`lider` (`cc_lider`, `nombre_lider`, `apellido_lider`, `tel_lider`, `cel_lider`, `dir_lider`) VALUES ('".$cc_lider."', '".$nombre_lider."', '".$apellido_lider."', '".$tel_lider."', '".$cel_lider."', '".$dir_lider."');";
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

        
	function modificarLider($cc_lider, $nombre_lider, $apellido_lider, $tel_lider, $cel_lider, $dir_lider)
	{
            $conexion = new Conexion();
            $consulta="UPDATE `lider` SET `nombre_lider`= '".$nombre_lider."',`apellido_lider`='".$apellido_lider."',`tel_lider`='".$tel_lider."',`cel_lider`='".$cel_lider."',`dir_lider`='".$dir_lider."' WHERE `cc_lider`=".$cc_lider;
            $resultado=$conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
            if($resultado==TRUE){
            return TRUE;
            }else{
            return FALSE;
            }
	}

	
        
	function eliminarLider($cc_lider)
	{
            $conexion = new Conexion();
            $consulta = "DELETE FROM `lider` WHERE `cc_lider` = ".$cc_lider;
            $resultado = $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
            if($resultado==TRUE){
                //echo 'Lider eliminado';
                return TRUE; //TRUE, El Lider se elimino Exitosamente
            }
            if($resultado==FALSE){
                //echo 'Error al eliminar Lider';
                return FALSE;//Error al eliminar Lider de la Base de Datos
            }
            
	}

	/**
	 * 
	 * @param cc_lider
	 */
	function mostrarLider($cc_lider)
	{
            $conexion = new Conexion();
            $consulta = "SELECT `cc_lider`, `nombre_lider`, `apellido_lider`, `tel_lider`, `cel_lider`, `dir_lider` FROM `lider` WHERE `cc_lider`  = ".$cc_lider;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_array($resultado);
            if($cc_lider==$fila[0]){
            return new Lider($fila[0], $fila[1], $fila[2], $fila[3], $fila[4],$fila[5]);
            }else{
                echo "No se encuentra Lider en la Base de Datos";
            }
	}
        
        function mostrarLider_Candidato($cc_candidato){
            $conexion = new Conexion();
            $consulta = "SELECT lider.cc_lider, lider.nombre_lider, lider.apellido_lider, lider.tel_lider, lider.cel_lider, lider.dir_lider FROM `lista_candidato_lider`, `lider`,`candidato` WHERE  lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato=".$cc_candidato;
            $resultado=$conexion->consultar_servidor($consulta);
//            $lista = mysql_fetch_array($resultado);
            for($x=0;$x<300;$x++){
            $lista = mysql_fetch_array($resultado);
                     if($lista==TRUE){
                     $lista2[$x][0] = $lista[0];
                     $lista2[$x][1] = $lista[1];
                     $lista2[$x][2] = $lista[2];
                     $lista2[$x][3] = $lista[3];
                     $lista2[$x][4] = $lista[4];
                     $lista2[$x][5] = $lista[5];
                    }
                }
            $conexion->cerrar_conexion();
            return $lista2;
        }

}
?>