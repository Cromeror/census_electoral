<?php
class Voter {

    private $cc;
    private $name;
    private $last_name;
    private $voter_place;

    public function __construct($cc, $name, $last_name, $voter_place) {
        $this->cc = $cc;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->voter_place = $voter_place;
    }

    public function getCc() {
        return $this->cc;
    }

    public function getName() {
        return $this->name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getVoter_place() {
        return $this->voter_place;
    }

    public function setCc($cc) {
        $this->cc = $cc;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function setVoter_place($voter_place) {
        $this->voter_place = $voter_place;
    }

}

?>