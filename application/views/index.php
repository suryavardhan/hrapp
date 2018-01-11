<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->config->item('portal_name','plus_hr');?> - Candidate Registration Form</title>
<?php $this->load->library('iface'); ?>  
<?php $this->iface->js('genvalidator','xml:space="preserve"'); ?>	
<?php $this->iface->js('jquery',''); ?>	
<script src="../js/jquery.expander.js"></script>
<link rel="stylesheet" href="<?=site_url('assets/css');?>/jobs.css" />
 <script type='text/javascript'>	
		$(document).ready(function() {

  
   $('#email').keyup(function(){   
        $.ajax({
          url: "<?=base_url();?>userpublic/email_check",
          type:'POST',
          data: {email:$('#email').val()},
          success: function(html){
                     $('#message').html(html);
                     $('#tester').val(html);
          }
        });
    });

			          
		 $('#btnAdd').live
	      ('click', function() {		  
			  var newItem = $('<tr><td width="60">Company</td><td><input type="text" name="company[]"/></td><td align="right">Role</td><td><input type="text" name="role[]"/></td><td align="right">Worked for</td><td><input size="5" type="text" name="months[]"/> <small>Mnts</small></td><td><a class="delete">-</a></td></tr>');		  
			  $("#tbComp tr:last").before(newItem); 
	      }
	    );    
	    $('#tbComp td .delete').live('click',function() { $(this).parent().parent().remove(); });
	    /*--------Certifications--------*/
		$('#addCert').live
	      ('click', function() {		  
			  var newItem = $('<tr><td>Title</td><td colspan="2"><input type="text" name="ot_college[]"/></td><td align="right">Year of passing</td><td><input type="text" name="ot_passing[]" size="5"/></td><td align="right">Score in %</td><td><input type="text" name="ot_score[]" size="5"/></td><td><a class="delete">-</a></td></tr>');		  
			  $("#tbCert tr:last").before(newItem); 
	      }
	    );    
	    $('#tbCert td .delete').live('click',function() { $(this).parent().parent().remove(); });	    
	      
	   });
	</script>
</head>

<body>
<div class="header">
  <img src="<?=site_url('assets/images');?>/logo.jpg" title="Designsages" />
</div> 





<div class="container">

<div class="memberlogin"> Already a Member? <a href="<?=site_url('login'); ?>"><img align="absmiddle" src="<?=site_url('assets/images/small.png');?>"/></a> here
| <a href="<?=site_url('jobs');?>">Current Openings</a>
</div>	
<h1>Employment Application</h1>	

 <form action="<?=site_url('userpublic/newregistration'); ?>" method="post" enctype="multipart/form-data" name="myform" id="myform" autocomplete="off">	
<!-- Hidden fields goes here -->
<?php
 if(!$refjob_id):
    $id_pass = "";
 else:
    $id_pass = $refjob_id;
 endif;
?>
<!--Show Applying for section -->
<?php if($id_pass !=''): ?>
<h3>Applying for the post of <span style="color:#222;"><?=$this->iface->getJobtitle($id_pass);?></span></h3>
<?php endif; ?>  
<!-- Applying for -->
 <input type="hidden" name="jobref_job_id" value="<?=$id_pass;?>"/>

<?php if($this->session->flashdata('success') != '') { ?> <p class="msg done"> <?php echo $this->session->flashdata('success') ?></p><?php } ?>
<?php if($this->session->flashdata('error') != '') { ?> <p class="msg error"> <?php echo $this->session->flashdata('error') ?></p><?php } ?>
<?php if($this->session->flashdata('warning') != '') { ?> <p class="msg warning"> <?php echo $this->session->flashdata('warning') ?></p><?php } ?>
<?php if($this->session->flashdata('info') != '') { ?> <p class="msg info"> <?php echo $this->session->flashdata('info') ?></p><?php } ?>

