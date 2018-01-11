<?php $this->load->view('header'); ?>

<script type="text/javascript">
	$(document).ready(function() {  
	$(".hc2").addClass("active");
	$(".qp4").addClass("active");

	});	
</script>

<!--Dreamworks Container-->
<div id="dreamworks_container">

<!--Primary Navigation-->
<?php $this->load->view('primary_navigation'); ?>

<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->

<?php 
//If there is no subnav leave $pageMenu null
$data['pageMenu'] = 'pageMenu_questionpool';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	

<div class="one_two_wrap fl_left">
    <!-- Adding form-->
	   <!-- Form goes here -->
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">l</span><h5>Add Level</h5></div>
            <div class="widget_body">
            <form autocomplete="off" id="myform" name="myform" enctype="multipart/form-data" method="post" action="<?=site_url('secure/questionpool/newlevel');?>">
               <ul class="form_fields_container">
	            	<li><label>Level</label> 
	            		<div class="form_input">
                            <input type="text" size="40" name="level" class="input-text" />
							<div id='myform_category_errorloc' class="error_strings"></div>
	            		</div>      		
	            	</li>
                </ul>
            <div class="action_bar">
                 <input type="submit" class="button_small bluishBtn" value="Add Level" />
            </div> 
			</form>
		    <script language="JavaScript" type="text/javascript" xml:space="preserve">
			 var frmvalidator  = new Validator("myform");
	         frmvalidator.EnableOnPageErrorDisplay();
	         frmvalidator.EnableMsgsTogether();
	           
		     frmvalidator.addValidation("level","req", "Required!");	 
            </script> 	                           

            </div>
        </div>     	

</div>
<div class="one_two_wrap fl_right">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">|</span><h5>Existing Levels</h5></div>
            <div class="widget_body">
               <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
              <?php 
				  $query = $this->db->query("SELECT * FROM question_levels");	
				  foreach ($query->result() as $row):
				?>					
				<tr>
				    <td><?=$row->level;?></td>
				</tr>
				<?php  endforeach; ?> 
               </table>

            </div>
        </div>   
</div>


</div>
</section>
<?php $this->load->view('footer'); ?>


