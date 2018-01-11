<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Candidate extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->library('tankracl');
		$this->load->model('candidatesmodel');
		
		if (!$this->tank_auth->is_logged_in())  { redirect('/login');}
		else {
			$this->tankracl->launcher();
		} 
			
		
	}
/*-----------------------------------------
 * Loading dash board
-------------------------------------------*/
	function index()
	{
			//$this->load->view('index');		
      redirect($this->tankracl->launcher());
	}

 
/*---------------------------------------
 * Show Candidates Details on dash and
 *  my profile
 * --------------------------------------*/
  function profile()
  {
  	 
  	 $user_id            = $this->tankracl->candidate_id();	
  	 $data['candidate']  = $this->candidatesmodel->expand_candidate($user_id);
	   $data['education']  = $this->candidatesmodel->expand_candidate_education($user_id);
	   $data['experience'] = $this->candidatesmodel->expand_candidate_experience($user_id);
	 
  	 $this->load->view('profile',$data);
  }
/*---------------------------------------
 * Append education details
 * --------------------------------------*/
 function add_education()
 {
 	$this->load->view('add_education');
 }
/*--sub--*/
 function appendeducation()
 {
 	//Get user_id
 	
	if($this->candidatesmodel->append_education())
	{
		//Success message here
		$this->session->set_flashdata('success', "Education details added");  
		redirect('candidate/candidate/add_education');		
	}
	else {
		$this->session->set_flashdata('error', "Data couldnot be updated!");  
		redirect('candidate/candidate/add_education');	
	}

	
 }


/*---------------------------------------
 * Append work experience details
 * --------------------------------------*/
 function add_experience()
 {
 	$this->load->view('add_experience');
 }
/*--sub--*/
 function appendexperince()
 {
 	//Get user_id
 	$this->load->model('candidatesmodel');
	if($this->candidatesmodel->append_experience())
	{
		//Success message here
		$this->session->set_flashdata('success', "Experience details added");  
		redirect('candidate/candidate/add_experience');		
	}
	else {
		$this->session->set_flashdata('error', "Data couldnot be updated!");  
		redirect('candidate/candidate/add_experience');	
	}

	
 }
/*---------------------------------------
 * Append education details
 * --------------------------------------*/
  function exams()
  {
    $user_id                 = $this->tankracl->candidate_id();	
  	$data['avilable_exams']  = $this->candidatesmodel->availableExams($user_id);
  	$this->load->view('exams',$data);
  }

/*---------------------------------------
 * Append education details
 * --------------------------------------*/
  function messages()
  {
    $user_id                 = $this->tankracl->candidate_id(); 
    $data['list_messages']   = $this->candidatesmodel->getMessages($user_id);
    $this->load->view('emails',$data);
  }

  function readMail($msg_id, $statusUpdate = NULL)
  {
    if($statusUpdate):
      $this->candidatesmodel->updateMessagestatus($msg_id);
    endif;
    //Get message details
    $user_id              = $this->tankracl->candidate_id(); 
    $data['emailMessage'] = $this->candidatesmodel->getMessagecontents($msg_id);
    $this->load->view('email_fullview',$data);

  }

/*---------------------------------------
 * Core of Quiz - Later to ajaxyfy for view
 * --------------------------------------*/
  function processTest($exam_id,$assigned_exam_id)
  {
    //Get user ID
     $user_id          =  $this->tankracl->candidate_id();
     $exam_id          =  $exam_id;
     /*--ID of assigned examination--on exam start this will be refred to load the test--*/
     $assigned_exam_id =  $assigned_exam_id;

     //Check wether exam already begun
    if($this->candidatesmodel->getexamProgress($user_id ,$exam_id) == 0 )
     {	

	    //IF NOT:Set TEST BEGIN status to active
	    $exam_progress = array('user_id' => $user_id, 'exam_template_id' => $exam_id);
	    $this->db->where($exam_progress);
	    $update_progress = array('progress' => 1);
	    $this->db->update('assigned_exam_templates', $update_progress);  

	  	//Get Exam template segments and pick random questions on each and saving od DB 
	     $exam_segments = $this->candidatesmodel->getExamSegments($exam_id);
	     $i = 1;
	     foreach ($exam_segments as $key) 
	     {

	     	$category   = $key->category;
	     	$level      = $key->level; 
	     	$answermode = $key->answer_mode; 
	     	$count      = $key->question_count; 

	     	//Get Questions randomly based on above mentioned categories loop
	     	$getQuestions = $this->candidatesmodel->getRandomquestions($category,$level,$answermode,$count);       
	     	foreach($getQuestions as $question)
	     	{
	     		$data = array('question_id'     => $question,
	     			          'user_id'           => $user_id,
	     			          'exam_id'           => $exam_id,
	     			          'assigned_exam_id'  => $assigned_exam_id,
	     			          'serial'	     	    => $i		          
	     			          );
	     		//Insert question options to table
	     		$this->candidatesmodel->addansewerSlots($data);
	     		$i++;

	     	}


	     }
	       //echo "Move to test begin page";
         $this->candidatesmodel->updateExamdate($assigned_exam_id);
         $data['assigned_exam_id'] = $assigned_exam_id;
         $data['exam_description'] = $this->candidatesmodel->getExamdescription($exam_id);
	       $this->load->view('testReview',$data);
	 }
	 //If test begin load review page
	 else
	 {
     //Update the date of exam
    //$data['exam_id']          = $exam_id;
	 	$data['assigned_exam_id'] = $assigned_exam_id;
    $data['exam_description'] = $this->candidatesmodel->getExamdescription($exam_id);
	  $this->load->view('testReview',$data);
	 }  

    }
/*---------------------------------------
 * Quiz Load a question
 * --------------------------------------*/
   function showQuestion($answer_id,$serial,$assigned_exam_id,$resume = NULL)
   {
     
     //If resume is NOT NULL update time of resuming
     if($resume !=''):
       $this->candidatesmodel->resumeTest($assigned_exam_id);
     endif;

     //Setting start time for first question
     $this->candidatesmodel->updateQuestionstart($serial,$assigned_exam_id);
    
     //Setting exam on incomplete state 
     $this->candidatesmodel->updateExam($assigned_exam_id,'2');

     //Check for end of test
   	// 1 End of test because no more question available 
     $nextSerial = $serial + 1;
     $flag = $this->candidatesmodel->checkEndoftest($nextSerial,$assigned_exam_id);
     if($flag == 0 ) { $testEnd =  1; } else { $testEnd =  0;}
     
     $data['answer_id']        = $answer_id;
     $data['serial']           = $serial;
     $data['assigned_exam_id'] = $assigned_exam_id;
     $data['endOftest']        = $testEnd;
     if($resume !=''):
     $data['total_time']       = $this->candidatesmodel->getTimeleft($assigned_exam_id);
     else:
     $data['total_time']       = $this->candidatesmodel->getTotaltime($assigned_exam_id);
     endif;
     $this->load->view('testLive',$data);


   }

   /*--Next button--LATER to AJAXYFY--option saving goes here--*/
   function nextQuestion($serial,$assigned_exam_id)
   {
   	  //Updating question start time
      $this->candidatesmodel->updateQuestionstart($serial,$assigned_exam_id);

      //Setting exam still on incomplete state
      $this->candidatesmodel->updateExam($assigned_exam_id,'2');
      //Check for end of test
   	  //Get answer ID from serial
   	  $answer_id = $this->candidatesmodel->getAnsweridFromserial($serial,$assigned_exam_id);
   	  $this->showQuestion($answer_id,$serial,$assigned_exam_id);
   }
