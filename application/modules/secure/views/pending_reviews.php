<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca3").addClass("active");
	
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
<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">r</span>
                <h5>Pending Tests to evaluate</h5>
            </div>
            <div class="widget_body">
        
            <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
						<tr>
							<th>User ID </td>
						    <th>Name</td>
						    <th>Exam Template</td>
						    <th>Date of attempt</td>  
						    <th width="10%">&darr;&uarr;&darr; Action</td> 
						</tr>	
		           <?php foreach($pendingReviews as $row): ?>			
						<tr>
						    <td><a href="<?=site_url('secure/candidates/expand/'.$row->user_id);?>"><?=$row->user_id;?></a></td>
						    <td><a href="<?=site_url('secure/candidates/expand/'.$row->user_id);?>"><?=$row->first_name;?>&nbsp;<?=$row->last_name;?></a></td>		
						    <td><?=$row->exam_name;?></td>
						    <td><?=$row->date_attempt;?></td>		 
						    <td width="10%">
						     <a class="whitishBtn button_small" style="margin:5px;" href="<?=site_url('secure/candidates/evaluate/'.$row->user_id.'/'.$row->assign_id);?>">Evaluate</a>
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