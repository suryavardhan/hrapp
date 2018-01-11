<?php $this->load->view('header'); 
 $this->load->helper('date');
?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
     $(".cp3").addClass("active");
     $(".md3").addClass("active");
	});
</script>


<?php $this->load->view('footer'); ?>
<!--Dreamworks Container-->
<div id="dreamworks_container">

<!--Primary Navigation-->
<?php $this->load->view('primary_navigation'); ?>

<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->

<?php 
//If there is no subnav leave $pageMenu null
$data['pageMenu'] = 'pageMenu_profile';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap"> 
<?php $this->load->view('messages'); ?> 

  <div class="one_wrap">
      <div class="widget">
          <div class="widget_title"><span class="iconsweet">@</span><h5>Messages</h5></div>
            <div class="widget_body">

           <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
              <tr>
                <th>From</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Time</th>
                <th>Actions</th>
              </tr>  
              <?php foreach($list_messages as $row) { ?>
                <tr <?php if($row->status == 1){ echo ' bgcolor="#CCC"';} else{echo ' style="font-weight:bold;"';} ?>>
                <td>Supportsages</td>
                <td><?=$row->subject;?></td>
                <td><?=substr(strip_tags($row->message),0,50)."...";?></td>
                <td><?=unix_to_human($row->timestamp); ?></td>
                <td>
                <span class="data_actions iconsweet">  
                <?php if($row->status == 0): ?>
                    <a href="<?=site_url('candidate/readMail/'.$row->msg_id.'/markread');?>" original-title="User">@</a>              
                <?php else: ?>
                    <a href="<?=site_url('candidate/readMail/'.$row->msg_id);?>" original-title="User">}</a>                  
                <?php endif; ?>
                </span> 
                </td>
              </tr> 
            <?php } ?>
          </table>



            </div>
          </div>  
      </div> 
  </div>

</div>
</section>
</div>
<?php $this->load->view('footer'); ?>