<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->model('settingsmodel');
		
		if(!$this->tank_auth->is_logged_in())  { redirect('/login'); }		
        $this->tankracl->restrict('secure.secure');	
		
	}

	function index()
	{
		$this->load->view('settings_email');		
	}
 /*---------------------------------------
  * 13-Sep-2012 - Email Settings
  * --------------------------------------*/
	function emails()
	{
		$this->load->view('settings_email');		
	}
 /*---------------------------------------
  * 13-Sep-2012 - Email Settings - File Saving
  * --------------------------------------*/
	function saveEmailconf()
	{

      //Get protocol information
		$protocol =  $this->input->post('protocol');
         
       //Switch between config 
		if($protocol == 'smtp')
		{
			
			$smtp_data = '$config["smtp_host"] = "'.$this->input->post('smtp_host').'";
$config["smtp_port"] = '.$this->input->post('smtp_port').';
$config["smtp_user"] = "'.$this->input->post('smtp_user').'";
$config["smtp_pass"] = "'.$this->input->post('smtp_pass').'";
			';	
		}
		else $smtp_data = '';
		


$path_url = "./application/config/";
@$string = '<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config["mailtype"] = "html";
$config["charset"] = "utf-8";
$config["newline"] = "\r\n";

$config["protocol"]  = "'.$protocol.'";
'.$smtp_data.'

/* End of file email.php */
/* Location: ./application/config/email.php */';

			$conf_file_path = $path_url."/email.php";

		   // Chmod the file, in case the user forgot
		    @chmod($conf_file_path,0777);
		    if(is_writable($conf_file_path)) 
		    {

			$fp = fopen($conf_file_path , "w");

			 if(fwrite($fp, $string)):
				$this->session->set_flashdata('success', "Email configuration updated!");  
				redirect('secure/settings/emails');			 	
			 else:
			 	$this->session->set_flashdata('error', "Email configuration update failed!");  
				redirect('secure/settings/emails');
			 endif; 	

			fclose($fp);

		    }
            else
            {
				$this->session->set_flashdata('error', "File is not writable!");  
				redirect('secure/settings/emails');
			}	
	}



 /*---------------------------------------
  * System Settings
  * --------------------------------------*/
	function system_settings()
	{
		$this->load->view('settings_system_settings');		
	}	


 /*---------------------------------------
  * Save System Settings
  * --------------------------------------*/
	function save_system_settings()
	{
		$portal_name     =  $this->input->post('portal_name');
		$webmaster_email =  $this->input->post('webmaster_email');	

		$path_url = "./application/config/";
		@$string = '<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
		/*
		| -------------------------------------------------------------------------
		| Plus_hr - POrtal Specific Settings
		| -------------------------------------------------------------------------
		|
		*/
		$config["portal_name"]      = "'.$portal_name .'";
		$config["webmaster_email"]  = "'.$webmaster_email .'";

		/* End of file plus_hr.php */
		/* Location: ./application/config/plus_hr.php */';

			$conf_file_path = $path_url."/plus_hr.php";
		   // Chmod the file, in case the user forgot
		    @chmod($conf_file_path,0777);
		    if(is_writable($conf_file_path)) 
		    {

			$fp = fopen($conf_file_path , "w");

			 if(fwrite($fp, $string)):
				$this->session->set_flashdata('success', "System settings updated!");  
				redirect('secure/settings/system_settings');			 	
			 else:
			 	$this->session->set_flashdata('error', "System settings failed!");  
				redirect('secure/settings/system_settings');
			 endif; 	

			fclose($fp);

		    }
            else
            {
				$this->session->set_flashdata('error', "File is not writable!");  
				redirect('secure/settings/system_settings');
			}		



	}	

 /*---------------------------------------
  * 12-Oct-2012 - Email Settings
  * --------------------------------------*/
	function changepassword()
	{
		$this->load->view('settings_passwordchange');		
	}	
	
/*---------------------------------------
 * Update Password
 * --------------------------------------*/
function change_password()
	{
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/login');

		} else {
			$this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
			$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->change_password(
						$this->form_validation->set_value('old_password'),
						$this->form_validation->set_value('new_password'))) 
						{	
						// success
					$this->iface->log("Changed password" );			
					$this->session->set_flashdata('success', $this->lang->line('auth_message_password_changed'));
					redirect('secure/settings/changepassword');

				} else {														// fail
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			$this->load->view('manage_admin', $data);
		}
	}

	function new_admin()
	{
       $data['admin_users'] = $this->settingsmodel->adminusers();
       $this->load->view('settings_newadmin',$data);
	}
/*---------------------------------------
 * Create a new admin
 * --------------------------------------*/	
	function newadmin()
	{			
 	
	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash|callback_check_username');
	//$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|callback_check_email');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash|callback_check_email');
	$this->form_validation->set_rules('confpassword', 'Confirm Password', 'trim|required|xss_clean|matches[password]');

	//Get inputs 
	$email       = $this->input->post('email');
	$username    = $this->input->post('username');
	$password    = $this->input->post('password');
	//Send email activation as per tank_auth conf
	$email_activation = $this->config->item('email_activation', 'tank_auth');
	
    if($this->form_validation->run())
    {
		//Use tank_auth functions to create user
		if($this->tank_auth->create_user('1',$username,$email,$password,$email_activation)) 
		{
			$this->iface->log("New admin user added" );	
			$this->session->set_flashdata('success',"New admin User added successfully!");  
			redirect('secure/settings/new_admin');	 	
		}
		else 
		{
			$this->session->set_flashdata('error', "Unkown error!");  
			redirect('secure/settings/new_admin');	 	
		}
    }
    else
    {
      $this->load->view('settings_newadmin');
    }
 }
  /*--Check email--*/
    function check_username($str)
	{
		if (!$this->tank_auth->is_username_available($str))
		{
			$this->form_validation->set_message('check_username', 'The %s is already taken!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
    function check_email($str)
	{
		if (!$this->tank_auth->is_email_available($str))
		{
			$this->form_validation->set_message('check_email', 'The %s is already taken!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */