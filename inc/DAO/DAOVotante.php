<?php

class DAOVotante
{


	function agregaVotante($cc_candidato, $cc_lider, $cc_votante, $nombre_votante, $apellido_votante, $tel_votante, $cel_votante, $dir_votante)
	{
            $conexion = new Conexion();
            $consulta ="SELECT `cc_votante` FROM `votante` WHERE `cc_votante` = ".$cc_votante;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysqli_fetch_array($resultado);
            if($fila[0]==$cc_votante){
                echo 'El Candidato se encuentra registrado';
                $conexion->cerrar_conexion();
                return 1;
            }else{
                $consulta = "INSERT INTO `censo_votacion`.`votante` (`cc_votante`, `nombre_votante`, `apellido_votante`, `tel_votante`, `cel_votante`, `dir_votante`) VALUES ('".$cc_votante."', '".$nombre_votante."', '".$apellido_votante."', '".$tel_votante."', '".$cel_votante."', '".$dir_votante."');";
                $resultado=$conexion->consultar_servidor($consulta);
                $conexion->cerrar_conexion();
                $resultado=$dao = new DAOVotante();
                $resultado=$dao->agregarVotante_Candidato($cc_candidato, $cc_votante);
                $resultado=$dao->agregarListaVotante_Lider($cc_votante, $cc_lider);
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
            $consulta = "SELECT * FROM `votante` WHERE `cc_votante` = ".$cc_votante;
            $resultado=$conexion->consultar_servidor($consulta);
            
            for($x=0;$x<1;$x++){
$lista = mysql_fetch_array($resultado);

if($lista==TRUE){
$lista2[$x][0] = $lista[0];
$lista2[$x][1] = $lista[1];
$lista2[$x][2] = $lista[2];
$lista2[$x][3] = $lista[3];
$lista2[$x][4] = $lista[4];
$lista2[$x][5] = $lista[5];
$lista2[0][6] = $lista[6];

}
//
}
            $conexion->cerrar_conexion();
            return $lista2;
            
	}
        
        function mostrarListaVotantes_Lider($cc_lider)
	{
            $conexion = new Conexion();
            $consulta = "SELECT votante.cc_votante, votante.nombre_votante, votante.apellido_votante, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto, puesto_votacion.mesa FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante` WHERE lista_votante_lider.cc_votante=votante.cc_votante  AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=".$cc_lider;
            $resultado=$conexion->consultar_servidor($consulta);
//            $lista = mysql_fetch_array($resultado);
            
           //SELECT COUNT(*) FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=80 
            for($x=0;$x<3000;$x++){
            $lista = mysql_fetch_array($resultado);
            if($lista==TRUE){
           
                $lista2[$x][0] = $lista[0];
                $lista2[$x][1] = $lista[1];
                $lista2[$x][2] = $lista[2];
                $lista2[$x][3] = $lista[3];
                $lista2[$x][4] = $lista[4];
                $lista2[$x][5] = $lista[5];
                $lista2[$x][6] = $lista[6];


}
//
}
            $conexion->cerrar_conexion();
            return $lista2;
        }
        
        function mostrarVotantes_partido($id_partido)
	{
            $conexion = new Conexion();
            $cc_votante=0;
            $nombre_votante="0";
            $apellido_votante="0";
            $tel_votante=0;
            $cel_votante=0;
            $dir_votante="0";
            $consulta = "SELECT `cc_votante` FROM `lista_votante_partido` WHERE `id_partido` = ".$id_partido;
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
	}
function agregarVotante_Candidato($cc_candidato, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "INSERT INTO `censo_votacion`.`lista_candidato_votante` (`id_lista`, `cc_candidato`, `cc_votante`) VALUES (NULL, '".$cc_candidato."', '".$cc_votante."')";
            $resultado==$conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
            return $resultado;
	}
        
        function agregarListaVotante_Lider($cc_votante,$cc_lider )
	{
            $conexion = new Conexion();
            $consulta = "INSERT INTO `censo_votacion`.`lista_votante_lider` (`id_lista`, `cc_votante`, `cc_lider`) VALUES (NULL, '".$cc_votante."', '".$cc_lider."')";
            $resultado==$conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
            return $resultado;
	}
        
        function eliminarListaVotante_Lider($cc_lider, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "DELETE FROM `lista_votante_lider` WHERE `cc_lider`='".$cc_lider."' AND `cc_votante`=".$cc_votante;
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
	}
        
        function modificarListaVotante_Lider($cc_lider_antes,$cc_lider_actual, $cc_votante)
	{
            $conexion = new Conexion();
            $consulta = "SELECT `id_lista` FROM `lista_votante_lider` WHERE `cc_lider`='".$cc_lider_antes."' AND `cc_votante`=".$cc_votante;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysqli_fetch_row($resultado);
            echo $fila[0];
            $consulta = "UPDATE `censo_votacion`.`lista_votante_lider` SET `cc_lider` = '".$cc_lider_actual."' WHERE `lista_votante_lider`.`id_lista` =".$fila[0];
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
            
	}
}
?>