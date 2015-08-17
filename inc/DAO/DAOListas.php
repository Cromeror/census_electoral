<?php

/**
 * @author Kathe Buelvas
 * @version 1.0
 * @created 16-ago-2015 01:15:44 a.m.
 */
class DAOListas
{

	
	function agregarVotante_Lider($cc_votante, $cc_lider)
	{
            $conexion = new Conexion();
            $consulta = "INSERT INTO `censo_votacion`.`lista_votante_lider` (`id_lista`, `cc_votante`, `cc_lider`) VALUES (NULL, '".$cc_votante."', '".$cc_lider."')";
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
        }
            
	function agregarLider_Candidato($cc_candidato, $c_lider)
	{
            $conexion = new Conexion();
            $consulta = "INSERT INTO `censo_votacion`.`lista_candidato_lider` (`id_lista`, `cc_candidato`, `cc_lider`) VALUES (NULL, '".$cc_candidato."', '".$cc_lider."')";
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	       
	}

	/**
	 * 
	 * @param cc_candidato
	 * @param cc_votante
	 */
	function agregarListaVotante_Candidato($cc_candidato, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "INSERT INTO `censo_votacion`.`lista_candidato_votante` (`id_lista`, `cc_candidato`, `cc_votante`) VALUES (NULL, '".$cc_candidato."', '".$cc_votante."')";
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	}


	function mostrarListaLider_Votante($cc_lider)
	{
            $conexion = new Conexion();
            $consulta = "SELECT `cc_votante` FROM `lista_votante_lider` WHERE `cc_lider` = ".$cc_lider; 
            $resultado=$conexion->consultar_servidor($consulta);
            $fila=  mysql_fetch_array($resultado);
            
            $consulta="SELECT * FROM votante` WHERE `cc_votante` = ".$fila[0];
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_($resultado);
            echo $fila[0][0];
            echo $fila[0][1];
            $conexion->cerrar_conexion();
	}

	

}
?>