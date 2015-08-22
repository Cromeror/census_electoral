<?php

/**
 * @author Romero Rossi
 * @version 1.0
 * @created 15-ago-2015 03:55:22 p.m.
 */
class DAOLider
{

	
    
	function agregarLider($cc_candidato, $cc_lider, $nombre_lider, $apellido_lider, $tel_lider, $cel_lider, $dir_lider)
	{
            $conexion = new Conexion();
            $consulta ="SELECT `cc_lider` FROM `lider` WHERE `cc_lider` = ".$cc_lider;
            $resultado = $conexion->consultar_servidor($consulta);
            $fila = mysql_fetch_array($resultado);
            if(empty($fila)){
                $consulta = "INSERT INTO `censo_votacion`.`lider` (`cc_lider`, `nombre_lider`, `apellido_lider`, `tel_lider`, `cel_lider`, `dir_lider`) VALUES ('".$cc_lider."', '".$nombre_lider."', '".$apellido_lider."', '".$tel_lider."', '".$cel_lider."', '".$dir_lider."');";
                $resultado=$conexion->consultar_servidor($consulta);
                $conexion->cerrar_conexion();
                $this->agregarLider_Candidato($cc_candidato, $cc_lider);
                if ($resultado==TRUE){
                    //El Lider se agrego a la Base de Datos
                   return 2;
                }
                if ($resultado==FALSE){
                    //Error al momento de agregar el Lider a la Base de Datos
                    return 3;
                }
                
            }else{
                echo 'El lider se encuentra registrado';
                $conexion->cerrar_conexion();
                return 1;
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
            $consulta = "SELECT lider.cc_lider, lider.nombre_lider, lider.apellido_lider, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto FROM `lista_candidato_lider`, `lider`, `zonificacion`,`puesto_votacion` WHERE zonificacion.cc_votante=lider.cc_lider AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato=".$cc_candidato;
            $resultado=$conexion->consultar_servidor($consulta);
//            $lista = mysql_fetch_array($resultado);
            for($x=0;$x<1000;$x++){
            $lista = mysql_fetch_array($resultado);
                     if($lista==TRUE){
                            $consulta2 = "SELECT COUNT(*) FROM `lista_votante_lider` WHERE lista_votante_lider.cc_lider=".$lista[0];
                            $resultado2=$conexion->consultar_servidor($consulta2);
                            $lista3 = mysql_fetch_array($resultado2);
                            $listaaux[$x][0] = $lista[0];
                            $listaaux[$x][1] = $lista[1];
                            $listaaux[$x][2] = $lista[2];
                            $listaaux[$x][3] = $lista[3];
                            $listaaux[$x][4] = $lista[4];
                            $listaaux[$x][5] = $lista[5];
                            $listaaux[$x][6] = $lista3[0];
                            
                    }
                }
//                 
//                $j=0;
//                for($x=0;$x<count($lista2);$x=$x+2){
//                            $listaaux[$j][0]=$lista2[$x][0];
//                            $listaaux[$j][1]=$lista2[$x][1];
//                            $listaaux[$j][2]=$lista2[$x][2];
//                            $listaaux[$j][3]=$lista2[$x][3];
//                            $listaaux[$j][4]=$lista2[$x][4];
//                            $listaaux[$j][5]=$lista2[$x][5];
//                            $listaaux[$j][6]=$lista2[$x][6];
//                            $j++;
//                            
//                }
                
                for($x=0;$x<count($listaaux)-1;$x++){
                   for($j=$x+1;$j<count($listaaux);$j++){ 
                    if($listaaux[$x][6]<$listaaux[$j][6]){
                        $aux="";
                        $aux= $listaaux[$x][6];
                        $listaaux[$x][6]= $listaaux[$j][6];
                        $listaaux[$j][6] =$aux;
                        
                        $aux = $listaaux[$x][5];
                        $listaaux[$x][5]= $listaaux[$j][5];
                        $listaaux[$j][5]=$aux;
                        
                        $aux= $listaaux[$x][4];
                        $listaaux[$x][4]= $listaaux[$j][4];
                        $listaaux[$j][4]=$aux;
                        
                        $aux= $listaaux[$x][3];
                        $listaaux[$x][3]= $listaaux[$j][3];
                        $listaaux[$j][3]=$aux;
                        
                        $aux= $listaaux[$x][2];
                        $listaaux[$x][2]= $listaaux[$j][2];
                        $listaaux[$j][2]=$aux;
                        
                        $aux= $listaaux[$x][1];
                        $listaaux[$x][1]= $listaaux[$j][1];
                        $listaaux[$j][1]=$aux;
                        
                        $aux= $listaaux[$x][0];
                        $listaaux[$x][0]= $listaaux[$j][0];
                        $listaaux[$j][0]=$aux;
                    
                    }
                    }
                }
            $conexion->cerrar_conexion();
            return $listaaux;
        }
        
        private function agregarLider_Candidato ($cc_candidato, $cc_lider){
            $conexion = new Conexion();
            $consulta ="INSERT INTO `censo_votacion`.`lista_candidato_lider` (`id_lista`, `cc_candidato`, `cc_lider`) VALUES (NULL, '".$cc_candidato."', '".$cc_lider."')";
            $conexion->consultar_servidor($consulta);
            $conexion->cerrar_conexion();
        }

}
?>