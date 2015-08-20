<?php

include_once getcwd() . '\DAO\BuscaServicio.php';

if (isset($_GET["doc"])) {
    load_result_serv($_GET["doc"]);
}

function load_result_serv($documento) {
    $service = new BuscaServicio();
    echo $documento;
    $service->buscaVotante("1047445429");
}

?>