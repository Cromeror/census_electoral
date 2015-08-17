<?php


class BuscaServicio
{

	function buscaPuestoVotacion($cc_votante)
	{
            $es = file_get_contents("http://www3.registraduria.gov.co/censo/_censoresultado.php?nCedula=1049453283");
            //Cedulas de prueba
            //1044917440
            //1049453283
            //1047445429
            //1051447716

            $es = strip_tags($es);
            $es = LimpiaTexto($es); 
            $es = Depurador($es);

            $lista=  Pasarvariables($es);
            $lista = espacioscoienzoyfinal($lista);
            $lista = Eliminarbasura($lista);
            $lista = espacioscoienzoyfinal($lista);
            
            return new PuestoVotacion($lista[0], $lista[1], $lista[2], $lista[3], $lista[5]) ;
        }
	
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
//////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function espacioscoienzoyfinal($listanew){
    $resultado="";
    for ($x=0;$x<count($listanew); $x++) {
        $resultado=  $listanew[$x];
        $listanew[$x] = trim($resultado);
      
    }
    return $listanew;
}

////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function Eliminarbasura ($lista){
    $resultado = "";
    $aux ="";
    $resultado = $lista[3];
    $j= strlen($resultado);
    $j=$j-126;
    $listaux = str_split($resultado);
    for ($x=0;$x<$j; $x++){
        $aux=$aux.$listaux[$x];
    }
    $lista[3]=$aux;
    $aux ="";
    $resultado = $lista[2];
    $j= strlen($resultado);
    $j=$j-105;
    $listaux = str_split($resultado);
    for ($x=0;$x<$j; $x++){
        $aux=$aux.$listaux[$x];
    }
    $lista[2]=$aux;
    return $lista;
}
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function Pasarvariables($string){
$j=0;
$aux;
$listaux;
$listanew;
$aux="";
$lista = str_split($string);
$listaux = str_split($string);
for ($x=0;$x<count($lista); $x++){
    if($lista[$x]=='*'){
        $listaux[$j]=$x;
        $j=$j+1;
       }
}
$x=$listaux[0]+1;
$j=$listaux[1];
for ($x;$x<$j; $x++){
        $aux=$aux.$lista[$x];
    }
    $listanew[0]= $aux;
    $aux="";
    $x=$listaux[1]+1;
$j=$listaux[2];
for ($x;$x<$j; $x++){
       $aux=$aux.$lista[$x];
    }
    $listanew[1]= $aux;
    //echo $listanew[1];
    $aux="";
    
  $x=$listaux[2]+1;
$j=$listaux[3];
for ($x;$x<$j; $x++){
       $aux=$aux.$lista[$x];
    }
    $listanew[2]= $aux;
    //echo $listanew[1];
    $aux="";  

$x=$listaux[3]+1;
$j=$listaux[4];
for ($x;$x<$j; $x++){
    $aux=$aux.$lista[$x];
    }
    $listanew[3]= $aux;
//    echo $listanew[2];
    $aux="";
    
$x=$listaux[4]+1;
$j=$listaux[5];
for ($x;$x<$j; $x++){
      $aux=$aux.$lista[$x];
    }
    $listanew[4]= $aux;
//    echo $listanew[3];
    $aux="";
    
$x=count($listaux)-2;
$j=  count($listaux);
for ($x;$x<$j; $x++){
        $aux=$aux.$lista[$x];
    }
    $listanew[5]= $aux;
//    echo $listanew[4];
    $aux="";
    
    
   return $listanew;
  
  //ImprimirLista($listaux);
}// Fin Pasarvariables
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function extractTable($codeHTML)
{
			$codeHTML = cutString($codeHTML,'<table>');
			//$codeHTML = substr($codeHTML, $posicion_coincidencia);
			$positionFinal = strpos($codeHTML, '</html>');
			$positionTableFinal = strpos($codeHTML, '</table>');
			$aux =  $positionFinal - $positionTableFinal;
			$delString = substr($codeHTML, -$aux);
			$result = str_replace($delString, "/table>", $codeHTML);
			return $result;
}
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function cutString($string, $searchString)
{
$position = strpos($string, $searchString);
	if ($position === false) {
    return null;
    } else {
		return substr($string, $position);
		}
}
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function LimpiaTexto($es){
$es = str_replace("Departamento:", "*", $es);
$es = str_replace("Municipio:", "*", $es);
$es = str_replace("Dirección Puesto:", "*", $es);
$es = str_replace("Puesto:", "*", $es);

$es = str_replace("Dirección", "*", $es);
$es = str_replace("Fecha de inscripciÃ³n:", "*", $es);
$es = str_replace("Mesa", "*", $es);
return $es;
}
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function Depurador($es){
$lista = str_split($es);
$j= count($lista);
for ($x=0;$x<1326; $x++){
    $lista[$x]='+';
}
$x=$j-574;
for ($x;$x<$j; $x++){
    $lista[$x]='+';
}
$resultado="";
$regex = '#^[+]*[A-Z]*[ ]*[.]*[*]*[0-9]*[/]*$#i';
$j = 0;
for ($x=0;$x<count($lista); $x++) {
        $j++;
         if ((preg_match($regex, $lista[$x])) == 1) {
             $resultado = $resultado.$lista[$x];
            }
    }
$lista = str_split($resultado);
$resultado="";
$regex = '#^[+]*$#i';
$j = 0;
for ($x=0;$x<count($lista); $x++) {
        $j++;
         if ((preg_match($regex, $lista[$x])) == 1) {
             
            }  else {
                $resultado = $resultado.$lista[$x];
            }
    }
return $resultado;
}
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    private function ImprimirLista($lista){
    for ($x=0;$x<count($lista); $x++) {
        if($x!=4){
        ?><br><?php echo $lista[$x];?></br><?php
        }
    }
    
}
}
?>