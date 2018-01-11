<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - users,
 * - user
 *
 * @package	Sedcure
 * @author	Rakesh (http://pixelglimpse.com/)(for:eglueweb.com)
 */
class Candidatesmodel extends CI_Model
{


	function __construct()
	{
		parent::__construct();
	}
	
/*---------------------------------------------
 * Expanded view of single candidate
 * -------------------------------------------*/ 
  function expand_candidate($user_id)
  {		
	$query    = $this->db->query("SELECT * FROM candidate_profile WHERE user_id = '$user_id'");	
	$results  = $query->result();
	return $results;  	
  } 
  /*Sub function*/
  function expand_candidate_education($user_id)
  {		
	$query     = $this->db->query("SELECT * FROM candidate_education WHERE user_id = '$user_id'");	
	$education = $query->result();
	return $education;  	
  } 
  /*Sub function*/
  function expand_candidate_experience($user_id)
  {		
	$query      = $this->db->query("SELECT * FROM candidate_experience WHERE user_id = '$user_id'");	
	$experience = $query->result();
	return $experience;  	
  }   
  
  
/*---------------------------------------------
 * Append education details of existing user
 * -------------------------------------------*/  
  function append_education()
  {
  	//Get candidate ID
  	$user_id = $this->tankracl->candidate_id();
  	//Get education datas
  	         //Other Education data only
			  $other_edu_names_all = $this->input->post('ot_college');
			  //Filtering for avoiding nulls
			  $other_edu_names = array_filter($other_edu_names_all, 'strlen');
			  $count_names     = count($other_edu_names);
			  $ot_passing      = $this->input->post('ot_passing');
			  $ot_score        = $this->input->post('ot_score');		  
              if($count_names > 0)
		      {	
				   for($i=0;$i<$count_names;$i++)
				   {
					 $others = array (
					    'user_id'        => $user_id,
					    'institute'      => $other_edu_names[$i],
					    'year'           => $ot_passing[$i],
					    'score'          => $ot_score[$i],
					    'type'           => 'Other'	
					 );
					 //Insert to DB
					 $this->db->insert('candidate_education',$others);
				   }
				   return TRUE;

		       }
		       else {
		       	return FALSE;
		       }		

  }
/*---------------------------------------------
 * Append experience details of existing user
 * -------------------------------------------*/  
  function append_experience()
  {
  	//Get candidate ID
  	$user_id = $this->tankracl->candidate_id();

              $careers_all = $this->input->post('company');
			  //Filtering for avoiding nulls
			  $careers       = array_filter($careers_all, 'strlen');
			  $count_comps   = count($careers);
			  $role          = $this->input->post('role');
			  $months        = $this->input->post('months');		  
              if($count_comps > 0)
		      {	
				   for($i=0;$i<$count_comps;$i++)
				   {
					 $work = array (
					    'user_id'        => $user_id,
					    'company_name'   => $careers[$i],
					    'role'           => $role[$i],
					    'months'         => $months[$i],
					 );
					 //Insert to DB
					 $this->db->insert('candidate_experience',$work);

				   }
                  return true;
		       } else return FALSE;		
  	        
  }	
  /*---------Quiz specific------------*/
/*-Update the date of test attempt-*/
  function updateExamdate($assigned_exam_id)
  {
    $date = date('d-m-Y, H:i:s');
    $data['date_attempt'] = $date;
    $this->db->where('assign_id', $assigned_exam_id);
    $this->db->update('assigned_exam_templates', $data);

  }

/*---------------------------------------------
 * Available exams for the user
 * -------------------------------------------*/
   function availableExams($user_id)
   {
	 $query      = $this->db->query("SELECT * FROM assigned_exam_templates WHERE user_id = '$user_id'");	
	 return $query->result(); 
   }
   /*--sub---*/
   function examTemplatedetails($exam_template_id)
   {
   	 $query      = $this->db->query("SELECT * FROM exam_main WHERE  exam_id = '$exam_template_id'");	
	   $result     =  $query->row(); 
	   return $data = array("exam_name" => $result->exam_name,"exam_desc" => 'This is a test');
   }

/*---------------------------------------------
 * Available exams segements
 * -------------------------------------------*/
 function getExamSegments ($exam_id)
 {
 	 $query      = $this->db->query("SELECT * FROM exam_segments WHERE exam_id = '$exam_id'");	
	 return $query->result(); 	
 }

/*---------------------------------------------
 * Get Questions based on preference
 * -------------------------------------------*/
 function getRandomquestions($category,$level,$answermode,$count)
 {
    $query = $this->db->query("SELECT q_id FROM question WHERE category ='$category' AND  level='$level' AND answer_type ='$answermode' ORDER BY rand() Limit $count");
    $questions = $query->result(); 
    $data = array();
    foreach($questions as $row)
    {
    	$data[] = $row->q_id;
    }
    return $data;
 }

/*---------------------------------------------
 * Exam progress checker | to check wether exam already begun
 * -------------------------------------------*/
 function getexamProgress($user_id,$exam_id)
 {
    $query = $this->db->query("SELECT progress FROM assigned_exam_templates WHERE user_id ='$user_id' AND exam_template_id='$exam_id'");
    $status_result =  $query->row(); 
    return $status_result->progress;
 }
/*---------------------------------------------
 * Exam progress checker | to check wether exam already begun
 * -------------------------------------------*/
 function getexamProgress_byassigned($user_id,$assigned_exam_id)
 {
    $query = $this->db->query("SELECT progress FROM assigned_exam_templates WHERE user_id ='$user_id' AND assign_id='$assigned_exam_id'");
    $result =  $query->row(); 
    //echo $user_id.$assigned_exam_id;
    return $result->progress;
 }
/*---------------------------------------------
 * Get all messages for per user
 * -------------------------------------------*/
 function getMessages($user_id)
 {
    $result = $this->db->query("SELECT * FROM messages WHERE to_user='$user_id' ORDER BY status ASC")->result();
    return $result;
 }
/*---------------------------------------------
 * Message full view
 * -------------------------------------------*/
 function getMessagecontents($msg_id)
 {
    $result = $this->db->query("SELECT * FROM messages WHERE msg_id='$msg_id'")->row();
    return $result;
 }

 /*--Update message status--*/
 function updateMessagestatus($msg_id)
 {
    $data['status'] = '1';
    $this->db->where('msg_id', $msg_id);
    $this->db->update('messages',$data);  
 }

/*---------------------------------------------
 * Create answer slots - ANSWERS table
 * -------------------------------------------*/ 
 function addansewerSlots($array)
 {
 	$this->db->insert('answers',$array);
 }

/*---------------------------------------------
 * Get questions
 * -------------------------------------------*/ 
 function getQuestions($assigned_exam_id,$rowcount = NULL, $limit = NULL)
 {
 	//$rowcount is for returning number of rows. It can be any value

 	if($limit) { $add_filter = "LIMIT $limit";} else { $add_filter = "";}
 	if($rowcount)
 	{
       $rowscount = $this->db->query("SELECT answer_id,question_id,serial FROM answers WHERE assigned_exam_id ='$assigned_exam_id'")->num_rows();
       return $rowscount;
 	}
 	else
 	{
	   $query = $this->db->query("SELECT answer_id,question_id,serial FROM answers WHERE assigned_exam_id ='$assigned_exam_id' $add_filter;");
	   $questions = $query->result(); 
	   return $questions;
    }
    
 }
 /*---------------------------------------------
 * Get questions -11-9-2012
 * -------------------------------------------*/ 
 function getQuestions_resume($assigned_exam_id,$rowcount = NULL, $limit = NULL)
 {
  
   
  if($limit) { $add_filter = "LIMIT $limit";} else { $add_filter = "";}
  if($rowcount)
  {
       $rowscount = $this->db->query("SELECT answer_id,question_id,serial FROM answers WHERE assigned_exam_id ='$assigned_exam_id'")->num_rows();
       return $rowscount;
  }
  else
  {
     $query = $this->db->query("SELECT answer_id,question_id,serial FROM answers WHERE assigned_exam_id ='$assigned_exam_id' AND answer_start='' OR answer_end='' $add_filter;");
     $questions = $query->result(); 
     return $questions;
    }
    
 }
/*---------------------------------------------
 * Get single question from ANSWER id -pre added q_id - QUIZ CORE
 * -------------------------------------------*/ 
 function getoneQuestion($answer_id)
   {
     //Get question ID
   	   $query         = $this->db->query("SELECT question_id FROM answers WHERE answer_id ='$answer_id'");
       $query_result  =  $query->row(); 
       $question_id   =  $query_result->question_id;
     //Get the Question
       $qst_query     = $this->db->query("SELECT * FROM question WHERE q_id ='$question_id'");
       $qst_result    = $qst_query->row();
       return $qst_result;

   }
 /*--Get answerID from question serial number assigned*/ 
 function getAnsweridFromserial($serial,$assigned_exam_id) 
  { 
      $query         = $this->db->query("SELECT answer_id FROM answers WHERE `serial` ='$serial' AND assigned_exam_id = '$assigned_exam_id'");
      $query_result  =  $query->row(); 
      return  $query_result->answer_id;
  }
  /*--Check for end of exam/test --*/
  function checkEndoftest($serial,$assigned_exam_id)
  {
  	//Checking for next serial request , if not available end of test
  	$queryCount    = $this->db->query("SELECT answer_id FROM answers WHERE `serial` ='$serial' AND assigned_exam_id = '$assigned_exam_id'")->num_rows();
    return $queryCount;
  }

   /*--Show options of questions based on type--*/
   function showAnsweroptions($question_id)
   {
      //Check question type using question ID
      $query         = $this->db->query("SELECT answer_type FROM question WHERE `q_id` ='$question_id'");
      $query_result  = $query->row(); 
      $answer_type   = $query_result->answer_type;

      $qry_getOptions = $this->db->query("SELECT opt_id,q_id,answer_option FROM question_options WHERE `q_id` ='$question_id'");
      $result_option  = $qry_getOptions->result(); 


      switch($answer_type){
        case 'radio':
          //Fetch answers
          $radio = '';
          foreach($result_option as $radioVals)
          {

            $radio  .= '<input type="radio" name="answer" id="answer" value="'.$radioVals->opt_id.'"/>&nbsp;'.$radioVals->answer_option.'<br/>';
          }
          return $radio;
        break;

        case 'check':
          $check = '';
          foreach($result_option as $checkVals)
          {

            $check  .= ' <input type="checkbox" name="answer[]"  id="answer" value="'.$checkVals->opt_id.'"/>&nbsp;'.$checkVals->answer_option.'<br/>';
          }        
          return $check;
        break;

        case 'type':
          $type =  '<textarea name="answer" id="answer" class="editor" cols="80" rows="10"></textarea>';
          return $type;
        break;

      }

       //Switch type RADIO, CHECKBOX, TYPE

       //Load input with same name, for check box as an array

   }

/*---------------------------------------------
 * 11-Sep-2012 : get category description and show on question
 * -------------------------------------------*/ 
 function getcategoryDesc($category)
   {

     //Get the Question
       $query     = $this->db->query("SELECT description FROM  question_categories WHERE category ='$category'");
       $result    = $query->row();
       return $result;

   }

  /*------------------------------------------------
    Updating answer
  -------------------------------------------------*/
  function updateAnswer()
  {

      $answer_id = $this->input->post('answer_id');
      $answer    = $this->input->post('answer');    
      $data = array(
               'answer'    => $answer,
               'answer_end'=> time() 
            );
      $this->db->where('answer_id', $answer_id); 
      $this->db->update('answers', $data); 
  }
  /*------------------------------------------------
    Finish Exam 
  -------------------------------------------------*/
  function updateExam($assigned_exam_id,$status)
  {
    $object = array('progress' => $status);
    $this->db->where('assign_id', $assigned_exam_id);
    if($this->db->update('assigned_exam_templates', $object))
    {
     return  true;
    }

  }
  /*------------------------------------------------
    Finish Exam  - AJAX WAY
  -------------------------------------------------*/
  function endExam($assigned_exam_id)
  {
    $this->updateExam($assigned_exam_id,'2');
    return TRUE;
  }
  /*------------------------------------------------
    14-Sep-2012 - Record time on RESUMING
  -------------------------------------------------*/
  function resumeTest($assigned_exam_id)
  {
    $object = array('resumed_on ' => time());
    $this->db->where('assign_id', $assigned_exam_id);
    if($this->db->update('assigned_exam_templates', $object))
    {
     return  true;
    }

  }

  /*------------------------------------------------
    Finish Exam  - AJAX WAY - Added on 9-Sep-2012
  -------------------------------------------------*/
  function getExamdescription($exam_id)
  {
    
    //Get description from exam_main
    $getDesc = $this->db->query("SELECT description FROM exam_main WHERE exam_id ='$exam_id'")->row();

    //Get exam segments and question count
    $examsegments = $this->getExamSegments($exam_id);
    $descAppend = '';
    foreach($examsegments AS $row)
    {
      switch($row->answer_mode)
      {
        case 'type':
         $aType = " Type the answer";
        break;
        case 'radio':
         $aType = " Opt one answer";
        break; 
        case 'check':
         $aType = " Opt one or more answers";
        break;                  
      }

      $descAppend .= $row->category." - ".$aType." - ".$row->question_count." question(s)<br/>";
    }
    
    //Merge exam description and exam segments details
    $description = $getDesc->description."<br/><h5>Questionset Information</h5>".$descAppend;
    return $description; 

  }


 /*------------------------------------------------
    Get the total_time for an exam in minutes- Added on 9-Sep-2012
  -------------------------------------------------*/
  function getTotaltime($assigned_exam_id)
  {
   
   $getTime = $this->db->query("SELECT 
      exam_main.total_time
    FROM
      assigned_exam_templates,
      exam_main
    WHERE 
       assigned_exam_templates.`exam_template_id` = exam_main.exam_id
    AND
       assigned_exam_templates.`assign_id` = '$assigned_exam_id'")->row();

    return $getTime->total_time;


  }
 /*------------------------------------------------
    Get the total_time for an exam in minutes- Added on 9-Sep-2012
  -------------------------------------------------*/
  function getTimeleft($assigned_exam_id)
  {
    $getTl = $this->db->query("SELECT time_left FROM assigned_exam_templates WHERE assign_id ='$assigned_exam_id'")->row();
    return $getTl->time_left;
  }
 /*------------------------------------------------
    Get the total_time for an exam in minutes- Added on 9-Sep-2012
  -------------------------------------------------*/
  function updateQuestionstart($serial,$assigned_exam_id)
  {
      $data = array(
               'answer_start'=> time() 
            );
      $this->db->where('serial', $serial); 
      $this->db->where('assigned_exam_id', $assigned_exam_id); 
      $this->db->update('answers', $data);  
  }
 /*------------------------------------------------
    Get the total_time for an exam in minutes- Added on 24-Sep-2012
  -------------------------------------------------*/
  function ticker_timeLeft($assigned_exam_id,$timeleft)
  {
      $data = array(
               'time_left'=> $timeleft 
            );
      $this->db->where('assign_id', $assigned_exam_id); 
      $this->db->update('assigned_exam_templates', $data); 
  }


/* Ending core class */
}

/* End of file questionpool.php */
/* Location: ./application/modules/secure/models/questionpool.php */