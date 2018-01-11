<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	$(".hc6").addClass("active");
  $(".se1").addClass("active");
	
	$("#sendmail").click( 
      function(){ 
         $('.smtp').hide();      
      });

	$("#smtp").click( 
      function(){ 
         $('.smtp').show();      
      });


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
          <div class="widget_title"><span class="iconsweet">k</span><h5>Change Settings <?=$this->config->item('portal_name','plus_hr');?></h5></div>
            <div class="widget_body">
           <form action="<?=site_url('secure/settings/saveEmailconf'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">              
            <ul class="form_fields_container">
                <li><label>Protocol</label> 
                  <div class="form_input">
                    <?php
                    $this->config->load('email', TRUE);
                    $protocol = $this->config->item('protocol','email');
                      ?>
                    Sendmail <input type="radio" id="sendmail" value="sendmail" name="protocol"/> 
                    SMTP <input type="radio" id="smtp" value="smtp" name="protocol" checked="checked"/>
                  </div>          
                </li>
                <li class="smtp"><label>SMTP Host</label> 
                  <div class="form_input">
                    <input type="text" size="40" name="smtp_host" value=""/><br/><br/>
                  </div>          
                </li>
                <li class="smtp"><label>SMTP Port</label> 
                  <div class="form_input">
                    <input type="text" size="40" name="smtp_port" value=""/><br/><br/>
                  </div>          
                </li>
                <li class="smtp"><label>SMTP User</label> 
                  <div class="form_input">
                    <input type="text" size="40" name="smtp_user" value=""/><br/><br/>
                  </div>          
                </li>
                <li class="smtp"><label>SMTP Pass</label> 
                  <div class="form_input">
                    <input type="text" size="40" name="smtp_pass" value=""/><br/><br/>
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
           
          <?php
              $this->config->load('email', TRUE);
              $protocol = $this->config->item('protocol','email');
          ?>
         <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
          <?php if($protocol == 'smtp'): ?>      
           <tr><td>SMTP Host</td><td><?=$this->config->item('smtp_host','email');?></td></tr>       
           <tr><td>SMTP Port</td><td><?=$this->config->item('smtp_port','email');?></td></tr> 
           <tr><td>SMTP User</td><td><?=$this->config->item('smtp_user','email');?></td></tr> 
           <tr><td>SMTP pass</td><td><?=$this->config->item('smtp_pass','email');?></td></tr> 
          <tr/> 

         <?php else: ?>
           <tr><td><?=$protocol;?></td></tr>
         <?php endif; ?>
         </table>



            </div>
      </div>        
  </div>


</div>
</section>
</div>
<?php $this->load->view('footer'); ?>
        

