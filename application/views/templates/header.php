<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-57x57.png" />
  	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-114x114.png" />
  	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-72x72.png" />
  	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-144x144.png" />
  	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-60x60.png" />
  	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-120x120.png" />
  	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-76x76.png" />
  	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon-152x152.png" />
  	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-196x196.png" sizes="196x196" />
  	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-96x96.png" sizes="96x96" />
  	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-32x32.png" sizes="32x32" />
  	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-16x16.png" sizes="16x16" />
  	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-128.png" sizes="128x128" />
  	<meta name="application-name" content="Verto Communications"/>
  	<meta name="msapplication-TileColor" content="#002B5C" />
  	<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/favicon/mstile-144x144.png" />
  	<meta name="msapplication-square70x70logo" content="<?php echo base_url(); ?>assets/favicon/mstile-70x70.png" />
  	<meta name="msapplication-square150x150logo" content="<?php echo base_url(); ?>assets/favicon/mstile-150x150.png" />
  	<meta name="msapplication-wide310x150logo" content="<?php echo base_url(); ?>assets/favicon/mstile-310x150.png" />
  	<meta name="msapplication-square310x310logo" content="<?php echo base_url(); ?>assets/favicon/mstile-310x310.png" />

    <title>Verto Communications</title>

    <link href="<?php echo base_url(); ?>assets/css/vertocom.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/foundation.min.css" rel="stylesheet" />

    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/foundation.min.js'); ?>"></script>

   
  </head>
  
  <body>
    <div class="topbar" role="navigation">
      <div class="nav-first">
        <div class="wrapper">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.navbar.png" alt="Verto Communication" title="Home" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="padding-left: 35px;">
              <ul class="nav navbar-nav nav-rod navbar-left">
                <li <?php if ($page == 'products') { echo 'class="active"'; } ?>><a href="<?php echo base_url('main/products'); ?>">Products</a></li>
                <li <?php if ($page == 'services') { echo 'class="active"'; } ?>><a href="<?php echo base_url('main/services'); ?>">Services</a></li>
                <li <?php if ($page == 'ccf') { echo 'class="active"'; } ?>><a href="<?php echo base_url('main/ccf'); ?>">Call Center Facility</a></li>
              </ul>
              
              <div class="navbar-right">
	              <a href="#" class="btn btn-success btn-sm">Live Chat</a>
                <a href="#" class="btn btn-success btn-sm">Email Inquiry</a>
                <a href="#" class="btn btn-primary btn-outline btn-sm">Get a Free Trial</a>
              </div>
            </div><!-- /.navbar-collapse -->            
          </nav>
        </div><!-- .wrapper -->
      </div><!-- .nav-first -->
      <div class="nav-sub hide">
        <div class="wrapper">
          
        </div><!-- .wrapper -->
      </div><!-- .nav-sub -->
    </div><!-- .topbar -->