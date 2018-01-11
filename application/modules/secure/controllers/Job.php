<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Job extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->model('jobsmodel');
		
		if (!$this->tank_auth->is_logged_in())  { redirect('/login');}				
		$this->tankracl->restrict('secure.secure');	
	}

	function index()
	{
			
		$this->load->view('addjob');		

	}

/*---------------------------------------
 * Function to load jobs view
 * --------------------------------------*/

   function open($view)
   {
   	  $this->load->view($view);
   }

/*---------------------------------------
 * Function new category
 * --------------------------------------*/
   function newcategory()
   {
   	
	     $data = array('category' => $this->input->post('category'));	 
	 
	     if($this->db->insert('job_category',$data))
           {
			 $this->session->set_flashdata('success', 'New category added successfully');  
			 redirect('secure/job/open/addcategory');
		   }
          else
		   {
			 $this->session->set_flashdata('error', 'Data insertion failed!');  
			 redirect('secure/job/open/addcategory');
		   }	   
	
   }


/*---------------------------------------
 * Function new job
 * --------------------------------------*/
   function newjob()
   {
   		
		//Collecting input values

		$data = array(  'job_title'        => $this->input->post('title'),
			            'introduction' => $this->input->post('jobintro'),
						'responsibilities' => $this->input->post('responsibilities'),
						'skillset'         => $this->input->post('skillset'),
					  );	 	 
	  
	     if($this->db->insert('jobs',$data))
           {
			 $this->session->set_flashdata('success', 'New job added successfully');  
			 $this->session->set_flashdata('info', 'Job will be listed for public display'); 
			 redirect('secure/job/');
		   }
          else
		   {
			 $this->session->set_flashdata('error', 'Data insertion failed !');  
			 redirect('secure/job/');
		   }	   
	
   }
/*---------------------------------------
 * Delete a job
 * --------------------------------------*/
   function delete($id)
   {
   	
	   $this->db->where('job_id', $id);
       if($this->db->delete('jobs'))
           {
			 $this->session->set_flashdata('success', 'Job data deleted successfully');  
			 redirect('secure/job/showall');
		   }
          else
		   {
			 $this->session->set_flashdata('error', 'Data insertion failed !');  
			 redirect('secure/job/showall');
		   }
	
   }
/*---------------------------------------
 * Edit a job
 * --------------------------------------*/
   function edit($id)
   {
   	
	   $data['job_id']   = $id;
	   $data['job_data'] = $this->jobsmodel->getJobdata($id);
	   $this->load->view('editjob',$data);
	
   }
/*---------------------------------------
 * Function update job
 * --------------------------------------*/
   function update()
   {
	    	
		$job_id = $this->input->post('job_id');
	    
	    if($this->jobsmodel->updateJob($job_id)): 
			$this->session->set_flashdata('success', "Job details updated successfully!");  
			redirect('secure/job/edit/'.$job_id);
		else:
		   	$this->session->set_flashdata('error', "Database error!");  
			redirect('secure/job/edit/'.$job_id);		
		endif;
   }

/*---------------------------------------
 * Update job status
 * --------------------------------------*/
   // function updatejob_status($id,$newstatus)
   // {
          
		 //  $data['status'] = $newstatus;  
		 //  $this->db->where('j_id', $id);       	    		
		 //  if($this->db->update('jobs', $data))
   //         {
			//  $this->session->set_flashdata('success', 'Job status updated successfully');  
			//   redirect('secure/job/open/listjobs');
		 //   }
   //        else
		 //   {
			//  $this->session->set_flashdata('error', 'Data insertion failed !');  
			//  redirect('secure/job/open/listjobs');
		 //   }	   
   // }
   
/*---------------------------------------
 * List all jobs
 * --------------------------------------*/	

	function showall()
	{
			
   	 $data['jobs'] =  $this->jobsmodel->show_jobs();
	 $this->load->view('list_jobs',$data);
		

	}   
/*---------------------------------------
 *  BULKACTION -  bulk action
 * --------------------------------------*/
  function bulkaction()
  {
  	$action = $this->input->post('bulk_action');
  	switch ($action) {
  		case 'status':
  			if($this->jobsmodel->toggle_status())
  			{
  				$this->session->set_flashdata('success', "Status toggled successfully");
  				redirect('secure/job/showall/');  
  			}
  			break;
  		default:
			$this->session->set_flashdata('error', "Unknown error!"); 
			redirect('secure/job/showall/');
  			break;
  	}
  }	   

}
/* End of file job.php */
/* Location: ./application/modules/secure/controllers/job.php */