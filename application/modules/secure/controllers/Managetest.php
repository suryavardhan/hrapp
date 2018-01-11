<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Managetest extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('managetestmodel');

		
		if (!$this->tank_auth->is_logged_in())  { redirect('/login');}
		//Block permissions	
		$this->tankracl->restrict('secure.secure');				
		
	}
	
/*---------------------------------------
 * Create a new test - Load view
 * --------------------------------------*/	

	function index()
	{
			
		$this->load->view('create_test');		

	}

/*---------------------------------------
 * Add new test template
 * --------------------------------------*/	

	function add()
	{
	    if($this->managetestmodel->definetest()): 
	    	$this->iface->log("New test template added" );	
			$this->session->set_flashdata('success', "New Exam added");  
			redirect('secure/managetest');	
		endif;


	} 

/*---------------------------------------
 * List all test/exam templates with number of 
 times they assigned  09-sep-2012
 * --------------------------------------*/
   function list_test_templates()
   {
   	 $data['test_templates'] = $this->managetestmodel->listTesttemplates();
   	 $this->load->view('test_templates_list',$data);
   }	

/*---------------------------------------
 * Delete test/exam template 09-sep-2012
 * --------------------------------------*/	

	function delete($exam_id)
	{
	    if($this->managetestmodel->deleteTesttemplate($exam_id)):
	        $this->iface->log("Deleted exam template $exam_id" );	 
			$this->session->set_flashdata('success', "Exam template deleted successfully!");  
			redirect('secure/managetest/list_test_templates');
		else:
		   	$this->session->set_flashdata('error', "Exam template couldnot be deleted!");  
			redirect('secure/managetest/list_test_templates');		
		endif;
	} 

/*---------------------------------------
 *  BULKACTION -  bulk action
 * --------------------------------------*/
  function bulkaction()
  {
  	$action = $this->input->post('bulk_action');
  	switch ($action) {
  		case 'status':
  			if($this->managetestmodel->toggle_status())
  			{
  				$this->session->set_flashdata('success', "Status toggled successfully");
  				redirect('secure/managetest/list_test_templates');  
  			}
  			break;
  		default:
			$this->session->set_flashdata('error', "Unknown error!"); 
			redirect('secure/managetest/list_test_templates');
  			break;
  	}
  }	
/*---------------------------------------
 *Edit test template
 * --------------------------------------*/   
  function edit_template($template_id)
   { 	 
     $data['template'] = $this->managetestmodel->getTemplatedetails($template_id);
   	 $data['segments'] = $this->managetestmodel->getTemplatesegments($template_id);
   	 $this->load->view('edit_test',$data);
   }	
/*---------------------------------------
 *
 * --------------------------------------*/   
  function update()
   { 
     $exam_id  = $this->input->post('exam_id');
     if($this->managetestmodel->updateExam_main() AND $this->managetestmodel->updateExam_segments()):
     	$this->iface->log("Exam template $exam_id updated" );	
     	$this->session->set_flashdata('success', "Exam template updated successfully");
  		redirect('secure/managetest/edit_template/'.$exam_id);
  	 else:
 		$this->session->set_flashdata('error', "Unknown error!"); 
		redirect('secure/managetest/edit_template/'.$exam_id);
	 endif;

   }

/*---------------------------------------
 *Remove an exam segment
 * --------------------------------------*/ 
 function removetsegment($eseg_id,$exam_id)
 {
	 if($this->managetestmodel->deleteTestsegment($eseg_id)):
	    $this->iface->log("Removed a segment from exam template $exam_id" );	 
		$this->session->set_flashdata('success', "Exam template segment deleted successfully!");  
		redirect('secure/managetest/edit_template/'.$exam_id);
	 else:
		$this->session->set_flashdata('error', "Exam template segment couldnot be deleted!");  
		redirect('secure/managetest/edit_template/'.$exam_id);		
	 endif;
 } 


}
/* End of file questionpool.php */
/* Location: ./application/modules/secure/controllers/questionpool.php */