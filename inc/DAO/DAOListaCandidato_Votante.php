<?php


class DAOListaCandidato_Votante
{

	
    
	function mostrarListaVotantes($cc_candidato)
	{
            
            $conexion = new Conexion();
            $cc_votante=0;
            $nombre_votante="0";
            $apellido_votante="0";
            $tel_votante=0;
            $cel_votante=0;
            $dir_votante="0";
            $consulta = "SELECT `cc_votante` FROM `lista_candidato_votante` WHERE `cc_candidato` = ".$cc_candidato;
            $resultado =$conexion->consultar_servidor($consulta);
            $j=0;
            $lista="";
            $x=0;
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
                return $listavotantes;
           
            
            }
            
            
            
//            $conexion->cerrar_conexion();
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

	/**
	 * 
	 * @param cc_candidato
	 * @param cc_votante
	 */
	function eliminarListaVotante_Candidato($cc_candidato, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "DELETE FROM `lista_candidato_votante` WHERE `cc_candidato`='".$cc_candidato."' AND `cc_votante`=".$cc_votante;
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
        }

        
	function modificarListaVotante_Candidato($cc_candidato_antes, $cc_candidato_actual,$cc_votante)
	{
            $fila="";
            $conexion = new Conexion();
            $consulta = "SELECT `id_lista` FROM `lista_candidato_votante` WHERE `cc_candidato`='".$cc_candidato_antes."' AND `cc_votante`=".$cc_votante;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_row($resultado);
            echo $fila[0];
            $consulta = "UPDATE `lista_candidato_votante` SET `cc_candidato`='".$cc_candidato_actual."' WHERE `id_lista`=".$fila[0];
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	}

}
?>