<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Candidates extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('candidatesmodel');
    $this->load->library('email');
    $this->load->library('pagination');
	
		if (!$this->tank_auth->is_logged_in())  { redirect('/login');}
		//MOdule level acess blocking
		$this->tankracl->restrict('secure.secure');					
		
	}
	
/*---------------------------------------
 * List candidates
 * --------------------------------------*/	

	function index()
	{
	  		
    $data['candidates']=  $this->candidatesmodel->show_candidates();
	  $this->load->view('list_candidates',$data);		

	}


/*---------------------------------------
 * List all candidate
 * --------------------------------------*/	
	function showall()
	{

   
    $config['base_url']   = base_url().'secure/candidates/showall';
    $config['total_rows'] = $this->db->get_where('candidate_profile',array('status' => '0'))->num_rows();
    $config['per_page']   = 10;

    $config['num_links']      = 5;
    $config['uri_segment']    = 4;
    $config['full_tag_open']  = '<div id="pagination">';
    $config['full_tag_close'] = '</div>'; 
    $config['cur_tag_open']   = '<a class="redishBtn button_small" href="#" style="margin:2px; padding:2px 6px;">';
    $config['cur_tag_close']  = '</a>';
    
    $config['next_link'] = '&rarr;';
    $config['next_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['next_tag_close'] = '</div>';

    $config['prev_link'] = '&larr;';
    $config['prev_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['prev_tag_close'] = '</div>';         

    $config['num_tag_open']   = '<div class="whitishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['num_tag_close']  = '</div>';

    $this->pagination->initialize($config); 

    $perpage = $config['per_page'];
    $total   = $this->uri->segment(4);      


   $data['candidates']=  $this->candidatesmodel->show_candidates('0',$perpage,$total);
	 $this->load->view('list_candidates',$data);			

	}
/*---------------------------------------
 * List all rejected candidate
 * --------------------------------------*/ 
  function showrejected()
  {
     
    $config['base_url']   = base_url().'secure/candidates/showrejected';
    $config['total_rows'] = $this->db->get_where('candidate_profile',array('status' => '2'))->num_rows();
    $config['per_page']   = 10;

    $config['num_links']      = 5;
    $config['uri_segment']    = 4;
    $config['full_tag_open']  = '<div id="pagination">';
    $config['full_tag_close'] = '</div>'; 
    $config['cur_tag_open']   = '<a class="redishBtn button_small" href="#" style="margin:2px; padding:2px 6px;">';
    $config['cur_tag_close']  = '</a>';
    
    $config['next_link'] = '&rarr;';
    $config['next_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['next_tag_close'] = '</div>';

    $config['prev_link'] = '&larr;';
    $config['prev_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['prev_tag_close'] = '</div>';         

    $config['num_tag_open']   = '<div class="whitishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['num_tag_close']  = '</div>';

    $this->pagination->initialize($config); 

    $perpage = $config['per_page'];
    $total   = $this->uri->segment(4); 


    $data['candidates']=  $this->candidatesmodel->show_candidates('2',$perpage,$total);
    $this->load->view('list_rejected_candidates',$data);      

  }

 /*---------------------------------------
 * List all rejected candidate
 * --------------------------------------*/ 
  function showhired()
  {
     
    $config['base_url']   = base_url().'secure/candidates/showhired';
    $config['total_rows'] = $this->db->get_where('candidate_profile',array('status' => '1'))->num_rows();
    $config['per_page']   = 10;

    $config['num_links']      = 5;
    $config['uri_segment']    = 4;
    $config['full_tag_open']  = '<div id="pagination">';
    $config['full_tag_close'] = '</div>'; 
    $config['cur_tag_open']   = '<a class="redishBtn button_small" href="#" style="margin:2px; padding:2px 6px;">';
    $config['cur_tag_close']  = '</a>';
    
    $config['next_link'] = '&rarr;';
    $config['next_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['next_tag_close'] = '</div>';

    $config['prev_link'] = '&larr;';
    $config['prev_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['prev_tag_close'] = '</div>';         

    $config['num_tag_open']   = '<div class="whitishBtn button_small" style="margin:2px; padding:2px 6px;">';
    $config['num_tag_close']  = '</div>';

    $this->pagination->initialize($config); 

    $perpage = $config['per_page'];
    $total   = $this->uri->segment(4); 


    $data['candidates']=  $this->candidatesmodel->show_candidates('1',$perpage,$total);
    $this->load->view('list_hired_candidates',$data);      

  } 
/*---------------------------------------
 * Hire a candidate
 * --------------------------------------*/
   function hire($id)
   {          
  
  //$this->candidatesmodel->delete_profile($id);
  //Function to be re-writed to delete profile 
     if($this->candidatesmodel->hire_profile($id)){
          
        $this->session->set_flashdata('success', "Candidate hired successfully!");  
        redirect('secure/candidates/showall');    
     }
     else {
        $this->session->set_flashdata('error', "DB failure!");  
        redirect('secure/candidates/showall');         
     }
   }  


/*---------------------------------------
 * Reject a candidate
 * --------------------------------------*/
   function reject($id)
   {          
  
  //$this->candidatesmodel->delete_profile($id);
  //Function to be re-writed to delete profile 
     if($this->candidatesmodel->reject_profile($id)){
          
        $this->session->set_flashdata('success', "User rejected successfully!");  
        redirect('secure/candidates/showall');    
     }
     else {
        $this->session->set_flashdata('error', "DB failure!");  
        redirect('secure/candidates/showall');         
     }
   }  

/*---------------------------------------
 * Reject a candidate
 * --------------------------------------*/
   function reactivate($id)
   {          
  
  //$this->candidatesmodel->delete_profile($id);
  //Function to be re-writed to delete profile 
     if($this->candidatesmodel->reactivate_profile($id)){
          
        $this->session->set_flashdata('success', "User reactivated successfully!");  
        redirect('secure/candidates/showall');    
     }
     else {
        $this->session->set_flashdata('error', "DB failure!");  
        redirect('secure/candidates/showall');         
     }
   }  

/*---------------------------------------
 * Delete a candidate
 * --------------------------------------*/
   function delete($id)
   {	   			
	
	//$this->candidatesmodel->delete_profile($id);
	//Function to be re-writed to delete profile 
  	 if($this->candidatesmodel->delete_profile($id)){
  				
  			$this->session->set_flashdata('success', "User deleted successfully!");  
  			redirect('secure/candidates/showall');	 	
  	 }
  	 else {
  			$this->session->set_flashdata('error', "Deletion failed!");  
  			redirect('secure/candidates/showall');	 			 
  	 }
   }   
   
/*---------------------------------------
 * Show One Single candidate
 * --------------------------------------*/ 
   function expand($user_id)
   {
   	 $data['candidate']   =  $this->candidatesmodel->expand_candidate($user_id);
	   $data['education']   =  $this->candidatesmodel->expand_candidate_education($user_id);
	   $data['experience']  =  $this->candidatesmodel->expand_candidate_experience($user_id);
	   $data['examhistory'] =  $this->candidatesmodel->expand_candidate_examhistory($user_id);
     $data['lastlogin']   =  $this->candidatesmodel->expand_lastLogininfo($user_id);
	 
	   $this->load->view('fullview_candidate',$data);	   	
   }
 
 
/*---------------------------------------
 * Load assign test view with available 
 * templates
 * --------------------------------------*/	

	function assign_test($user_id)
	{
   	 	
	 //Getting test templates	
	 $data['user_id']        = 	$user_id;
   $data['test_templates'] =  $this->candidatesmodel->get_test_templates_unassigned($user_id);
	 $this->load->view('assignTest',$data);			

	} 
 /*---------------------------------------
  * Function for saving exam template choice
  * --------------------------------------*/
   function assign_test_save()
   {
		$user_id = $this->input->post('user_id');
			
		if($this->candidatesmodel->assign_test_save()): 
			$this->session->set_flashdata('success', "Test template assigned for user!");  
			redirect('secure/candidates/expand/'.$user_id);
		else:
			$this->session->set_flashdata('error', "Data updation failure!");  
			redirect('secure/candidates/expand/'.$user_id);				
		endif;	   	
   }
 
 /*---------------------------------------
  * Function for saving exam template choice
  * --------------------------------------*/
   function evaluationlist($user_id)
   {
     //get user id
     //get  exams with status 2 from exams list where user_id
     $exams_to_evaluate         = $this->candidatesmodel->get_exams_toevaluate($user_id);
     $data['exams_to_evaluate'] = $exams_to_evaluate;
     $data['user_id']           = $user_id;
     $this->load->view('evaluations',$data);
     
     //load view with data; 
   }

 /*---------------------------------------
  * Function for saving exam template choice
  * --------------------------------------*/
   function evaluate($user_id,$assigned_exam_id)
   {
     //get questions list from answers
   	 $data['answers']          = $this->candidatesmodel->getAnswers($assigned_exam_id);
   	 $data['user_id']          = $user_id;
   	 $data['assigned_exam_id'] = $assigned_exam_id;
     $data['existing_verdict'] = $this->candidatesmodel->getExistingverdicts($assigned_exam_id);
   	 $this->load->view('evaluateExam',$data);
   	 //Load answered key
   	 //Get type and answer options from collected question id 
   }

 /*---------------------------------------
  * Function for AJAX add verdict
  * --------------------------------------*/
   function ajax_add_verdict()
   {
     
     $assigned_exam_id = $this->input->post('assigned_exam_id');
     $verdict          = $this->input->post('verdict');
     $verdict_note     = $this->input->post('verdict_note');

    if($this->candidatesmodel->add_exam_verdict($verdict ,$assigned_exam_id,$verdict_note )): 
			echo '<div class="msgbar msg_Success hide_onC">Action successfull</div>'; 
		else:
			echo '<div class="msgbar msg_Error hide_onC">Action failed to perform</div>'; 			
		endif;	      
     
   }

/*---------------------------------------
 * Load assign test view with available 
 * templates 10-Sep-2012
 * --------------------------------------*/	

	function unassign_test($assigned_exam_id,$user_id)
	{
   	 	
	//Remove all the answers created
  $this->db->where('assign_id', $assigned_exam_id);
  if($this->db->delete('assigned_exam_templates')):
      //Remove all the answers created
      $this->db->where('assigned_exam_id', $assigned_exam_id);
      $this->db->delete('answers');
      $this->iface->log('Test unassigned for user ID:'.$user_id); 
			$this->session->set_flashdata('success', "Test unassigned sucessfully!");  
			redirect('secure/candidates/expand/'.$user_id);
	else:
			$this->session->set_flashdata('error', "Data updation failure!");  
			redirect('secure/candidates/expand/'.$user_id);				
	endif;	      	

	
	} 
 
 /*---------------------------------------
  * 12-Sep-2012 - Interview        TEMP DISCONTINUED
  * --------------------------------------*/
   //  function interview($user_id)
   //  {

   //    //Check whether verdict added if yes return verdict with edit form
   //  	 //If no verdict added display the form
   //    $interview_verdict = $this->candidatesmodel->getInterviewverdict($user_id);

   // if($interview_verdict == 'No Data'):
	 //     $data['user_id']           = $user_id;
	 //     $this->load->view('interview_verdict',$data);  
	 // else:
	 // 	 $data['user_id']           = $user_id;
	 // 	 $data['verdict_data']      = $interview_verdict;
	 //     $this->load->view('interview_verdict_display',$data);
	 // endif;          
   //    //load view with data; 
   //  }
/*--List of interviews for user--*/
  function interview($user_id)
  {
    //Load interviews list 
    $data['user_id']         = $user_id;
    $data['list_interviews'] = $this->candidatesmodel->getInterviewslist($user_id);
    $this->load->view('interview_list',$data);
  }
/*--Load view--*/
  function newInterviewschedule($user_id)
  {
    //Load interviews list 
    $data['user_id']         = $user_id;
    $this->load->view('interview_new_schedule',$data);
  }
/*--save the schedule--*/
function saveInterviewschedule()
{
    $user_id = $this->input->post('user_id');     
    if($this->candidatesmodel->saveInterviewschedule()): 
      $this->session->set_flashdata('success', "Interview Schedule added!");  
      redirect('secure/candidates/newInterviewschedule/'.$user_id);
    else:
      $this->session->set_flashdata('error', "Data updation failure!");  
      redirect('secure/candidates/newInterviewschedule/'.$user_id);       
    endif;    
}

/*--Add new interview details--*/
 function addInterviewdetails($user_id,$interview_id)
 {
   $data['user_id']       = $user_id;
   $data['interview_id']  = $interview_id;
   $this->load->view('interview_verdict',$data);     
 }

/*--Show Interview Details--*/
 function showInterviewdetails($user_id,$interview_id)
 {
    $interview_verdict         = $this->candidatesmodel->getInterviewverdict($interview_id);
    $data['user_id']           = $user_id;
    $data['interview_id']      = $interview_id;
    $data['verdict_data']      = $interview_verdict;
    $this->load->view('interview_verdict_display',$data);    
 }

 /*---------------------------------------
  * 12-Sep-2012 - Interview
  * --------------------------------------*/
   function interview_edit($user_id,$interview_id)
   {
   	  $interview_verdict = $this->candidatesmodel->getInterviewverdict($interview_id);
    	$data['user_id']           = $user_id;
      $data['interview_id']      = $interview_id;
	 	  $data['verdict_data']      = $interview_verdict;
	    $this->load->view('interview_verdict_edit',$data);
   }

 /*---------------------------------------
  * 12-Sep-2012 - Save Interview
  * --------------------------------------*/
   function save_interview()
   {

     //Check whether verdict added if yes return verdict with edit form
   	 //If no verdict added display the form
   	$user_id = $this->input->post('user_id');
    $interview_id = $this->input->post('interview_id');

    if($this->candidatesmodel->save_interview()): 
        $this->session->set_flashdata('success', "Interview verdict saved!");  
			 redirect('secure/candidates/showInterviewdetails/'.$user_id.'/'.$interview_id);
		else:
			  $this->session->set_flashdata('error', "Data insertion failed!");
			  redirect('secure/candidates/addInterviewdetails/'.$user_id.'/'.$interview_id);			
		endif;	  
     //load view with data; 
   }
 /*---------------------------------------
  * 12-Sep-2012 - update Interview
  * --------------------------------------*/
   function update_interview()
   {

     //Check whether verdict added if yes return verdict with edit form
   	 //If no verdict added display the form
   	 $user_id = $this->input->post('user_id');
     $interview_id = $this->input->post('interview_id');

    if($this->candidatesmodel->update_interview($interview_id)): 
        	$this->session->set_flashdata('success', "Interview verdict updated!");  
			    redirect('secure/candidates/showInterviewdetails/'.$user_id.'/'.$interview_id);
		else:
			$this->session->set_flashdata('error', "Data insertion failed!");
			redirect('secure/candidates/showInterviewdetails/'.$user_id.'/'.$interview_id);			
		endif;	  
     //load view with data; 
   }
 /*---------------------------------------
  * 12-Sep-2012 - update Interview
  * --------------------------------------*/
   function cancelInterview($user_id,$interview_id)
   {
    if($this->candidatesmodel->deleteInterviewschedule($interview_id)): 
      $this->session->set_flashdata('success', "Interview schedule deleted!");  
      redirect('secure/candidates/interview/'.$user_id);
    else:
      $this->session->set_flashdata('error', "Data insertion failed!");
      redirect('secure/candidates/interview/'.$user_id);     
    endif;  
   }   
/*------------------------------------------------*
 * send interview email - 12-Sep-2012
 * -----------------------------------------------*/
 function interviewEmail($user_id,$interview_id,$subject_key = NULL)
 {

    $data['email_id']        = $this->candidatesmodel->getCandidatemail($user_id);
    $data['user_id']         = $user_id;
    $data['email_templates'] = $this->candidatesmodel->mailTemplates(); 
    $data['emailSubject']    = $subject_key;
    $data['interview_id']    = $interview_id;

    $this->load->view('sendmail',$data);
  
 }

/*-----------------------------------------------------------
------------------  EM@IL SYSTEM ---CONTROLLER---------------
-------------------------------------------------------------*/


 /*---------------------------------------
  * 12-Sep-2012 - Create Email template
  * --------------------------------------*/
   function emails()
   {
   	 $data['mail_templates'] = $this->candidatesmodel->mailTemplates();

   	 $this->load->view('email_dashboard',$data);
   }

 /*---------------------------------------
  * 12-Sep-2012 - Create Email template
  * --------------------------------------*/
   function newtemplate()
   {
        if($this->candidatesmodel->new_emailTemplate()): 
        	$this->session->set_flashdata('success', "New email template added!");  
			redirect('secure/candidates/emails');
		else:
			$this->session->set_flashdata('error', "Data insertion failed!");
			redirect('secure/candidates/emails');			
		endif;	 
   }
 /*---------------------------------------
  * 12-Sep-2012 - Delete Email template
  * --------------------------------------*/
   function delete_emailtemplate($et_id)
   {
    if($this->candidatesmodel->delete_emailTemplate($et_id)): 
        $this->session->set_flashdata('success', "Email template deleted!");  
			  redirect('secure/candidates/emails');
		else:
			 $this->session->set_flashdata('error', "DB operations failed!");
			 redirect('secure/candidates/emails');			
		endif;	 
   }

 /*---------------------------------------
  * 12-Sep-2012 - Get Email templ
  * --------------------------------------*/
   function sendmail($user_id)
   {
   	  //Get user email
   	  $data['email_id']        = $this->candidatesmodel->getCandidatemail($user_id);
   	  $data['user_id']         = $user_id;
   	  $data['email_templates'] = $this->candidatesmodel->mailTemplates();
      $data['emailSubject']    = '';
      $data['interview_id']    = '';

   	  $this->load->view('sendmail',$data);
   }

 /*---------------------------------------
  * 12-Sep-2012 - Delete Email template
  * --------------------------------------*/
   function getEmailtemplatedata()
   {
   	 $et_id   = $this->input->post('et_id');
     $user_id = $this->input->post('user_id');
     $interview_id = $this->input->post('interview_id');
     //Interview ID

     //Get Name of user
     $fullName      = $this->candidatesmodel->candidate_fullname($user_id);
     $interviewdata = $this->candidatesmodel->candidate_fullname($user_id); 
   	 $dat = $this->candidatesmodel->getTemplatecontents($et_id);
     //Will replace <NAME> in a template
     $dats = str_replace('&lt;NAME&gt;', $fullName, $dat);  
   	 echo $dats;

   }
 /*---------------------------------------
  * 13-Sep-2012 - Send Email
  * --------------------------------------*/
  function sendEmail()
  {
     $user_id  = $this->input->post('user_id');
     if( $this->candidatesmodel->saveEmailmessage()):
        $this->session->set_flashdata('success', "Message sent successfully!");  
        redirect('secure/candidates/messages/'.$user_id);
     else:
        $this->session->set_flashdata('error', "Sending failed!");  
        redirect('secure/candidates/messages/'.$user_id);      
     endif;
    //$this->candidatesmodel->saveEmailmessage();

  }

 /*---------------------------------------
  * 28-Sep-2012 - Show All pending reviews
  * --------------------------------------*/
 function pendingReviews()
 {
   //Get all pending reviews
   $data['pendingReviews'] = $this->candidatesmodel->get_exams_toevaluate();
   $this->load->view('pending_reviews',$data);

 }
 /*---------------------------------------
  * 01-Oct-2012 - Show All messages to user
  * --------------------------------------*/
 function messages($user_id)
 {
   $data['user_id'] = $user_id;
   $data['list_messages']   = $this->candidatesmodel->getMessages($user_id);
   $this->load->view('messages_list',$data);
 }


/*------------------------------------------*/
}
/* End of file candidates.php */
/* Location: ./application/modules/secure/controllers/candidates.php */