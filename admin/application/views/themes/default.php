<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo $title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="omG.Rad1Us.GG" />
  <meta name="author" content="Antony tasayco" />
  <link href="<?php echo base_url(); ?>assets/css/styles.min.css" rel="stylesheet" type='text/css' media="all" />
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css' />
  <link href='<?php echo base_url(); ?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher' />
  <link href='<?php echo base_url(); ?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher' />
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/charts-flot/excanvas.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ie8.css">
  <![endif]-->
  <!-- The following CSS are included as plugins and can be removed if unused-->
  <link rel="stylesheet" type='text/css' href='<?php echo base_url(); ?>assets/plugins/alertify/themes/alertify.core.css' />
  <!-- <link rel="stylesheet" type='text/css' href='<?php echo base_url(); ?>assets/plugins/alertify/themes/alertify.bootstrap.css' /> -->
  <link rel="stylesheet" type='text/css' href='<?php echo base_url(); ?>assets/plugins/alertify/themes/alertify.default.css' />
  <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/datatables/dataTables.css' />
  <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/form-toggle/toggles.css' />
  <!-- JQueryUI v1.9.2 -->
  <link rel="stylesheet" type="text/css" href='<?= base_url(); ?>assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css'>
  <link rel="stylesheet" type="text/css" href='<?= base_url(); ?>assets/js/jqueryui.css'>
  <!-- Redactor -->
  <link rel="stylesheet" type="text/css" href='<?= base_url(); ?>assets/js/redactor/redactor.css'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
  <script type="text/javascript" src='<?php echo base_url(); ?>assets/js/jqueryui-1.10.3.min.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.actual.min.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/alertify.min.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/simpleLoadingModal.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/grid.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.cookie.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.touchSwipe.min.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/placeholdr.js'></script>
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/application.js'></script>
  <!-- Redactor -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/redactor/redactor.js"></script>
  <!-- Hash -->
  <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.ba-bbq.js'></script>
</head>

<body>
<?=$this->load->view('ci_sections/header');?>
<div id="page-container">
<?=$this->load->view('ci_sections/sidebar');?>
<div id="page-content">
<div id='wrap'>
<?php echo $output;?>
</div>
<!--wrap -->
</div>
<!-- page-content -->
<footer role="contentinfo">
  <div class="clearfix">
  <ul class="list-unstyled list-inline">
    <li>omG.Rad1Us.GG &copy; 2014</li>
  <button class="pull-right btn btn-inverse btn-xs" id="back-to-top" style="margin-top: -1px; text-transform: uppercase;">
  <i class="icon-arrow-up"></i>
  </button>
  </ul>
  </div>
</footer>
</div>
<!-- page-container -->
</body>
</html>