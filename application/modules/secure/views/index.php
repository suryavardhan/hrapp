<?php $this->load->view('header'); 
$this->load->helper('date');
?>

<script type="text/javascript">
jQuery(document).ready(function() {
	   $(".hc1").addClass("active");
	 });	
</script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/main.js"></script>
<!--Dreamworks Container-->
<div id="dreamworks_container">

<!--Primary Navigation-->
<?php $this->load->view('primary_navigation'); ?>

<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->

<?php 
//If there is no subnav leave $pageMenu null
$data['pageMenu'] = 'pageMenu_dashboard';
$this->load->view('secondary_navigation',$data); 
?>

<!--Content Wrap-->
<div id="content_wrap">	

	   <!--Activity Stats-->
    	<div id="activity_stats">
        	<h3>Activity</h3>
            <div class="activity_column">
            	<span class="iconsweet">c</span> <span class="big_txt rd_txt"><?=$this->iface->candidatesCount();?></span>Candidates
            </div>
            <div class="activity_column">
            	<span class="iconsweet">r</span> <span class="big_txt gr_txt"><?=$this->iface->pending_reviews();?></span>tests for Reviews
            </div>
<!--             <div class="activity_column">
            	<span class="iconsweet">#</span> <span class="big_txt">2</span>Answer pending
            </div>  -->                        
        </div>    

        <!--Quick Actions-->
        <div id="quick_actions">
        	<a class="button_big" href="<?=site_url('secure/questionpool');?>"><span class="iconsweet">+</span>Add new Question</a>
            <a class="button_big" href="<?=site_url('secure/candidates/showall');?>"><span class="iconsweet">f</span>Candidate List</a>
            <a class="button_big" href="<?=site_url('secure/managetest');?>"><span class="iconsweet">r</span>Manage Tests</a>
        </div>

	<!--Notification Message-->
<?php $this->load->view('messages'); ?> 
 
	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">H</span><h5>Latest Exam</h5></div>
            <div class="widget_body">
            	<div class="project_sort">
                	<ul class="filter_project">
                    	<li class="segment  selected"><a class="all" href="#">All </a></li>
                        <li class="segment"><a class="started" href="#">Not Started</a></li>
                        <li class="segment"><a class="inprogress" href="#">In Progress</a></li>
                        <li class="segment"><a class="finished" href="#">Finished</a></li>
                     </ul>
                     <ul class="project_list">
 
                       <?php
                        $count = 1;
                        foreach($latest_tests AS $test)
                        {
                          $status = $test->progress;
                          switch($status)
                          {
                            case '0':
                             $dtype = "started";
                             $badge = "grey";
                             $icon = 'p';
                            break;
                            case '1':
                              $dtype = "started";
                              $badge = "grey";
                              $icon = 'p';
                            break;
                            case '2':
                              $dtype = "inprogress";
                              $badge = "red";
                              $icon = 'ô';                              
                            break;
                            case '3':
                              $dtype = "finished";
                              $badge = "blue";
                              $icon = 'Z';   
                            break;
                          }  
                       ?>
                        <li data-id="id-<?=$count;?>" data-type="<?=$dtype;?>">
                        	<span class="project_badge <?=$badge;?> iconsweet">
                            <?=$icon;?>
                            </span>
                            <a href="<?=site_url('secure/candidates/evaluationlist/'.$test->user_id);?>" class="project_title">
                            	<?=$test->exam_name;?>
                            </a>
                            <a href="<?=site_url('secure/candidates/expand/'.$test->user_id);?>" class="assigned_user">
                            	<span class="iconsweet">a</span><?=$test->first_name;?>
                            </a>                        
                        </li>
                        <?php 
                        $count++;
                        } 

                        ?>                                              
                                                                                        
                     </ul>
                </div>
            </div>
        </div>
    </div>     
	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">f</span><h5>Activity log</h5></div>
            <div class="widget_body">
            	<!--Activity Table-->
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                        <th width="8%">Log ID</th>
                        <th width="10%">User</th>
                        <th width="32%">Activity</th>
                        <th width="15%">Performed on</th>
                        <th width="10%">IP</th>
                    </tr>
                  <?php foreach($activity AS $log): ?>
                    <tr>
                        <td><?=$log->log_id;?></td>
                        <td><?=$log->username;?></td>
                        <td><?=$log->activity ;?></td>
                        <td><?=unix_to_human($log->activity_time);?></td>
                        <td><?=$log->ip_address  ;?></td>
                    </tr>
                   <?php endforeach; ?>
                      
                </table>

            </div>
        </div>
    </div>          
</div>
</section>
</div>

<?php $this->load->view('footer'); ?>