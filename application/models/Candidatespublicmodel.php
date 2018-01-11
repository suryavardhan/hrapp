<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - users,
 * - user
 *
 * @package	Sedcure
 * @author	Rakesh (http://pixelglimpse.com/)
 */
class Candidatespublicmodel extends CI_Model
{


	function __construct()
	{
		parent::__construct();
		$this->load->library('iface');
		$this->load->library('tank_auth');
		$this->load->library('form_validation');
		$this->load->library('recaptcha');
		$this->lang->load('recaptcha');			
	}
	
	

/*---------------------------------------------*
 * Function for creting a user - 
 * Ripped down from tank_auth controller
 ----------------------------------------------*/ 	
  function new_candidate()
  {
		//File upload
		$config['upload_path'] = './resumes/';
		$config['allowed_types'] = 'doc|docx|xml|rtf|txt|pdf|odt';
		$config['max_size']	= '5000';
		$config['file_name']  = time();
					
	 $this->load->library('upload', $config);		

        $email    = $this->input->post('email');
	    $password = $this->input->post('confpassword');
		$email_activation = $this->config->item('email_account_details', 'tank_auth');	
		//2 - Is role for candidates in users section - Its a primary Role cannot be deleted
		if($this->tank_auth->create_user('2','',$email,$password,$email_activation)) 
		{			 
			 return TRUE;	

		}		
		else 
		{
			//Incase of data insertion errors
			return false;
		}
					
	//On Sucessful upload	
	// $this->upload->do_upload('resume');

	// print_r($this->upload->display_errors());
	
 //  else
	// {
	// 		   //$this->session->set_flashdata('error', "File Upload Error!");  
	// 		   //redirect('/home/index');
	// 	       print($file_data);
	// }			  	  

}//Ends function


			 //Insert work experience data to candidate_experinece table
			 //  $careers_all = $this->input->post('company');
			 //  //Filtering for avoiding nulls
			 //  $careers       = array_filter($careers_all, 'strlen');
			 //  $count_comps   = count($careers);
			 //  $role          = $this->input->post('role');
			 //  $months        = $this->input->post('months');		  
    //           if($count_comps > 0)
		  //     {	
				//    for($i=0;$i<$count_comps;$i++)
				//    {
				// 	 $work = array (
				// 	    'user_id'        => $user_id,
				// 	    'company_name'   => $careers[$i],
				// 	    'role'           => $role[$i],
				// 	    'months'         => $months[$i],
				// 	 );
				// 	 //Insert to DB
				// 	 $this->db->insert('candidate_experience',$work);
				//    }

		  //      }			  			  
			 //  //Basic Education Details
			 //  //School
			 //  $school = array(
			 //    'user_id'        => $user_id,
			 //    'institute'      => $this->input->post('school')." (".$this->input->post('sc_syllabus').")",
			 //    'year'           => $this->input->post('sc_passing'),
			 //    'score'          => $this->input->post('sc_score'),
			 //    'type'           => 'School'			  
			 //  );			  
			 // $this->db->insert('candidate_education',$school);
			 
			 //  //plustwo or pdc
			 //  $plustwo = array(
			 //    'user_id'        => $user_id,
			 //    'institute'      => $this->input->post('pd_college'),
			 //    'year'           => $this->input->post('pd_passing'),
			 //    'score'          => $this->input->post('pd_score'),
			 //    'type'           => 'Plustwo'			  
			 //  );			  
			 // $this->db->insert('candidate_education',$plustwo);
			 //  //Graduation
			 //  $graduadtion = array(
			 //    'user_id'        => $user_id,
			 //    'institute'      => $this->input->post('d_college'),
			 //    'year'           => $this->input->post('d_passing'),
			 //    'score'          => $this->input->post('d_score'),
			 //    'type'           => 'Graduation'			  
			 //  );	

			 // $this->db->insert('candidate_education',$graduadtion);	
			 
			 // //If PG add PG too
			 // if($this->input->post('pg_college') !='')
			 // {
				//   $pg = array(
				//     'user_id'        => $user_id,
				//     'institute'      => $this->input->post('pg_college'),
				//     'year'           => $this->input->post('pg_passing'),
				//     'score'          => $this->input->post('pg_score'),
				//     'type'           => 'Post Graduation'			  
				//   );			  
				//   $this->db->insert('candidate_education',$pg);				 					
			 // }
			 
			 // //Other Diploma
			 //  $other_edu_names_all = $this->input->post('ot_college');
			 //  //Filtering for avoiding nulls
			 //  $other_edu_names = array_filter($other_edu_names_all, 'strlen');
			 //  $count_names     = count($other_edu_names);
			 //  $ot_passing      = $this->input->post('ot_passing');
			 //  $ot_score        = $this->input->post('ot_score');		  
    //           if($count_names > 0)
		  //     {	
				//    for($i=0;$i<$count_names;$i++)
				//    {
				// 	 $others = array (
				// 	    'user_id'        => $user_id,
				// 	    'institute'      => $other_edu_names[$i],
				// 	    'year'           => $ot_passing[$i],
				// 	    'score'          => $ot_score[$i],
				// 	    'type'           => 'Other'	
				// 	 );
				// 	 //Insert to DB
				// 	 $this->db->insert('candidate_education',$others);
				//    }

		  //      }			 		 
			 			 
			 //On Successful data insertion
		     // $email_data['site_name'] = $this->config->item('portal_name', 'plus_hr'); 
		     // $email_data['password']  = $password; 
		     // $email_data['email']     = $data['email'];
       //       //New user BIO
       //       $notify_data['site_name'] = $this->config->item('portal_name', 'plus_hr'); 
		     // $notify_data['name']      = $data['first_name']." ".$data['last_name'];
		     // $notify_data['email']     = $data['email'];
       //       $this->send_email('welcome', $data['email'], $email_data);
       //       $this->send_email('notify_webmaster',$this->config->item('webmaster_email','plus_hr'), $notify_data);
		     





 /*---------------------------------------------*
 * List avilable jobs from system
 ----------------------------------------------*/
   function getOpenings($per_page,$total) 
   {
  	
  	if($total == '') { $total=0;}
  	$query = $this->db->query("SELECT * FROM jobs WHERE status='0' ORDER BY job_id DESC LIMIT $total,$per_page");	
	$results = $query->result();
	return $results;   	
   }	 

 	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function send_email($type, $email, $data)
	{
		$this->load->library('email');
		$this->email->from($this->config->item('webmaster_email', 'plus_hr'), $this->config->item('portal_name', 'plus_hr'));
		$this->email->reply_to($this->config->item('webmaster_email', 'plus_hr'), $this->config->item('portal_name', 'plus_hr'));
		$this->email->to($email);
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('portal_name', 'plus_hr')));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		//$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}
	
}

/* End of file questionpool.php */
/* Location: ./application/modules/secure/models/questionpool.php */