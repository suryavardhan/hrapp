<?php $this->load->view('header'); ?>
<!--Confirm Dialogue-->
<script src="<?=site_url()?>assets/js/jquery.easy-confirm-dialog.js"></script>   
<!--Confirm Dialogue-->

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	$(".hc3").addClass("active");
	$(".ex2").addClass("active");

	$(".confirm").easyconfirm();
		
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
$data['pageMenu'] = 'pageMenu_exams';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	
 	
	 <div class="one_wrap">

    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Test Templates</h5></div>
            <div class="widget_body">
  <form action="<?=site_url('secure/managetest/bulkaction'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">            	
              <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
                <tr>
					<th></th>
				    <th>Exam ID</th>
				    <th>Identifier/Name</th>
				    <th>Description</th>
				    <th>Time</th>
				    <th>No. Assignments</th>
				    <th>Status</th>
				    <th>Actions</th>
				</tr>
                <?php foreach ($test_templates as $row): ?>		
				
				<tr>
					<td><input type="checkbox" name="exam_id[]" value="<?=$row->exam_id;?>"/></td>
				    <td><?=$row->exam_id;?></td>
				    <td><?=$row->exam_name;?></td>
				    <td><?=substr(strip_tags($row->description),0,20);?> ...</td>
				    <td><?=$row->total_time;?> Min</td>
				    <td><?=$row->assignCount;?></td>
				    <td>
                          <?php
                            if($row->status == 0):
                              $this->iface->icon('active.png');
                            else:
                              $this->iface->icon('sss.png');	
                            endif;
                          ?>
			    	</td>
			    	<td>
				    	<?php if($row->assignCount == 0): ?>		
				    	<a class="confirm" href="<?=site_url('secure/managetest/delete/'.$row->exam_id);?>" title="You want to Delete the user!"><?php $this->iface->icon('inactive.png');?></a>  				    	
				        <?php endif; ?>
				        <span class="iconsweet">
				        	<a  href="<?=site_url('secure/managetest/edit_template/'.$row->exam_id);?>">C</a>		
				        </span> 	
				    </td>		    
				</tr>
				<?php endforeach; ?>

              </table>  
		<div class="action_bar">


            <label> Bulk Action </label>
            <select name="bulk_action" class="select">
             <option value="status">Toggle Status</option>
            </select>
  

            <input type="submit" name="submit" value="Toggle Status" class="greenishBtn button_small"/>
        </form>
        </div>                      
            </div>	
        </div>

     </div>
</div>
</section>     
<?php $this->load->view('footer'); ?>