<?php $this->load->view('header'); ?>

<script type="text/javascript">
	$(document).ready(function() {  	
	  //Primary 
	  $(".hc2").addClass("active");
	  //Secondary
	  $(".qp5").addClass("active");
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
$data['pageMenu'] = 'pageMenu_questionpool';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	

	<div class="one_two_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">Z</span><h5>Answertype wise</h5></div>
            <div class="widget_body">
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
				<tr>
				    <th>Answering Type</th>
				    <th>Category</th>
				    <th>Count of Questions</th>
				</tr>
                <?php foreach ($countbyType as $row): ?>						
				<tr>
				    <td><?=$row->answer_type;?></td>
				    <td><?=$row->category;?></td>
				    <td><?=$row->countque;?></td>			    
				</tr>
				<?php endforeach; ?>
            	</table>	
            </div>
        </div>
     </div> 

	<div class="one_two_wrap fl_right">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">Z</span><h5>Category Wise</h5></div>
            <div class="widget_body">
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
				<tr>
				    <th>Category</th>
				    <th>Count of Questions</th>
				</tr>
                <?php  foreach ($countbyCategory as $row):?>						
				<tr>
				    <td><?=$row->category;?></td>
				    <td><?=$row->countque;?></td>			    
				</tr>
				<?php endforeach; ?>
            	</table>	
            </div>
        </div>
     </div>            
            	
</div>
</section>
<?php $this->load->view('footer'); ?>

