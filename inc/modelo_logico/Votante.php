<?php

/**
 * @author Romero Rossi
 * @version 1.0
 * @created 15-ago-2015 04:57:53 p.m.
 */
class Votante {

    private $cc_votante;
    private $nombre_votante;
    private $apellido_votante;
    private $tel_votante;
    private $cel_votante;
    private $dir_votante;
    private $puesto;

    function __construct($cc_votante, $nombre_votante, $apellido_votante, $tel_votante, $cel_votante, $dir_votante) {
        $this->cc_votante = $cc_votante;
        $this->nombre_votante = $nombre_votante;
        $this->apellido_votante = $apellido_votante;
        $this->tel_votante = $tel_votante;
        $this->cel_votante = $cel_votante;
        $this->dir_votante = $dir_votante;
        $this->puesto = null;
    }

    function getPuesto() {
        return $this->puesto;
    }

    function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    function getCc_votante() {
        return $this->cc_votante;
    }

    function getNombre_votante() {
        return $this->nombre_votante;
    }

    function getApellido_votante() {
        return $this->apellido_votante;
    }

    function getTel_votante() {
        return $this->tel_votante;
    }

    function getCel_votante() {
        return $this->cel_votante;
    }

    function getDir_votante() {
        return $this->dir_votante;
    }

    function setCc_votante($cc_votante) {
        $this->cc_votante = $cc_votante;
    }

    function setNombre_votante($nombre_votante) {
        $this->nombre_votante = $nombre_votante;
    }

    function setApellido_votante($apellido_votante) {
        $this->apellido_votante = $apellido_votante;
    }

    function setTel_votante($tel_votante) {
        $this->tel_votante = $tel_votante;
    }

    function setCel_votante($cel_votante) {
        $this->cel_votante = $cel_votante;
    }

    function setDir_votante($dir_votante) {
        $this->dir_votante = $dir_votante;
    }

}

?>