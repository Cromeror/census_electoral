<?php

/**
 * @author Romero Rossi
 * @version 1.0
 * @created 14-ago-2015 08:58:06 p.m.
 */
class Candidato
{

        private $cc_candidato;	
        private $nombre_candidato;
        private $apellido_candidato;
        private $id_aspiracion;
        private $id_partido_politico;
        private $tel_candidato;
        private $cel_candidato;
        private $dir_candidato;
        
        
        
        function __construct($cc_candidato, $nombre_candidato, $apellido_candidato, $id_aspiracion, $id_partido_politico, $tel_candidato, $cel_candidato, $dir_candidato) {
            $this->cc_candidato = $cc_candidato;
            $this->nombre_candidato = $nombre_candidato;
            $this->apellido_candidato = $apellido_candidato;
            $this->id_aspiracion = $id_aspiracion;
            $this->id_partido_politico = $id_partido_politico;
            $this->tel_candidato = $tel_candidato;
            $this->cel_candidato = $cel_candidato;
            $this->dir_candidato = $dir_candidato;
        }

        function getCc_candidato() {
            return $this->cc_candidato;
        }

        function getNombre_candidato() {
            return $this->nombre_candidato;
        }

        function getApellido_candidato() {
            return $this->apellido_candidato;
        }

        function getId_aspiracion() {
            return $this->id_aspiracion;
        }

        function getId_partido_politico() {
            return $this->id_partido_politico;
        }

        function getTel_candidato() {
            return $this->tel_candidato;
        }

        function getCel_candidato() {
            return $this->cel_candidato;
        }

        function getDir_candidato() {
            return $this->dir_candidato;
        }

        function setCc_candidato($cc_candidato) {
            $this->cc_candidato = $cc_candidato;
        }

        function setNombre_candidato($nombre_candidato) {
            $this->nombre_candidato = $nombre_candidato;
        }

        function setApellido_candidato($apellido_candidato) {
            $this->apellido_candidato = $apellido_candidato;
        }

        function setId_aspiracion($id_aspiracion) {
            $this->id_aspiracion = $id_aspiracion;
        }

        function setId_partido_politico($id_partido_politico) {
            $this->id_partido_politico = $id_partido_politico;
        }

        function setTel_candidato($tel_candidato) {
            $this->tel_candidato = $tel_candidato;
        }

        function setCel_candidato($cel_candidato) {
            $this->cel_candidato = $cel_candidato;
        }

        function setDir_candidato($dir_candidato) {
            $this->dir_candidato = $dir_candidato;
        }


      

}
?>