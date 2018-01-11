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
    $this->load->library('email');
	}
	
	

/*---------------------------------------------*
 * Function for creting a user - 
 * Ripped down from tank_auth controller
 ----------------------------------------------*/ 	
  function create_candidate()
  {
 	
	//Get inputs 
	$email    = $this->input->post('email');
	$password = $this->input->post('password');
	//Send email activation as per tank_auth conf
	$email_activation = $this->config->item('email_activation', 'tank_auth');
	
	//Use tank_auth functions to create user
	if($this->tank_auth->create_user('1','',$email,$password,$email_activation)) 
	{
		 return true;
	}
	else {
		return false;
	}
	
  }
  
  
  
 /*---------------------------------------------*
 * Function for Listing candidates only 
  * from user table
 ----------------------------------------------*/	
  function show_candidates($status = 0,$per_page,$total)
  {
  	//Candidate role ID is primay setup value so it is hardcoded here	
	  if($total == '') { $total=0;}
  	$query = $this->db->query("SELECT user_id,user_slug,first_name,last_name,email,mobile FROM candidate_profile WHERE status='$status' ORDER BY user_id DESC LIMIT $total,$per_page");	
	  $results = $query->result();
	  return $results;
  	
  } 
/*--Count number of tests assigned per user--*/
  function show_candidate_countAssignedtests($user_id)
  {   
    $result    = $this->db->query("SELECT count('assign_id') AS ex_count FROM `assigned_exam_templates` WHERE user_id = '$user_id'")->row(); 
    return $result->ex_count;    
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
  /*--Candidate Last login information--*/
  function expand_lastLogininfo($user_id)
  {
    //Get login ID
    $getlogin_id = $this->db->query("SELECT login_id FROM candidate_profile WHERE user_id='$user_id'")->row();
    $login_id = $getlogin_id->login_id;
    //Get IP/Login details
    $getAccessdata = $this->db->query("SELECT last_ip,last_login,created FROM users WHERE id='$login_id'")->row();
    return $getAccessdata;
  }

  /*Sub function*/
  function expand_candidate_examhistory($user_id)
  {   
    $query      = $this->db->query("
                  SELECT
                    assigned_exam_templates.assign_id,   
                    assigned_exam_templates.exam_template_id ,
                    assigned_exam_templates.verdict , 
                    assigned_exam_templates.progress,
                    assigned_exam_templates.resumed_on, 
                    exam_main.exam_name 
                  FROM
                    assigned_exam_templates,
                    exam_main
                  WHERE 
                   assigned_exam_templates.user_id = '$user_id'
                  AND 
                   assigned_exam_templates.exam_template_id = exam_main.exam_id
                  "); 
    //AND assigned_exam_templates.progress = '2' -Temporary removal of code              
    $examhistory = $query->result();
    return $examhistory;   
  }
  /*--Get Candidate Name--*/
  function candidate_fullname($user_id)
  {   
    $results    = $this->db->query("SELECT first_name,last_name FROM candidate_profile WHERE user_id = '$user_id'")->row(); 
    return $results->first_name." ".$results->last_name;    
  } 


  
/*---------------------------------------------
 * Function for listing all test template
 * -------------------------------------------*/  
  function get_test_templates()
  {		
	$query      = $this->db->query("SELECT * FROM exam_main WHERE status='0'");	
	$tests_available = $query->result();
	return $tests_available;  	
  } 

/*---------------------------------------------
 * Function for listing all test template unassigned
 * -------------------------------------------*/  
  function get_test_templates_unassigned($user_id)
  {   
  $query      = $this->db->query("
    SELECT * FROM exam_main 
    WHERE NOT EXISTS (SELECT `exam_template_id` FROM assigned_exam_templates WHERE exam_main.exam_id = assigned_exam_templates.exam_template_id AND assigned_exam_templates.`user_id` = '$user_id' )
     AND status = '0'"); 
  $tests_available = $query->result();
  return $tests_available;    
  }  


/*------------------------------------------------
 * Save seleted test template for user
 * -----------------------------------------------*/
 function assign_test_save()
 {
 	//Get user  id and template_id
 	$data = array ("user_id"          => $this->input->post('user_id'),
 	               "exam_template_id" => $this->input->post('exam_template_id'),
                 "assigned_by"      => $this->tank_auth->get_user_id(), 
                 "assigned_on"      => time()
 	               );
	if($this->db->insert('assigned_exam_templates',$data)) 
	{
		return true;
	}
	else {
		return false;
	}			   
 }  

/*------------------------------------------------
 * Get candidate specific exams to evaluate
 * -----------------------------------------------*/
 function get_exams_toevaluate($user_id = NULL)
 {  
	
  if($user_id):
    $query = $this->db->query("SELECT assigned_exam_templates.assign_id,assigned_exam_templates.exam_template_id, exam_main.exam_name,assigned_exam_templates.verdict FROM assigned_exam_templates,exam_main WHERE assigned_exam_templates.user_id = '$user_id' AND assigned_exam_templates.progress = '3' AND assigned_exam_templates.exam_template_id = exam_main.exam_id");	
  else:
    $query = $this->db->query("
    SELECT
    candidate_profile.first_name,
    candidate_profile.last_name,
    assigned_exam_templates.user_id, 
    assigned_exam_templates.assign_id,
    assigned_exam_templates.exam_template_id, 
    exam_main.exam_name,
    assigned_exam_templates.date_attempt,
    assigned_exam_templates.verdict 
    FROM 
    assigned_exam_templates,
    exam_main,
    candidate_profile
    WHERE 
    assigned_exam_templates.progress = '3' 
    AND
    assigned_exam_templates.verdict = ''
    AND 
    assigned_exam_templates.exam_template_id = exam_main.exam_id
    AND 
    candidate_profile.user_id = assigned_exam_templates.user_id ORDER BY `date_attempt` DESC");
  endif;

  $result = $query->result();
	return $result;     
 }

/*------------------------------------------------*
 * Get answers
 * -----------------------------------------------*/
 function getAnswers($assigned_id)
 { 
 	$query      = $this->db->query("SELECT * FROM answers WHERE assigned_exam_id = '$assigned_id'");	
	$results    = $query->result();
	return $results; 	
 }

/*------------------------------------------------*
 * Get parts of question
 * -----------------------------------------------*/
 function getQuestionparts($q_id,$part = NULL)
 {

 	if(!$part) { $query = $this->db->query("SELECT * FROM question WHERE q_id = '$q_id'"); }
 	      else { $query = $this->db->query("SELECT $part FROM question WHERE q_id = '$q_id' "); }
	
  if($query->num_rows() > 0)
  {
    $results = $query->row();
  	return $results;
  }
  else
  {
    return FALSE;
  }

 }
 /*------------------------------------------------*
 * Get parts of question
 * -----------------------------------------------*/
 function getAnsweroptions($q_id,$type = NULL)
 {
       switch($type)
          {
            case 'radio':
                $query = $this->db->query("SELECT * FROM question_options WHERE q_id = '$q_id' AND is_answer='1'");
                $results = $query->row();
                return $results;
            break;                         	
            case 'checkbox':
                $query = $this->db->query("SELECT * FROM question_options WHERE q_id = '$q_id' AND is_answer='1'");
                $results = $query->result();
                return $results;
            break;
            case 'type':
                $query = $this->db->query("SELECT * FROM question_options WHERE q_id = '$q_id' AND is_answer='1'");
                $results = $query->row();
                return $results;
            break;                                       	                         
           } 	
 }
 /*------------------------------------------------*
 * Get option by option_id
 * -----------------------------------------------*/
 function getAnsweroptions_answer($answer_id)
 {
      
    $query = $this->db->query("SELECT answer_option FROM question_options WHERE opt_id = '$answer_id'");
    $results = $query->row();
    if($query->num_rows() > 0):
      return $results->answer_option;
    else:
      return "UA";
    endif;

 }

 /*------------------------------------------------*
 * Exam verdict updation - AJAX
 * -----------------------------------------------*/
 function add_exam_verdict($verdict, $assigned_exam_id, $verdict_note = NULL)
 {
   $data = array(
               'verdict'       => $verdict,
               'verdict_note'  => $verdict_note
            );

   $this->db->where('assign_id', $assigned_exam_id);
   if($this->db->update('assigned_exam_templates', $data)): return TRUE; endif; 
 }

/*------------------------------------------------*
 * Hire Candidate
 * -----------------------------------------------*/
 function hire_profile($user_id)
 {
    //Collect inputs
    $data =  array(
             'status'  => "1"
             );

    //Save to DB 
    $this->db->where('user_id', $user_id);
    if($this->db->update('candidate_profile',$data)): 
      return true;
    else:
      return false;
    endif;  
    //return
 }


  /*------------------------------------------------*
 * Update Candidate Status
 * -----------------------------------------------*/
 function reject_profile($user_id)
 {
    //Collect inputs
    $data =  array(
             'status'  => "2"
             );

    //Save to DB 
    $this->db->where('user_id', $user_id);
    if($this->db->update('candidate_profile',$data)): 
      return true;
    else:
      return false;
    endif;  
    //return
 }
  /*------------------------------------------------*
 * Update Candidate Status
 * -----------------------------------------------*/
 function reactivate_profile($user_id)
 {
    //Collect inputs
    $data =  array(
             'status'  => "0"
             );

    //Save to DB 
    $this->db->where('user_id', $user_id);
    if($this->db->update('candidate_profile',$data)): 
      return true;
    else:
      return false;
    endif;  
    //return
 }

 /*------------------------------------------------*
 * Exam verdict updation - AJAX
 * -----------------------------------------------*/
 function delete_profile($id)
 {
    //Get login ID by user ID
    $results = $this->db->query("SELECT login_id FROM candidate_profile WHERE user_id='$id'")->row();
    $login_id = $results->login_id;

    //Delete login data
    $this->db->where('id', $login_id);
    $this->db->delete('users'); 

    //Delete file
    $results  = $this->db->query("SELECT resumefile FROM candidate_profile WHERE user_id='$id'")->row();   
    $file   = './resumes/'.$results->resumefile;
    unlink($file);

    $this->db->where('user_id', $id);
    $this->db->delete('assigned_exam_templates'); 

    $this->db->where('user_id', $id);
    $this->db->delete('candidate_education'); 

    $this->db->where('user_id', $id);
    $this->db->delete('candidate_experience');   

    $this->db->where('user_id', $id);
    $this->db->delete('candidate_profile');  

    return TRUE;

	/*
	Structure assigned_exam_templates
	Structure candidate_education
	Structure candidate_experience
	Structure candidate_profile*/
 }

/*-----------------------------------------------------------
------------------  INTERVIEW SYSTEM --MODEL---------------------
-------------------------------------------------------------*/

 /*------------------------------------------------*
 * Interview verdict save - 25-Sep-2012
 * -----------------------------------------------*/
 function saveInterviewschedule()
 {
  //Get user  id and template_id
  $data = array ("user_id"      => $this->input->post('user_id'),
                 "title"        => $this->input->post('title'),
                 'scheduled_on' => $this->input->post('date'),
                 'interviewer'  => $this->input->post('interviewer'),
                 'venue'        => $this->input->post('venue')
                 );
  if($this->db->insert('interview_verdict',$data)): 
    return TRUE;
  else:
    return FALSE;
  endif;
 }
 /*------------------------------------------------*
 * Interview verdict save - 25-Sep-2012
 * -----------------------------------------------*/
 function getInterviewslist($user_id)
 {
    $results = $this->db->query("SELECT interview_id,title,scheduled_on,interviewer,interview_status FROM interview_verdict WHERE user_id='$user_id'")->result();
    if(!$results):
      return "No Data";
    else:
      return $results;
    endif;
 }

 /*------------------------------------------------*
 * Interview verdict save - 12-Sep-2012
 * -----------------------------------------------*/
 function save_interview()
 {
    $interview_id = $this->input->post('interview_id');
    //Collect inputs
    $data =  array(
             'user_id'          => $this->input->post('user_id'),
             'aptitude_rating'  => $this->input->post('aptitude_rating'),
             'technical_rating' => $this->input->post('technical_rating'),
             'verbal_rating'    => $this->input->post('verbal_ability'),
             'expected_pay'     => $this->input->post('expected_pay'),
             'current_pay'      => $this->input->post('current_pay'),
             'notice_period'    => $this->input->post('notice_period'),
             'summary'          => $this->input->post('summary'),
             'interview_status' => '1'
             );

    //Save to DB 
    $this->db->where('interview_id', $interview_id);
    if($this->db->update('interview_verdict',$data)): 
      return true;
    else:
      return false;
    endif;   
    //return
 }
  /*------------------------------------------------*
 * Interview verdict updation - 12-Sep-2012
 * -----------------------------------------------*/
 function update_interview($interview_id)
 {
    //Collect inputs
    $data =  array(
             'aptitude_rating'  => $this->input->post('aptitude_rating'),
             'technical_rating' => $this->input->post('technical_rating'),
             'verbal_rating'    => $this->input->post('verbal_ability'),
             'expected_pay'     => $this->input->post('expected_pay'),
             'current_pay'      => $this->input->post('current_pay'),
             'notice_period'    => $this->input->post('notice_period'),
             'summary'          => $this->input->post('summary'),
             );

    //Save to DB 
    $this->db->where('interview_id', $interview_id);
    if($this->db->update('interview_verdict',$data)): 
      return true;
    else:
      return false;
    endif;  
    //return
 }
 /*------------------------------------------------*
 * Get Interview verdict - 12-Sep-2012
 * -----------------------------------------------*/
 function getInterviewverdict($interview_id)
 {
    $results = $this->db->query("SELECT * FROM interview_verdict WHERE interview_id='$interview_id'")->row();
    if(!$results):
      return "No Data";
    else:
      return $results;
    endif;
 }
 /*------------------------------------------------*
 * Delete interview - 25-Sep-2012
 * -----------------------------------------------*/
 function deleteInterviewschedule($interview_id)
 {
    $this->db->where('interview_id', $interview_id);
    if($this->db->delete('interview_verdict')):
      return TRUE;
    else:
      return FALSE;
    endif;
 }



/*-----------------------------------------------------------
------------------  EM@IL SYSTEM --MODEL---------------------
-------------------------------------------------------------*/

 function new_emailTemplate()
 {
    //Collect inputs
    $data =  array(
             'template_title'   => $this->input->post('title'),
             'mail_body'        => $this->input->post('mail_body'),
             );

    //Save to DB 
    if($this->db->insert('email_templates',$data)) 
    {
      return true;
    }
    else {
      return false;
    }   
    //return
 }

 /*------------------------------------------------*
 * Get Email template list - 12-Sep-2012
 * -----------------------------------------------*/
 function mailTemplates()
 {
    $results = $this->db->query("SELECT et_id,template_title FROM email_templates")->result();
    return $results;

 }
 /*------------------------------------------------*
 * Delete Email template - 12-Sep-2012
 * -----------------------------------------------*/
 function delete_emailTemplate($et_id)
 {
    $this->db->where('et_id', $et_id);
    if($this->db->delete('email_templates')):
      return TRUE;
    else:
      return FALSE;  
    endif;

 }
/*------------------------------------------------*
 * Get Interview verdict - 12-Sep-2012
 * -----------------------------------------------*/
 function getCandidatemail($user_id)
 {
    $results = $this->db->query("SELECT email FROM candidate_profile WHERE user_id='$user_id'")->row();
    return $results->email;
 }
 /*------------------------------------------------*
 * Get Interview verdict - 12-Sep-2012
 * -----------------------------------------------*/
 function getTemplatecontents($et_id)
 {
    $results = $this->db->query("SELECT mail_body  FROM email_templates WHERE et_id='$et_id'")->row();
    return $results->mail_body;  
 }
 

/*-------------GLOBAL SEARCH SECTION--------24Sep*/
 /*------------------------------------------------*
 * Search Candidates - 24-Sep-2012
 * -----------------------------------------------*/
  function searchCandidates($searchKey)
  {
     $results = $this->db->query("
        SELECT 
        user_id,user_slug ,first_name,last_name, email 
        FROM 
        candidate_profile
        WHERE
        user_slug LIKE '%$searchKey%' 
        OR 
        first_name LIKE '%$searchKey%' 
        OR 
        last_name LIKE '%$searchKey%'
        OR
        email LIKE '%$searchKey%'
      ")->result();
     return $results;   
  }

/*---------------------------------------------*
 * Function for uploading and attaching
 ----------------------------------------------*/ 

  function upload_attachments()
   {

        //File upload testing
        $config['upload_path']   = './attachments'; // server directory
        $config['allowed_types'] = 'gif|jpg|png|bmp|doc|docx|rtf|txt|pdf|txt'; // by extension, will check for whether it is an image
        $config['max_size']      = '200000'; // in kb
        
        $this->load->library('upload', $config);
        $this->load->library('Multi_upload');
    
        $files = $this->multi_upload->go_upload();

        if (!$files)        
        {
            $error = array('error' => $this->upload->display_errors());
            return FALSE;
        }    
        else
        {
          return $files;
        }
   }


/*---Save Outgoing Emails to DB--*/
 function saveEmailmessage()
 {
     
     $file_data = $this->upload_attachments();

     $user_id  = $this->input->post('user_id');
     $email    = $this->getCandidatemail($user_id);
     $subject  = $this->input->post('subject');
     $mailbody = $this->input->post('mail_body');

     //Load this from configuration
     $website_name    = $this->config->item('portal_name', 'plus_hr');
     $webmaster_email = $this->config->item('webmaster_email', 'plus_hr');
     
     $data = array(
            'to_user'  => $user_id,
            'to_email' => $email,
            'subject'  => $subject,
            'message'  => $mailbody,
            'timestamp'=> time()
      ); 
      if($this->db->insert('messages', $data)):

       $message_id = $this->db->insert_id();

       $this->email->to($email);
       $this->email->from($webmaster_email, $website_name);            
       $this->email->subject($subject);
       $this->email->message($mailbody); 

      if($file_data)
      {
       foreach($file_data as $file) 
       {           
         $attachment = array (
                 'msg_id'     => $message_id,
                 'attachment' => $file['name']
                );                
         $this->db->insert('messages_attachments',$attachment);
         $this->email->attach('./attachments/'.$file['name']); 
       }
     }

       //Mailing
       $this->email->send();
       //echo $website_name.$webmaster_email;
      //echo $this->email->print_debugger();
        return TRUE;
      else:
        return FALSE;
      endif;  
 }

/*---------------------------------------------
 * Get all messages for for user
 * -------------------------------------------*/
 function getMessages($user_id)
 {
    $result = $this->db->query("SELECT * FROM messages WHERE to_user='$user_id' ORDER BY status DESC")->result();
    return $result;
 }

/*---------------------------------------------
 * Get existing verdict values
 * -------------------------------------------*/
function getExistingverdicts($assigned_exam_id)
{
  $result = $this->db->query("SELECT verdict,verdict_note FROM assigned_exam_templates WHERE assign_id='$assigned_exam_id'")->row();
  if($result->verdict):
   return $result->verdict." - ".$result->verdict_note;
  else:
   return NULL;
  endif;
}

/*-----------------------------------------------*/
}
/* End of file questionpool.php */
/* Location: ./application/modules/secure/models/questionpool.php */