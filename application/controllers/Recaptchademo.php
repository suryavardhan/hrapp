<?php

class Recaptchademo extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
	}
	
	function index()
  {
    $this->load->library('recaptcha');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->lang->load('recaptcha');
	
    $this->form_validation->set_rules('recaptcha_response_field', 'reCaptcha', 'required|callback_check_captcha');
	
    if ($this->form_validation->run()) 
    {
      $this->load->view('recaptcha_demo',array('recaptcha'=>'Yay! You got it right!'));
    }
    else
    {
      //the desired language code string can be passed to the get_html() method
      //"en" is the default if you don't pass the parameter
      //valid codes can be found here:http://recaptcha.net/apidocs/captcha/client.html
      $this->load->view('recaptcha_demo',array('recaptcha'=>$this->recaptcha->get_html()));
    }
  }
	
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
/* Location: ./system/application/controllers/welcome.php */
