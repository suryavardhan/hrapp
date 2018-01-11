<?php $this->load->view('header'); 
$this->load->helper('date');
?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
       $(".hc4").addClass("active");
       $(".ca1").addClass("active");

    $("#add_verdict").click( 
      function(){
		     $.ajax({
			     url: "<?=site_url();?>secure/candidates/ajax_add_verdict",
			     type:'POST',
			     data: { verdict:$('#verdict').val(),verdict_note:$('#verdict_note').val(),assigned_exam_id:$('#assigned_exam_id').val() },
			     success: function(html){
				     $("#ajax_form").html(html);				     
			     } 
			     });


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
<a class="button_big btn_grey" href="<?=site_url('secure/candidates/evaluationlist/'.$user_id);?>"><span class="iconsweet">=</span> Evaluate Tests</a>
<a class="button_big" href="<?=site_url('secure/candidates/interview/'.$user_id);?>"> <span class="iconsweet">è</span>Interview</a>
<a class="button_big" href="<?=site_url('secure/candidates/sendmail/'.$user_id);?>"><span class="iconsweet">@</span> Send A Mail</a>
<a class="button_big" href="<?=site_url('secure/candidates/messages/'.$user_id);?>"><span class="iconsweet">#</span> Messages</a>
</div>
<!-- Qa -->
<?php $this->load->view('messages'); ?>
<?php $this->load->model('candidatesmodel'); ?> 

<div class="one_wrap">
    <div class="widget">
         <div class="widget_title"><span class="iconsweet">=</span>
                <h5>Exam Evaluation - [Exam ID: <?=$assigned_exam_id;?>]</h5>
         </div>
         <div class="widget_body">
            <div class="action_bar">
                <div id="ajax_form" class="form_input">
                     <label>Rating</label>
                     <select name="verdict" id="verdict">
                           <option>Poor</option>
                           <option>Average</option>
                           <option>Good</option>
                           <option>Excellent</option>
                     </select>
                     Verdict Note<input type="text" id="verdict_note" name="verdict_note" style="width:60%"/>
                     <input type="hidden" value="<?=$assigned_exam_id;?>" id="assigned_exam_id" name="assigned_exam_id"/>
                     <a class="button_small redishBtn" id="add_verdict">Add Verdict</a>
                </div>
                <!-- If verdicts exists -->
                <?php
                if($existing_verdict !=''):
                    echo "<div class='msgbar msg_Alert'> <strong>Current Rating:  </strong>".$existing_verdict."</div>";
                endif;
                ?>
            </div> 

      <table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8"> 
                <tr>
                    <th width="40%">Question </td>
                    <th>Answered</td> 
                    <th>Correct Answer</td>
                    <th>Time taken</td>
                </tr>   
     <?php 
     $modal = 1;
     foreach($answers as $row) { ?>            
                <tr>
                    <td>
                    <?php
                        $get_question = $this->candidatesmodel->getQuestionparts($row->question_id);
                        if($get_question):
                            echo $get_question->question;
                            $anstype = $get_question->answer_type;
                            if($get_question->exhibit):
                               if($get_question->exhibit):?><a href="<?=site_url('exhibit/'.$get_question->exhibit);?>" target="_blank"><span class="iconsweet">2</span></a><?php endif;
                            endif;
                        else:
                          echo '<span style="color:red">Question deleted or not available!</span>';    
                        endif;    
                    ?>
                    </td>   
                    <td>
                    <?php
                     if($get_question){
                         switch($anstype)
                         {
                            case 'radio':
                             $answer = $this->candidatesmodel->getAnsweroptions($row->question_id,'radio');
                             if($row->answer == $answer->opt_id): $this->iface->icon('active.png'); else: $this->iface->icon('inactive.png'); endif;
                             
                            echo " - ".$this->candidatesmodel->getAnsweroptions_answer($row->answer);
                            break;                          
                            case 'check':
                             $answers = $row->answer;
                             $ans_arr = explode(',', $answers);
                             foreach($ans_arr AS $answer) 
                             {
                                echo $this->candidatesmodel->getAnsweroptions_answer($answer).'<br/>';
                                //echo $answer;
                             }
                             //echo $ans_arr;
                            break;
                            case 'type':
                                $strl = strlen($row->answer);
                                if($row->answer !='' AND $strl > 100): 
                                 echo '<br/>';    
                                 echo '<a class="whitishBtn button_small" data-toggle="modal" href="#myModal'.$modal.'" >Expand</a> ';
                                else:
                                  echo htmlspecialchars($row->answer);  
                                endif; 
/* Addd model box here */   ?>

    <!--Basic Modal Start-->
    <div class="modal hide" id="myModal<?=$modal;?>" >
    <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Answer</h3>
    </div>
    <div class="modal-body">
          <p>
              <?=htmlspecialchars($row->answer);?>        
          </p>   
    </div>
    </div>
    <!--Basic Modal End-->





                            <?php
                            break;                                                       
                         }
                     }
                         else{ echo "--"; }                      
                    ?>
                    </td>    
                    <td>
                      <?php
                      if($get_question){
                         switch($anstype)
                         {
                            case 'radio':
                             $answer = $this->candidatesmodel->getAnsweroptions($row->question_id,'radio');
                             echo $answer->answer_option;
                            break;                          
                            case 'check':
                             $answers = $this->candidatesmodel->getAnsweroptions($row->question_id,'checkbox');
                             foreach($answers AS $answer) { 
                                echo $answer->answer_option.'<br/>';}
                            break;
                            case 'type':
                              $answer = $this->candidatesmodel->getAnsweroptions($row->question_id,'type');
                              if(!$answer): echo ''; else: echo $answer->answer_option; endif; 
                            break;                                                       
                         }
                      ?>
                    </td>
                   <td><?=timespan($row->answer_start,$row->answer_end);?></td>  
                </tr>
                        
                                                                    
                <?php $modal++; 
                 }

                 else{ echo "--"; }   
                 } 
                ?>
        </table>


        </div> 
    </div>
 </div>             
<?php $this->load->view('footer'); ?>
