<?php

include_once getcwd() . '\DAO\BuscarServicios.php';

if (isset($_GET["doc"])) {
    load_result_serv($_GET["doc"]);
}

function load_result_serv($documento) {
    $service = new BuscarServicios();
    $result = $service->muestraVotante($documento);
    echo '
                    <table class="table table-condensed table-hover ">
                        <tr>
                            <td><strong>Cédula de ciudadanía:</strong></td>
                            <td>' . $documento . '</td>
                        </tr>
                        <tr>
                            <td><strong>Nombre:</strong></td>
                            <td>' . $result['nombre'] . '</td>
                        </tr>
                        <tr>
                            <td><strong>Apellidos:</strong></td>
                            <td>' . $result['apellido'] . '</td>
                        </tr>
                        <tr>
                            <td><strong>Departamento:</strong></td>
                            <td>' . $result['departamento'] . '</td>
                        </tr>
                        <tr>
                            <td><strong>Municipio:</strong></td>
                            <td>' . $result['municipio'] . '</td>
                        </tr>
                        <tr>
                            <td><strong>Puesto de votación:</strong></td>
                            <td>' . $result['puesto'] . '</td>
                        </tr>
                        <tr>
                            <td><strong>Dirección del puesto:</strong></td>
                            <td>' . $result['direccion'] . '</td>
                        </tr>
                        <tr>
                            <td><strong>Mesa:</strong></td>
                            <td>' . $result['mesa'] . '</td>
                        </tr>
                    </table>';
    
    
       
}

?>