<!-- Registration form -->
<table width="800" style="border-bottom:solid 0px #CCC; border-collapse: collapse;">
  <tr class="bottom">
    <th colspan="7"><strong>Login Details</strong></th>
  </tr>
  <tr>
    <td width="30%">Email*</td>
    <td>
    <input type="text" name="email" id="email"/>
    <div id='myform_email_errorloc' class="error_strings">
    <div id='myform_tester_errorloc' class="error_strings">
      <!--Custom-->
     <div id="message" style="color:red; display:inline; width: 350px;"></div>
     <input type="hidden" id="tester" name="tester" />
     <!--Custom-->
    </div>
    </td>
  </tr>
  <tr>  
    <td>Password*</td>
    <td><input type="password" name="password"/>
       <div id='myform_password_errorloc' class="error_strings"></div>
    </td>
  </tr>
  <tr>  
    <td>Confirm Password*</td>
    <td><input type="password" name="confpassword"/>
        <div id='myform_confpassword_errorloc' class="error_strings"></div>
    </td>    
  </tr>
</table>
<br/>
<table width="800"  style="border-bottom:solid 0px #CCC; border-collapse: collapse;">
  <tr  class="bottom">
    <th colspan="7"><strong>Personal Details</strong></th>
  </tr>  
  <tr>
    <td width="86">First Name*</td>
    <td width="154">
    	<input type="text" name="f_name" value="<?=set_value('f_name');?>"/>
    	<?=form_error('f_name') ?><div id='myform_f_name_errorloc' class="error_strings"></div>	
    </td>
    <td width="120">Last Name*</td>
    <td width="122">
    	<input type="text" name="l_name" value="<?=set_value('l_name');?>"/>
    	<div id='myform_l_name_errorloc' class="error_strings"></div>	
    </td>
  </tr>
  <tr>
    <td>Address Line 1*</td>
    <td><input type="text" name="address_l1"  size="30" value="<?=set_value('address_l1');?>"/>
    	<div id='myform_address_l1_errorloc' class="error_strings"></div>	
    </td>
    <td>Mobile*</td>
    <td>
      <input type="text" name="mobile" value="<?=set_value('mobile');?>"/>
      <div id='myform_mobile_errorloc' class="error_strings"></div>	
    </td>
  </tr>
  <tr>
    <td>Address Line 2</td>
    <td><input type="text" name="address_l2" size="30" value="<?=set_value('address_l2');?>"/></td>
    <td>Land Line</td>
    <td><input type="text" name="landline" value="<?=set_value('landline');?>"/></td>
  </tr>
  <tr>
    <td>City/Place*</td>
    <td>
    	<input type="text" name="city" size="20" value="<?=set_value('city');?>"/>
    	<div id='myform_city_errorloc' class="error_strings"></div>
    </td>
    <!--<td>Email*</td>    
    <td><input type="text" name="email" value="<?=set_value('email');?>"/>
    	<div id='myform_email_errorloc' class="error_strings"></div>

    </td>-->
  </tr>
  <tr>
    <td>Pin*</td>
    <td>
    	<input type="text" name="pin" size="6" value="<?=set_value('pin');?>"/>
    	<div id='myform_pin_errorloc' class="error_strings"></div>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br/>
<table width="800" style="border-bottom:solid 0px #CCC; border-collapse: collapse;" id="tbComp">
  <tr class="bottom">
    <th colspan="7"><strong>Work Experience</strong></th>
  </tr>
  <tr>
    <td width="60">Company</td>
    <td><input type="text" name="company[]"/></td>
    <td  align="right">Role</td>
    <td><input type="text" name="role[]"/></td>
    <td  align="right">Worked for</td>
    <td><input type="text" size="5" name="months[]"/><small>Mnts</small></td>
    <td><a id="btnAdd">+</a></td>
  </tr>
