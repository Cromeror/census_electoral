<?php

/**
 * @author Ivan Villamil
 * @version 1.0
 * @created 17-ago-2015 08:21:06 a.m.
 */
class DAOListaVotante_Lider
{


	function mostrarListaVotante_Lider($cc_lider)
	{
            $conexion = new Conexion();
            $cc_votante=0;
            $nombre_votante="0";
            $apellido_votante="0";
            $tel_votante=0;
            $cel_votante=0;
            $dir_votante="0";
            $consulta = "SELECT `cc_votante` FROM `lista_votante_lider` WHERE `cc_lider` = ".$cc_lider;
            $resultado =$conexion->consultar_servidor($consulta);
            $j=0;
            $lista="";
            $x=0;
            $listavotantes="";
            for($x=0;$x<300;$x++){
                $lista  = mysql_fetch_array($resultado);
                if($lista==TRUE){
                   $cedulas[$j] = $lista[0];
                   $j++;
                }
            }
            
            $votante = new Votante($cc_votante, $nombre_votante, $apellido_votante, $tel_votante, $cel_votante, $dir_votante);
//            echo count($datos);
            $DAOvotante= new DAOVotante();
            
            
            for($x=0;$x<count($cedulas);$x++){
                $votante = $DAOvotante->mostrarVotante($cedulas[$x]);
                if($votante->getCc_votante()!=0){
                $listavotantes[$x][0]=$votante->getCc_votante();
                $listavotantes[$x][1]=$votante->getNombre_votante();
                $listavotantes[$x][2]=$votante->getApellido_votante();
                $listavotantes[$x][3]=$votante->getTel_votante();
                $listavotantes[$x][4]=$votante->getCel_votante();
                $listavotantes[$x][5]=$votante->getDir_votante();
                
                echo $listavotantes[$x][0];
                echo $listavotantes[$x][1];
                echo $listavotantes[$x][2];
                echo $listavotantes[$x][3];
                echo $listavotantes[$x][4];
                echo $listavotantes[$x][5];
                }
            }
          return $listavotantes;
        }

	function agregarListaVotante_Lider($cc_votante,$cc_lider )
	{
            $conexion = new Conexion();
            $consulta = "INSERT INTO `censo_votacion`.`lista_votante_lider` (`id_lista`, `cc_votante`, `cc_lider`) VALUES (NULL, '".$cc_votante."', '".$cc_lider."')";
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	}

	/**
	 * 
	 * @param cc_lider
	 * @param cc_votante
	 */
	function eliminarListaVotante_Lider($cc_lider, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "DELETE FROM `lista_votante_lider` WHERE `cc_lider`='".$cc_lider."' AND `cc_votante`=".$cc_votante;
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	}

	/**
	 * 
	 * @param cc_lider
	 * @param cc_votante
	 */
	function modificarListaVotante_Lider($cc_lider, $cc_votante)
	{
	}

}
?>