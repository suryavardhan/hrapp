<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	$(".hc6").addClass("active");
  $(".se2").addClass("active");
	

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
          <div class="widget_title"><span class="iconsweet">y</span><h5>Change My Password</h5></div>
            <div class="widget_body">

        <?php
        $old_password = array(
          'name'  => 'old_password',
          'id'  => 'old_password',
          'value' => set_value('old_password'),
          'size'  => 30,
        );
        $new_password = array(
          'name'  => 'new_password',
          'id'  => 'new_password',
          'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
          'size'  => 30,
        );
        $confirm_new_password = array(
          'name'  => 'confirm_new_password',
          'id'  => 'confirm_new_password',
          'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
          'size'  => 30,
        );
        ?>
        <?php echo form_open('secure/settings/change_password'); ?>
        <ul class="form_fields_container">
            <li><?php echo form_label('Old Password', $old_password['id']); ?>
                  <div class="form_input">
                    <?php echo form_password($old_password); ?><br/><br/>
                    <?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?>
                  </div>          
            </li>
            <li><?php echo form_label('New Password', $new_password['id']); ?>
                  <div class="form_input">
                    <?php echo form_password($new_password); ?><br/><br/>
                    <?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
                  </div>          
            </li>
            <li><?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?>
                  <div class="form_input">
                    <?php echo form_password($confirm_new_password); ?><br/><br/>
                   <?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
                  </div>          
            </li>                          
        </ul>
        <div class="action_bar text_center">
        <?php 
          echo form_submit('change', 'Change Password','class="redishBtn button_small"');
          form_close(); 
        ?>    
        </div>

       </div>
      </div>        
  </div>

</div>
</section>
</div>
<?php $this->load->view('footer'); ?>
        

