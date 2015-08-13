<?php

include_once getcwd() . '\string\idiom_spn.php';

class ElementHTML {

    private $idiom;

    function __construct() {
        $this->idiom = new Idiom();
    }

    function load_navbar() {
        echo '<div class="navbar navbar-default navbar-fixed-top" style="padding-left: 20px; padding-right: 20px; margin-bottom: 10px">
            <nav class="navbar navbar-default border-none" role="navigation">
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
                        <li><a href="#">' . $this->idiom->getLabel_leaders() . '</a></li>
                        <li><a href="#">' . $this->idiom->getLabel_voter() . '</a></li>
                        <li><a href="#">' . $this->idiom->getLabel_query_place() . '</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $this->idiom->getLabel_stadistics() . '<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">' . $this->idiom->getLabel_town() . '</a></li>
                                <li><a href="#">' . $this->idiom->getLabel_place() . '</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">' . $this->idiom->getLabel_sign_out() . '</a></li>
                    </ul>
                </div>
            </nav>          
            <div class="navbar navbar-default border-none">
                <div class="container">   
                    <form class="navbar-form navbar-left" role="search" style="margin-top: 10px">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cédula de ciudadanía">
                        </div>

                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                    <div class="btn-group navbar-right" style="margin-top: 10px">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" ></span></button>
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                </div>
            </div>
        </div>';
    }

}

?>