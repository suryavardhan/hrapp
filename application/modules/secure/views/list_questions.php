<?php $this->load->view('header'); ?>
<style>
#searchBtn { cursor: hand !important;}
</style>
<script src="<?=site_url()?>assets/js/jquery.easy-confirm-dialog.js"></script>   

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  

	$(".hc2").addClass("active");
	$(".qp2").addClass("active");

    /*--------Search Question pool----*/

  	 $("#searchBtn").click( 
      function(){
		     $.ajax({
			     url: "<?=site_url();?>secure/questionpool/questionsearch",
			     type:'POST',
			     data: { searchkey:$('#search_key').val() },
			     success: function(html){
				     $(".activity_datatable").html(html);
				     $("#pagination").hide();				     
			     } 
			     });
	     });  

	
	});	
	   
    $(function() {
		$(".confirm").easyconfirm();		
	});	
		
</script>
<script src="<?=site_url()?>assets/js/loaderanim.js"></script>   
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
 	
	 <div class="one_wrap">
     <!-- Contents here -->
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">|</span><h5>List of Questions</h5></div>
            <div class="widget_body">
<!-- Action bar ajax search here -->            	
<div class="action_bar">
	 <div id="quick_actions">
         <input type="text" id="search_key" name="search_key"  value="" style="width:90%; padding:10px 5px;" />
         <a id="searchBtn" href="#" class="button_big btn_grey" style="margin-left:5px;padding:0px 15px;"><span class="iconsweet">G</span>Find</a>
	 </div>     
</div>
<!-- Action ends-->   	
             <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">

				<tr>
				    <th>Question</th>
				    <th>Category</th>
				    <th>Level</th>
				    <th>Answering Mode</th>
				    <th><span class="iconsweet">2</span></th>
				    <th width="8%"> Actions</th>
				</tr>
                <?php 
				  foreach ($questions as $row)
					 {
				?>						
				<tr>
				    <td><?=$row->question;?></td>
				    <td><?=$row->category;?></td>
				    <td><?=$row->level;?></td>
				    <td><?=$row->answer_type;?></td>
				    <td><?php if($row->exhibit):?><a href="<?=site_url('exhibit/'.$row->exhibit);?>" target="_blank"><span class="iconsweet">2</span></a><?php endif; ?></td>
				    <td>
				    	<span class="data_actions iconsweet">
				        <a  href="<?=site_url('secure/questionpool/edit/'.$row->q_id);?>">C</a>			
				    	<a class="confirm" href="<?=site_url();?>secure/questionpool/delete/<?=$row->q_id;?>" title="You want to Delete this question?">X</a>  				    	
				        </span>
				    </td>				    
				</tr>
				<?php  } ?>

            </table>
			<div class="action_bar">
				<style>
				#pagination a { text-decoration: none; color: #333;}
				</style>
	           <?php echo $this->pagination->create_links(); ?>
	        </div>            	
            </div>
        </div>    	
     <!-- Contents ends here -->
	 </div>	
</div>
</section>
<?php $this->load->view('footer'); ?>
	

        

