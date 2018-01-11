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
class Jobsmodel extends CI_Model
{


	function __construct()
	{
		parent::__construct();
	}
	
	

/*---------------------------------------------*
 * Function for creting a user - 
 * Ripped down from tank_auth controller
 ----------------------------------------------*/ 	
  function create_candidate()
  {
 	
	//Get inputs 
	$email    = $this->input->post('email');
	$password = $this->input->post('password');
	//Send email activation as per tank_auth conf
	$email_activation = $this->config->item('email_activation', 'tank_auth');
	
	//Use tank_auth functions to create user
	if($this->tank_auth->create_user('2','',$email,$password,$email_activation)) 
	{
		 return true;
	}
	else {
		return false;
	}
	
	
	
  }
  
  
  
 /*---------------------------------------------*
 * Function for Listing candidates only 
  * from user table
 ----------------------------------------------*/	
  function show_jobs()
  {
  	//Candidate role ID is primay setup value so it is hardcoded here	
		
  	$query = $this->db->query("SELECT * FROM jobs ORDER BY job_id DESC");	
	$results = $query->result();
	return $results;
  	
  } 
 

 /*---------------------------------------------*
 * Make listing(s) status - TOGGLING ENABLED -
 *---------------------------------------------*/
  function toggle_status()
  {
    $job_ids = $this->input->post('job_id');
    if($job_ids)
    { 
        foreach ($job_ids as $job_id) 
        {
           $this->db->query("UPDATE jobs SET status = MOD( status + 1, 2 ) WHERE job_id ='$job_id'");
           //$this->db->update('real_listing', $featured);
        }
        return TRUE;
    
    }
    else return FALSE;

  } 

 /*---------------------------------------------*
 * Load for editing
 *---------------------------------------------*/
  function getJobdata($job_id)
  {
    
   	$results = $this->db->query("SELECT * FROM jobs WHERE job_id='$job_id'")->row();	
	return $results; 	
  }
  
 /*---------------------------------------------*
 * Make listing(s) status - TOGGLING ENABLED -
 *---------------------------------------------*/
  function updateJob($job_id)
  {
  
		
		//Collecting input values

		$data = array(  'job_title'        => $this->input->post('title'),
			            'introduction'     => $this->input->post('jobintro'),
						'responsibilities' => $this->input->post('responsibilities'),
						'skillset'         => $this->input->post('skillset'),
					  );	 	 
	  
          $this->db->where('job_id', $job_id);         	    		
		  if($this->db->update('jobs', $data)):
             return TRUE;
          else:
			 return FALSE;
          endif;

  }	   	   
	
}

/* End of file questionpool.php */
/* Location: ./application/modules/secure/models/questionpool.php */