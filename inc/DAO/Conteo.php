<?php

class Conteo{
    
//////////////////////////////// CANDIDATO //////////// ///////////////////////////////////////////////////// CANDIDATO //////////// ///////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES        
///////// CANDIDATO //////////////////// CANDIDATO //////////// ///////// CANDIDATO //////////// ///////// CANDIDATO //////////// ///////// CANDIDATO //////////// /   
//////////////////////////////// CANDIDATO //////////// ///////////////////////////////////////////////////// CANDIDATO //////////// ///////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    function conteo_Candidato_Municipio($cc_candidato, $departamento, $municipio){
        $conexion = new Conexion();
        $consula = "SELECT COUNT(*) FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `lider`,`lista_candidato_lider` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=lider.cc_lider AND puesto_votacion.departamento='".$departamento."' AND puesto_votacion.municipio='".$municipio."'  AND lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato='".$cc_candidato."'";
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }
 //////////////////////////////// CANDIDATO //////////// ///////////////////////////////////////////////////// CANDIDATO //////////// ///////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    function votantes_Candidato_Municipio($cc_candidato, $departamento, $municipio){
        $conexion = new Conexion();
        $consula = "SELECT votante.cc_votante, votante.nombre_votante, votante.apellido_votante, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto, puesto_votacion.mesa  FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `lider`,`lista_candidato_lider` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=lider.cc_lider AND puesto_votacion.departamento='".$departamento."' AND puesto_votacion.municipio='".$municipio."'  AND lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato='".$cc_candidato."'";
        $conexion->consultar_servidor($consulta);
        for($x=0;$x5000;$x++){
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
            }
            $conexion->cerrar_conexion();
            return $lista2;
    }
 /////////////////////// FUNCIONES ///////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES   
  
    
    function conteo_Candidato_Municipio_Puesto($cc_candidato, $departamento, $municipio, $puesto){
        $conexion = new Conexion();
        $consula = "SELECT COUNT(*) FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `lider`,`lista_candidato_lider` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=lider.cc_lider AND puesto_votacion.departamento='".$departamento."' AND puesto_votacion.municipio='".$municipio."' AND puesto_votacion.puesto='".$puesto."' AND lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato='".$cc_candidato."'";
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }
    
    function votantes_Candidato_Municipio_Puesto($cc_candidato, $departamento, $municipio, $puesto){
        $conexion = new Conexion();
        $consula = "SELECT votante.cc_votante, votante.nombre_votante, votante.apellido_votante, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto, puesto_votacion.mesa  FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `lider`,`lista_candidato_lider` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=lider.cc_lider AND puesto_votacion.departamento='".$departamento."' AND puesto_votacion.municipio='".$municipio."' AND puesto_votacion.puesto='".$puesto."' AND lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato='".$cc_candidato."'";
        $conexion->consultar_servidor($consulta);
        for($x=0;$x5000;$x++){
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
            }
            $conexion->cerrar_conexion();
            return $lista2;
    }
   
//////////////////////////////// CANDIDATO //////////// ///////////////////////////////////////////////////// CANDIDATO //////////// ///////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
   function conteo_Candidato_Municipio_Puesto_Mesa ($cc_candidato, $departamento, $municipio, $puesto, $mesa){
        
        $conexion = new Conexion();
        $consula = "SELECT COUNT(*) FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `lider`,`lista_candidato_lider` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=lider.cc_lider AND puesto_votacion.departamento='".$departamento."' AND puesto_votacion.municipio='".$municipio."' AND puesto_votacion.puesto='".$puesto."' AND lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato='".$cc_candidato."' AND puesto_votacion.mesa=".$mesa;
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }
//////////////////////////////// CANDIDATO //////////// ///////////////////////////////////////////////////// CANDIDATO //////////// ///////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
     
    function votantes_Candidato_Municipio_Puesto_Mesa ($cc_candidato, $departamento, $municipio, $puesto, $mesa){
        
        $conexion = new Conexion();
        $consula = "SELECT votante.cc_votante, votante.nombre_votante, votante.apellido_votante, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto, puesto_votacion.mesa  FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `lider`,`lista_candidato_lider` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider=lider.cc_lider AND puesto_votacion.departamento='".$departamento."' AND puesto_votacion.municipio='".$municipio."' AND puesto_votacion.puesto='".$puesto."' AND lista_candidato_lider.cc_lider=lider.cc_lider AND lista_candidato_lider.cc_candidato='".$cc_candidato."' AND puesto_votacion.mesa=".$mesa;
        $conexion->consultar_servidor($consulta);
        for($x=0;$x5000;$x++){
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
            }
            $conexion->cerrar_conexion();
            return $lista2;
    }
