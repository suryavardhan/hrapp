<?php $this->load->view('header'); ?>
	<!-- elRTE -->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	$(".hc2").addClass("active");
	$(".qp2").addClass("active");
	
//Elrte
 var opts = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#question').elrte(opts);	

/* elRte validation */
			$('#myform').submit(function(e) {
			  var text = $('#question').elrte('val');
			  if (!text) {
			    e.preventDefault();
			    alert('Question  is required!');
			  }
			})


	});

		
</script>
<script type="text/javascript" src="<?=site_url();?>assets/js/loaderanim.js"></script>

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
	   <!-- Form goes here -->
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">?</span><h5>Edit Question</h5></div>
            <div class="widget_body">
             <form action="<?=site_url('secure/questionpool/updatequestion'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
	           <input type="hidden" value="<?=$question->q_id;?>" name="q_id"/>
	            <ul class="form_fields_container">
	            	<li><label>Question</label> 
	            		<div class="form_input">
                          <textarea name="question" id="question"><?=$question->question;?></textarea>
	            		</div>      		
	            	</li>
	            	<li><label>Category</label> 
	            		<div class="form_input">

							<select name="category">
                            <?php 
						    $query = $this->db->query("SELECT * FROM question_categories");	
							foreach ($query->result() as $row)
							 {
								 if($row->category == $question->category): $selet ='selected="true"'; else: $selet =""; endif;
								 echo '<option '.$selet.'>'.$row->category.'</option>';
							 }
							?>	
							</select>
	            		</div>      		
	            	</li>
	            	<li><label>Skill Level</label> 
	            		<div class="form_input">
                           <select name="level">
                            <?php 
						    $query = $this->db->query("SELECT * FROM question_levels");	
							foreach ($query->result() as $row)
							 {
								 if($row->level == $question->level): $selet ='selected="true"'; else: $selet =""; endif; 
								 echo '<option '.$selet.'>'.$row->level.'</option>';
							 }
							?>	
							</select>
	            		</div>      		
	            	</li>	            		            
	            	<li><label>Answering method</label> 
	            		<div class="form_input">
                          <input type="hidden" value="<?=$question->answer_type;?>" name="answer_mod"/>
	            		</div>      		
	            	</li>
	            	<li><label>Existing answer</label> 
	            		<div class="form_input">
	            		<table style="border:none;">	
                        <?php

                          $i = 1;
                         foreach ($options as $option) 
                         {
                         	
                           if($question->answer_type == 'radio'):
                               if($option->is_answer == '1'): $ans = 'checked="checked"'; else: $ans=""; endif;
                         	   echo '<tr><td>'.$i.' </td><td> <input type="text" name="option'.$i.'" value="'.$option->answer_option.'"/></td><td><input type="radio" name="radio" '.$ans.' value="'.$i.'"></td></tr>';
                           elseif($question->answer_type == 'check'):
                               if($option->is_answer == '1'): $ans = 'checked="checked"'; else: $ans=""; endif;
                         	   echo '<tr><td>'.$i.' </td><td> <input type="text" name="option'.$i.'" value="'.$option->answer_option.'"/></td><td><input type="checkbox" name="check'.$i.'" '.$ans.' value="'.$i.'"></td></tr>';
                           else:
                           	   echo '<tr><td>Answer Keys</td><tr/><tr><td><textarea name="answer_hint" rows="3"  cols="55">'.$option->answer_option.'</textarea></td></tr>';
                           endif;
                         	$i++;
                         }
                        //If five options are not avialble show rest of the fields 
                        if($question->answer_type == 'radio' AND  $i!=5)
                        {
                        	for($b=$i;$b<=5;$b++)
                        	{
                        		echo '<tr><td>'.$b.' </td><td> <input type="text" name="option'.$b.'" value=""/></td><td><input type="radio" name="radio" value="'.$b.'"></td></tr>';
                        	}
                        }
                        //If five options are not avialble show rest of the fields 
                        if($question->answer_type == 'check' AND  $i!=5)
                        {
                        	for($b=$i;$b<=5;$b++)
                        	{
                        		echo '<tr><td>'.$b.' </td><td> <input type="text" name="option'.$b.'" value=""/></td><td><input type="checkbox" name="check'.$i.'" value="'.$b.'"></td></tr>';
                        	}
                        }                        

                        ?>
				        </table>
				        
			         <?php
						// if($question->answer_type == 'radio'):
						// echo '<table style="border:none;">';	
					 //    echo '<tr><td>1 <input typ="text" name="option1"></td><td><input type="radio" name="radio" checked="checked" value="1"></td></tr>';	
					 //    echo '<tr><td>2 <input typ="text" name="option2"></td><td><input type="radio" name="radio" value="2"></td></tr>';	
					 //    echo '<tr><td>3 <input typ="text" name="option3"></td><td><input type="radio" name="radio" value="3"></td></tr>';	
						// echo '<tr><td>4 <input typ="text" name="option4"></td><td><input type="radio" name="radio" value="4"></td></tr>';	 
					 //    echo '<tr><td>5 <input typ="text" name="option5"></td><td><input type="radio" name="radio" value="5"></td></tr>';
						// echo '</table>';
						// elseif($question->answer_type == 'check'):
						// echo '<table style="border:none;">';	
					 //    echo '<tr><td>1 <input typ="text" name="option1"></td><td><input type="checkbox" name="check1" checked="checked" value="1"></td></tr>';	
					 //    echo '<tr><td>2 <input typ="text" name="option2"></td><td><input type="checkbox" name="check2" value="1"></td></tr>';	
					 //    echo '<tr><td>3 <input typ="text" name="option3"></td><td><input type="checkbox" name="check3" value="1"></td></tr>';	
						// echo '<tr><td>4 <input typ="text" name="option4"></td><td><input type="checkbox" name="check4" value="1"></td></tr>';	 
					 //    echo '<tr><td>5 <input typ="text" name="option5"></td><td><input type="checkbox" name="check5" value="1"></td></tr>';
						// echo '</table>';
						// else:
			   //     	    echo '<table style="border:none;">';
			   //     	    echo '<tr><td>Answer Hints</td><tr/><tr><td><textarea name="answer_hint" rows="3"  cols="55"></textarea></td></tr>';
			   //     	    echo '</table>';
			   //     	    endif;									

			           ?>
	            		</div>      		
	            	</li>
	            	<li><label>Exhibit</label> 
	            		<div class="form_input">
                            <input type="file" size="40" name="exhibit" class="input-text" />
							Exhibit file: <?=$question->exhibit;?>
	            		</div>      		
	            	</li>	            		            	
	            </ul>	
            <div class="action_bar">
                 <input type="submit" class="button_small bluishBtn" value="Update Question" />
            </div>							
			</form>


            </div>
        </div>    	




	 </div>
</div>	 
</section>
<?php $this->load->view('footer'); ?>


