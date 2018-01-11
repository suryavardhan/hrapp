<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * iFace
 *
 * Interface resourse loader.
 *
 * @package		Tank RACL -    Rolebased Access Control to work along with Tank_Auth 
 * @author		Rakesh Suryavardha (http://pixelglimpse.com/)
 * @version		1.0.0
 * @license		MIT License Copyright (c) 2012 Rakesh
 */
class Tankracl
{
	private $error = array();

	function __construct()
	{
		$this->ci =& get_instance();
        $this->ci->load->helper( 'url');

	}

/*----------------------------------------------
 * Convert date to standard
 *----------------------------------------------*/ 	
    function get_role_id()
	{
      //Get user Id using tank_auth	
      $user_id = $this->ci->tank_auth->get_user_id();
	  //Get role _ID
	  $query   =   $this->ci->db->query("SELECT role_id FROM users WHERE id='$user_id'");
	  $results = $query->row();
	  return $results->role_id;
	}	

/*----------------------------------------------
 * Role based redirect
 *----------------------------------------------*/ 	
	function launcher()
	{			
	  $role_id = $this->get_role_id();
	  $query = $this->ci->db->query("SELECT role_route FROM role_route WHERE role_id='$role_id'");
	  if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$url = $row->role_route; 
		}
		else $url = 'guest/launch';				
		return $url;
   }
/*----------------------------------------------
 * Permission restriction - routing only
 *----------------------------------------------*/ 
   function restrict($key)
   {
    	//Get Role ID	   		
       $role_id = $this->get_role_id();
	   //Check for key ID in table
	   $query = $this->ci->db->query("SELECT perm_id FROM permissions WHERE keyname='$key'");
	   if ($query->num_rows() > 0){ $row = $query->row();
            //Permission ID
            $perm_id = $row->perm_id; 		
			//Match with permission table
			$perm_validate = $this->ci->db->query("SELECT role_id FROM role_permissions WHERE role_id='$role_id' AND perm_id='$perm_id'")->num_rows();
			if($perm_validate <= 0)
			{
			   $this->ci->session->set_flashdata('error', "You are trying to access a restricted area!");  
			   redirect($this->launcher());	
			} 
	
		}
	   else
	   {
	   		$this->ci->session->set_flashdata('error', "Unknown permission key!");  
			redirect($this->launcher());
			//return false; 
	   }
	
   }
/*----------------------------------------------
 * candidate profile ID
 *----------------------------------------------*/ 
 function candidate_id()
 {
    //Get login ID	
     $login_id = $this->ci->tank_auth->get_user_id();
	 //Get profile_id aka user_id for candidates
     $query = $this->ci->db->query("SELECT user_id FROM candidate_profile WHERE login_id='$login_id'");
     $row = $query->row();
	 return $row->user_id; 	 
	 	
 }
/*----------------------------------------------
 * candidate profile name -- Specifically for this 
 * project only. To be excludeded from library 
 *----------------------------------------------*/ 
 function candidate_name()
 {
    //Get login ID	
     $login_id = $this->ci->tank_auth->get_user_id();
	 //Get profile_id aka user_id for candidates
     $query = $this->ci->db->query("SELECT first_name FROM candidate_profile WHERE login_id='$login_id'");
     $row = $query->row();
	 return $row->first_name; 	 
	 	
 }
 /*----------------------------------------------
 * candidate email -- Specifically for this 
 * project only. To be excludeded from library 
 *----------------------------------------------*/ 
 function user_email()
 {
    //Get login ID	
     $login_id = $this->ci->tank_auth->get_user_id();
	 //Get profile_id aka user_id for candidates
     $query = $this->ci->db->query("SELECT email FROM users WHERE id='$login_id'");
     $row = $query->row();
	 return $row->email; 	 
	 	
 }
 function admin_username($user_id = NULL)
 {
    //Get login ID
     if($user_id):
       $login_id = $user_id;
     else:
     	$login_id = $this->ci->tank_auth->get_user_id();
     endif;	    
	 //Get profile_id aka user_id for candidates
     $query = $this->ci->db->query("SELECT username FROM users WHERE id='$login_id'");
     $row = $query->row();
	 return $row->username; 	 
	 	
 }
/*----------------------------------------------
 * Get last login Info
 *----------------------------------------------*/ 
 	function get_lastlogin()
	{
    //Get login ID	
     $login_id = $this->ci->tank_auth->get_user_id();
	 //Get profile_id aka user_id for candidates
     $query = $this->ci->db->query("SELECT last_login FROM users WHERE id='$login_id'");
     $row = $query->row();
	 return $row->last_login; 	
	}
}

/* End of file Tank_auth.php */
/* Location: ./application/libraries/Tank_auth.php */