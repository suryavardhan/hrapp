<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Userpublic extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('recaptcha');
        $this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->load->library('pagination');			
	    $this->lang->load('recaptcha');
		//Public candidates model
		$this->load->model('candidatespublicmodel');
	
	}

	function index()
	{
		//
	}
	
   
/*---------------------------------------
 * List all jobs
 * --------------------------------------*/		
   function newregistration()
   {

 	//validate Inputs
     $this->form_validation->set_error_delimiters('<div class="error_strings">','</div>');	
	 
     $this->form_validation->set_rules('f_name', 'First Name', 'required|xss_clean');  
	 // $this->form_validation->set_rules('l_name', 'Last Name', 'required|xss_clean'); 
	 // $this->form_validation->set_rules('address_l1', 'Address', 'required|xss_clean');
	 
	 // $this->form_validation->set_rules('mobile', 'Mobile', 'required|xss_clean');  
	 // $this->form_validation->set_rules('l_name', 'Last Name', 'required|xss_clean'); 
	 // $this->form_validation->set_rules('address_l2', 'Address', 'xss_clean');
	 
	 // $this->form_validation->set_rules('landline', 'Phone', 'xss_clean');  
	 // $this->form_validation->set_rules('city', 'Last Name', 'required|xss_clean'); 
	 // $this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean');	 
	 
	 // $this->form_validation->set_rules('pin', 'Pin', 'required|min_length[6]|max_length[6]|xss_clean');	
	 
	 // $this->form_validation->set_rules('school', 'School Name', 'required|xss_clean');
	 // $this->form_validation->set_rules('sc_passing', 'Yesr of passing', 'required|xss_clean');	
	 // $this->form_validation->set_rules('sc_score', 'Score in \%', 'required|min_length[2]|max_length[2]|xss_clean');	
	 
	 // $this->form_validation->set_rules('pd_college', 'School/College Name', 'required|xss_clean');
	 // $this->form_validation->set_rules('pd_passing', 'Yesr of passing', 'required|xss_clean');	
	 // $this->form_validation->set_rules('pd_score', 'Score in \%', 'required|min_length[2]|max_length[2]|xss_clean');
	 
	 // $this->form_validation->set_rules('d_college', 'School/College Name', 'required|xss_clean');
	 // $this->form_validation->set_rules('d_passing', 'Yesr of passing', 'required|xss_clean');	
	 // $this->form_validation->set_rules('d_score', 'Score in \%', 'required|min_length[2]|max_length[2]|xss_clean');		
	 
	 // $this->form_validation->set_rules('pg_college', 'School/College Name', 'xss_clean');
	 // $this->form_validation->set_rules('pg_passing', 'Yesr of passing', 'xss_clean');	
	 // $this->form_validation->set_rules('pg_score', 'Score in \%', 'xss_clean');	
	 
	 // $this->form_validation->set_rules('expectation', 'Your expectations', 'required|xss_clean');  	 	
	 	  
	  //$this->form_validation->set_rules('resume', 'Resume', 'file_size_max[5000]|file_allowed_type[word_document]|file_required');
	  //$this->form_validation->set_rules('recaptcha_response_field', 'reCaptcha', 'required|callback_check_captcha');
							 
	if($this->form_validation->run()) 
	    {	
	    $this->candidatespublicmodel->new_candidate();	
		    //Inserting Data to db
	  //       if($this->candidatespublicmodel->new_candidate())
	  //         {
			// 	$this->session->set_flashdata('success', "Registration sucessfull! Please Login to Continue.");  
			// 	redirect('/login');
			//   }
			// else
			//  {
			// 	$this->session->set_flashdata('error', "Invalid email or Email ID already taken!");  
			// 	redirect('/home/index');					
			//  }
       }
	  else
	   {
			$data['error']= "error here";	
			$data['recaptcha'] = $this->recaptcha->get_html();	
			$this->load->view('index',$data);
	   }
	 

		
   }

/*---------------------------------------------*
 * Function for validating reCaptcha
 ----------------------------------------------*/ 
    function check_captcha($val) {
			if ($this->recaptcha->recaptcha_check_answer($this->input->ip_address(),$this->input->post('recaptcha_challenge_field'),$val)) {
				    return TRUE;
				  } else {
				    $this->form_validation->set_message('check_captcha',$this->lang->line('recaptcha_incorrect_response'));
				    return FALSE;
				  }
			}	

/*---------------------------------------------*
 * Function for checking already registred emails
 ----------------------------------------------*/ 
function email_check()

	 {
	   
	   $email = $this->input->post('email');
	   $match = ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
	   if(!$match)
	   {        
	     echo "Invalid email";
	   }

	   else
	   	{	   		
	   		$result = $this->tank_auth->is_email_available($email);
			if(!$result)
			{echo 'This Email is already registered';}		
	   	}
	 }
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */