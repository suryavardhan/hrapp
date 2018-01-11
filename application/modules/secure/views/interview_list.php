<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca1").addClass("active");
	   
	 $("#emailkeys").click( 
      function(){
        $('#ekeys').show();
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
<a class="button_big " href="<?=site_url('secure/candidates/evaluationlist/'.$user_id);?>"><span class="iconsweet">=</span> Evaluate Tests</a>
<a class="button_big btn_grey" href="<?=site_url('secure/candidates/interview/'.$user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big" href="<?=site_url('secure/candidates/sendmail/'.$user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
<a class="button_big" href="<?=site_url('secure/candidates/messages/'.$user_id);?>"><span class="iconsweet">#</span> Messages</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">è</span>
                <h5>Scheduled Interviews</h5>
            </div>
            <div class="widget_body">
            <div class="action_bar">
            	<a href="<?=site_url('secure/candidates/newInterviewschedule/'.$user_id);?>" class="greenishBtn button_small" style="margin:5px;">New Interview</a>
            </div>	
        
            <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
						<tr>
						    <th width="10%">Title</td>
						    <th width="10%">Date</td>
						    <th width="10%">Interviewer</td>   
						    <th width="10%">&darr;&uarr;&darr; Actions</td> 
						</tr>

		                <?php if($list_interviews == 'No Data'): ?>
                            <tr>
                            	<td colspan="4">
                                  <div class="msgbar msg_Alert hide_onC">
                                    <span class="iconsweet">!</span><p>No schedules found!</p>
                                  </div>	
                            	</td>
                            </tr>	
                        <?php else: ?>	
		                <?php foreach($list_interviews as $row): ?>			
						<tr>
						    <td><?=$row->title;?></td>	
						    <td><?=$row->scheduled_on;?></td>
						    <td><?=$row->interviewer;?></td>		 
						    <td width="10%">
						       <span class="data_actions iconsweet">
						       	<?php if($row->interview_status == 1): ?> 
						       	<a title="View verdict" href="<?=site_url('secure/candidates/showInterviewdetails/'.$user_id.'/'.$row->interview_id);?>">|</a>
						       	<a id="emailkeys" title="Mail interview verdict" href="<?=site_url('secure/candidates/interviewEmail/'.$user_id.'/'.$row->interview_id.'/Interview Verdict');?>" class="">@</a>	
				    	     	<?php else: ?>
				    	        <a title="Add verdict" href="<?=site_url('secure/candidates/addInterviewdetails/'.$user_id.'/'.$row->interview_id);?>" class="">+</a>		
				    	        <a title="Cancel" href="<?=site_url('secure/candidates/cancelInterview/'.$user_id.'/'.$row->interview_id);?>" class="confirm">X</a>
                                <a id="emailkeys" title="Mail interview schedule" href="<?=site_url('secure/candidates/interviewEmail/'.$user_id.'/'.$row->interview_id.'/Interview call letter -');?>" class="">@</a>				    	        
				    	        <?php endif; ?>
				    	        </span>	  				    	
             
						    </td>     
						</tr>										
					<?php 
					   endforeach; 
					   endif;
					?>

				</table>


            </div>
        </div>    	
</div>


</div>
</section>
</div>
<?php $this->load->view('footer'); ?>