<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: index.php');
}
include_once getcwd() . '\html_block.php';
$elements = new ElementHTML();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style-census-electoral.css" rel="stylesheet">
    </head>
    <body>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <div class="navbar navbar-default navbar-fixed-top" style="padding-left: 20px; padding-right: 20px; margin-bottom: 10px">
            <?php $elements->load_navbar(); ?>
            <div class="navbar navbar-default border-none">
                <div class="container">   
                    <form class="navbar-form navbar-left" role="search" style="margin-top: 10px">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cédula de ciudadanía">
                        </div>

                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                    <div  class="navbar-right" style="margin-top: 10px">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_add_voter" style="margin-right: 10px"><span class="glyphicon glyphicon-plus" ></span></button>
                        <div class="btn-group" >
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" ></span></button>
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**************************************************-->
        <div class="container" style="padding-top: 10%">
            <table class="table table-condensed table-hover table-responsive">
                <?php
                $elements->load_tabla_leaders($_SESSION['user']);
                ?>
                <!-- modal_add_voter -->
                <div class="modal fade" id="modal_add_voter">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div id="load_voter">
                                <?php echo $elements->load_modal_add_voter(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </body>
</html>