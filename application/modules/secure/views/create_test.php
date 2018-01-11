<?php $this->load->view('header'); ?>

<script src="<?=site_url('assets');?>/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE -->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	$(".hc3").addClass("active");
	$(".ex1").addClass("active");
	
        $('#addquest').live
	      ('click', function() {		  
			  var newItem = $('<tr><td><select name="category[]"><?php $query = $this->db->query("SELECT * FROM question_categories"); foreach ($query->result() as $row){ echo "<option>".$row->category."</option>"; } ?></select></td><td><select name="level[]"> <?php $query = $this->db->query("SELECT * FROM question_levels");foreach ($query->result() as $row){echo "<option>".$row->level."</option>"; } ?></select> </td><td><select name="answer_mod[]" id="ans_mode"> <option value="type">Type Answer</option> <option value="radio">Opt One</option><option value="check">Opt Mutiple</option></select> </div> </td><td><input type="text" name="nof_questions[]" id="nof_questions" size="3"/></td><td><a class="delete"><span class="iconsweet">-</span></a></td></tr>');		  
			  $("#tbquest tr:last").after(newItem); 
	      }
	    );    
	    $('#tbquest td .delete').live('click',function() { $(this).parent().parent().remove(); });	    		
	
	
	});


		$().ready(function() {		
			var opts = {
              styleWithCSS : false,
              height       : 180,
              toolbar      : 'compact'
			}
			$('#editor').elrte(opts);
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
$data['pageMenu'] = 'pageMenu_exams';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	
 	
	 <div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Add test template</h5></div>
            <div class="widget_body">
               <form action="<?=site_url(); ?>secure/managetest/add" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">            
	            <ul class="form_fields_container">
	            	<li><label>Template Name</label> 
	            		<div class="form_input">
                          <input type="text" name="test_name"  value="" /> 
						  <div id='myform_test_name_errorloc' class="error_strings"></div>
	            		</div>      		
	            	</li>
	            	<li><label>Time Frame</label> 
	            		<div class="form_input">
                            <input type="text" name="time"  value="" size="2" /> 
							<small> (In minutes only! Ex: 60 for 1 hour)</small>
                            <div id='myform_time_errorloc' class="error_strings">
	            		</div>      		
	            	</li>
	            	<li><label>Instructions</label> 
	            		<div class="form_input">
                           <textarea name="test_description" id="editor"></textarea>
	            		</div>      		
	            	</li>
	            	<li><label>Segments</label> 
	            		<div class="form_input">
                    <table id="tbquest" class="activity_datatable" width="80%" border="0" cellspacing="0" cellpadding="8">							
					<tr>
						<td>Category</td>
						<td>Skill Level</td>
						<td>Answering Mode</td>
						<td>Number of questions</td>
						<td width="5%"></td>
					</tr>            	
					<tr>
						
						<td>
							<select name="category[]">
                            <?php 
						    $query = $this->db->query("SELECT * FROM question_categories");	
							foreach ($query->result() as $row)
							 {
								 echo '<option>'.$row->category.'</option>';
							 }
							?>	
							</select>
							<div id='myform_url_errorloc' class="error_strings"></div>
						</td>
						
						<td>
							<select name="level[]">
                            <?php 
						    $query = $this->db->query("SELECT * FROM question_levels");	
							foreach ($query->result() as $row)
							 {
								 echo '<option>'.$row->level.'</option>';
							 }
							?>	
							</select>
							<div id='myform_url_errorloc' class="error_strings"></div>
						</td>
						
						<td>
							<select name="answer_mod[]" id="ans_mode">
								<option value="type">Type Answer</option>
								<option value="radio">Opt One</option>
								<option value="check">Opt Mutiple</option>
							</select>
							<div id='myform_url_errorloc' class="error_strings"></div>
						</td>
						
						<td>
							<input type="text" name="nof_questions[]" id="nof_questions" size="2"/>
							
						</td>
						<td>
							&nbsp;<a id="addquest"><span class="iconsweet">+</span></a></a>
						</td>						
					</tr>
				</table>
	            		</div>      		
	            	</li>	            		            	
	            </ul>
            <div class="action_bar">
                 <input type="submit" class="button_small bluishBtn" value="Add Test Template" />
            </div>							
			</form>
	    <script language="JavaScript" type="text/javascript" xml:space="preserve">
		 var frmvalidator  = new Validator("myform");
         frmvalidator.EnableOnPageErrorDisplay();
         frmvalidator.EnableMsgsTogether();
           
	     frmvalidator.addValidation("test_name","req", "Required!");	
	     frmvalidator.addValidation("time","req", "Required!");
	     frmvalidator.addValidation("time","numeric", "Numbers only!");		
        </script> 	


            </div>	
	   </div>


</div>
</section>	 
<?php $this->load->view('footer'); ?>