</table>
<br/>
<table width="800"  style="border-bottom:solid 0px #CCC; border-collapse: collapse;">
  <tr  class="bottom">
    <th colspan="7"><strong>Education*</strong></th>
  </tr>
  <tr>
    <td width="60">School</td>
    <td colspan="2">
    	<input type="text" name="school" value="<?=set_value('school');?>"/>
     <br/><br/> Syllabus	
    	<select name="sc_syllabus"><option>State Syllabus</option>
      	 <option>State Syllabus</option>
      	 <option>CBSE</option>
      	 <option>ICSE</option>
      	 <option>Other</option>
      </select>
       <div id='myform_school_errorloc' class="error_strings"></div> 
    </td>
    <td align="right">Year of passing</td>
    <td>
    	<input type="text" name="sc_passing" size="5" value="<?=set_value('sc_passing');?>"/>
    	<div id='myform_sc_passing_errorloc' class="error_strings"></div> 
    </td>
    <td  align="right">Score in %</td>
    <td><input type="text" name="sc_score" size="5" value="<?=set_value('sc_score');?>"/>
    	<div id='myform_sc_score_errorloc' class="error_strings"></div> 
    </td>
  </tr>
  <tr>
    <td>PDC/+2 School/University</td>
    <td colspan="2">
    	<input type="text" name="pd_college" value="<?=set_value('pd_college');?>"/>
    	<div id='myform_pd_college_errorloc' class="error_strings"></div> 
    </td>
    <td  align="right">Year of passing</td>
    <td>
    	<input type="text" name="pd_passing" size="5" value="<?=set_value('pd_passing');?>"/>
    	<div id='myform_pd_passing_errorloc' class="error_strings"></div> 
    </td>
    <td  align="right">Score in %</td>
    <td>
    	<input type="text" name="pd_score" size="5" value="<?=set_value('pd_score');?>"/>
    	<div id='myform_pd_score_errorloc' class="error_strings"></div> 
    </td>
  </tr>
  <tr>
    <td>Graduation College/University</td>
    <td colspan="2">
    	<input type="text" name="d_college" value="<?=set_value('d_college');?>"/>
    	<div id='myform_d_college_errorloc' class="error_strings"></div> 
    </td>
    <td  align="right">Year of passing</td>
    <td>
    	<input type="text" name="d_passing" size="5" value="<?=set_value('d_passing');?>"/>
    	<div id='myform_d_passing_errorloc' class="error_strings"></div> 
    </td>
    <td  align="right">Score in %</td>
    <td>
    	<input type="text" name="d_score" size="5" value="<?=set_value('d_score');?>"/>
    	<div id='myform_d_score_errorloc' class="error_strings"></div> 
    </td>
  </tr>  
  <tr>
    <td>PG</td>
    <td colspan="2"><input type="text" name="pg_college" value="<?=set_value('pg_college');?>"/></td>
    <td  align="right">Year of passing</td>
    <td><input type="text" name="pg_passing" size="5" value="<?=set_value('pg_passing');?>"/></td>
    <td  align="right">Score in %</td>
    <td><input type="text" name="pg_score" size="5" value="<?=set_value('pg_score');?>"/></td>
  </tr>      
</table>
<br/>
<table width="800"  style="border-bottom:solid 0px #CCC; border-collapse: collapse;" id="tbCert">
  <tr class="bottom">
    <th colspan="8"><strong>Other (Certifications, Diploma)</strong></th>
  </tr> 
  <tr>
    <td>Title</td>
    <td colspan="2"><input type="text" name="ot_college[]"/></td>
    <td  align="right">Year of passing</td>
    <td><input type="text" name="ot_passing[]" size="5"/></td>
    <td  align="right">Score in %</td>
    <td><input type="text" name="ot_score[]" size="5"/></td>
    <td><a id="addCert">+</a></td>
  </tr>      
</table>
<br/>
<table width="800"  style="border-bottom:solid 0px #CCC; border-collapse: collapse;">
  <tr>
    <td width="131">Your Expectations / Covering Letter*</td>
    <td><textarea name="expectation" style=" height:120px;"><?=set_value('expectation');?></textarea>
    	<div id='myform_expectation_errorloc' class="error_strings"></div> 
    </td>
  </tr>
</table>
<br/>
<table width="800"  style="border-bottom:solid 0px #CCC; border-collapse: collapse;">
  <tr>
    <td width="131">Your Resume*</td>
    <td><input type="file" name="resume" /> PDF, ODT, DOC, DOCX,RTF
    	<?=form_error('resume') ?>
    	<div id='myform_resume_errorloc' class="error_strings"></div> 
    </td>
  </tr>
  <tr>
  	<td>Anti-SPAM*</td>
  	<td><?=$recaptcha ?><?=form_error('recaptcha_response_field') ?></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="submit" value="Apply Now"/></td>
  </tr>  
