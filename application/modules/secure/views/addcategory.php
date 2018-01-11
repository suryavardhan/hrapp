<?php $this->load->view('header'); ?>
<script src="<?=site_url('assets');?>/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE -->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript">
	$(document).ready(function() { 
	  //Primary 
	  $(".hc2").addClass("active");
	  //Secondary
	  $(".qp3").addClass("active");
	});	

		$().ready(function() {
			var opts = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#editor').elrte(opts);
		})

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
        	<div class="widget_title"><span class="iconsweet">W</span><h5>Add Category</h5></div>
            <div class="widget_body">
            <form action="<?=site_url(); ?>secure/questionpool/newcategory" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">	
               <ul class="form_fields_container">
	            	<li><label>Category</label> 
	            		<div class="form_input">
                            <input type="text" size="40" name="category" class="input-text" />
							<div id='myform_category_errorloc' class="error_strings"></div>
	            		</div>      		
	            	</li>
	            	<li><label>Description/ Instructions </label> 
	            		<div class="form_input">
                            <textarea name="test_description" id="editor"></textarea>
	            		</div>      		
	            	</li>	            	
	           </ul>	
            <div class="action_bar">
                 <input type="submit" class="button_small bluishBtn" value="Add Category" />
            </div>
            </form>
            <script language="JavaScript" type="text/javascript" xml:space="preserve">
			 var frmvalidator  = new Validator("myform");
	         frmvalidator.EnableOnPageErrorDisplay();
	         frmvalidator.EnableMsgsTogether();
	           
		     frmvalidator.addValidation("category","req", "Required!");	 
            </script> 	

            </div>	
        </div>

	</div>
	<div class="one_two_wrap fl_right">
		    <div class="widget">
        	<div class="widget_title"><span class="iconsweet">|</span><h5>Existing Categories</h5></div>
            <div class="widget_body">		
             <!-- List of categories-->	
                <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                <?php  
				  $query = $this->db->query("SELECT * FROM question_categories");	
				  foreach ($query->result() as $row):
				?>			
				<tr>
				    <td><?=$row->category;?></td>
				</tr>
				<?php  endforeach; ?>                 	
                </table>	
            </div> 
           </div>
    </div>

</div>
</section>
<?php $this->load->view('footer'); ?>