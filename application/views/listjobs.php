<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Candidate Registration Form</title>
<?php $this->load->library('iface'); ?>  
<?php $this->iface->js('genvalidator','xml:space="preserve"'); ?>	
<?php $this->iface->js('jquery',''); ?>	
<link rel="stylesheet" href="<?=site_url('assets/css');?>/jobs.css" />

<script>
$(document).ready(function() {
$('.toggle').hide();
 
$('.show').click(function() {
var id = $(this).attr('id');


var txt = $("#toggle-" + id).is(':visible') ? '+' : '-';
$("#" + id).text(txt);
$('#toggle-' + id).toggle(100);
return false;
});
 
}); 

</script>

</head>

<body>
<?php if($this->session->flashdata('success') != '') { ?> <p class="msg done"> <?php echo $this->session->flashdata('success') ?></p><?php } ?>
<?php if($this->session->flashdata('error') != '') { ?> <p class="msg error"> <?php echo $this->session->flashdata('error') ?></p><?php } ?>
<?php if($this->session->flashdata('warning') != '') { ?> <p class="msg warning"> <?php echo $this->session->flashdata('warning') ?></p><?php } ?>
<?php if($this->session->flashdata('info') != '') { ?> <p class="msg info"> <?php echo $this->session->flashdata('info') ?></p><?php } ?>
<div class="header">
  <img src="<?=site_url('assets/images');?>/logo.jpg" title="Designsages" />
</div> 

<div class="container">
<?php if(!$this->tank_auth->is_logged_in()): ?>  
<div class="memberlogin" style="margin-bottom:10px;"> Already a Member? <a href="<?=site_url('login'); ?>"><img align="absmiddle" src="<?=site_url('assets/images/small.png');?>"/></a> here
| <a href="<?=site_url();?>">Sign Up</a>
</div>  
<?php else: ?>
<div class="memberlogin" style="margin-bottom:10px;">
  <a href="<?=site_url('candidate/profile'); ?>">My Dashboard</a> 
</div>   
<?php endif; ?>  
<!-- <h1>Available Openings</h1>	 -->

   <?php 
   foreach($joblist AS $jobs)
   {
   ?>
    <div class="job">
          <div class="show" id="<?=$jobs->job_id;?>">+</div>
          <h2><?=$jobs->job_title;?></h2>
          <p><?=$jobs->introduction;?></p>
          <div id="toggle-<?=$jobs->job_id;?>" class="toggle">
            <p><h4>Responsibilities</h4><br/> <?=$jobs->responsibilities;?></p>
            <p><h4>Skills Required</h4><br/> <?=$jobs->skillset;?></p>
          </div>
          <div style="width:50%; float:right; text-align:right">
           <a href="<?=site_url('home/refrence/'.$jobs->job_id);?>" target="_blank" title="Apply for this job">Apply Now &rarr;</a>
          </div>
          <div style="width:50%; float:left;">
             <style>
             .addthis_toolbox a
             {
               background: none;
             }
              .addthis_toolbox a:hover { background: none;}
             </style>  
            <!-- AddThis Button BEGIN -->
             <script type="text/javascript">
              var addthis_config = 
              {
                  data_track_addressbar: false,
                  data_track_clickback: false 
              } 
            </script>           
            <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_facebook" style="cursor:pointer" addthis:url="http://careers.supportsages.com" addthis:title="Job Opening for the post of <?=$jobs->job_title;?>. Apply now! "></a>
            <a class="addthis_button_twitter" style="cursor:pointer" addthis:url="http://careers.supportsages.com" addthis:title="Job Opening for the post of <?=$jobs->job_title;?>. Apply now! "></a>
            <a class="addthis_button_linkedin" style="cursor:pointer" addthis:url="http://careers.supportsages.com" addthis:title="Job Opening for the post of <?=$jobs->job_title;?>. Apply now! "></a>
            <a class="addthis_button_email" style="cursor:pointer" addthis:url="http://careers.supportsages.com" addthis:title="Job Opening for the post of <?=$jobs->job_title;?>. Apply now! "></a>
            </div>
            <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-509222ad7ecc32cf"></script>
            <!-- AddThis Button END -->
              </div>  
          </div>
   <?php
    }
   ?>	


 
</div>	
</body>
</html>