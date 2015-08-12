<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plantilla básica de Bootstrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style-census-electoral.css" rel="stylesheet">
    </head>
    <body>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <div class="navbar navbar-default navbar-fixed-top">
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
                        <li class="active"><a href="#">Enlace #1</a></li>
                        <li><a href="#">Enlace #2</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Menú #1 <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Acción #1</a></li>
                                <li><a href="#">Acción #2</a></li>
                                <li><a href="#">Acción #3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Acción #4</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Acción #5</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Enlace #3</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Menú #2 <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Acción #1</a></li>
                                <li><a href="#">Acción #2</a></li>
                                <li><a href="#">Acción #3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Acción #4</a></li>
                            </ul>
                        </li>
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
        </div>
        <!--**************************************************-->
        <div class="container" style="padding-top: 100px">
            <table class="table table-condensed table-hover table-responsive">
                <tr>
                    <td><strong></strong></td>
                    <td><strong>Cédula de ciudadanía</strong></td>
                    <td><strong>Nombre</strong></td>
                    <td><strong>Apellidos</strong></td>
                    <td><strong>Departamento</strong></td>
                    <td><strong>Municipio</strong></td>
                    <td><strong>Puesto</strong></td>
                    <td><strong>Mesa</strong></td>
                </tr>
                <?php for ($index = 0; $index < 20; $index++) { ?>
                    <tr>
                        <td><div class="checkbox" style="margin: 0px;"><label><input type="checkbox" value=""></label></div></td>
                        <td>00000000</td>
                        <td>fulano</td>
                        <td>de tal</td>
                        <td>bolivar</td>
                        <td>cartagena</td>
                        <td>terminal</td>
                        <td>5</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>