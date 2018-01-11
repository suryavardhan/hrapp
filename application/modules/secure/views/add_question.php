<?php $this->load->view('header'); ?>
	<!-- elRTE -->
<script src="<?=site_url('assets');?>/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?=site_url('assets');?>/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript">
//Highlight menu
	$(document).ready(function() {
	$(".hc2").addClass("active");
	$(".qp1").addClass("active");

//Elrte
var opts = {
              styleWithCSS : false,
              height       : 150,
              toolbar      : 'compact'
			}
			$('#question').elrte(opts);

/* elRte validation */
			$('#myform').submit(function(e) {
			  var text = $('#question').elrte('val');
			  if (!text) {
			    e.preventDefault();
			    alert('Question  is required!');
			  }
			})

//Ajax load city
	 $("#ans_mode").change(
      function(){
	  $.ajax({
	  url: "<?=site_url();?>secure/ajax/load_answer_input",
	  type:'POST',
	  data: {ans_style:$('#ans_mode').val()},
	  success: function(html){
		$("#ajax_load_answering").html(html);

	  } });
    });

	});


</script>
<script type="text/javascript" src="<?=site_url();?>assets/js/loaderanim.js"></script>

<!--Dreamworks Container-->
<div id="dreamworks_container">

<!--Primary Navigation-->
<?php $this->load->view('primary_navigation'); ?>

<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->

<?php
//If there is no subnav leave $pageMenu null
$data['pageMenu'] = 'pageMenu_questionpool';
$this->load->view('secondary_navigation',$data);
?>
<div id="content_wrap">
<?php $this->load->view('messages'); ?>

	 <div class="one_wrap">

	    <style>
        	.nostyle select {  width:150px;}
        	.ajaxian { list-style: none; margin:0; padding:0;}
        </style>
	   <!-- Form goes here -->
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">?</span><h5>Add A Question</h5></div>
            <div class="widget_body">

	    <form action="<?=site_url(); ?>secure/questionpool/add" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">
	            <ul class="form_fields_container">
	            	<li><label>Question</label>
	            		<div class="form_input">
                             <input type="text" size="60" name="question" id="question" class="input-text" />
	            		</div>
	            	</li>
	            	<li><label>Category</label>
	            		<div class="form_input">
							<select name="category">
                            <?php
						    $query = $this->db->query("SELECT * FROM question_categories");
							foreach ($query->result() as $row)
							 {
								 echo '<option>'.$row->category.'</option>';
							 }
							?>
							</select>
	            		</div>
	            	</li>
	            	<li><label>Skill Level</label>
	            		<div class="form_input">
                           <select name="level">
                            <?php
						    $query = $this->db->query("SELECT * FROM question_levels");
							foreach ($query->result() as $row)
							 {
								 echo '<option>'.$row->level.'</option>';
							 }
							?>
							</select>
	            		</div>
	            	</li>
	            	<li><label>Answering Mode</label>
	            		<div class="form_input">
							<select name="answer_mod" id="ans_mode">
								<option value="type">Type Answer</option>
								<option value="radio">Opt One</option>
								<option value="check">Opt Mutiple</option>
							</select>
	            		</div>
	            	</li>
	            	<li><label>Options/Hints</label>
	            		<div class="form_input">
						<div id="ajax_load_answering">
			                <?php
					       	  echo '<table style="border:none;">';
					       	  echo '<tr><td>Answer Hints</td><tr/><tr><td><textarea name="answer_hint" rows="3"  cols="55"></textarea></td></tr>';
					       	  echo '</table>';
			                ?>
						</div>
	            		</div>
	            	</li>
	            	<li><label>Exhibito</label>
	            		<div class="form_input">
                             <input type="file" size="40" name="exhibit" class="input-text" />
	            		</div>
	            	</li>
					<li><label>Should be answered in</label>
	            		<div class="form_input">
                             <input type="text" size="20" name="elapse_time" id="elapse_time" class="input-text" />
	            		</div>
	            	</li>
	             </ul>
            <div class="action_bar">
                 <input type="submit" class="button_small bluishBtn" value="Add Question" />
            </div>
			</form>

         </div>
     </div>
	   <!-- ends here -->
	 </div>

</div>
</section>
<?php $this->load->view('footer'); ?>