</table>
</form>
		<script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[

		 //var frmvalidator  = new Validator("myform");
        /* frmvalidator.EnableOnPageErrorDisplay();
         frmvalidator.EnableMsgsTogether();  */

                
	     frmvalidator.addValidation("f_name","req","First name is Required!");
	     frmvalidator.addValidation("l_name","req", "Last name is  Required!");
	     frmvalidator.addValidation("address_l1","req","Address is Required!");
	     frmvalidator.addValidation("mobile","req", "Mobile number is Required!");
	     frmvalidator.addValidation("email","req", "Email is Required!");


       frmvalidator.addValidation("password","req", "Password is Required!");
       frmvalidator.addValidation("confpassword","req", "Confirm password is Required!");
       frmvalidator.addValidation("confpassword","eqelmnt=password","The confirmed password is not same as password");
	     
	     frmvalidator.addValidation("city","req", "City is Required!");
	     frmvalidator.addValidation("email","email", "Valid email please!");

	     frmvalidator.addValidation("pin","req", "Pin is Required!");
	     frmvalidator.addValidation("pin","minlen=6", "Pin: 6 Digits min");
	     frmvalidator.addValidation("pin","maxlen=6", "Pin: 6 Digits max");
	     frmvalidator.addValidation("pin","numeric", "Pin: Numbers only");
	     
	     frmvalidator.addValidation("school","req", "School name is Required!");
	     frmvalidator.addValidation("sc_passing","req", "School: Passing year Required!");
	     frmvalidator.addValidation("sc_passing","minlen=4", "School Year: minumum length 4!");
	     frmvalidator.addValidation("sc_passing","maxlen=4", "School Year: maximum length 4!");
	     frmvalidator.addValidation("sc_passing","numeric", "School year:Numbers only");	     
	     frmvalidator.addValidation("sc_score","req", "Score in percentage is Required!");
	     frmvalidator.addValidation("sc_score","maxlen=2", "Score: 2 Digits max");
	     frmvalidator.addValidation("sc_score","numeric", "Score:Numbers only");	     
	     
	     frmvalidator.addValidation("pd_college","req", "Plus Two: Required!");
	     frmvalidator.addValidation("pd_passing","req", "Plus Two year:Required!");
	     frmvalidator.addValidation("pd_passing","minlen=4", "Plus Two year:4 Digits min");
	     frmvalidator.addValidation("pd_passing","maxlen=4", "Plus Two year:4 Digits max");
	     frmvalidator.addValidation("pd_passing","numeric", "Plus Two year:Numbers only");	     
	     frmvalidator.addValidation("pd_score","req", "Plus Two Score:Required!");
	     frmvalidator.addValidation("pd_score","maxlen=2", "Plus Two score: 2 Digits max");
	     frmvalidator.addValidation("pd_score","numeric", "Plus Two score: Numbers only");		     	     
	     
	     frmvalidator.addValidation("d_college","req", "College: Required!");
	     frmvalidator.addValidation("d_passing","req", "College Passing year: Required!");
	     frmvalidator.addValidation("d_passing","minlen=4", "College Passing year: 4 Digits min");
	     frmvalidator.addValidation("d_passing","maxlen=4", "College Passing year: 4 Digits max");
	     frmvalidator.addValidation("d_passing","numeric", "College Passing year: Numbers only");		     
	     frmvalidator.addValidation("d_score","req", "College Passing year: Required!");	
	     frmvalidator.addValidation("d_score","maxlen=2", "College Passing year: 2 Digits max");
	     frmvalidator.addValidation("d_score","numeric", "College Passing year: Numbers only");		       
	     
	     frmvalidator.addValidation("expectation","req", "Your expectations is Required!");
	     frmvalidator.addValidation("resume","req", "Resume is Required!");

       function DoCustomValidation()
        {
          var frm = document.forms["myform"];
          if(frm.tester.value == 'This Email is already registered')
          {
            sfm_show_error_msg('This email is already registered',frm.tester);
            return false;
          }
          else
          {
            return true;
          }
        }          

       frmvalidator.setAddnlValidationFunction(DoCustomValidation); 

</script> 
</div>	
</body>
</html>