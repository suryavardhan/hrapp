<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".cp1").addClass("active");
	   $(".md1").addClass("active");
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

	<div class="one_two_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">?</span><h5>Basic Details</h5></div>
            <div class="widget_body">

             <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="5">
				<?php foreach($candidate as $row) { ?>
				<tr>
				    <td width="25%">Reference ID</td>
				    <td><?=$row->user_slug;?></td>	    
				</tr>				
				<tr>
				    <td>Name</td>
				    <td style="text-transform:capitalize;"><?=$row->first_name;?> <?=$row->last_name;?></td>	    
				</tr>
				<tr>
				    <td>Email</td>
				    <td><?=$row->email;?></td>	    
				</tr>
				<tr>
					<td>Mobile</td>
				    <td><?=$row->mobile;?></td>	    
				</tr>
				<tr>
					<td>Landphone</td>
				    <td><?=$row->landline;?></td>	    
				</tr>								
				<tr>
					<td>Address</td>
				    <td><?=$row->address;?><br/><?=$row->city;?><br/><?=$row->pin;?></td>	    
				</tr>				
				<tr>
					<td>Resume</td>
				    <td>
				    	<span class="iconsweet">O</span>
				    	<a target="_blank" href="<?=site_url();?>/resumes/<?=$row->resumefile;?>">Download File</a>
				    </td>	    
				</tr>																		
				<?php } ?>
		</table>

            </div>	
	    </div>
	</div>
	
	<div class="one_two_wrap fl_right">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">'</span><h5>Education Details</h5></div>
            <div class="widget_body">
		        <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
						<?php foreach($education as $edu) { ?>
						<tr>
						    <td><?=$edu->type;?></td>
						    <td><?=$edu->institute;?></td>
						    <td><?=$edu->year;?></td>
						    <td><?=$edu->score;?>%</td>      
						</tr>																				
						<?php } ?>
				</table>
            </div>	
	    </div>
	</div>  

	<div class="one_two_wrap fl_right">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">,</span><h5>Experience Details</h5></div>
            <div class="widget_body">
				<?php if($experience):?>
		        <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
						<tr>
						    <th>Company</th>
						    <th>Role</th>
						    <th>Worked form</th>
						</tr>
						<?php foreach($experience as $exp) { ?>
						<tr>
						    <td><?=$exp->company_name;?></td>
						    <td><?=$exp->role;?></td>
						    <td><?=$exp->months;?> Months</td>   
						</tr>																				
						<?php } ?>
				</table>  		
			   <?php endif; ?>	
            </div>	
	    </div>
	</div>  
		
</div>
</section>
</div>  
<?php $this->load->view('footer'); ?>