<?php

/**
 * @author Ivan Villamil
 * @version 1.0
 * @created 17-ago-2015 04:28:30 p.m.
 */
class DAOListaVotante_Partido
{

	
	

	
	function agregarListaVotante_Partido($id_partido, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "INSERT INTO `censo_votacion`.`lista_votante_partido` (`id_lista`, `cc_votante`, `id_partido`) VALUES (NULL, '".$cc_votante."', '".$id_partido."')";
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	}

	
        
	function eliminarListaVotante_Partido($id_partido, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "IDELETE FROM `censo_votacion`.`lista_votante_partido` WHERE `lista_votante_partido`.`id_partido` = '".$id_partido."' AND `lista_votante_partido`.`cc_votante`=".$cc_votante;
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	}

	/**
	 * 
	 * @param id_partido
	 * @param cc_votante
	 */
	function modificarListaVotante_Partido($id_partido, $cc_votante)
	{
	}

}
?>