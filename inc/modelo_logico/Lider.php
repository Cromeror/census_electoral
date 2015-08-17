<?php


class Lider
{

    private $cc_lider;
    private $nombre_lider;
    private $apellido_lider;
    private $tel_lider;
    private $cel_lider;
    private $dir_lider;
    

    function __construct($cc_lider, $nombre_lider, $apellido_lider, $tel_lider, $cel_lider, $dir_lider) {
        $this->cc_lider = $cc_lider;
        $this->nombre_lider = $nombre_lider;
        $this->apellido_lider = $apellido_lider;
        $this->tel_lider = $tel_lider;
        $this->cel_lider = $cel_lider;
        $this->dir_lider = $dir_lider;
    }
    
    function getCc_lider() {
        return $this->cc_lider;
    }

    function getNombre_lider() {
        return $this->nombre_lider;
    }

    function getApellido_lider() {
        return $this->apellido_lider;
    }

    function getTel_lider() {
        return $this->tel_lider;
    }

    function getCel_lider() {
        return $this->cel_lider;
    }

    function getDir_lider() {
        return $this->dir_lider;
    }

    function setCc_lider($cc_lider) {
        $this->cc_lider = $cc_lider;
    }

    function setNombre_lider($nombre_lider) {
        $this->nombre_lider = $nombre_lider;
    }

    function setApellido_lider($apellido_lider) {
        $this->apellido_lider = $apellido_lider;
    }

    function setTel_lider($tel_lider) {
        $this->tel_lider = $tel_lider;
    }

    function setCel_lider($cel_lider) {
        $this->cel_lider = $cel_lider;
    }

    function setDir_lider($dir_lider) {
        $this->dir_lider = $dir_lider;
    }



}
?>