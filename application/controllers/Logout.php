<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	function index()
	{	
		$this->tank_auth->logout();
        redirect('/');			
	}





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */