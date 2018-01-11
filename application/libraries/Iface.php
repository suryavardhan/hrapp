<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * iFace
 *
 * Interface resourse loader.
 *
 * @package		iFace
 * @author		Rakesh Suryavardha (http://pixelglimpse.com/)
 * @version		1.0.0
 * @license		MIT License Copyright (c) 2008 Erick Hartanto
 */
class Iface
{
	private $error = array();

	function __construct()
	{
		$this->ci =& get_instance();
        $this->ci->load->helper( 'url');
        $this->ci->config->load( 'plus_hr',TRUE);

	}

/*----------------------------------------------
 * Convert date to standard
 *----------------------------------------------*/ 	
    function date_convert($date)
	{
	  $new_date = date('d-m-Y', strtotime($date));	
	  return $new_date;
	}	

/*----------------------------------------------
 * Image loader
 *----------------------------------------------*/ 
   function icon($name)
   {
   	 echo '<img src="'.site_url().'assets/icons/'.$name.'" alt=""  align="absmiddle"/>';
   }


/*----------------------------------------------
 * Javascript File loader
 *----------------------------------------------*/ 
   function js($name,$options)
   {
	 echo '<script type="text/javascript" src="'.site_url().'assets/js/'.$name.'.js" '.$options.' ></script>'; 
   }

/*----------------------------------------------
 * Function for random password
 *----------------------------------------------*/ 	

    function createRandomPassword()
	{
		$chars = "abcdefghijkmnopqrstuvwxyz023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 7) {
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
    return $pass;
  }

/*------------------------------------*
 *Counselor Slug creator
*-------------------------------------*/
    function candidate_slug()
	{
		//Create Unique string 	
		$unique = strtoupper(random_string('numeric',5));
		//Check is it already taken
		$checkDupe = $this->ci->db->get_where('candidate_profile', array('user_slug' => $unique), 1)->num_rows();
		if($checkDupe !='0')
		{
			$this->candidate_slug();
		}
		else {
			return $unique;
		}
		
	}	
/*------------------------------------*
 *Counselor Slug creator
*-------------------------------------*/
    function pending_reviews($user_id = NULL)
	{
		if($user_id !=''):
         $count = $this->ci->db->query("SELECT assign_id FROM assigned_exam_templates WHERE user_id='$user_id' AND progress='3' AND verdict=''")->num_rows();
         return $count;			
		else:
		 $count = $this->ci->db->query("SELECT assign_id FROM assigned_exam_templates WHERE progress='3' AND verdict=''")->num_rows();
         return $count;
        endif;
	}
/*------------------------------------*
 *Get Title of JOb by job_id
*-------------------------------------*/
    function getJobtitle($job_id)
	{
		$result = $this->ci->db->query("SELECT job_title FROM jobs WHERE job_id='$job_id'")->row();
        return $result->job_title;	
	}
/*------------------------------------*
 *Get Candidate Name
*-------------------------------------*/
    function getCandidatename($user_id)
	{
		$result = $this->ci->db->query("SELECT first_name,last_name FROM candidate_profile WHERE user_id='$user_id'")->row();
        return $result->first_name." ".$result->last_name;	
	}
/*------------------------------------*
 *Get Candidate messages count
*-------------------------------------*/
    function getUnreadmessagecount($user_id)
	{
		$result = $this->ci->db->query("SELECT to_user FROM messages WHERE to_user='$user_id' AND status='0'")->num_rows();
        return $result;	
	}	
/*------------------------------------*
 *Get Candidate  count
*-------------------------------------*/
    function candidatesCount()
	{
		$result = $this->ci->db->query("SELECT user_id FROM candidate_profile")->num_rows();
        return $result;	
	}	
/*------------------------------------*
 *Logg some data
*-------------------------------------*/
   function log($desc)
   {
   	 $data = array(
        'user_id'      => $this->ci->tank_auth->get_user_id(),
		'activity'     => $desc,
		'activity_time'=> time(),
		'ip_address'   => $this->ci->input->ip_address()
   	 	);
   	 $this->ci->db->insert('activity_logger',$data);

   }


}

/* End of file Tank_auth.php */
/* Location: ./application/libraries/Tank_auth.php */