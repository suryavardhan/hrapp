<?php $this->load->view('header'); ?>

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
              <div class="content_pad">
               <h1><?=$emailMessage->subject;?></h1>
               <p>
                  <?=$emailMessage->message;?>
               </p>
             </div>
              <div class="action_bar" style="text-align:right">
              <?php
              $this->load->helper('date');
              echo unix_to_human($emailMessage->timestamp);
              ?>
              </div>             
             
            </div>
          </div>  
      </div> 
  </div>

</div>
</section>
</div>
<?php $this->load->view('footer'); ?>