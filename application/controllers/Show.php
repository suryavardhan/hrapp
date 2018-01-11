<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Show extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('recaptcha');
        $this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->load->library('pagination');	
			
	    $this->lang->load('recaptcha');
	}

	function index()
	{
		$this->load->view('index');

	}
	function show($view)
	{
		$this->load->view($view);
	}	

	function home()
	{
		$this->load->view('index');

	}
	function work()
	{
		$this->load->view('workproc');

	}
	function about()
	{
		$this->load->view('about');

	}
	function contact()
	{
	    $data['recaptcha'] = $this->recaptcha->get_html();			
		$this->load->view('contact',$data);

	}		
	function jobs()
	{
			
			
        $config['base_url'] = site_url().'show/jobs';
		$config['total_rows'] = $this->db->get('jobs')->num_rows();
		$config['per_page'] = 15;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);		

		$data['per_page'] = $config['per_page'];
		$data['total'] = $this->uri->segment(3);
				
		$this->load->view('listjob',$data);

	}

    function resume()
    {
		$data['recaptcha'] = $this->recaptcha->get_html();	
		$this->load->view('commonresume',$data);
    }

    function job($id,$slug)
    {
    	$data['j_id'] = $id;	
		$this->load->view('showjob',$data);
    }

    function applyfor($id)
    {
    	$data['j_id'] = $id;
		$data['recaptcha'] = $this->recaptcha->get_html();
		$this->load->view('resume',$data);
    }

    function apply()
	{
		    	
			$this->load->helper('form'); 	
		    $j_id = $this->input->post('j_id');	
			$query = $this->db->query("SELECT * FROM jobs WHERE j_id='$j_id'");
			$result = $query->row();
			$heading = "Application for the post of ".$result->job_title.",".$result->country;
    
	    
		    $this->form_validation->set_error_delimiters('<div class="error_strings">', '</div>');	  
			$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
			$this->form_validation->set_rules('middlename', 'Middle Name', 'xss_clean');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
			$this->form_validation->set_rules('contact', 'Contact number', 'required|xss_clean');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean');
			$this->form_validation->set_rules('resumetitle', 'Resume Tilte', 'required|xss_clean');
			$this->form_validation->set_rules('resume', 'Resume', 'file_required|file_size_max[500]|file_allowed_type[word_document]');
			$this->form_validation->set_rules('resumepaste', 'Paste resume', 'xss_clean');
			$this->form_validation->set_rules('recaptcha_response_field', 'reCaptcha', 'required|callback_check_captcha');
							 
			if($this->form_validation->run()) 
			    {
			     $this->load->view('resume',array('recaptcha'=>'Done','j_id'=>$j_id));
			    
					//File upload and mailing
					$config['upload_path'] = './resumes/';
					$config['allowed_types'] = 'doc|docx|odt|pdf|txt|rtf';
					$config['max_size']	= '3000';
					$config['file_name']  = time();
					
	                $this->load->library('upload', $config);		
					$this->upload->do_upload('resume');
					
					$file_data = $this->upload->data();
				    $filename = $file_data['file_name'];
					$fileto_attch = './resumes/'.$filename;	
					
					if($filename!='')
					{
					  	$data = array(
						        'firstname' => $this->input->post('firstname'),
						        'middlename' => $this->input->post('middlename'),
						        'lastname' => $this->input->post('lastname'),
						        'contact' => $this->input->post('contact'),
						        'email' => $this->input->post('email'),
						        'resumetitle' => $this->input->post('resumetitle'),
						        'resumepaste' => $this->input->post('resumepaste'),
						           );	
					  	$maildata = $this->load->view('resumeup',$data,TRUE);
					  	$this->load->library('email');
						
						$this->email->from($this->input->post('email'), $this->input->post('firstname'));
						$this->email->to('orbit.data@gmail.com');

						
						$this->email->subject($heading);
						$this->email->message($maildata);
						$this->email->attach($fileto_attch);
						
						if($this->email->send())
				           {
							 $this->session->set_flashdata('success', "Resume uploaded successfully!");  
						     redirect('show/resume');
						   }
						
					}
			   
			    }
			    else
			    {
			      $data['j_id'] = $j_id;
		          $data['recaptcha'] = $this->recaptcha->get_html();	
			      $this->load->view('resume',$data);
			    }

	}



  function common_apply()
	{
		    	
			$this->load->helper('form'); 	
    
	    
		    $this->form_validation->set_error_delimiters('<div class="error_strings">', '</div>');	  
			$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
			$this->form_validation->set_rules('middlename', 'Middle Name', 'xss_clean');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
			$this->form_validation->set_rules('contact', 'Contact number', 'required|xss_clean');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean');
			$this->form_validation->set_rules('resumetitle', 'Resume Tilte', 'required|xss_clean');
			$this->form_validation->set_rules('resume', 'Resume', 'file_required|file_size_max[500]|file_allowed_type[word_document]');
			$this->form_validation->set_rules('resumepaste', 'Paste resume', 'xss_clean');
			$this->form_validation->set_rules('recaptcha_response_field', 'reCaptcha', 'required|callback_check_captcha');
							 
			if($this->form_validation->run()) 
			    {
			     $this->load->view('resume',array('recaptcha'=>'Done'));
			    
					//File upload and mailing
					$config['upload_path'] = './resumes/';
					$config['allowed_types'] = 'doc|docx|odt|pdf|txt|rtf';
					$config['max_size']	= '3000';
					$config['file_name']  = time();
					
	                $this->load->library('upload', $config);		
					$this->upload->do_upload('resume');
					
					$file_data = $this->upload->data();
				    $filename = $file_data['file_name'];
					$fileto_attch = './resumes/'.$filename;	
					
					if($filename!='')
					{
					  	$data = array(
						        'firstname' => $this->input->post('firstname'),
						        'middlename' => $this->input->post('middlename'),
						        'lastname' => $this->input->post('lastname'),
						        'contact' => $this->input->post('contact'),
						        'email' => $this->input->post('email'),
						        'resumetitle' => $this->input->post('resumetitle'),
						        'resumepaste' => $this->input->post('resumepaste'),
						           );	
					  	$maildata = $this->load->view('resumeup',$data,TRUE);
					  	$this->load->library('email');
						
						$this->email->from($this->input->post('email'), $this->input->post('firstname'));
						$this->email->to('orbit.data@gmail.com');

						
						$this->email->subject('New Resume upload');
						$this->email->message($maildata);
						$this->email->attach($fileto_attch);
						
						if($this->email->send())
				           {
							 $this->session->set_flashdata('success', "Resume uploaded successfully!");  
						     redirect('show/resume');
						   }
						
					}
			   
			    }
			    else
			    {
		          $data['recaptcha'] = $this->recaptcha->get_html();	
			      $this->load->view('commonresume',$data);
			    }

	}



 function sendcontact()
	{
		    	
			$this->load->helper('form'); 	
    
	    
		    $this->form_validation->set_error_delimiters('<div class="error_strings">', '</div>');	  
			$this->form_validation->set_rules('name', 'Name required!', 'required|xss_clean');
			$this->form_validation->set_rules('message', 'Middle Name', 'xss_clean');
			$this->form_validation->set_rules('contact', 'Contact number', 'required|xss_clean');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean');
			$this->form_validation->set_rules('message', 'Message required', 'required|xss_clean');
			$this->form_validation->set_rules('recaptcha_response_field', 'reCaptcha', 'required|callback_check_captcha');
							 
			if($this->form_validation->run()) 
			    {
			     $this->load->view('contact',array('recaptcha'=>'Done'));
			    
					
					  	$data = array(
						        'name' => $this->input->post('name'),
						        'address' => $this->input->post('address'),
						        'contact' => $this->input->post('contact'),
						        'email' => $this->input->post('email'),
						        'message' => $this->input->post('message'),
						           );	
					  	$maildata = $this->load->view('email_contact',$data,TRUE);
					  	$this->load->library('email');
						
						$this->email->from($this->input->post('email'), $this->input->post('name'));
						$this->email->to('orbit.data@gmail.com');
						//$this->email->cc('admin@orbit.in');

						
						$this->email->subject('New message from orbit website');
						$this->email->message($maildata);
						
						if($this->email->send())
				           {
							 $this->session->set_flashdata('success', "Resume uploaded successfully!");  
						     redirect('show/contact');
						   }
						
					
			   
			    }
			    else
			    {
		          $data['recaptcha'] = $this->recaptcha->get_html();	
			      $this->load->view('contact',$data);
			    }

	}




	
	/*---------reCaptcha Check-----------*/
         
         function check_captcha($val) {
				  if ($this->recaptcha->check_answer($this->input->ip_address(),$this->input->post('recaptcha_challenge_field'),$val)) {
				    return TRUE;
				  } else {
				    $this->form_validation->set_message('check_captcha',$this->lang->line('recaptcha_incorrect_response'));
				    return FALSE;
				  }
				}			




}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */