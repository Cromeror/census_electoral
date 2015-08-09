<?php
include("inc/DAO/Connection.php");
include './inc/string/idiom_spa.php';
include_once './inc/DAO/DAOVoter.php';
$daoMix = new Connection();
$consulta = "SELECT * FROM voter";
$reader = $daoMix->query_server($consulta);
$prueba = new DAOVoter();
$prueba->getVoter("1047445");

?>

<!DOCTYPE html> 
<html>
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    </head>
    <body class="container">
        <h1>HOLA.....</h1>
        <script src="http://code.jquery.com/jquery.js&qu...;"></script>
        <script src="js/bootstrap.min.js"></script> 
        <div class="navbar navbar-inverse"> 
            <a class="navbar-brand" href="#">MARCA</a> 
            <ul class="nav navbar-nav"> 
                <li class="active">
                    <a href="#">MENU1</a>
                </li>
            </ul> 
        </div>
        <h1 class="text-center"><?php echo $title_list ?></h1>
        <table class="table table-condensed table-hover">
            <tr>
                <td><strong><?php echo $col_cc; ?></strong></td>
                <td><strong><?php echo $col_name; ?></strong></td>
                <td><strong><?php echo $col_last_name; ?></strong></td>
                <td><strong><?php echo $col_departament; ?></strong></td>
                <td><strong><?php echo $col_town; ?></strong></td>
                <td><strong><?php echo $col_place; ?></strong></td>
                <td><strong><?php echo $col_table; ?></strong></td>
                <td><strong><?php echo $col_action; ?></strong></td>
            </tr>
            <?php
            while ($row = mysql_fetch_array($reader)) {
                /* echo $row["cc_votante"];
                  echo $row["nombre_votante"]; */
                ?><tr>
                    <td>
                        <?php
//                        echo($row["cc_voter"]);
                        ?>
                    </td>
                    <td>
                        <?php
//                        echo(
//                        $row["name"]);
                        ?>
                    </td>
                    <td>
                        <?php
//                        echo(
//                        $row["last_name"]);
                        ?>
                    </td>
                    <td>
                        <?php
//                        echo(
//                        $row["departament"]);
                        ?>
                    </td>
                    <td>
                        <?php
//                        echo(
//                        $row["town"]);
                        ?>
                    </td>
                    <td>
                        <?php
//                        echo(
//                        $row["place"]);
                        ?>
                    </td>
                    <td>
                        <?php
//                        echo(
//                        $row["table"]);
                        ?>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">X</button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

    </body> 
</html>