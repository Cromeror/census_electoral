<?php

include_once getcwd() . '\string\idiom_spn.php';

if (isset($_GET["op"]) && !empty($_GET["op"])) {
    $op = $_GET["op"];
    switch ($op) {
        case 1:
            $element = new ElementHTML();
            $element->load_modal_add_voter();
            break;
    }
}

class ElementHTML {

    private $idiom;
    private $host;

    function __construct() {
        $this->idiom = new Idiom();
        $this->host = "http://localhost/census_electoral/";
    }

    function load_navbar() {
        echo '<nav class="navbar navbar-default border-none" role="navigation">
                <!-- El logotipo y el icono que despliega el menú se agrupan
                     para mostrarlos mejor en los dispositivos móviles -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Desplegar navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="' . $this->host . '">Logotipo</a>
                </div>

                <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                     otro elemento que se pueda ocultar al minimizar la barra -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="' . $this->host . 'leaders.php">' . $this->idiom->getLabel_leaders() . '</a></li>
                        <li><a href="' . $this->host . 'voters.php">' . $this->idiom->getLabel_voter() . '</a></li>
                        <li><a href="' . $this->host . 'query_place_voter.php">' . $this->idiom->getLabel_query_place() . '</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $this->idiom->getLabel_stadistics() . '<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="' . $this->host . 'stadistics_town.php">' . $this->idiom->getLabel_place() . '</a></li>
                                <li><a href="' . $this->host . 'stadistics_departament.php">' . $this->idiom->getLabel_town() . '</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a href="'.$this->host .'inc/log_out.php">' . $this->idiom->getLabel_sign_out() . '</a></li>
                    </ul>
                </div>
            </nav>  ';
    }

    function load_table_depart_town() {
        //
    }

    function load_modal_add_voter() {
        echo '<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">' . $this->idiom->getModal_add_voter() . '</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="log_in" action="voters.php" method="get">
                            <label for="modal_cc">' . $this->idiom->getModal_label_cc() . '</label>
                            <div class="input-group">
                                <input type="text" class="form-control" onkeypress="return justNumbers(event);">
                                <a class="input-group-addon" id="btn-a" href="#"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="modal_name">' . $this->idiom->getModal_label_name() . '</label>
                                        <input type="text" class="form-control" id="modal_name" value="Nombre de la registraduria">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="modal_lastname">' . $this->idiom->getModal_label_lastname() . '</label>
                                        <input type="text" class="form-control" id="modal_lastname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="modal_tel">' . $this->idiom->getModal_label_tel() . '</label>
                                        <input type="tel" class="form-control" id="modal_tel" onkeypress="return justNumbers(event);">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="modal_departament">' . $this->idiom->getModal_label_departament() . '</label>
                                        <input type="text" class="form-control" id="modal_departament" text="si escribe">
                                    </div>     
                                    <div class="col-md-6">
                                        <label for="modal_town">' . $this->idiom->getModal_label_town() . '</label>
                                        <input type="text" class="form-control" id="modal_town">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="modal_place">' . $this->idiom->getModal_label_place() . '</label>
                                        <input type="text" class="form-control" id="modal_place">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="modal_dir_place">' . $this->idiom->getModal_label_dir_place() . '</label>
                                        <input type="text" class="form-control" id="modal_dir_place">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-6">
                                        <label for="modal_table">' . $this->idiom->getModal_label_table() . '</label>
                                        <input type="text" class="form-control" id="modal_table" onkeypress="return justNumbers(event);">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">' . $this->idiom->getBtn_close() . '</button>
                                <button type="submit" class="btn btn-primary" >' . $this->idiom->getBtn_save() . '</button>
                            </div>
                        </form>';
    }

    function getHost() {
        return $this->host;
    }

}

?>