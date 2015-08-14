<?php

include_once getcwd() . '\string\idiom_spn.php';

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
                    <a class="navbar-brand" href="#">Logotipo</a>
                </div>

                <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                     otro elemento que se pueda ocultar al minimizar la barra -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="' . $this->host . 'leaders.php">' . $this->idiom->getLabel_leaders() . '</a></li>
                        <li><a href="' . $this->host . 'voters.php">' . $this->idiom->getLabel_voter() . '</a></li>
                        <li><a href="' . $this->host . '">' . $this->idiom->getLabel_query_place() . '</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $this->idiom->getLabel_stadistics() . '<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="' . $this->host . 'stadistics_town.php">' . $this->idiom->getLabel_place() . '</a></li>
                                <li><a href="' . $this->host . 'stadistics_departament.php">' . $this->idiom->getLabel_town() . '</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">' . $this->idiom->getLabel_sign_out() . '</a></li>
                    </ul>
                </div>
            </nav>  ';
    }

    function load_table_depart_town() {
        //
    }

    function load_modal_add_voter() {
        echo '<div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">' . $this->idiom->getModal_add_voter() . '</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" >Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->';
    }

    function getHost() {
        return $this->host;
    }

}

?>