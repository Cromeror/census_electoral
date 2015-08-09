<?php

class VotePlace {

    private $departament;
    private $town;
    private $place;
    private $dir_place;
    private $table;

    function __construct($departament, $town, $place, $dir_place, $table) {
        $this->departament = $departament;
        $this->town = $town;
        $this->place = $place;
        $this->dir_place = $dir_place;
        $this->table = $table;
    }

    function getDepartament() {
        return $this->departament;
    }

    function getTown() {
        return $this->town;
    }

    function getPlace() {
        return $this->place;
    }

    function getDir_place() {
        return $this->dir_place;
    }

    function getTable() {
        return $this->table;
    }

    function setDepartament($departament) {
        $this->departament = $departament;
    }

    function setTown($town) {
        $this->town = $town;
    }

    function setPlace($place) {
        $this->place = $place;
    }

    function setDir_place($dir_place) {
        $this->dir_place = $dir_place;
    }

    function setTable($table) {
        $this->table = $table;
    }

}

?>