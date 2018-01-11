<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Sedcure
 * @author	Rakesh (http://pixelglimpse.com/)
 */
class Managetestmodel extends CI_Model
{


	function __construct()
	{
		parent::__construct();
	}
	
	
/*---------------------------------------------*
 * Save Question - Support Function
 ----------------------------------------------*/	
  function support_options_add($id)
  {
  	   $q_id = $id;	
  	   $answering_type = $this->input->post('answer_mod');
        //Get Radio or Check box answer keys		
		//If answer type is Radio collect options and correct answer
		if($answering_type == 'radio')
		 {
		 	$answer_key = $this->input->post('radio');			
           //Loop of option Inputs		
		 	for($i=1;$i<=5;$i++)
			{
				$option = $this->input->post('option'.$i);								
				
				//For option which is answer
				if($i == $answer_key && $option != ''):
				$options = array(
					'q_id'          => $q_id,
					'answer_option' => $option,
					'is_answer'     => '1'
				);					
				 $this->db->insert('question_options',$options);	
				endif; 
				
				//For option which is not an answer
				if($i != $answer_key && $option != ''):
				$options = array(
					'q_id'          => $q_id,
					'answer_option' => $option,
					'is_answer'     => '0'
				);					
				 $this->db->insert('question_options',$options);	
				endif; 				
				
				
			}			
			
			
		 }
		elseif($answering_type == 'check')
		 {
		 		
		   //Loop of option Inputs		
		 	for($i=1;$i<=5;$i++)
			{
				$check_vals = $this->input->post('check'.$i);
				$option = $this->input->post('option'.$i);
				$options = array(
					'q_id'          => $q_id,
					'answer_option' => $option,
					'is_answer'     => $check_vals
				);				
				
				//Save each option to database
				if($option != ''): $this->db->insert('question_options',$options); endif;
				
			}
		 		 
		  } 	
	
  }	
	
/*---------------------------------------------*
 * Function for creating a question
 ----------------------------------------------*/
  function save_question()
  {
  	$answering_type = $this->input->post('answer_mod');
	$question =  array(
			'question'    => $this->input->post('question'),
			'category'    => $this->input->post('category'),
			'level'       => $this->input->post('level'),
			'answer_type' => $answering_type,	
			'elapse_time' => $this->input->post('elapse_time'),			
			);
			
	//Check for Exhibit Upload	
	if(isset($_FILES['exhibit']) && !empty($_FILES['exhibit']['name']))
	  {					
	        $config['upload_path'] = './exhibit/';
			$config['allowed_types'] = 'gif|jpg|png|bmp';
			$config['max_size']	= '1500';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['file_name']  = time();
			$this->load->library('upload', $config);

		if (!$this->upload->do_upload('exhibit'))
		{
			$error = $this->upload->display_errors('','');
			$this->session->set_flashdata('error', $error);  
			redirect('secure/questionpool');
		}
		else
		{		
		    //File upload - Getting file name data		
			$file_data = $this->upload->data();
			$filename = $file_data['file_name'];				
			//Collect base inputs
			$exhi =  array(
			'exhibit'	  => $filename			
			);
			$question_data = array_merge($question,$exhi);							
			//With exhibit 
			$this->db->insert('question',$question_data);		
			//Insert to Question table and get question -ID
			$q_id = $this->db->insert_id();				
			//Suporting function for option saving
			$this->support_options_add($q_id);	
			$this->iface->log("New question added" );		 
	        return true;
	
        }//With File uploading else brace close
    
     }
   else 
      {
			//With exhibit 
			$this->db->insert('question',$question);			
			//Insert to Question table and get question -ID
			$q_id = $this->db->insert_id();				
			//Suporting function for option saving
			$this->support_options_add($q_id); 	
			$this->iface->log("New question added" );			
			return true;    		
      }
  
  }  	
	
/*---------------------------------------------*
 * Function for creating a question category
 ----------------------------------------------*/
  
  function save_category()
  {
  		
  	$category['category'] = $this->input->post('category');
	if($this->db->insert('question_categories',$category)): return true; else:return false; endif;
	
  	
  }	
	
/*---------------------------------------------*
 * Function for creating a question level
 ----------------------------------------------*/
  
  function save_levels()
  {
  		
  	$level['level'] = $this->input->post('level');
	if($this->db->insert('question_levels',$level)): return true; else:return false; endif;
	
  	
  }	
		
/*---------------------------------------------*
 * Function for Listing questions
 ----------------------------------------------*/	
  function questions()
  {
  	$query = $this->db->query("SELECT * FROM question ORDER BY q_id DESC");	
	$results = $query->result();
	return $results;
  	
  }
/*---------------------------------------------*
 * Function for deleting questions
 ----------------------------------------------*/
  function delete_question($id)
  {
         $this->db->where('q_id', $id);
         if($this->db->delete('question'))
           {
			 $this->db->where('q_id', $id);	
			 $this->db->delete('question_options'); 	
			 return true;
		   }
          else
		   {
			 return false;
		   }	
	
  }
	
/*---------------------------------------------*
 * Function for defining a test
 ----------------------------------------------*/
 function definetest()
 {
 	    	
		//Get test name description and time data
		$test_name['exam_name']   = $this->input->post('test_name');
		$test_name['description'] = $this->input->post('test_description');
		$test_name['total_time']  = $this->input->post('time');
		$test_name['added_by']    = $this->tank_auth->get_user_id();
		$test_name['added_on']    = time();
		
		//Insert test to test_main and get ID
		$this->db->insert('exam_main',$test_name);
		$exam_id = $this->db->insert_id();
		
 	    //Get the arrays
		$category        = $this->input->post('category');	
		$level           = $this->input->post('level');
		$answermod       = $this->input->post('answer_mod');
		$questions_count = $this->input->post('nof_questions');		
		//Count array. Purge out Nulls
		$filled_questions_counts = array_filter($questions_count, 'strlen');
		//Number of question count fields those are not null
		$count_questions = count($filled_questions_counts);	
        //Get inputs based on the count_questions
        if( $count_questions > 0 )
        {			
			 for($i=0;$i<$count_questions;$i++)
			 {
			 	
                 $data = array (
					  'exam_id'        => $exam_id,
					  'category'       => $category[$i],
					  'level'          => $level[$i],
					  'answer_mode'    => $answermod[$i],
					  'question_count' => $questions_count[$i],
				      );
				 $this->db->insert('exam_segments',$data);				
			 	
			 }
			 
			 return true;						
		}
		else 
		{
			 return false;
		}
		
		
		
		
		
 }
/*---------------------------------------------*
 * List all test/exam templates with number of 
 times they assigned
 ----------------------------------------------*/	
  function listTesttemplates()
  {
  	$query = $this->db->query("
	 SELECT a.*, COUNT(c.exam_template_id) AS assignCount
	 FROM exam_main AS a
	 LEFT JOIN assigned_exam_templates AS c ON ( c.exam_template_id = a.exam_id )
	 GROUP BY c.exam_template_id
	 ORDER BY status ASC");	
	$results = $query->result();
	return $results;
  	
  }

/*---------------------------------------------*
 * Delete unassigned test template
 ----------------------------------------------*/	
   function deleteTesttemplate($exam_id)
   {
        $this->db->where('exam_id', $exam_id);
        if($this->db->delete('exam_main')):
        	return TRUE;
        else:
            return false;
        endif;    	 	 
   }

 /*---------------------------------------------*
 * Make listing(s) status - TOGGLING ENABLED -
 *---------------------------------------------*/
  function toggle_status()
  {
    $exam_ids = $this->input->post('exam_id');
    if($exam_ids)
    { 
        foreach ($exam_ids as $exam_id) 
        {
           $this->db->query("UPDATE exam_main SET status = MOD( status + 1, 2 ) WHERE exam_id ='$exam_id'");
           //$this->db->update('real_listing', $featured);
        }
        return TRUE;
    
    }
    else return FALSE;

  } 

/*---------------------------------------------*
 * Edit test template
 ----------------------------------------------*/

  /*-----------------Template-------------------*/
  function getTemplatedetails($template_id)
  {
  	$results = $this->db->query("SELECT * FROM exam_main WHERE exam_id='$template_id'")->row();	
	return $results;
  }	

  /*--------------Segments---------------------*/	
  function getTemplatesegments($template_id)
  {
  	$query   = $this->db->query("SELECT * FROM exam_segments WHERE exam_id='$template_id'");	
	$results = $query->result();
	return $results;
  }


/*---------------------------------------------*
 * Delete an exam segment
 ----------------------------------------------*/	
   function deleteTestsegment($eseg_id)
   {
        $this->db->where('eseg_id', $eseg_id);
        if($this->db->delete('exam_segments')):
        	return TRUE;
        else:
            return false;
        endif;    	 	 
   }

/*---------------------------------------------*
 * Update an exam
 ----------------------------------------------*/	
  function updateExam_main()
  {
	//Get test name description and time data
	$exam_id                  = $this->input->post('exam_id');

	$test_name['exam_name']   = $this->input->post('test_name');
	$test_name['description'] = $this->input->post('test_description');
	$test_name['total_time']  = $this->input->post('time');
        
    $this->db->where('exam_id', $exam_id);
    if($this->db->update('exam_main',$test_name)):
        return TRUE;
    else:
        return FALSE;
    endif;  

  }
  /*--Update the segments--*/

  function updateExam_segments()
  {
  	$exam_id  = $this->input->post('exam_id');

    //Delete all existing segments
    $this->db->where('exam_id', $exam_id);
    $this->db->delete('exam_segments'); 

    //Grab new segments and add to DB
    //Get the arrays
		$category        = $this->input->post('category');	
		$level           = $this->input->post('level');
		$answermod       = $this->input->post('answer_mod');
		$questions_count = $this->input->post('nof_questions');		
		//Count array. Purge out Nulls
		$filled_questions_counts = array_filter($questions_count, 'strlen');
		//Number of question count fields those are not null
		$count_questions = count($filled_questions_counts);	
        //Get inputs based on the count_questions
        
        if($count_questions > 0 )
        {			
			 for($i=0;$i<$count_questions;$i++)
			 {
			 	
                 $data = array (
					  'exam_id'        => $exam_id,
					  'category'       => $category[$i],
					  'level'          => $level[$i],
					  'answer_mode'    => $answermod[$i],
					  'question_count' => $questions_count[$i],
				      );
				 $this->db->insert('exam_segments',$data);				
			 	
			 }
			 
			 return true;						
		}
		else 
		{
			 return false;
		}


  }
	
}

/* End of file questionpool.php */
/* Location: ./application/modules/secure/models/questionpool.php */