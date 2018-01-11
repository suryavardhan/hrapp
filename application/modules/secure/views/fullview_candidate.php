<?php $this->load->view('header'); 
$this->load->helper('date');
?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca").addClass("active");
	
	
//Ajax load city
	 $("#ans_mode").change( 
      function(){ 
	  $.ajax({
	  url: "<?=site_url();?>secure/ajax/load_answer_input",
	  type:'POST',
	  data: {ans_style:$('#ans_mode').val()},
	  success: function(html){
		$("#ajax_load_answering").html(html);
			
	  } });
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

<?php foreach($candidate as $row) { ?>

<div id="activity_stats">
            <div class="activity_column">
            	<span class="iconsweet">a</span> <span class="big_txt rd_txt"><?=$this->iface->getCandidatename($row->user_id);?></span>
            </div>
            <div class="activity_column">
            	<span class="iconsweet">Y</span> <span class="big_txt gr_txt"><?=$this->iface->pending_reviews($row->user_id);?></span>Reviews Left
            </div>                     
</div>    
<!-- Quick Action -->
<div id="quick_actions">
<a class="button_big btn_grey" href="<?=site_url('secure/candidates/expand/'.$row->user_id);?>"><span class="iconsweet">E</span> Show Details</a>
<a class="button_big" href="<?=site_url();?>/secure/candidates/assign_test/<?=$row->user_id;?>"><span class="iconsweet">r</span> Assign a test</a>
<a class="button_big" href="<?=site_url('secure/candidates/evaluationlist/'.$row->user_id);?>"><span class="iconsweet">=</span> Evaluate Tests</a>
<a class="button_big" href="<?=site_url('secure/candidates/interview/'.$row->user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big" href="<?=site_url('secure/candidates/sendmail/'.$row->user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
<a class="button_big" href="<?=site_url('secure/candidates/messages/'.$row->user_id);?>"><span class="iconsweet">#</span> Messages</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>	
 
<?php if($row->status == 2): ?>
	<div class="msgbar msg_Alert hide_onC">
      <span class="iconsweet">!</span><p> This candidate is in Rejected List.</p>
    </div>
<?php endif; ?>
<?php if($row->status == 1): ?>
	<div class="msgbar msg_Info hide_onC">
      <span class="iconsweet">i</span><p> This candidate is hired.</p>
    </div>
<?php endif; ?>

<div class="widgets_wrap">

 <!--One_Three-->
    <div class="one_two_wrap fl_left">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">r</span>
                <h5>Assigned Exams</h5>
            </div>
            <div class="widget_body">
             
              <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
				<tr>
				    <th>Test name</th>
				    <th>Progress</th>
				    <th>Resumed</th>
				    <th>Verdict</th>
				    <th><span class="iconsweet">X</span></th>
				</tr>
				<?php foreach($examhistory as $history): ?>
				<tr>
				    <td><?=$history->exam_name;?></td>
				    <td><?php 
					    switch($history->progress)
					    {
                          case '0':
                            echo '<span class="grey_highlight pj_cat">Not Started</span>';
                          break;
                          case '1':
                            echo '<span class="blue_highlight pj_cat">Started</span>';
                           break;
                          case '2':
                            echo '<span class="blue_highlight pj_cat">In Progress</span>';
                          break; 
                          case '3':
                            echo '<span class="green_highlight pj_cat">Finished</span>';
                          break;                                                    

					    }

				    ?></td>
				    <td><?php if($history->resumed_on): echo unix_to_human($history->resumed_on); else: echo 'NO'; endif;?></td>
				    <td><?=$history->verdict;?></td>
				    <td>
                    <?php //if($history->progress == 0): ?>
                        <a href="<?=site_url('secure/candidates/unassign_test/'.$history->assign_id.'/'.$row->user_id);?>"><span class="iconsweet">X</span></a> 
                    <?php //endif; ?>

				    </td>
				</tr>																				
				<?php endforeach; ?>
               </table>

            </div>
        </div>
    </div>
    <!--One_Three-->
    <div class="one_two_wrap fl_right">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">ñ</span>
                <h5>Candidate Details</h5>
            </div>
            <div class="widget_body">
             
             <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
	            <?php if($row->applied_for): ?>
				<tr>
				    <td width="10%">Applied for</td>
				    <td><?=$this->iface->getJobtitle($row->applied_for);?></td>	    
				</tr>
				<?php endif; ?>	            
				<tr>
				    <td width="10%">Refrence ID</td>
				    <td><?=$row->user_slug;?></td>	    
				</tr>				
				<tr>
				    <td>Name</td>
				    <td><?=$row->first_name;?> <?=$row->last_name;?></td>	    
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
				    <td><span class="iconsweet">O</span><a target="_blank" href="<?=site_url();?>/resumes/<?=$row->resumefile;?>">Download File</a></td>	    
				</tr>																		
				<?php } ?>
		      </table>

            </div>
        </div>
    </div>

<!--One_Three-->
    <div class="one_two_wrap fl_left">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">y</span>
                <h5>Login Details</h5>
            </div>
            <div class="widget_body">
			 <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
				<tr>
					 <th>Type</th>
					 <th>Date</th>
					 <th>IP</th>
				</tr>
				<tr>
					<td>Last Login</td>
					<td><?=$lastlogin->last_login;?></td>
					<td><?=$lastlogin->last_ip;?></td>
				</tr>
				<tr>
					<td>Registered On</td>
					<td><?=$lastlogin->created;?></td>
					<td>--</td>
				</tr>					
			</table>  
            </div>
        </div>
    </div> 

 
<div class="one_two_wrap fl_left">
        <!--Unordered List-->
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">}</span>
                <h5>Education Details</h5>
            </div>
            <div class="widget_body">
				<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">  	
						<tr>
						    <th>Qualification</th>
						    <th>Institute</th>
						    <th>Year</th>
						    <th>Score</th>
						</tr>
						<?php foreach($education as $edu): ?>
						<tr>
						    <td><?=$edu->type;?></td>
						    <td><?=$edu->institute;?></td>
						    <td><?=$edu->year;?></td>
						    <td><?=$edu->score;?>%</td>      
						</tr>																				
						<?php endforeach; ?>
				</table>
            </div>
        </div>
    </div>
<div class="one_two_wrap fl_right">
        <!--List Tick-->
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">}</span>
                <h5>Work Experience</h5>
            </div>
            <div class="widget_body">
            	<?php if($experience):?>
			        <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">      	
							<tr>
							    <th>Company</th>
							    <th>Role</th>
							    <th>Worked for</th>
							</tr>
							<?php foreach($experience as $exp) { ?>
							<tr>
							    <td><?=$exp->company_name;?></td>
							    <td><?=$exp->role;?></td>
							    <td><?=$exp->months;?> Mnts</td>   
							</tr>																				
							<?php } ?>
					</table>  		
				   <?php endif; ?>	 
            </div>
        </div>
    </div>


    </div>

 
 


</div>
</section>

<?php $this->load->view('footer'); ?>


