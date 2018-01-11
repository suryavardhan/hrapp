<style>
.realCount
{
    background: #F2364E;
    border-radius: 3px 3px 3px 3px;
    color: #FFFFFF;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 10px;
    padding: 1px 3px;

 }   
</style>
<h2>Candidates</h2>
<ul>
    <li class="ca1"><a href="<?=site_url('secure/candidates/showall');?>"><span class="iconsweet">|</span> Candidates Pool</a></li>
    <li class="ca5"><a href="<?=site_url('secure/candidates/showhired');?>"><span class="iconsweet">c</span> Hired Candidates</a></li>
    <li class="ca4"><a href="<?=site_url('secure/candidates/showrejected');?>"><span class="iconsweet">â</span> Rejected Candidates</a></li>
    <li class="ca3"><a href="<?=site_url('secure/candidates/pendingreviews');?>"><span class="iconsweet">r</span>Pending Reviews </a> <?php if($this->iface->pending_reviews() != 0):?><span class="realCount"><?=$this->iface->pending_reviews();?></span><?php endif; ?></li>  
    <li class="ca2"><a href="<?=site_url('secure/candidates/emails');?>"><span class="iconsweet">@</span>Email Templates</a></li>  
</ul>