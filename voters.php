<?php
include_once getcwd() . '\html_block.php';
include_once getcwd() . '\string\idiom_spn.php';

$elements = new ElementHTML();
$idiom = new Idiom();
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
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**************************************************-->
        <div class="container" style="padding-top: 10%">
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
        <!-- modal_add_voter -->
        <div class="modal fade bs-example-modal-sm" id="modal_add_voter">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><?php echo $idiom->getModal_add_voter(); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="log_in" action="voters.php" method="get">
                            <label for="modal_cc"><?php echo $idiom->getModal_label_cc(); ?></label>
                            <input type="text" class="form-control" id="modal_cc" placeholder="digite su numero de cédula">
                            <label for="modal_name"><?php echo $idiom->getModal_label_name(); ?></label>
                            <input type="text" class="form-control" id="modal_name">
                            <label for="modal_lastname"><?php echo $idiom->getModal_label_lastname(); ?></label>
                            <input type="text" class="form-control" id="modal_lastname">
                            <label for="modal_departament"><?php echo $idiom->getModal_label_departament(); ?></label>
                            <input type="text" class="form-control" id="modal_departament">
                            <label for="modal_town"><?php echo $idiom->getModal_label_town(); ?></label>
                            <input type="text" class="form-control" id="modal_town">
                            <label for="modal_place"><?php echo $idiom->getModal_label_place(); ?></label>
                            <input type="text" class="form-control" id="modal_place">
                            <label for="modal_dir_place"><?php echo $idiom->getModal_label_dir_place(); ?></label>
                            <input type="text" class="form-control" id="modal_dir_place">
                            <label for="modal_table"><?php echo $idiom->getModal_label_table(); ?></label>
                            <input type="text" class="form-control" id="modal_table">
                            <label for="modal_tel"><?php echo $idiom->getModal_label_tel(); ?></label>
                            <input type="text" class="form-control" id="modal_tel">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" >Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>