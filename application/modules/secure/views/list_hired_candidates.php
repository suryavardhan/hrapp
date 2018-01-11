<?php 
  $this->load->view('header'); 
  $this->load->model('candidatesmodel');
?>

<!--Confirm Dialogue-->
<script src="<?=site_url()?>assets/js/jquery.easy-confirm-dialog.js"></script>   
<!--Confirm Dialogue-->

<script type="text/javascript">
	$(document).ready(function() {  	
	
	   $(".hc4").addClass("active");
	   $(".ca5").addClass("active");
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
$data['pageMenu'] = 'pageMenu_candidates';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	
 	
	 <div class="one_wrap">

    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">e</span><h5>Candidates</h5></div>
            <div class="widget_body">
              <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
				<tr>
				    <th>User Code</th>
				    <th>Name</th>
				    <th>Email</th>
				    <th>Test Reviews</th>
				    <th>Actions</th>
				</tr>
                <?php foreach ($candidates as $row): ?>		
				
				<tr>
				    <td><?=$row->user_slug;?></td>
				    <td><?=$row->first_name;?> <?=$row->last_name;?></td>
				    <td><?=$row->email;?></td>				
				    <td>
                     <a class="button_small whitishBtn" href="<?=site_url('secure/candidates/evaluationlist/'.$row->user_id);?>" style="margin:5px;"><span class="iconsweet">z</span> <?=$this->iface->pending_reviews($row->user_id);?> - Left</a>
				    </td>
				    <td>
                        <span class="data_actions iconsweet">
				    	<a class="" title="View Candidate Details" href="<?=site_url('secure/candidates/expand/'.$row->user_id);?>">a</a>
				    	<a class="confirm" href="<?=site_url('secure/candidates/releave/'.$row->user_id);?>" title="You want to reactivate the candidate!">º</a>  			
				    	<a class="confirm" href="<?=site_url('secure/candidates/delete/'.$row->user_id);?>" title="You want to Delete the candidate!">X</a>  				    	
                        </span>
				    </td>				    
				</tr>
				<?php endforeach; ?>              	
             </table>

			<div class="action_bar">
				<style>
				#pagination a { text-decoration: none; color: #333;}
				</style>
	           <?php echo $this->pagination->create_links(); ?>
	        </div> 

            </div> 
        </div> 
    </div>

 </div>
 </section>           	
</div>
<?php $this->load->view('footer'); ?>	
		
        
        
        


