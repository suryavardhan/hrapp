<?php $this->load->view('header'); 
 $this->load->helper('date');?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	   $(".hc4").addClass("active");
	   $(".ca1").addClass("active");
	   
	 $("#emailkeys").click( 
      function(){
        $('#ekeys').show();
      });

	});	
</script>
<script type="text/javascript" src="<?=site_url();?>assets/js/loaderanim.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/main.js"> </script>
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
<a class="button_big " href="<?=site_url('secure/candidates/evaluationlist/'.$user_id);?>"><span class="iconsweet">=</span> Evaluate Tests</a>
<a class="button_big " href="<?=site_url('secure/candidates/interview/'.$user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big" href="<?=site_url('secure/candidates/sendmail/'.$user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
<a class="button_big btn_grey" href="<?=site_url('secure/candidates/messages/'.$user_id);?>"><span class="iconsweet">#</span> Messages</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>	

<div class="one_wrap">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">#</span>
                <h5>Messages</h5>
            </div>
            <div class="widget_body">
        
             <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
              <tr>
                <th>From</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Time</th>
              </tr> 
		         <?php if(!$list_messages): ?>
                            <tr>
                            	<td colspan="4">
                                  <div class="msgbar msg_Alert hide_onC">
                                    <span class="iconsweet">!</span><p>No messages sent!</p>
                                  </div>	
                            	</td>
                            </tr>	
              <?php else: ?>	
              <?php 
              $modal = 1;
              foreach($list_messages as $row) 
              { 
                ?>
                <tr <?php if($row->status == 1){ echo ' bgcolor="#CCC"';} else{echo ' style="font-weight:bold;"';} ?>>
                <td>Supportsages</td>
                <td><?=$row->subject;?></td>
                <td>
                	<?php 
                     echo '<a class="whitishBtn button_small" data-toggle="modal" href="#myModal'.$modal.'" >Expand</a> ';
                  ?>
                </td>
                <td>

                     <?=unix_to_human($row->timestamp); ?>

                      <!--Basic Modal Start-->
                      <div class="modal hide" id="myModal<?=$modal;?>" >
                      <div class="modal-header">
                      <a class="close" data-dismiss="modal">×</a>
                      <h3><?=$row->subject;?></h3>
                      </div>
                      <div class="modal-body">
                            <p>
                                <?=$row->message;?>        
                            </p>   
                      </div>
                      </div>
                      <!--Basic Modal End-->

                </td>
              </tr> 
            <?php 
            $modal++; 
            } 
            endif; 
            ?>
          </table>


            </div>
        </div>    	
</div>


</div>
</section>
</div>
<?php $this->load->view('footer'); ?>