/*---------------------------------------
 * Load next question thru ajax
 * --------------------------------------*/
   function ajaxnextQuestion()
   {
     $serial           =  $this->input->post('next_serial'); 
     $assigned_exam_id =  $this->input->post('assigned_exam_id');
     
     //Check for end of exam
     $nextSerial = $serial + 1;
     $flag = $this->candidatesmodel->checkEndoftest(($serial),$assigned_exam_id);
     if($flag == 0 ) { $testEnd =  'Yes'; } else { $testEnd = 'No';}

     //return HTML elements
        if($testEnd == 'Yes')
        {
         // echo '<a href="'.site_url().'candidate/finishExam/'.$assigned_exam_id.'">Finish Exam</a> |
         // <a href="'.site_url().'candidate/reviewExam/'.$assigned_exam_id.'">Review</a>';
         //echo '<a class="redishBtn button_small" id="finishme" href="'.site_url().'candidate/finishExam/'.$assigned_exam_id.'">Finish Exam</a>';          
        }
        else
        {
          //Get answer ID from answers table
          $answer_id = $this->candidatesmodel->getAnsweridFromserial($serial,$assigned_exam_id);

          //Experiment- Add start time for a question here
          $this->candidatesmodel->updateQuestionstart($serial,$assigned_exam_id);

          //Update status of assigned exam to '2' for incomplete
          $this->candidatesmodel->updateExam($assigned_exam_id,'2');


          //Get Question ID from answer_id
          $question = $this->candidatesmodel->getoneQuestion($answer_id);

          echo "<div class='question'><p>".$serial.".</p>".$question->question."</div>"; 
          if($question->exhibit) { echo '<img width="500px" src="'.site_url('exhibit/'.$question->exhibit).'" alt="exhibit"/><br/>';}
          $options = $this->candidatesmodel->showAnsweroptions($question->q_id);
          echo "<div class='optionss'>".$options;
           
          //Add Gategory description as a hint for the Question
          $categoryDesc = $this->candidatesmodel->getcategoryDesc($question->category);
          echo '<br/><br/><small>* '.$question->category.' - '.$categoryDesc->description.' </small>';

          echo '<input type="hidden" value="'.$answer_id.'" id="answer_id"/>';   
          echo '<input type="hidden" value="'.$nextSerial.'" id="next_serial"/>';
          echo '<input type="hidden" value="'.$assigned_exam_id.'" id="assigned_exam_id"/>';
          echo '</div>';

        }
   



   }
   
   function ajaxnextquesAvailability()
   {
   	 $serial           =  $this->input->post('next_serial');
   	 $assigned_exam_id =  $this->input->post('assigned_exam_id');

   	 $flag       = $this->candidatesmodel->checkEndoftest($serial,$assigned_exam_id);
     if($flag == 0 ) { echo  'Yes'; } else { echo  'No';} 
   }



  /*------------------------------------------------
    Updating answer
  -------------------------------------------------*/
   function updateAnswer()
   {
   	  //Get answer ARRAY
   	  //Get answer ID
   	  //Answered values
      $this->candidatesmodel->updateAnswer();

   }
  /*------------------------------------------------
    Review Exam - Later to Ajaxify for time counter
  -------------------------------------------------*/
   function reviewExam($assigned_exam_id)
   {
   		$data['assigned_exam_id'] = $assigned_exam_id;
	    $this->load->view('testReview',$data);
   }
// AJAX version
   function ajaxexamReview()
   {
      $assigned_exam_id = $this->input->post('assigned_exam_id');
      $testQuestions = $this->candidatesmodel->getQuestions($assigned_exam_id);
      foreach($testQuestions as $question)
          {
          	echo '<a class="bluishBtn button_small" href="'.site_url().'candidate/showQuestion/'.$question->answer_id.'/'.$question->serial.'/'.$assigned_exam_id.'">Q -'.$question->serial.'</a><br/>';
          }

   }

  /*------------------------------------------------
    Finish Exam
  -------------------------------------------------*/
   function finishExam($assigned_exam_id)
   {

   	 if ($this->candidatesmodel->updateExam($assigned_exam_id,'3'))
   	  {
   	  	$this->session->set_flashdata('success','Your exam finished, and submitted for review!');
   	  	redirect('candidate/exams');
   	  } 
   }


  /*------------------------------------------------
    Time left - Will update remaining minutes 
    on every ten seconds of exam
  -------------------------------------------------*/
   function ajax_timeleft()
   {
     $assigned_exam_id = $this->input->post('assigned_exam_id');
     $timeleft         = $this->input->post('timeleft');
     $this->candidatesmodel->ticker_timeLeft($assigned_exam_id,$timeleft);
   }

  /*------------------------------------------------
    Finish Exam
  -------------------------------------------------*/
   function ajax_endtest()
   {
     $assigned_exam_id = $this->input->post('assigned_exam_id');
     if($this->candidatesmodel->endExam($assigned_exam_id))
     {
      echo '<h1>You cannot attempt this test anymore!</h1>
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
      </div>';
     }
   }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */