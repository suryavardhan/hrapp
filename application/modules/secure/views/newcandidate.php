<?php $this->load->view('header'); ?>

<script type="text/javascript">
	$(document).ready(function() {  
	jQuery(".hc4").attr("id","menu-active");
	});	
</script>
	

         <?php $this->load->library('tankracl'); ?>
         

	
	
			<fieldset>
				<legend>New Candidate</legend>
				
             <form action="<?=site_url(); ?>secure/candidates/newcandidate" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
	            <table class="nostyle">
					<tr>
						<td style="width:90px;">Email</td>
						<td><input type="text" size="40" name="email" class="input-text" /><div id='myform_category_errorloc' class="error_strings"></div></td>
					</tr>
					<tr>
						<td style="width:90px;">Password</td>
						<td><input type="text" size="40" name="password" class="input-text" />
							<div id='myform_category_errorloc' class="error_strings"></div>
					    </td>
					</tr>																																																																
					<tr>
						<td colspan="2" class="t-right"><input type="submit" class="input-submit" value="Add" /></td>
					</tr>
				</table>					
