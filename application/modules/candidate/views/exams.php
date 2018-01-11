<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
     $(".cp2").addClass("active");
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

  <div class="one_two_wrap fl_left">
      <div class="widget">
          <div class="widget_title"><span class="iconsweet">r</span><h5>Tests Assigned</h5></div>
            <div class="widget_body">

           <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
              <tr>
                <th>Test name</th>
                <th>Status</th>
              </tr>
              <?php foreach($avilable_exams as $row) { ?>
              <tr>
                <?php 
                 //Later to ajaxyfy the click factor
                 //Loading model for calling function relatd to exam
                      $this->load->model('candidatesmodel');
                      $exam_name = $this->candidatesmodel->examTemplatedetails($row->exam_template_id);
                ?>
                <td>
                  <?php if($row->progress == 1 OR $row->progress == 0) { ?>
                  <!-- //For ajax -->
                  <input type="hidden" id="exam_template_id" value="<?=$row->exam_template_id;?>"/>
                  <input type="hidden" id="assign_id" value="<?=$row->assign_id;?>"/>
                  <a href="<?=site_url();?>candidate/processTest/<?=$row->exam_template_id;?>/<?=$row->assign_id;?>">
                   &rarr;
                  <?php } elseif($row->progress == 2 ) { ?> 

                  <input type="hidden" id="exam_template_id" value="<?=$row->exam_template_id;?>"/>
                  <input type="hidden" id="assign_id" value="<?=$row->assign_id;?>"/>
                  <a href="<?=site_url();?>candidate/processTest/<?=$row->exam_template_id;?>/<?=$row->assign_id;?>">
                   &rarr;  
                  <?php 
                   }  
                   else
                    { 
                  ?>
                  <a href="#"> 
                  <?php 
                  } 
                  ?>
                  <?=$exam_name['exam_name'];?>
                  </a>  
                </td>
                <td><?php 
                switch($row->progress)
                {
                          case '0':
                            echo '<span class="grey_highlight pj_cat">Start Test</span>';
                          break;
                          case '1':
                            echo '<span class="blue_highlight pj_cat">Started</span>';
                           break;
                          case '2':
                            echo '<span class="blue_highlight pj_cat">In Progress</span>';
                          break; 
                          case '3':
                            echo '<span class="green_highlight pj_cat">Finished</span>';
                          break;  
                }
                ?></td>
              </tr> 

                <?php } ?>
          </table>
             <div class="action_bar">
               Click on the <span style="font-weight:bold">&lt;Test Name&gt;</span> to continue.
             </div>
            </div>
          </div>  
      </div> 
  </div>

</div>
</section>
</div>
<?php $this->load->view('footer'); ?>