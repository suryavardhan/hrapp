<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->model('candidatesmodel');
		
		if (!$this->tank_auth->is_logged_in())  { redirect('/secure/login');}				
		
	}
/*-----------------------------------------------------*
 * Loads answer inputs
 *-----------------------------------------------------*/	
    function load_answer_input()
	{
	    $ans_style = $this->input->post('ans_style');
		
		if($ans_style == 'radio')
		  {
			echo '<table style="border:none;">';	
		    echo '<tr><td>1 <input type="text" name="option1"></td><td><input type="radio" name="radio" checked="checked" value="1"></td></tr>';	
		    echo '<tr><td>2 <input type="text" name="option2"></td><td><input type="radio" name="radio" value="2"></td></tr>';	
		    echo '<tr><td>3 <input type="text" name="option3"></td><td><input type="radio" name="radio" value="3"></td></tr>';	
			echo '<tr><td>4 <input type="text" name="option4"></td><td><input type="radio" name="radio" value="4"></td></tr>';	 
		    echo '<tr><td>5 <input type="text" name="option5"></td><td><input type="radio" name="radio" value="5"></td></tr>';
			echo '</table>';
		  }
		elseif($ans_style == 'check')
		{
			echo '<table style="border:none;">';	
		    echo '<tr><td>1 <input type="text" name="option1"></td><td><input type="checkbox" name="check1" checked="checked" value="1"></td></tr>';	
		    echo '<tr><td>2 <input type="text" name="option2"></td><td><input type="checkbox" name="check2" value="1"></td></tr>';	
		    echo '<tr><td>3 <input type="text" name="option3"></td><td><input type="checkbox" name="check3" value="1"></td></tr>';	
			echo '<tr><td>4 <input type="text" name="option4"></td><td><input type="checkbox" name="check4" value="1"></td></tr>';	 
		    echo '<tr><td>5 <input type="text" name="option5"></td><td><input type="checkbox" name="check5" value="1"></td></tr>';
			echo '</table>';			
			
		}
       else
       {
       	  echo '<table style="border:none;">';
       	  echo '<tr><td>Answer Hints</td><tr/><tr><td><textarea name="answer_hint" rows="3"  cols="55"></textarea></td></tr>';
       	  echo '</table>';
       }			

	
	}	

/*-----------------------------------------------------*
 * Loads cities to city page
 *-----------------------------------------------------*/	
    function ajxload_city_page()
	{
	  $country = $this->input->post('country');
	  $l = 1; 
	 
	  echo "<table>";
	  echo "<tr><th>Added Cities</th></tr>";	       
      $query = $this->db->query("SELECT city FROM city WHERE country_id='$country'");	
		foreach ($query->result() as $row)
		{
		   if ($l% 2 <> 1){$bg = "bg";}else {$bg = "";}//The grid printer	
		    		
		   echo '<tr class="'.$bg.'">';	
		   echo '<td>'.$row->city.'</td>';
		   echo "</tr>";
		   
		   $l++;
		}
	  echo "<table>";
	  
	}	
/*-----------------------------------------------------*
 * Global Search
 *-----------------------------------------------------*/	
  function globalSearch()
  {
    $searchkey = $this->input->post('searchkey');

    $getCandidatesdata = $this->candidatesmodel->searchCandidates($searchkey);
     if($getCandidatesdata):
        echo '<h5>Candidates</h5>';
        echo '<ul>';
	    foreach ($getCandidatesdata AS  $candidate):
	    	echo '<li>';
	        echo '<a href="'.site_url('secure/candidates/expand/'.$candidate->user_id).'">'; 
	    	echo $candidate->first_name." ".$candidate->last_name. " (".$candidate->user_slug.")";
	    	echo '</li>';
	    endforeach;
	    echo '</ul>';
     endif;
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */