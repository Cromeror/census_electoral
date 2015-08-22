<?php

class BuscarServicios {

////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
    public function muestraVotante($cc_votante) {
        $list1 = $this->muestraNombre($cc_votante);
        $list2 = $this->buscarPuestoVotacion($cc_votante);
        $result = $array = array(
            "nombre" => $list1[0],
            "apellido" => $list1[1],
            "departamento" => $list2[0],
            "municipio" => $list2[1],
            "puesto" => $list2[2],
            "direccion" => $list2[3],
            "mesa" => $list2[5],
        );
        return $result;
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
private function muestraNombre($cc_votante) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://wssisbenconsulta.sisben.gov.co/DNP_SisbenConsulta/DNP_SISBEN_Consulta.aspx");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=X3cFBBdHAULQAa6MyEFrfzXbPgq2Aq9lm4jLXshg0ovIaTX%2BbKTgJolrr8PUp4r9csNLGp6K4xkLzeiIXdDkelm%2BTei6l9NJKZ%2Bv9J38kjfY304mBckjh2Iv87yuD1O83JxbdjkCSl3bl9Iqb%2F5qV%2B5f70LaxXMDgu5xj0Axb7mqATrzzZezk676SNVUV%2BpXooMHSSwnpozqZXSDF%2BImQvqbpN31DVyniJ6Gv0R%2F3LCOD4nc3dpI1SbYIa3PEyKd1B0r5lG4cVOEidqHtS1xN9FvsYHmcahZpFKFhokb%2BiS6iTgx4tkcZ8ivIQ03m4%2FCC0H5rAELM%2BDiKTw5lQcZ2Vz%2BWafINolM5dXIJy5cCSviaOi2wBI6jvcEhfoYKXioG0lOu8OdPJ9yz1jWsWDRhXYR3DFkjIp9W75mFidSBPDJr4wkyNTh0TjuAlhLpFX4b1aWDcN796IETn74zxOGMs4QcbWBAsbEIw3lxtXTprkvedleirXOG23UDDfeVs3I2NFhq0C%2BdDqpi5mZ%2BEy%2F%2F3pvms69Qt3Lmh1bZOiwZch0OHZBAAPX6z%2FRrrxrKQ0xMrr3hb2qF3TLXtHqjWDHswf4rAU%2FGCYIwFGahrXDnE5DRkQJDFleBCWeLZSSr07rhyBKmUghjjP2svves3Q5exb7yUcvJLd3vJLExk8Iz1uU3JuxMoDhjYnqhuJ0OmBPmSfBHTY%2BYrbHA%2BTFflC3HrZyXjvr%2BqWikWowYd5cPdTUCwFAyhMn1z4xw3B6NWHeqG7IcaJnzLf%2FoIQy6MMfbui8p7T8Kl6zHMCpwN%2BVUN%2FkPL8F5Q7ALOFo9UcfdqtDn2hqcejS46VOgEKc9Llmg3Vm0EYDoXEvgiAdy6hUR5WHx7voy9FzFNwwNG71dCTLwqNMA57tlrU%2FwjJw3WJCB374OADXspP9v%2Ba66M476H8gk4m8ESLGggyUtqw2T%2Fukd5wXilDJFyMBVJjVLFqp%2Frm0GPNljiCvmsYXY5zIF1%2FJcjJoZvquOp8nLAvNKSe5bFO5qL%2F0C7qkpzMB9kyKnmIHlaSpea%2B2tM7iuN6BBF9JVv93iF4qvkjq8u1u2iyPkhvmgiLNGBb1roCACoYJeLGeeuyZlvtDl8NXlTLCStwr87j5WjOxXSBkBZXnrW58PHQ4kFZTf38aQdVQMKXdMyhZWh8Op55%2FTsJIlRyhIiUGAkSo%2BsJdg%2BgL01MtqGNadWrifq%2Bmy77xE1fNplYtpGVNHCKRb5uLjmY%2FncoxcF8Q3FWFuEylzyF676K5olEPsds5SMdtn4ioY%2FTQCvaHzOZihr7Wz1SKvXMbJAbKM8LPuBRQPAJTrHlJg1PGgNQlhf%2BRn6X7h8JftMgK2ohYxbsWxeLcl9fq1gM7sPP88p%2Bq18O01apf7yMuv3CxqkpYkIsN7p6Tcyh0Q41yZMI4Eh7nzRwcSdKM2NEyb7tVbiUvWLbMpHbEsPu4LBWXRSvLlMWf%2FFjZR4tqMhhlpFGfwjJIGg8bvvyBzUR10bqZvj8f99Fw2WE4SQ9s0HXlOcBrT8VhkS5zchcbMdm9hGtBRDrl98DZOvNgfPRlThDJfnw%3D&__VIEWSTATEGENERATOR=2AB62757&__VIEWSTATEENCRYPTED=&__EVENTVALIDATION=MB5KwTsCcGKOIwpFBmKvKojfLJsCQft9o0iu00mhwaAlY0mDbP1hbxZLsZ%2BIBiXkGwzbEYFaUUXAXfvTdWfkYnGTc%2BgF4FwbRlgxMPQyq9UnE1eKDugTuNuBHB9zk7TWxcE0zVovWWxDPoJda2tjAcF%2FPHBAZ5OCNIIIXTIbfUofpi12a%2F%2Fe9Yg5vJg8J557ROZ2dQEeahxwBQq42u%2FAcyjS%2BNjRmt0u1qIe%2FRMZrzzyzhXsGsWGv6o7v1hXNTcF4D08SQIiTNpMGNpPOvMST%2FfdTG4tq1MP80lfjj3YEFI%3D&ddlTipoDocumento=1&tboxNumeroDocumento=" . $cc_votante . "&btnConsultar=Consultar
");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $es = curl_exec($ch);
        curl_close($ch);
        $es = strip_tags($es);
        $es = $this->LimpiaTexto_mejorado($es);
        $es = $this->Depurador_mejorado($es);
        if($es=="#"){
            $listanew[0]="NOMBRE NO SE ENCUENTRA EN LA BASE DE DATOS";
            $listanew[1]="APELLIDOS NO SE ENCUENTRA EN LA BASE DE DATOS";
            return $listanew;
        }
        $lista = $this->Pasarvariables_mejorado($es);
        $lista = $this->espacioscoienzoyfinal_mejorado($lista);
        if (empty($lista)) {
            return NULL;
        } else {
            return $lista;
        }
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
//////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
private  function buscarPuestoVotacion($cc_votante) {
        $es = file_get_contents("http://www3.registraduria.gov.co/censo/_censoresultado.php?nCedula=" . $cc_votante . "");
        $es = strip_tags($es);
        $es = $this->LimpiaTexto($es);
        $es = $this->Depurador($es);
        if($es=="#"){
            
            return NULL;
        }
        $lista = $this->Pasarvariables($es);
        $lista = $this->espacioscoienzoyfinal($lista);
        $lista = $this->Eliminarbasura($lista);
        $lista = $this->espacioscoienzoyfinal($lista);
        if (empty($lista)) {
            return NULL;
        } else {
            return $lista;
        }
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
//////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
 private    function espacioscoienzoyfinal($listanew) {
        $resultado = "";
        for ($x = 0; $x < count($listanew); $x++) {
            $resultado = $listanew[$x];
            $listanew[$x] = trim($resultado);
        }
        return $listanew;
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
  private   function Eliminarbasura($lista) {
        $resultado = "";
        $aux = "";
        $resultado = $lista[3];
        $j = strlen($resultado);
        $j = $j - 126;
        $listaux = str_split($resultado);
        for ($x = 0; $x < $j; $x++) {
            $aux = $aux . $listaux[$x];
        }
        $lista[3] = $aux;
        $aux = "";
        $resultado = $lista[2];
        $j = strlen($resultado);
        $j = $j - 105;
        $listaux = str_split($resultado);
        for ($x = 0; $x < $j; $x++) {
            $aux = $aux . $listaux[$x];
        }
        $lista[2] = $aux;
        return $lista;
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
  private   function Pasarvariables($string) {
        $j = 0;
        $aux;
        $listaux;
        $listanew;
        $aux = "";
        $lista = str_split($string);
        $listaux = str_split($string);
        for ($x = 0; $x < count($lista); $x++) {
            if ($lista[$x] == '*') {
                $listaux[$j] = $x;
                $j = $j + 1;
            }
        }
        $x = $listaux[0] + 1;
        $j = $listaux[1];
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[0] = $aux;
        $aux = "";
        $x = $listaux[1] + 1;
        $j = $listaux[2];
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[1] = $aux;
        $aux = "";
        $x = $listaux[2] + 1;
        $j = $listaux[3];
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[2] = $aux;
        $aux = "";
        $x = $listaux[3] + 1;
        $j = $listaux[4];
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[3] = $aux;
        $aux = "";
        $x = $listaux[4] + 1;
        $j = $listaux[5];
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[4] = $aux;
        $aux = "";
        $x = count($listaux) - 2;
        $j = count($listaux);
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[5] = $aux;
        $aux = "";
        return $listanew;
    }

////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
   private  function LimpiaTexto($es) {
        $es = str_replace("Departamento:", "*", $es);
        $es = str_replace("Municipio:", "*", $es);
        $es = str_replace("Dirección Puesto:", "*", $es);
        $es = str_replace("Puesto:", "*", $es);
        $es = str_replace("Dirección", "*", $es);
        $es = str_replace("Fecha de inscripciÃ³n:", "*", $es);
        $es = str_replace("Mesa", "*", $es);
        $es = str_replace("Debe inscribirse en los pe", "#", $es);
        
        
        
        
        return $es;
    }
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
  private   function Depurador($es) {
        $lista = str_split($es);
        $j = count($lista);
        for ($x = 0; $x < count($lista); $x++) {
            if($lista[$x]=="#"){
                
                
                return "#";
            }
            
        }
        for ($x = 0; $x < 1326; $x++) {
            $lista[$x] = '+';
        }
        $x = $j - 574;
        for ($x; $x < $j; $x++) {
            $lista[$x] = '+';
        }
        $resultado = "";
        $regex = '#^[+]*[A-Z]*[ ]*[.]*[*]*[0-9]*[/]*$#i';
        $j = 0;
        for ($x = 0; $x < count($lista); $x++) {
            $j++;
            if ((preg_match($regex, $lista[$x])) == 1) {
                $resultado = $resultado . $lista[$x];
            }
        }
        $lista = str_split($resultado);
        $resultado = "";
        $regex = '#^[+]*$#i';
        $j = 0;
        for ($x = 0; $x < count($lista); $x++) {
            $j++;
            if ((preg_match($regex, $lista[$x])) == 1) {
            } else {
                $resultado = $resultado . $lista[$x];
            }
        }
        return $resultado;
    }
////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
  private   function ImprimirLista($lista) {
        for ($x = 0; $x < count($lista); $x++) {
            if ($x != 4) {
                ?><br><?php echo $lista[$x]; ?></br><?php
            }
        }
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
 private    function LimpiaTexto_mejorado($es) {
        $es = str_replace("Nombre:", "*", $es);
        $es = str_replace("Apellidos", "*", $es);
        $es = str_replace("Tipo", "*", $es);
        $es= str_replace("no se encuentra registrada","#", $es);

        return $es;
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
private     function Pasarvariables_mejorado($string) {
        $j = 0;
        $ojo=0;
        $aux;
        $listaux;
        $listanew;
        $aux = "";
        $lista = str_split($string);
        $listaux = str_split($string);
        for ($x = 0; $x < count($lista); $x++) {
            if ($lista[$x] == '*') {
                $listaux[$j] = $x;
                $ojo++;
                $j = $j + 1;
            }
        }
        if($ojo==3){
        $x = $listaux[0] + 1;
        $j = $listaux[1];
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[0] = $aux;
        $aux = "";
        $x = $listaux[1] + 1;
        $j = $listaux[2];
        for ($x; $x < $j; $x++) {
            $aux = $aux . $lista[$x];
        }
        $listanew[1] = $aux;
        }else{
            $listanew[0]="NOMBRE NO SE ENCUENTRA EN LA BASE DE DATOS";
            $listanew[1]="APELLIDOS NO SE ENCUENTRA EN LA BASE DE DATOS";
        }
        return $listanew;
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
 private  function espacioscoienzoyfinal_mejorado($listanew) {
        $resultado = "";
        for ($x = 0; $x < count($listanew); $x++) {
            $resultado = $listanew[$x];
            $listanew[$x] = trim($resultado);
        }
        return $listanew;
    }
////////////////////////////////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES ////////////////////////////////////// FUNCIONES
 private function Depurador_mejorado($es) {
        $lista = str_split($es);
        $j = count($lista);
        
        for ($x = 0; $x < count($lista); $x++) {
            if($lista[$x]=="#"){
                
                
                return "#";
            }
            
        }
        for ($x = 0; $x < 2500; $x++) {
            $lista[$x] = '+';
        }
        $x = $j - 2000;
        for ($x; $x < $j; $x++) {
            $lista[$x] = '+';
        }
        $resultado = "";
        $regex = '#^[+]*[A-Z]*[ ]*[*]*$#i';
        $j = 0;
        for ($x = 0; $x < count($lista); $x++) {
            $j++;
            if ((preg_match($regex, $lista[$x])) == 1) {
                $resultado = $resultado . $lista[$x];
            }
        }
        $lista = str_split($resultado);
        $resultado = "";
        $regex = '#^[+]*$#i';
        $j = 0;
        for ($x = 0; $x < count($lista); $x++) {
            $j++;
            if ((preg_match($regex, $lista[$x])) == 1) {
                
            } else {
                $resultado = $resultado . $lista[$x];
            }
        }
        return $resultado;
    }
}
?>