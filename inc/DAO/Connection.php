<?php

class Connection {

    private $connection_instance;

    private function connection_server() {
        $URL = "localhost";
        $BD = "census_vote";
        $USER = "root";
        $PASSWORD = "";
        $this->connection_instance = mysql_connect($URL, $USER, $PASSWORD);
        mysql_select_db($BD, $this->connection_instance);
    }

    public function query_server($query) {
        $this->connection_server();
        return mysql_query($query, $this->connection_instance);
    }

    public function close_connection() {
        mysql_close($this->connection_instance);
    }

}

?>