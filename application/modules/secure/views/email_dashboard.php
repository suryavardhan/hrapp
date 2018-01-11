<?php $this->load->view('header'); ?>


<!-- elRTE-->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<!--Confirm Dialogue-->

<script type="text/javascript">
//Highlight menu   
$(document).ready(function() {  
	$(".hc4").addClass("active");
	$(".ca2").addClass("active");
});

</script>

<script src="<?=site_url()?>assets/js/jquery.easy-confirm-dialog.js"></script>   
<script>
$(function() {
	$(".confirm").easyconfirm();		
});	
</script>

<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">
<script>
$().ready(function() {
			var opts = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#editor').elrte(opts);

$('#myform').submit(function(e) {
  var text = $('#editor').elrte('val');
  if (!text) {
    e.preventDefault();
    alert('Mail body is required!')
  }
})
});	
</script>



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

<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
	   <div class="widget">
         <div class="widget_title"><span class="iconsweet">@</span>
                <h5>New Email Template</h5>
         </div>
         <div class="widget_body">
         	<form action="<?=site_url('secure/candidates/newtemplate'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
             <ul class="form_fields_container">
	            	<li><label>Title</label> 
	            		<div class="form_input">
                           <input type="text" name="title" size="60"/>
	            		</div>      		
	            	</li>
	            	<li><label>Mail Body</label> 
	            		<div class="form_input">
                          <textarea name="mail_body" id="editor"></textarea>
	            		</div>      		
	            	</li>	            	
              </ul>
              <div class="action_bar text_center">
              	<input type="submit" class="button_small bluishBtn" value="Save Template" />
              </div>
              </form>
			<script language="JavaScript" type="text/javascript" xml:space="preserve">
					 var frmvalidator  = new Validator("myform");
				     frmvalidator.addValidation("title","req", "Title is Required!");	 
			</script> 	              	
         </div>
       </div> 
</div>
<div class="one_wrap">
	   <div class="widget">
         <div class="widget_title"><span class="iconsweet">|</span>
                <h5>Email Templates</h5>
         </div>
         <div class="widget_body">
         <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
			<tr>
				<th>Available Templates</th>
				<th>Actions</th>
			</tr> 
			<?php
		    foreach($mail_templates AS $template)
		    {
			?>
		    <tr> 
		      <td><?=$template->template_title;?></td>
		      <td><a class="confirm" href="<?=site_url('secure/candidates/delete_emailtemplate/'.$template->et_id);?>" title="You want to Delete this template?"><?php $this->iface->icon('sss.png');?></a></td>
		    </tr>
			<?php 
			}
			?>           
		</table>	
         </div>
       </div> 
</div>	



</div>
</section>
</div>         	


<?php $this->load->view('footer'); ?>       