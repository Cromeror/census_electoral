<?php

include_once getcwd() . '\html_block_service.php';

if (isset($_GET["op"]) && isset($_POST["doc"])) {
    $op = $_GET["op"];
    switch ($op) {
        case 1:
            load_result_serv($_POST["doc"]);
            break;
    }
}

function load_result_serv($documento) {
    $service = new BuscaServicio();
    $service->buscaVotante($documento);
    echo 'entro';
}

?>