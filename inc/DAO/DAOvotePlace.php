<?php

include_once getcwd() . '\inc\modelo_logico\VotePlace.php';
include_once 'Connection.php';

class DAOVotePlace {

//para eliminar la relacion votante mesa de votación
    function deleteVotePlace($id_vote_place) {
        //
    }

    /**
     * devuelve el puesto de votacion de un votante
     * 
     * @param type $id_voter
     * @return VotePlace
     */
    function getVotePlace($id_voter) {
        $connection = new Connection();
        $query = "SELECT vp.id_vote_place, vp.departament, vp.town, vp.place, vp.dir_place, vp.num_table "
                . "FROM zoning as z,vote_place AS vp "
                . "where z.id_voter = " . $id_voter . " AND z.id_vote_place = vp.id_vote_place";
        $result = $connection->query_server($query);
        $row = mysql_fetch_array($result);
        return new Voter($row["departament"], $row["town"], $row["place"], $row["dir_place"], $row["num_table"]);
    }

//añade un puesto de votacion que no este en la base de datos
    function addInfoVotePlace($departament, $town, $place, $dir_place, $table) {
        //
    }

    /**
     * añade un lugar de votacion a un votante y devuelve el lugar de votación
     * 
     * @param type $id_voter
     * @param type $place
     * @return VotePlace
     */
    function zoningVotePlace($id_voter, $place) {
        $votePlace = null;
        $connection = new Connection();
        $query = "SELECT * FROM `vote_place` WHERE place='" . $place . "' LIMIT 0,1";
        $result = $connection->query_server($query);
        if ($result != null) {
            $row = mysql_fetch_array($result);
            $votePlace = new VotePlace($row["departament"], $row["town"], $row["place"], $row["dir_place"], $row["num_table"]);
            $id_vote_place = $row["id_vote_place"];
            $query = "INSERT INTO `census_vote`.`zoning` (`id_voter`, `id_vote_place`) VALUES ('" . $id_voter . "', '" . $id_vote_place . "');";
            $result = $connection->query_server($query);
            Echo "Zonificó = " . $result;
        }
        return $votePlace;
    }

}

?>