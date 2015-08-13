<?php
include_once getcwd() . '\string\idiom_spn.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title_login ?></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style-census-electoral.css" rel="stylesheet">
    </head>
    <body >
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <nav class="navbar navbar-default navbar-fixed-top">
        </nav>
        <div class="container" style="padding-top: 10%;">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <div class="panel panel-default" style="background:#eee;">
                        <div class="panel-body">
                            <div class="page-header">
                                <h3><?php echo $title_login ?></h3>
                            </div>
                            <form role="form" >
                                <div class="form-group">
                                    <label for="loginUsername"><?php echo $username; ?></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="email" class="form-control" id="loginUsername" placeholder="<?php echo $clue_username; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword"><?php echo $password; ?></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        <input type="password" class="form-control" id="loginPassword" placeholder="<?php echo $clue_password; ?>">
                                    </div>
                                </div>
                                <hr/>
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> <?php echo $btn_login; ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>