<?php $this->load->view('header'); ?>

<!-- elRTE -->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca1").addClass("active");
});

			$().ready(function() {
			var opts = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#editor').elrte(opts);
		})

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
<a class="button_big " href="<?=site_url();?>/secure/candidates/assign_test/<?=$user_id;?>"><span class="iconsweet">r</span> Assign a test</a>
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
 <form action="<?=site_url('secure/candidates/update_interview'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
	<input type="hidden" name="user_id" value="<?=$user_id;?>"/>
	<input type="hidden" name="interview_id" value="<?=$interview_id;?>"/>
              <ul class="form_fields_container">
	            	<li><label>Attitude</label>
	            		<div class="form_input">
					      <select name="aptitude_rating">
					       <option>Poor</option>
					       <option>Average</option>
					       <option>Good</option>
					       <option>Excellent</option>
					      </select>
					      &nbsp;-&nbsp;
					      <?=$verdict_data->aptitude_rating;?>
	            		</div> 
	            	</li>
	            	<li><label>Technical Skills</label>
	            		<div class="form_input">
				          <select name="technical_rating">
					       <option>Poor</option>
					       <option>Average</option>
					       <option>Good</option>
					       <option>Excellent</option>
					      </select>
					      &nbsp;-&nbsp;
					      <?=$verdict_data->technical_rating;?>
	            		</div>      		
	            	</li>
	            	<li><label>Verbal Ability</label>
	            		<div class="form_input">
					      <select name="verbal_ability">
					       <option>Poor</option>
					       <option>Average</option>
					       <option>Good</option>
					       <option>Excellent</option>
					      </select>
					      &nbsp;-&nbsp;
					      <?=$verdict_data->verbal_rating;?>
	            		</div>      		
	            	</li>
	            	<li><label>Expected Pay</label>
	            		<div class="form_input">
                          <input type="text" name="expected_pay" value="<?=$verdict_data->expected_pay;?>"/>
	            		</div>      		
	            	</li>
	            	<li><label>Current Pay</label>
	            		<div class="form_input">
                          <input type="text" name="current_pay" value="<?=$verdict_data->current_pay;?>"/>
	            		</div>      		
	            	</li>
	            	<li><label>Notice Period</label>
	            		<div class="form_input">
                          <input type="text" name="notice_period" value="<?=$verdict_data->notice_period;?>"/>
	            		</div>      		
	            	</li>
	            	<li><label>Summary</label>
	            		<div class="form_input">
                          <textarea name="summary" id="editor"><?=$verdict_data->summary;?></textarea>
	            		</div>      		
	            	</li>		            		            		            		            	
              </ul>
            <div class="action_bar text_center">
                 <input type="submit" class="button_small bluishBtn" value="Update" />
            </div>	
            </form>
            </div>
        </div>	
</div>

</div>
</section>
</div>	
<?php $this->load->view('footer'); ?>   