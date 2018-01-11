<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	$(".hc6").addClass("active");
  $(".se3").addClass("active");
	

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
          <div class="widget_title"><span class="iconsweet">y</span><h5>Add an Admin account</h5></div>
            <div class="widget_body">
      <form action="<?=site_url(); ?>secure/settings/newadmin" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">              
        <ul class="form_fields_container">
            <li><label>Username</label>
                  <div class="form_input">
                    <input type="text" size="40" name="username" value="<?php echo set_value('username'); ?>"/><br/><br/>
                    <?php echo form_error('username'); ?>
                  </div>          
            </li>
            <li><label>Email</label>
                  <div class="form_input">
                    <input type="text" size="40" name="email" value="<?php echo set_value('email'); ?>"/><br/><br/>
                    <?php echo form_error('email'); ?>
                  </div>             
            </li>
            <li><label>Password</label>
                  <div class="form_input">
                   <input type="text" size="40" name="password" value="<?php echo set_value('password'); ?>"/><br/><br/>
                  <?php echo form_error('password'); ?>
                  </div>          
            </li>
            <li><label>Confirm Password</label>
                  <div class="form_input">
                   <input type="text" size="40" name="confpassword" value="<?php echo set_value('confpassword'); ?>"/><br/><br/>
                  <?php echo form_error('confpassword'); ?>
                  </div>       
            </li>                                        
        </ul>
        <div class="action_bar text_center">
        <?php 
          echo form_submit('change', 'Add New Admin User','class="greenishBtn button_small"');
          form_close(); 
        ?>    
        </div>

       </div>
      </div>        
  </div>
  <!-- Admin Users -->
    <div class="one_two_wrap fl_right">
      <div class="widget">
          <div class="widget_title"><span class="iconsweet">a</span><h5>Admin Users</h5></div>
            <div class="widget_body">
                <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                 <tr>
                   <th>Username</th>
                   <th>Email</th>
                 </tr> 
                <?php  
                  foreach ($admin_users as $auser):
                ?>      
                <tr>
                    <td><?=$auser->username;?></td>
                    <td><?=$auser->email;?></td>
                </tr>
                <?php  endforeach; ?>                   
                </table>  

            </div> 
          </div> 
      </div>
   

</div>
</section>
</div>
<?php $this->load->view('footer'); ?>
        

