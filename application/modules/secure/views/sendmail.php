<?php $this->load->view('header'); ?>

	<!-- elRTE -->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">
<script src="<?=site_url();?>assets/js/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script> 

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca1").addClass("active");
     
     /*------Elrete section---------*/
      var opts = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#editor').elrte(opts);

			/* elRte validation */
			$('#myform').submit(function(e) {
			  var text = $('#editor').elrte('val');
			  if (!text) {
			    e.preventDefault();
			    alert('Mail body is required!');
			  }
			})
      /*------Ajax Section---------*/
      $("#email_templates").change( 
         function(){ 

         	var email_templates = $('#email_templates').val();
         	if(email_templates != 'none')
              {
      	        
              //Ajax load template value to elRte
                $.ajax({
			     url: "<?=site_url();?>secure/candidates/getEmailtemplatedata",
			     type:'POST',
			     data: { et_id: email_templates, user_id:$('#user_id').val(), interview_id:$('#interview_id').val()  },
			     success: function(data){
				     $('#editor').elrte('val', data);			     
			     } 
			     });              

              }

         });


	});

</script>
<script type="text/javascript" src="<?=site_url();?>assets/js/loaderanim.js"></script>
<!--Dreamworks Container-->
<div id="dreamworks_container">

<!--Primary Navigation-->
<?php $this->load->view('primary_navigation'); ?>

<!--Main Content-->
<section id="main_content" style="">
<!--Secondary Navigation-->

<?php 
//If there is no subnav leave $pageMenu null
$data['pageMenu'] = 'pageMenu_candidates';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<div id="activity_stats">
   <div class="activity_column">
       <span class="iconsweet">a</span> <span class="big_txt rd_txt"><?=$this->iface->getCandidatename($user_id);?></span>
   </div>
   <div class="activity_column">
       <span class="iconsweet">Y</span> <span class="big_txt gr_txt"><?=$this->iface->pending_reviews($user_id);?></span>Reviews Left
   </div>                     
</div>  	
<!-- Quick Action -->
<div id="quick_actions">
<a class="button_big" href="<?=site_url('secure/candidates/expand/'.$user_id);?>"><span class="iconsweet">E</span> Show Details</a>
<a class="button_big" href="<?=site_url();?>/secure/candidates/assign_test/<?=$user_id;?>"><span class="iconsweet">r</span> Assign a test</a>
<a class="button_big" href="<?=site_url('secure/candidates/evaluationlist/'.$user_id);?>"><span class="iconsweet">=</span> Evaluate Tests</a>
<a class="button_big" href="<?=site_url('secure/candidates/interview/'.$user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big btn_grey" href="<?=site_url('secure/candidates/sendmail/'.$user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
<a class="button_big" href="<?=site_url('secure/candidates/messages/'.$user_id);?>"><span class="iconsweet">#</span> Messages</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
	   <div class="widget">
         <div class="widget_title"><span class="iconsweet">@</span>
                <h5>Compose mail</h5>
         </div>
         <div class="widget_body">
          <form action="<?=site_url('secure/candidates/sendEmail'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
            <input type="hidden" id="user_id" name="user_id" value="<?=$user_id;?>"/>
            <input type="hidden" id="interview_id" name="interview_id" value="<?=$interview_id;?>"/>
            <ul class="form_fields_container">
	            	<li><label>Email</label>
	            		<div class="form_input">
                           <input type="text" name="email" size="60" value="<?=$email_id;?>" readonly="readonly"/>
	            		</div>      		
	            	</li>
	            	<li><label>Subject</label>
	            		<div class="form_input">
                           <input type="text" name="subject" size="60" value="<?=str_replace('%20',' ',$emailSubject);?>"/>
	            		</div>      		
	            	</li>
	            	<li><label>Select template</label>
	            		<div class="form_input">
					         <select name="email_templates" id="email_templates">
					         	<option value="none">--Select--</option>
					         	<?php foreach($email_templates AS $template) { ?>
					               <option value="<?=$template->et_id;?>"><?=$template->template_title;?></option>
					         	<?php } ?>
					         </select>
	            		</div>      		
	            	</li>
	            	<li><label>Message</label>
	            		<div class="form_input">
                           <textarea name="mail_body" id="editor"></textarea>
	            		</div>      		
	            	</li>
	            	<li><label>Attach files</label>
	            		<div class="form_input">
                           <input type="file" size="40" name="userfile[]"  class="multi input-text" accept="gif|jpg|png|bmp|doc|docx|rtf|odt|pdf" maxlength="5" />
	            		</div>      		
	            	</li>
	            	
            <div class="action_bar text_center">
                 <input type="submit" class="button_small bluishBtn" value="Send Mail" />
            </div>	            			            		            		            	
	        </ul>    	
		   



		   </form>
		    <script language="JavaScript" type="text/javascript" xml:space="preserve">
					 var frmvalidator  = new Validator("myform");
				     frmvalidator.addValidation("subject","req", "Subject is Required!");	 
		   </script> 
         </div>
       </div>  	
</div>



</div>
</section>
</div>
<?php $this->load->view('footer'); ?>

