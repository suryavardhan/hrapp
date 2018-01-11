<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title><?=$this->config->item('portal_name','plus_hr');?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?=site_url('assets/theme');?>/images/favicon.ico">
<!--Stylesheets-->
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/reset.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/main.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/typography.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/bootstrap.css" />
<link rel="stylesheet" href="<?=site_url('assets/theme');?>/css/highlight.css" />
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<!--Javascript-->
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.min.js"> </script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.easing.1.3.js"> </script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.tipsy.js"> </script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/form_elements.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="<?=site_url('assets/theme');?>/js/main.js"> </script>
<meta charset="UTF-8"></head>


<body id="login_container">
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'username',
	'type'  => "text",
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'placeholder'=> "User Name"
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => 'form-login',
	'placeholder'=> "Password"
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<!--Dreamworks Container-->
<div id="dreamworks_container">
<style>
.done
{
  padding: 5px;
  margin: 0 auto;
  background: #ADCA96;
  color: #333;
  border-radius: 5px;
  width: 30%;
  font-weight: bold;
  font-size: 15px;
  text-align: center;
}
</style>
<?php if($this->session->flashdata('success') != '') { ?> <p class="done"> <?php echo $this->session->flashdata('success') ?></p><?php } ?>
<?php if($this->session->flashdata('error') != '') { ?> <p class="msg error"> <?php echo $this->session->flashdata('error') ?></p><?php } ?>
<?php if($this->session->flashdata('warning') != '') { ?> <p class="msg warning"> <?php echo $this->session->flashdata('warning') ?></p><?php } ?>
<?php if($this->session->flashdata('info') != '') { ?> <p class="msg info"> <?php echo $this->session->flashdata('info') ?></p><?php } ?>	

	<div id="login">
    	<img src="<?=site_url('assets/theme');?>/images/logo_login.png" />
         <?php echo form_open($this->uri->uri_string()); ?>
        	<div class="input_box"> 
                <span class="iconsweet">a </span>
                <?php echo form_input($login); ?>
                <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
            </div>
            <div class="input_box"> 
                <span class="iconsweet">y</span>
                <?php echo form_password($password); ?>
                <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
            </div>
            <!--Captcha items here -->
            <?php if($show_captcha) 
            	  {
		          if ($use_recaptcha) { 
			?>
            <div> 
                <div id="recaptcha_image"></div>
                <a href="javascript:Recaptcha.reload()"><img width="25" height="18" alt="Get a new challenge" id="recaptcha_reload" src="http://www.google.com/recaptcha/api/img/clean/refresh.png"></a>
            </div>
            <div> 
                <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
                <?php echo form_error('recaptcha_response_field'); ?>
                <?php echo $recaptcha_html; ?>
            </div>                            
			<?php 
		      } 
			else { 
				?>
			<div>
					Enter the code exactly as it appears:
					<?php echo $captcha_html; ?>
			</div>
			<div>
				<?php echo form_label('Confirmation Code', $captcha['id']); ?>
				<?php echo form_input($captcha); ?>
				<?php echo form_error($captcha['name']); ?>
			</div>
			<?php }
			} ?>

            <!-- till here -->
            <div> 
                <?php echo anchor('/auth/forgot_password/', 'Forgot password','class="forgot_password"'); ?>
				<?php echo form_submit('submit', ' Login','class="button"'); ?>
				<?php echo form_close(); ?>
           </div>
        </form>
    </div>

</div>

</body>
</html>