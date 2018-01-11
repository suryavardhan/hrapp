<?php $this->load->view('header'); ?>
<script src="<?=site_url()?>assets/js/jquery.easy-confirm-dialog.js"></script>   

<script type="text/javascript">
	$(document).ready(function() {  	
	
	   $(".hc4").addClass("active");
	   $(".ca1").addClass("active");
	   $(".confirm").easyconfirm();	
	
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
<a class="button_big btn_grey" href="<?=site_url();?>/secure/candidates/assign_test/<?=$user_id;?>"><span class="iconsweet">r</span> Assign a test</a>
<a class="button_big" href="<?=site_url('secure/candidates/evaluationlist/'.$user_id);?>"><span class="iconsweet">=</span> Evaluate Tests</a>
<a class="button_big" href="<?=site_url('secure/candidates/interview/'.$user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big" href="<?=site_url('secure/candidates/sendmail/'.$user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
<a class="button_big" href="<?=site_url('secure/candidates/messages/'.$user_id);?>"><span class="iconsweet">#</span> Messages</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
	
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">r</span>
                <h5>Assign Test</h5>
            </div>
            <div class="widget_body">
             <form action="<?=site_url(); ?>secure/candidates/assign_test_save" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
              <ul class="form_fields_container">
	            	<li><label>User ID</label>
	            		<div class="form_input">
                         <input type="text" name="user_id" value="<?=$user_id;?>" readonly="readonly"  style="width: 240px;"/>
	            		</div>      		
	            	</li>
	            	<li><label>Test template</label>
	            		<div class="form_input">
						 <select name="exam_template_id" style="padding:5px; width: 250px;">
							<?php foreach ($test_templates as $row) {?>
								 <option value="<?=$row->exam_id;?>"><?=$row->exam_name;?></option>	
							<?php } ?>		 	
						 </select>
	            		</div>      		
	            	</li>           		            	
	          </ul>  	
            <div class="action_bar">
                 <input type="submit" class="button_small bluishBtn" value="Assign Test" />
            </div>	
            </form>
            </div>
         </div>   	
</div>




</div>
</section>
</div>
<?php $this->load->view('footer'); ?>
