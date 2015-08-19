<?php


/**
 * @author Ivan Villamil
 * @version 1.0
 * @created 18-ago-2015 11:23:50 a.m.
 */
class Zonificacion
{

    
	function mostrarPuesto($cc_votante)
	{
            $conexion = new Conexion();
            $id_puesto_votacion=0;
            $departamento="0";
            $municipio="0";
            $puesto="0";
            $dir_puesto="0";
            $mesa=0;
            $consulta = "SELECT `id_puesto` FROM `zonificacion` WHERE `cc_votante` = ".$cc_votante;
            $resultado =$conexion->consultar_servidor($consulta);
            
            $j=0;
            $lista="";
            $x=0;
            $listavotantes="";
            for($x=0;$x<300;$x++){
                $lista  = mysqli_fetch_array($resultado);
                if($lista==TRUE){
                   $puestos[$j] = $lista[0];
                   $j++;
                }
            }
            
            $puestovotacion = new PuestoVotacion($id_puesto_votacion, $departamento, $municipio, $puesto, $dir_puesto, $mesa);
//            echo count($datos);
            $DAOpuesto= new DAOPuestoVotacion();
            
            
            for($x=0;$x<count($puestovotacion);$x++){
                $puestovotacion = $DAOpuesto->muestraPuestoVotacion($cc_votante);
                if($puestovotacion->getId_puesto_votacion()!=0){
                $listavotantes[$x][0]=$puestovotacion->getDir_puesto();
                $listavotantes[$x][1]=$puestovotacion->getDepartamento();
                $listavotantes[$x][2]=$puestovotacion->getMunicipio();
                $listavotantes[$x][3]=$puestovotacion->getPuesto();
                $listavotantes[$x][4]=$puestovotacion->getDir_puesto();
                $listavotantes[$x][5]=$puestovotacion->getMesa();
                
//                echo $listavotantes[$x][0];
//                echo $listavotantes[$x][1];
//                echo $listavotantes[$x][2];
//                echo $listavotantes[$x][3];
//                echo $listavotantes[$x][4];
//                echo $listavotantes[$x][5];
                }
            }
          return $listavotantes;
	}

	/**
	 * 
	 * @param cc_votante
	 * @param id_puesto
	 */
	function agregarZonificacion($cc_votante, $id_puesto)
	{
	}

	/**
	 * 
	 * @param cc_votante
	 * @param id_puesto_antes
	 * @param id_puesto_actual
	 */
	function modificarZonificacion($cc_votante, $id_puesto_antes, $id_puesto_actual)
	{
	}

	/**
	 * 
	 * @param id_puesto
	 * @param cc_votante
	 */
	function eliminarZonificacion($id_puesto, $cc_votante)
	{
	}

}
?>