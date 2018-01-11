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
class Settingsmodel extends CI_Model
{


	function __construct()
	{
		parent::__construct();
	}

/*-----------------------------
  List admin users
-------------------------------*/	
function adminusers()
{
    $results = $this->db->query("SELECT * FROM users WHERE role_id='1' ORDER BY id DESC")->result();
    return $results;	
}	

/*-----------------------------
  Get latest activity list
-------------------------------*/	
function latestactivity()
{
    $results = $this->db->query("SELECT activity_logger.*,users.username FROM activity_logger,users WHERE activity_logger.user_id = users.id ORDER BY log_id DESC LIMIT 10")->result();
    return $results;	
}	
/*-----------------------------
  Get latest tests list
-------------------------------*/ 
function latest_tests()
{
    $results = $this->db->query("
SELECT 
assigned_exam_templates.user_id,
assigned_exam_templates.progress,
assigned_exam_templates.exam_template_id,
candidate_profile.first_name,
exam_main.exam_name
FROM 
assigned_exam_templates,candidate_profile,exam_main
WHERE 
assigned_exam_templates.user_id = candidate_profile.user_id
AND
assigned_exam_templates.exam_template_id = exam_id  ORDER BY assigned_exam_templates.assign_id DESC LIMIT 15")->result();
    return $results;  
} 



}

/* End of file questionpool.php */
/* Location: ./application/modules/secure/models/questionpool.php */