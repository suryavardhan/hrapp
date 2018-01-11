<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		echo "USer profile under construction!";

	}









}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */