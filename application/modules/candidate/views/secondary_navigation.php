<nav id="secondary_nav"> 
<!--UserInfo-->
<dl class="user_info">
    <style>.user_info img{ border-radius:5px; border:solid 1px #FFF;}</style>
	<dt>
        <a target="_blank" href="https://en.gravatar.com/" title="Change Avatar using Gravatar">
            <?php 
            $email = $this->tankracl->user_email();
            ?>
            <?=gravatar(  $email, 77 )?>
        </a>
    </dt>
    <dd>
    <a class="welcome_user" href="#">Welcome, <strong style="text-transform:capitalize;"><?=$this->tankracl->candidate_name()?></strong></a>
    <span class="log_data">Last sign in : <?=$this->tankracl->get_lastlogin()?></span>
    <a class="logout"  href="<?=site_url('logout');?>"> Logout</a>
    <a class="user_messages" href="#"><span><?=$this->iface->getUnreadmessagecount($this->tankracl->candidate_id()); ?></span></a>
    </dd>
</dl>

<!-- Page Specific Links goes here -->
<?php
if($pageMenu != ''):
 $this->load->view($pageMenu);
endif;
?>
</nav>