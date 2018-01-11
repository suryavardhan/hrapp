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
class Questionpoolmodel extends CI_Model
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
		  else
		  {
		  		$answer_hint = $this->input->post('answer_hint');
				$options = array(
					'q_id'          => $q_id,
					'answer_option' => $answer_hint,
					'is_answer'     => '1'
				);				
				
				//Save each option to database
				if($answer_hint != ''): $this->db->insert('question_options',$options); endif;

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
			'added_by'	  => $this->tank_auth->get_user_id(),
			'added_on'	  => time()
			);
			
	//Check for Exhibit Upload	
	if(isset($_FILES['exhibit']) && !empty($_FILES['exhibit']['name']))
	  {					
	        $config['upload_path']   = './exhibit/';
			$config['allowed_types'] = 'gif|jpg|png|bmp';
			$config['max_size']	     = '1500';
			$config['max_width']     = '1024';
			$config['max_height']    = '768';
			$config['file_name']     = time();
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
			$this->iface->log('New Question added with exhibit');				 
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
			$this->iface->log('New Question added with out exhibit');			
			return true;    		
      }
  
  }  	
	
/*---------------------------------------------*
 * Function for creating a question category
 ----------------------------------------------*/
  
  function save_category()
  {
  		
  	$category['category'] = $this->input->post('category');
  	$category['description'] = $this->input->post('test_description');
	if($this->db->insert('question_categories',$category)): $this->iface->log('New category added'); return true; else:return false; endif;	 	
  }	
	
/*---------------------------------------------*
 * Function for creating a question level
 ----------------------------------------------*/
  
  function save_levels()
  {
  		
  	$level['level'] = $this->input->post('level');
	if($this->db->insert('question_levels',$level)): $this->iface->log('New question level added');	return true; else:return false; endif;
 	
  }	
		
/*---------------------------------------------*
 * Function for Listing questions
 ----------------------------------------------*/	
  function questions($per_page,$total)
  {
  	if($total == '') { $total=0;}
  	$query = $this->db->query("SELECT * FROM question ORDER BY q_id DESC LIMIT $total,$per_page");	
	$results = $query->result();
	return $results;	
  }
/*---------------------------------------------*
 * Function for Listing questions based on ajax search
 ----------------------------------------------*/	
  function question_search($searchKey)
  {
  	//$query = $this->db->query("SELECT * FROM question WHERE question LIKE '%$searchKey%' OR category LIKE '%$searchKey%' ORDER BY q_id");	
	$query = $this->db->query("SELECT * FROM question WHERE  MATCH(question) AGAINST('$searchKey')");
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
			 $this->iface->log('Deleted a question');		
			 return true;
		   }
          else
		   {
			 return false;
		   }	
	
  }
/*---------------------------------------------*
 *14-Sep-2012 Count Questions
 ----------------------------------------------*/
  function countQuestions($countBy)
  {
  	if($countBy == 'type'):
  		$results = $this->db->query("SELECT count(`q_id`) AS countque,`category`,`answer_type` FROM `question` GROUP BY answer_type,`category` ORDER BY `answer_type` DESC")->result();	
        return $results;
    else:
   		$results = $this->db->query("SELECT count(`q_id`) AS countque,`category` FROM `question` GROUP BY `category`")->result();	
        return $results;   	
    endif;    
  }
	

/*  -------Question EDIT segment--------- */

/*---------------------------------------------
 * Get question to edit 14-09-2012
 * -------------------------------------------*/ 
 function getQuestion($question_id)
   {
     //Get the Question
       $result    = $this->db->query("SELECT * FROM question WHERE q_id ='$question_id'")->row();
       return $result;
   }
/*---------------------------------------------
 * Get question options 14-09-2012
 * -------------------------------------------*/ 
   function showAnsweroptions($question_id,$retArray = NULL)
   {
      //Check question type using question ID
      $query         = $this->db->query("SELECT answer_type FROM question WHERE `q_id` ='$question_id'");
      $query_result  = $query->row(); 
      $answer_type   = $query_result->answer_type;

      $qry_getOptions = $this->db->query("SELECT opt_id,q_id,answer_option,is_answer FROM question_options WHERE `q_id` ='$question_id'");
      $result_option  = $qry_getOptions->result(); 


      if(!$retArray):
      //For returning as text
      switch($answer_type)
      {
        case 'radio':
          //Fetch answers
          $radio = '';
          foreach($result_option as $radioVals)
          {
            if($radioVals->is_answer == 1): $ans = "[A]"; else: $ans=""; endif;
            $radio  .= '&nbsp;'.$radioVals->answer_option.$ans.'<br/>';
          }
          return $radio;
        break;

        case 'check':
          $check = '';
          foreach($result_option as $checkVals)
          {

            $check  .= '&nbsp;'.$checkVals->answer_option.'<br/>';
          }        
          return $check;
        break;

        case 'type':
          $type =  '';
          foreach($result_option as $typeVals)
          {

            $type  .= '&nbsp;'.$typeVals->answer_option.'<br/>';
          }             
          return $type;
        break;

       }
       else:
       	//For returning as array
       	return $result_option;
       endif;
    }

function updateQuestion()
{

    //Get question ID
    $q_id = $this->input->post('q_id');

    //Remove everything from Question options
    $this->db->where('q_id', $q_id);
    $this->db->delete('question_options');

	$question =  array(
			'question'    => $this->input->post('question'),
			'category'    => $this->input->post('category'),
			'level'       => $this->input->post('level'),
			'elapse_time' => '60',			
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
			redirect('secure/questionpool/edit/'.$q_id );
		}
		else
		{		
		    //File upload - Getting file name data		
			$file_data = $this->upload->data();
			$filename = $file_data['file_name'];				
			//Collect base inputs
			$exhi =  array(
			   'exhibit'   => $filename			
			);

			//Merge the array
			$question_data = array_merge($question,$exhi);

            //Update the Question data with Exhibit
            $this->db->where('q_id', $q_id);
            $this->db->update('question', $question_data); 
				
			//Suporting function for option saving
			$this->support_options_add($q_id);	
			$this->iface->log("Updated question ID: $q_id" );		 
	        return true;
	
        }//With File uploading else brace close
    
     }
   else 
      {
			//Without exhibit 
            $this->db->where('q_id', $q_id);
            $this->db->update('question', $question); 
            //Add the options
			$this->support_options_add($q_id); 	
			$this->iface->log("Updated question ID: $q_id" );			
			return true;    		
      }
  
}



	  
}

/* End of file questionpool.php */
/* Location: ./application/modules/secure/models/questionpool.php */