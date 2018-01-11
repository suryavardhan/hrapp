<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Questionpool extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('questionpoolmodel');
		$this->load->library('pagination');

		if (!$this->tank_auth->is_logged_in())  { redirect('/secure/secure/login');}
		$this->tankracl->restrict('secure.secure');

	}

/*---------------------------------------
 * Question Pool Open View
 * --------------------------------------*/

	function index()
	{
		$this->output->cache(10);
		$this->load->view('add_question');

	}

/*---------------------------------------
 * Function to load jobs view
 * --------------------------------------*/
//Note: To be updated with RACL functions
   function open($view)
   {
   	  $this->load->view($view);
   }

/*---------------------------------------
 * Question Pool ADD
 * --------------------------------------*/

	function add()
	{
		if($this->questionpoolmodel->save_question()):
			$this->session->set_flashdata('success', "New Question added to the pool");
			redirect('secure/questionpool');
		endif;
	}
 /*---------------------------------------
 * 14-Sep-2012 - Load the edit view
 * --------------------------------------*/
   function edit($question_id)
   {
   	  //$this->output->cache(10);
   	  //Get Question
   	  $data['question'] = $this->questionpoolmodel->getQuestion($question_id);
   	  //Get options array
   	  $data['options']  = $this->questionpoolmodel->showAnsweroptions($question_id,'returnArray');

   	  $this->load->view('edit_question',$data);
   }
 /*---------------------------------------
 * Question Pool NEW CATEGORY
 * --------------------------------------*/
    function newcategory()
	{
        if($this->questionpoolmodel->save_category()):
			$this->session->set_flashdata('success', "New Question category added!");
			redirect('secure/questionpool/open/addcategory');
		else:
			$this->session->set_flashdata('error', "New Question category failed to add!");
			redirect('secure/questionpool/open/addcategory');
		endif;

	}

 /*---------------------------------------
 * Question Pool NEW CATEGORY
 * --------------------------------------*/
    function newlevel()
	{
        if($this->questionpoolmodel->save_levels()):
			$this->session->set_flashdata('success', "New Question Level added!");
			redirect('secure/questionpool/open/addlevels');
		else:
			$this->session->set_flashdata('error', "New Question Level failed to add!");
			redirect('secure/questionpool/open/addlevels');
		endif;

	}

 /*---------------------------------------
 * Question Pool List added questions
 * --------------------------------------*/
   function questions()
   {

        $config['base_url']   = base_url().'secure/questionpool/questions';
		$config['total_rows'] = $this->db->get('question')->num_rows();
		$config['per_page']   = 15;

		$config['num_links']      = 5;
		$config['uri_segment']    = 4;
		$config['full_tag_open']  = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open']   = '<a class="redishBtn button_small" href="#" style="margin:2px; padding:2px 6px;">';
		$config['cur_tag_close']  = '</a>';

		$config['next_link'] = '&rarr;';
	    $config['next_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
	    $config['next_tag_close'] = '</div>';

		$config['prev_link'] = '&larr;';
	    $config['prev_tag_open'] = '<div class="greyishBtn button_small" style="margin:2px; padding:2px 6px;">';
	    $config['prev_tag_close'] = '</div>';

		$config['num_tag_open']   = '<div class="whitishBtn button_small" style="margin:2px; padding:2px 6px;">';
		$config['num_tag_close']  = '</div>';



        $this->pagination->initialize($config);

       $perpage = $config['per_page'];
	   $total   = $this->uri->segment(4);


   	 $data['questions']= $this->questionpoolmodel->questions($perpage,$total);
	 $this->load->view('list_questions',$data);
   }

/*---------------------------------------
 * Delete a question
 * --------------------------------------*/
   function delete($id)
   {
	 if($this->questionpoolmodel->delete_question($id)){

			$this->session->set_flashdata('success', "Question removed successfuly!");
			redirect('secure/questionpool/questions');
	 }
	 else {
			$this->session->set_flashdata('success', "Deletion failed!");
			redirect('secure/questionpool/questions');
	 }
   }
/*---------------------------------------
 * 14-Sep-2012 - Count of questions by type and by category
 * --------------------------------------*/
   function countofquestions()
   {
   	 $data['countbyType']     = $this->questionpoolmodel->countQuestions('type');
   	 $data['countbyCategory'] = $this->questionpoolmodel->countQuestions('category');
   	 $this->load->view('questionscount',$data);
   }

/*---------------------------------------
 * 17-Sep-2012 - Question editing
 * --------------------------------------*/
   function updatequestion()
   {
     //Get the Question ID and type
   	  $q_id = $this->input->post('q_id');

	  if($this->questionpoolmodel->updateQuestion()):
			$this->session->set_flashdata('success', "Question data updated!");
			redirect('secure/questionpool/edit/'.$q_id);
	   endif;


   }
/*---------------------------------------
 * 28-Sep-2012 - Question ajax search
 * --------------------------------------*/
  function questionsearch()
  {
  	$searchKey = $this->input->post('searchkey');
  	$questions = $this->questionpoolmodel->question_search($searchKey);
    //Show opening TH
  ?>
		<tr>
			<th>Question</th>
			<th>Category</th>
			<th>Level</th>
			<th>Answering Mode</th>
			<th><span class="iconsweet">2</span></th>
			<th width="8%"> Actions</th>
		</tr>
         <?php
			foreach ($questions as $row):
		 ?>
			<tr>
				<td><?=$row->question;?></td>
				<td><?=$row->category;?></td>
				<td><?=$row->level;?></td>
				<td><?=$row->answer_type;?></td>
				<td><?php if($row->exhibit):?><a href="<?=site_url('exhibit/'.$row->exhibit);?>" target="_blank"><span class="iconsweet">2</span></a><?php endif; ?></td>
				<td>
				    <span class="data_actions iconsweet">
				    <a  href="<?=site_url('secure/questionpool/edit/'.$row->q_id);?>">C</a>
				    <a class="confirm" href="<?=site_url();?>secure/questionpool/delete/<?=$row->q_id;?>" title="You want to Delete this question?">X</a>
				    </span>
				</td>
			</tr>
		<?php  endforeach; ?>

<?php
    //Print loo
  }

}
/* End of file questionpool.php */
/* Location: ./application/modules/secure/controllers/questionpool.php */
