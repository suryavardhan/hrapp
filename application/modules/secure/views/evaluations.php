<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca1").addClass("active");
	
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
<a class="button_big btn_grey" href="<?=site_url('secure/candidates/evaluationlist/'.$user_id);?>"><span class="iconsweet">=</span> Evaluate Tests</a>
<a class="button_big" href="<?=site_url('secure/candidates/interview/'.$user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big" href="<?=site_url('secure/candidates/sendmail/'.$user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
<a class="button_big" href="<?=site_url('secure/candidates/messages/'.$user_id);?>"><span class="iconsweet">#</span> Messages</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">=</span>
                <h5>Tests to evaluate</h5>
            </div>
            <div class="widget_body">
        
            <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
						<tr>
						    <th width="10%">User ID </td>
						    <th width="10%">Exam Template</td> 
						    <th width="10%">&darr;&uarr;&darr; Verdict</td> 
						</tr>	
		           <?php foreach($exams_to_evaluate as $row): ?>			
						<tr>
						    <td><?=$user_id;?></td>	
						    <td><?=$row->exam_name;?></td>	 
						    <td width="10%">
		                     <?php 
		                      if($row->verdict != ''): 
		                      ?>
		                     <a href="<?=site_url('secure/candidates/evaluate/'.$user_id.'/'.$row->assign_id);?>"><span class="green_highlight pj_cat"><?=$row->verdict;?></span></a>
		                     <?php else: ?>
						    	<a class="whitishBtn button_small" style="margin:5px;" href="<?=site_url('secure/candidates/evaluate/'.$user_id.'/'.$row->assign_id);?>">Evaluate</a>
						     <?php endif; ?>
						    </td>     
						</tr>												
					<?php endforeach; ?>
				</table>


            </div>
        </div>    	
</div>


</div>
</section>
</div>
<?php $this->load->view('footer'); ?>