<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	$(".hc6").addClass("active");
  $(".se4").addClass("active");
	});

		
</script>
<script type="text/javascript" src="<?=site_url();?>assets/js/loaderanim.js"></script>
<!--Dreamworks Container-->
<div id="dreamworks_container">

<!--Primary Navigation-->
<?php $this->load->view('primary_navigation'); ?>

<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->

<?php 
//If there is no subnav leave $pageMenu null
$data['pageMenu'] = 'pageMenu_settings';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap"> 
<?php $this->load->view('messages'); ?> 

  <div class="one_two_wrap fl_left">
      <div class="widget">
          <div class="widget_title"><span class="iconsweet">k</span><h5>System Settings</h5></div>
            <div class="widget_body">
           <form action="<?=site_url('secure/settings/save_system_settings'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">              
            <ul class="form_fields_container">

                <li class="smtp"><label>Portal Name</label> 
                  <div class="form_input">
                    <input type="text" size="40" name="portal_name" value="<?=$this->config->item('portal_name','plus_hr');?>"/><br/><br/>
                  </div>          
                </li>

                <li class="smtp"><label>Webmaster Email</label> 
                  <div class="form_input">
                    <input type="email" required size="40" name="webmaster_email" value="<?=$this->config->item('webmaster_email','plus_hr');?>"/><br/><br/>
                  </div>          
                </li>


              </ul>
            <div class="action_bar text_center">
                 <input type="submit" class="button_small bluishBtn" value="Update Configuration" />
            </div>              
            </form>

            </div>
      </div>        
  </div>

  <div class="one_two_wrap fl_right">
      <div class="widget">
          <div class="widget_title"><span class="iconsweet">k</span><h5>Current Settings</h5></div>
            <div class="widget_body">
           
       



            </div>
      </div>        
  </div>


</div>
</section>
</div>
<?php $this->load->view('footer'); ?>
        

