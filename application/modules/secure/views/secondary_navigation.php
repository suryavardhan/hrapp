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
          <!-- <img src="<?=site_url('assets/theme');?>/images/avatar.png" alt="" /> -->
        </a>
    </dt>
    <dd>
    <a class="welcome_user" href="#">Welcome, <strong style="text-transform:capitalize;"><?=$this->tank_auth->get_username()?></strong></a>
    <span class="log_data">Last sign in : <?=$this->tankracl->get_lastlogin()?></span>
    <a class="logout"  href="<?=site_url('secure/secure/logout');?>">Logout</a>
    <a class="user_messages" href="<?=site_url('secure/candidates/pendingreviews');?>">
    <?php if($this->iface->pending_reviews() != 0):?>
    <span><?=$this->iface->pending_reviews();?></span>
    <?php endif; ?>
    </a>
    </dd>
</dl>

<!-- Page Specific Links goes here -->
<?php
if($pageMenu != ''):
 $this->load->view($pageMenu);
endif;
?>
<!-- 
VALID TEMPLATE 	
<h2>Dashboard</h2>
<ul>
	<li><a href="#"><span class="iconsweet">a</span>User Profiles</a></li>
    <li><a href="#"><span class="iconsweet">k</span>Admin Tools</a></li>
    <li><a href="#"><span class="iconsweet">o</span>Milestornes</a></li>
    <li><a href="#"><span class="iconsweet">S</span>Worklog</a></li>
</ul> 
-->

</nav>