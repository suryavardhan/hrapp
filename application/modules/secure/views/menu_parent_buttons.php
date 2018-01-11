<div style="float:left">
<ul class="box">
			<li class="hc1"><a href="<?=site_url('secure/index')?>"><span>Dashboard</span></a></li> <!-- Active -->
			<li class="hc5"><a href="<?=site_url('secure/job')?>"><span>Job Posting</span></a></li>			
			<li class="hc2"><a href="<?=site_url('secure/questionpool')?>"><span>Question Pool</span></a></li>
			<li class="hc3"><a href="<?=site_url('secure/managetest')?>"><span>Manage Exams</span></a></li>
			<li class="hc4"><a href="<?=site_url('secure/candidates/showall')?>"><span>Candidates</span></a></li>
			<li class="hc6"><a href="<?=site_url('secure/settings')?>"><span>Settings</span></a></li>
</ul>
</div>
<div style="float:right; color:#FFF">
		Pending reviews:
		<span style="background:red; padding: 5px; color:#FFF; font-size:16px; font-weight:bold;">
		 <?=$this->iface->pending_reviews();?>
	    </span>
</div>	