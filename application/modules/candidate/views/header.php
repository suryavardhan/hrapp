<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title><?=$this->config->item('portal_name','plus_hr');?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?=site_url('assets/theme');?>/images/favicon.ico">
<!--Stylesheets-->
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/reset.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/main.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/typography.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/bootstrap.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/highlight.css" />

<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/tipsy.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/jquery.ui.all.css" />


<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<!--Javascript-->

<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.min.js"> </script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.quicksand.js"> </script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.easing.1.3.js"> </script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.tipsy.js"> </script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.autogrowtextarea.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/form_elements.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.slider.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.progressbar.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.tabs.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/bootstrap-modal.js"></script>





<meta charset="UTF-8"></head>

    <?php $this->load->library('iface'); ?>  
    <?php $this->iface->js('genvalidator','xml:space="preserve"'); ?>	
</head>
<body>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href="#"><img src="<?=site_url('assets/theme');?>/images/logo.png" alt="" /></a></div>
    <!--Search-->
<!--     <div class="header_search">
        <form action="">
            <input type="text" name="search" placeholder="Search" id="ac">
            <input type="submit" value="">
        </form>
    </div> -->
</header>