///////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    ///////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    ///////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    
    function conteLider_Municipio($cc_candidato, $lider, $departamento, $municipio){
        
        $conexion = new Conexion();
        $consula = "SELECT COUNT(*) FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `candidato` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider= '".$lider."' AND puesto_votacion.departamento= '".$departamento."' AND puesto_votacion.municipio= '".$municipio."'  AND candidato.cc_candidato=".$cc_candidato ;
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }
    ///////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    function votantes_Lider_Municipio($cc_candidato, $lider, $departamento, $municipio){
        
        $conexion = new Conexion();
        $consula = "SELECT votante.cc_votante, votante.nombre_votante, votante.apellido_votante, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto, puesto_votacion.mesa  FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `candidato` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider= '".$lider."' AND puesto_votacion.departamento= '".$departamento."' AND puesto_votacion.municipio= '".$municipio."'  AND candidato.cc_candidato=".$cc_candidato ;
        $conexion->consultar_servidor($consulta);
        for($x=0;$x5000;$x++){
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
            }
            $conexion->cerrar_conexion();
            return $lista2;
    }
///////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    ES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES     
    function conte_Lider_Municipio_Puesto($cc_candidato, $lider, $departamento, $municipio, $puesto){
        
        $conexion = new Conexion();
        $consula = "SELECT COUNT(*) FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `candidato` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider= '".$lider."' AND puesto_votacion.departamento= '".$departamento."' AND puesto_votacion.municipio= '".$municipio."' AND puesto_votacion.puesto='".$puesto."'  AND candidato.cc_candidato=".$cc_candidato ;
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }
///////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES        
    function votantes_Lider_Municipio_Puesto($cc_candidato, $lider, $departamento, $municipio, $puesto){
        
        $conexion = new Conexion();
        $consula = "SELECT votante.cc_votante, votante.nombre_votante, votante.apellido_votante, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto, puesto_votacion.mesa  FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `candidato` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider= '".$lider."' AND puesto_votacion.departamento= '".$departamento."' AND puesto_votacion.municipio= '".$municipio."' AND puesto_votacion.puesto='".$puesto."'  AND candidato.cc_candidato=".$cc_candidato ;
        $conexion->consultar_servidor($consulta);
        for($x=0;$x5000;$x++){
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
            }
            $conexion->cerrar_conexion();
            return $lista2;
    }
////////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    /////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    function conte_Lider_Municipio_Puesto_Mesa($cc_candidato, $lider, $departamento, $municipio, $puesto, $mesa){
        
        $conexion = new Conexion();
        $consula = "SELECT COUNT(*) FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `candidato` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider= '".$lider."' AND puesto_votacion.departamento= '".$departamento."' AND puesto_votacion.municipio= '".$municipio."' AND puesto_votacion.puesto='".$puesto."' AND puesto_votacion.mesa='".$mesa."' AND candidato.cc_candidato=".$cc_candidato ;
        $conexion->consultar_servidor($consulta);
        $conexion->cerrar_conexion();
    }
    
///////////////////////// LIDER /////////////////////////////////////////// LIDER ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
    function votantes_Lider_Municipio_Puesto_Mesa($cc_candidato, $lider, $departamento, $municipio, $puesto, $mesa){
        
        $conexion = new Conexion();
        $consula = "SELECT votante.cc_votante, votante.nombre_votante, votante.apellido_votante, puesto_votacion.departamento, puesto_votacion.municipio, puesto_votacion.puesto, puesto_votacion.mesa  FROM `lista_votante_lider`, `puesto_votacion`, `zonificacion`, `votante`, `candidato` WHERE lista_votante_lider.cc_votante=votante.cc_votante AND zonificacion.cc_votante=votante.cc_votante AND zonificacion.id_puesto=puesto_votacion.id_puesto_votacion AND lista_votante_lider.cc_lider= '".$lider."' AND puesto_votacion.departamento= '".$departamento."' AND puesto_votacion.municipio= '".$municipio."' AND puesto_votacion.puesto='".$puesto."' AND puesto_votacion.mesa='".$mesa."' AND candidato.cc_candidato=".$cc_candidato ;
        $conexion->consultar_servidor($consulta);
        for($x=0;$x5000;$x++){
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
            }
            $conexion->cerrar_conexion();
            return $lista2;
    }
//////////////////////// FUNCIONES //////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES    
 
}


?>