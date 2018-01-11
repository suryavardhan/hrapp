<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() { 

	   $(".cp2").addClass("active");
	   $(".md3").addClass("active");
	
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
$data['pageMenu'] = 'pageMenu_profile';
$this->load->view('secondary_navigation',$data); 
?>
<div id="content_wrap">	
<?php $this->load->view('messages'); ?>	

	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">?</span><h5>Basic Details</h5></div>
            <div class="widget_body">

            <div class="content_pad"> 	

         <p><?=$exam_description;?></p>
        <!--Load exams list here -->
          <?php
          $this->load->model('candidatesmodel');
          //Added: Tweak - Check wether exam is incomplete. Find the question Id with either start or endtime is null (9/11-2012).
          $examProgress  = $this->candidatesmodel->getexamProgress_byassigned($this->tankracl->candidate_id(),$assigned_exam_id);    
          //Get the list of questions based on assigned_exam_id
          if($examProgress == 1):
             $testQuestions = $this->candidatesmodel->getQuestions($assigned_exam_id,'',1);
             $launchName = "Start test";
             $isResuming = '';
          elseif($examProgress == 2):
          	 $testQuestions = $this->candidatesmodel->getQuestions_resume($assigned_exam_id,'',1);
          	 $launchName = "Resume Test";
          	 $isResuming = 'resuming';
          endif;	
         if($testQuestions):          
           foreach($testQuestions as $question)
            {
            	echo '<a class="bluishBtn button_small" href="'.site_url().'candidate/showQuestion/'.$question->answer_id.'/'.$question->serial.'/'.$assigned_exam_id.'/'.$isResuming.'">'.$launchName.'</a><br/>';
            }
         else:
           echo '<a class="redishBtn button_small" href="'.site_url('candidate/finishExam/'.$assigned_exam_id).'">Finish Exam</a>';
         endif;

        ?>
               </div>
            </div>
        </div>
    </div>        

</div>
</section>
</div>
<?php $this->load->view('footer'); ?>
        


