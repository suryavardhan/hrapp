<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller
{
	function __construct()
	{
		
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->library('pagination');	
		$this->load->library('recaptcha');
		$this->lang->load('recaptcha');	
		
		
	}

	function index()
	{

		//load model
		$this->load->model('candidatespublicmodel');	
       
        $config['base_url']        = site_url('show/jobs');
		$config['total_rows']      = $this->db->get('jobs')->num_rows();
		$config['per_page']        = 15;
		$config['num_links']       = 10;
		$config['full_tag_open']   = '<div id="pagination">';
		$config['full_tag_close']  = '</div>';
		
		$this->pagination->initialize($config);		

		$perpage = $config['per_page'];
		$total   = $this->uri->segment(3);

		$data['joblist'] = $this->candidatespublicmodel->getOpenings($perpage,$total); 
				
		$this->load->view('listjobs',$data);

	}




}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */