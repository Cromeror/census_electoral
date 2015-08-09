<?php

include_once getcwd() . '\inc\modelo_logico\Voter.php';
include_once getcwd(). '\inc\DAO\DAOvotePlace.php';
include_once 'Connection.php';

class DAOVoter {

    public function getVoter($id_voter) {
        $vote_place = new DAOVotePlace();
        $connection = new Connection();
        $query = "SELECT * FROM voter where cc_voter = " . $id_voter;
        $result = $connection->query_server($query);
        while ($row = mysql_fetch_array($result)) {
            $object = new Voter($row["cc_voter"], $row["name"], $row["last_name"], $vote_place->getVotePlace($id_voter));
        }
        return $object;
    }

}

?>