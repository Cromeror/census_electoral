<?php

class Idiom {

    private $title_login = "Iniciar sesión";
    private $username = "Numero de Cédula";
    private $password = "Contraseña";
    private $btn_login = "Inicio de sesión";
    private $clue_username = "Digite su numero de cédula";
    private $clue_password = "Digite su contraseña";
    private $label_leaders = "Lideres";
    private $label_stadistics = "Estadisticas";
    private $label_town = "Departamentos y Municipios";
    private $label_place = "Puestos de Votación";
    private $label_voter = "Votantes";
    private $label_query_place = "Consultar Puesto de votación";
    private $label_sign_out = "Salir";
    function __construct() {
        
    }

    function getTitle_login() {
        return $this->title_login;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getBtn_login() {
        return $this->btn_login;
    }

    function getClue_username() {
        return $this->clue_username;
    }

    function getClue_password() {
        return $this->clue_password;
    }

    function getLabel_leaders() {
        return $this->label_leaders;
    }

    function getLabel_stadistics() {
        return $this->label_stadistics;
    }

    function getLabel_town() {
        return $this->label_town;
    }

    function getLabel_place() {
        return $this->label_place;
    }

    function getLabel_voter() {
        return $this->label_voter;
    }

    function getLabel_query_place() {
        return $this->label_query_place;
    }

    function getLabel_sign_out() {
        return $this->label_sign_out;
    }

    function setTitle_login($title_login) {
        $this->title_login = $title_login;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setBtn_login($btn_login) {
        $this->btn_login = $btn_login;
    }

    function setClue_username($clue_username) {
        $this->clue_username = $clue_username;
    }

    function setClue_password($clue_password) {
        $this->clue_password = $clue_password;
    }

    function setLabel_leaders($label_leaders) {
        $this->label_leaders = $label_leaders;
    }

    function setLabel_stadistics($label_stadistics) {
        $this->label_stadistics = $label_stadistics;
    }

    function setLabel_town($label_town) {
        $this->label_town = $label_town;
    }

    function setLabel_place($label_place) {
        $this->label_place = $label_place;
    }

    function setLabel_voter($label_voter) {
        $this->label_voter = $label_voter;
    }

    function setLabel_query_place($label_query_place) {
        $this->label_query_place = $label_query_place;
    }

    function setLabel_sign_out($label_sign_out) {
        $this->label_sign_out = $label_sign_out;
    }

}

?>