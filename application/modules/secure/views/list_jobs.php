<?php $this->load->view('header'); ?>
<script src="<?=site_url()?>assets/js/jquery.easy-confirm-dialog.js"></script>   

<script type="text/javascript">
	$(document).ready(function() {  	
	
	   $(".hc5").addClass("active");
	   $(".pj2").addClass("active");
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
$data['pageMenu'] = 'pageMenu_jobs';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	
<div class="one_wrap">
<!-- cONTENTS goes here -->

    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">f</span><h5>List of jobs</h5></div>
            <div class="widget_body">


<form action="<?=site_url(); ?>secure/job/bulkaction" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">         
         
         <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
				<tr>
                    <th></th>
				    <th>Job ID</th>
				    <th>Title</th>
				    <th>Status</th>
				    <th>Actions</th>
				</tr>
                <?php 
                    $l = 1; 
					foreach ($jobs as $row)
					 {
				?>		
				
				<tr>
					<td>
                     <input type="checkbox" id="check1" name="job_id[]">
					</td>
				    <td><?=$row->job_id;?></td>
				    <td><?=$row->job_title;?></td>
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
                        <span class="data_actions iconsweet">
                            <a  href="<?=site_url('secure/job/edit/'.$row->job_id);?>">C</a> 						
                            <a class="confirm" title="You want to Delete the job!" original-title="Delete" href="<?=site_url();?>secure/job/delete/<?=$row->job_id;?>">X</a>
                        </span>				    	
				    </td>				    
				</tr>
				<?php } ?>
		</table>
		<div class="action_bar">


            <label> Bulk Action </label>
            <select name="bulk_action" class="select">
             <option value="status">Toggle Status</option>
            </select>
  

            <input type="submit" name="submit" value="Toggle Status" class="greenishBtn button_small"/>
        </div>
		</div>	
		
<!-- -->






</div>	
</section>
</div>
<?php $this->load->view('footer'); ?>