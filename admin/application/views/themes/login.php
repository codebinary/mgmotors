<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Avant" />
    <meta name="author" content="Antony tasayco" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css' />
    <link href="<?= base_url(); ?>assets/css/styles.min.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type='text/css' href='<?php echo base_url(); ?>assets/plugins/alertify/themes/alertify.core.css' />
    <link rel="stylesheet" type='text/css' href='<?php echo base_url(); ?>assets/plugins/alertify/themes/alertify.default.css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/alertify.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/login.js'></script>
  </head>
  <body class="focusedform">
    <div class="verticalcenter">
      <img src="<?= base_url(); ?>assets/img/logo-big.png" alt="Logo" class="brand" />
      <div class="panel panel-primary">
        <?php echo $output;?>
      </div>
    </div>
  </body>
</html>