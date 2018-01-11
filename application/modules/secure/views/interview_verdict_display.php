<?php $this->load->view('header'); ?>

<script src="<?=site_url('assets');?>/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">



<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca1").addClass("active");
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
<a class="button_big btn_grey" href="<?=site_url('secure/candidates/interview/'.$user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big" href="<?=site_url('secure/candidates/sendmail/'.$user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
	   <div class="widget">
         <div class="widget_title"><span class="iconsweet">è</span>
                <h5>Interview Verdict</h5>
         </div>
         <div class="widget_body">
			 <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
				<tr>
				  <th> Category</th>
				  <th> Score </th>
				</tr>  
				<tr>
			      <td>Attitude</td>
			      <td><?=$verdict_data->aptitude_rating;?></td>
				</tr>
			    <tr>
			      <td>Technical Skills</td>
			      <td><?=$verdict_data->technical_rating;?></td>
				</tr>
			    <tr>
			      <td>Verbal Ability</td>
			      <td><?=$verdict_data->verbal_rating;?></td>
				</tr>
			    <tr>
			      <td>Expected Pay</td>
			      <td><?=$verdict_data->expected_pay;?></td>
				</tr>
			    <tr>
			      <td>Current Pay</td>
			      <td><?=$verdict_data->current_pay;?></td>
				</tr>
			    <tr>
			      <td>Notice Period</td>
			      <td><?=$verdict_data->notice_period;?></td>
				</tr>
			    <tr>
			      <td>Summary</td>
			      <td><?=$verdict_data->summary;?></td>
				</tr>				           
			</table>  
             <div class="action_bar">
                     <div class="text_center">
                            <a class="button_small redishBtn" href="<?=site_url('secure/candidates/interview_edit/'.$user_id.'/'.$interview_id); ?>">Edit Details</a>    
                    </div>             	      	
            </div>			
         </div>	
       </div>   

</div>

</div>
</section>
</div>
<?php $this->load->view('footer'); ?>  
