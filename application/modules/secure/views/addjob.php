<?php $this->load->view('header'); ?>

<!-- elRTE -->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript">
	$(document).ready(function() { 
	//Top menu active state	 
	$(".hc5").addClass("active");
	$(".pj1").addClass("active");

//Elrte
          var opts = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#responsibilities').elrte(opts);	
          var opts2 = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#skillset').elrte(opts2);	
			

/* elRte validation */
			$('#myform').submit(function(e) {

			  var text = $('#responsibilities').elrte('val');
			  if (!text) {
			    e.preventDefault();
			    alert('Responsibilities is required!');
			  }

			  var text2 = $('#skillset').elrte('val');
			  if (!text2) {
			    e.preventDefault();
			    alert('Skillset is required!');
			  }

			})


	
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
$data['pageMenu'] = 'pageMenu_jobs';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	
 	
 <div class="one_wrap">
 	
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Post A New Job</h5></div>
            <div class="widget_body">

          <form action="<?=site_url('secure/job/newjob'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
	            <ul class="form_fields_container">
	            	<li><label>Job Title</label> 
	            		<div class="form_input">
	            			<input type="text" size="40" name="title" class="input-text" />
	            			<div id='myform_title_errorloc' class="error_strings"></div>
	            		</div>
	            		
	            	</li>
					<li>
						<label>Introduction</label> 
						<div class="form_input">
							<textarea name="jobintro" id="jobintro" size="45"></textarea>
							<div id='myform_jobintro_errorloc' class="error_strings"></div>
                        </div>				
					</li>	            	
					<li>
						<label>Responsibilities</label> 
						<div class="form_input">
							<textarea name="responsibilities" id="responsibilities" size="45"></textarea>
                        </div>				
					</li>
					<li>
						<label>Skill Set</label> 
						<div class="form_input">
							<textarea name="skillset" id="skillset" class="input-text" size="45"></textarea>
                        </div>
										
					</li>																																																														
				</ul>
                <div class="action_bar">
                 <input type="submit" class="button_small bluishBtn" value="Post Job" />
                </div>							
			</form>
		<script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[
		 var frmvalidator  = new Validator("myform");
         frmvalidator.EnableOnPageErrorDisplay();
         frmvalidator.EnableMsgsTogether();          
	     frmvalidator.addValidation("title","req","Required!");
	     frmvalidator.addValidation("responsibilities","req", "Required!");
	     frmvalidator.addValidation("skillset","req","Required!");
	     frmvalidator.addValidation("jobintro","req","Required!");          
        </script> 

      </div>
    </div>	

</div>	
</section>
<?php $this->load->view('footer'); ?>