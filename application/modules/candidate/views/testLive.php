<?php $this->load->view('header'); ?>


<script type="text/javascript" src="<?=site_url();?>assets/css/jquery.countdown.css"></script>
<script type="text/javascript" src="<?=site_url();?>assets/js/jquery.countdown.js"></script>


<script type="text/javascript">

	$(document).ready(function() {  

	//Menu button current highlither	
	   $(".cp4").addClass("active");
	   //$(".md3").addClass("active");

	//Hide Finish exam by default
	$('#finishme').hide();
   //Check for end on initial load
   		     $.ajax({
			     url: "<?=site_url();?>candidate/candidate/ajaxnextquesAvailability",
			     type:'POST',
			     data: { next_serial:$('#next_serial').val(),assigned_exam_id:$('#assigned_exam_id').val() },
			     success: function(data){
				     if(data == 'Yes') { $('.next').hide(); $('#finishme').show()}				     
			     } 
			     });


   // action to be performed on clicking next
	 $(".next, #finishme").click( 
      function(){
      	//For check boxes
			  var inpType = $('#answer').attr('type');
			  var values;
        var selectedItems = new Array();
		  	if(inpType == 'checkbox')
			  {			
           $("input[@name='answer[]']:checked").each(function() {selectedItems.push($(this).val());});
				   values = selectedItems.join(',');				
		    }
		    else if( inpType == 'radio') 
        {
			    values = $("input[name='answer']:checked").val();
		    }
        else
        {  
            values = $('#answer').val(); 
        }

           $.ajax({
			     url: "<?=site_url();?>candidate/candidate/updateAnswer",
			     type:'POST',
			     data: { answer_id:$('#answer_id').val(), answer:values },
			     });
	        //alert(values);

	     }); 
    //To load Next Question   
  	 $(".next").click( 
      function(){

		     $.ajax({
			     url: "<?=site_url();?>candidate/candidate/ajaxnextQuestion",
			     type:'POST',
			     data: { next_serial:$('#next_serial').val(),assigned_exam_id:$('#assigned_exam_id').val() },
			     success: function(html){
				     $(".ajax-return").html(html);				     
			     } 
			     });

         $.ajax({
           url: "<?=site_url();?>candidate/candidate/ajaxnextquesAvailability",
           type:'POST',
           data: { next_serial:$('#next_serial').val(),assigned_exam_id:$('#assigned_exam_id').val() },
           success: function(data){
             if(data == 'Yes') 
             { 
              $('.next').hide();
              $('#finishme').show();  
             }           
           } 
           });

	     });  

    //To check whether next question available  
  	 // $(".next").click( 
     //   function(){

	   //   });  

  	 //  //Test review AJAX loading
  	 // $(".review").click( 
    //   function(){
		  //    $.ajax({
			 //     url: "<?=site_url();?>candidate/candidate/ajaxexamReview",
			 //     type:'POST',
			 //     data: { assigned_exam_id:$('#assigned_exam_id').val() },
			 //     success: function(html){
				//      $(".ajax-return").html(html);				     
			 //     } 
			 //     });


	   //   });    	  

/* Document reADY ENDS*/
	  });
	/*Count Down timer*/
$(function () {
 $('#timeleft').countdown({until: '+<?=$total_time;?>M',format:'MS',onExpiry: endtest, onTick: updateEvery10Secs});
});

function endtest()
{
           $.ajax({
			     url: "<?=site_url();?>candidate/candidate/ajax_endtest",
			     type:'POST',
			     data: { assigned_exam_id:$('#assigned_exam_id').val() },
                 success: function(html){
				      $(".ajax-return").html(html);	
				      $('#timeleft').hide();				     
			      } 
			     });
           
           //alert('smarty');
}
function updateEvery10Secs(periods)
{
	var minutes = periods[5];
       $.ajax({
			     url: "<?=site_url();?>candidate/candidate/ajax_timeleft",
			     type:'POST',
			      data: { assigned_exam_id:$('#assigned_exam_id').val(),timeleft: minutes }
			   });	

}
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
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Test in progress</h5></div>
            <div class="widget_body">
            <div class="content_pad"> 	

       <!-- test -->
       <?php       
            $this->load->model('candidatesmodel');
            $exam_progress = $this->candidatesmodel->getexamProgress_byassigned($this->tankracl->candidate_id(),$assigned_exam_id);
            if($exam_progress <= 2):      
        ?>
        <div class="box">
           <div id="timeleft"></div>
        </div>
<br/><br/><br/>
        <div class="ajax-return">      
        <!--Loads first question here -->
        <?php 
           //Check agian for exam status
	        $question = $this->candidatesmodel->getoneQuestion($answer_id);
          echo "<div class='question'><p>".$serial.".</p>".$question->question."</div>";       
	        if($question->exhibit) { echo '<img width="800px" src="'.site_url('exhibit/'.$question->exhibit).'" alt="exhibit"/><br/>';}
            $options = $this->candidatesmodel->showAnsweroptions($question->q_id);

            echo "<div class='optionss'>".$options;
            //Add Gategory description as a hint for the Question
            $categoryDesc = $this->candidatesmodel->getcategoryDesc($question->category);
            echo '<br/><br/><small>* '.$question->category.' - '.$categoryDesc->description.' </small>';
            echo '<input type="hidden" value="'.$answer_id.'" id="answer_id"/>';
            echo '</div>';
        ?>
        <br/>
        <?php
         $next_que_no = $serial+1;
        ?>
        <input type="hidden" value="<?=$next_que_no;?>" id="next_serial"/>
        <input type="hidden" value="<?=$assigned_exam_id;?>" id="assigned_exam_id"/>
        </div>
        </div>
        <div class="action_bar">
        <?php if($endOftest == 0):?>
         <!-- <a id="next" href="<?=site_url();?>/candidate/nextQuestion/<?=$next_que_no;?>/<?=$assigned_exam_id;?>">NEXT</a> -->
        <?php else: ?>
        <a class="redishBtn button_small" id="finishme" href="<?=site_url('candidate/finishExam/'.$assigned_exam_id)?>">Finish Exam</a> <!-- | -->
         <!-- <a href="<?=site_url();?>candidate/reviewExam/<?=$assigned_exam_id;?>">Review</a> -->
        <?php endif; ?>

        
        <a class="next greenishBtn button_small" href="#">NEXT &rarr;</a> <!-- | <a class="review" href="#">Review</a> -->
        <a class="redishBtn button_small" id="finishme" href="<?=site_url('candidate/finishExam/'.$assigned_exam_id)?>">Finish Exam</a>
        </div>
        <?php else: ?>
        <h1>You cannot attempt this test anymore!</h1>
        <div class="msg error">
      	<p> 
          The test you are attepting to take is already locked.
      		Reasons may be: </p>
      	 <ul>
      	 	<li>You have already finished this test.</li>
      	 	<li>Accidently closed the browser</li>
      	 	<li>You have refreshed your browser while attempting the test.</li>
      	 	<li>Internet session timeout.</li>
      	 </ul>
      	 <p> Call the admin to re-open your test session.</p>
        </div>
        <?php endif; ?>
        <div class="lastquestion"></div>
        <!-- test -->
           </div>
        
            </div>	
        </div>
    </div>

</div>
</section>
</div>    
<?php $this->load->view('footer'); ?>