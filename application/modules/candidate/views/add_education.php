<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".cp1").addClass("active");
	   $(".md2").addClass("active");
	
       $('#addCert').live
	      ('click', function() {		  
			  var newItem = $('<tr><td align="right">Title</td><td colspan="2"><input type="text" name="ot_college[]"/></td><td align="right">Year of passing</td><td><input type="text" name="ot_passing[]" size="5"/></td><td align="right">Score in %</td><td><input type="text" name="ot_score[]" size="5"/></td><td><a class="delete"><span class="iconsweet">-</span></a></td></tr>');		  
			  $("#tbCert tr:last").after(newItem); 
	      }
	    );    
	    $('#tbCert td .delete').live('click',function() { $(this).parent().parent().remove(); });	    	
	
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
$data['pageMenu'] = 'pageMenu_profile';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	

	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">?</span><h5>Other Certifications</h5></div>
            <div class="widget_body">
            	<form action="<?=site_url(); ?>candidate/appendeducation" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">        
	            <ul class="form_fields_container">
	            	<li>
						<table class="activity_datatable" width="80%" border="0" cellspacing="0" cellpadding="8" id="tbCert">
						  <tr>
						    <td  align="right">Title</td>
						    <td colspan="2"><input type="text" name="ot_college[]"/></td>
						    <td  align="right">Year of passing</td>
						    <td><input type="text" name="ot_passing[]" size="5"/></td>
						    <td  align="right">Score in %</td>
						    <td><input type="text" name="ot_score[]" size="5"/></td>
						    <td><a id="addCert"><span class="iconsweet">+</span></a></td>
						  </tr> 
						</table>             	   		
	            	</li>
	            </ul>
	            <div class="action_bar text_center">
                   <input type="submit" class="button_small bluishBtn" value="Save" />
	            </div>	

	        </form>

            </div>
        </div>
    </div>        	



</div>
</section>
</div>


<?php $this->load->view('footer'); ?>
