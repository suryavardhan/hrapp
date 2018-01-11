<?php if($this->session->flashdata('success') != ''): ?>
    	<div class="msgbar msg_Success hide_onC">
            <span class="iconsweet">=</span><p><?=$this->session->flashdata('success') ?></p>
        </div>
<?php endif; ?> 

<?php if($this->session->flashdata('error') != ''): ?>
    	<div class="msgbar msg_Error hide_onC">
            <span class="iconsweet">!</span><p><?=$this->session->flashdata('error') ?></p>
        </div>
<?php endif; ?>   

<?php if($this->session->flashdata('info') != ''): ?>
    	<div class="msgbar msg_Info hide_onC">
            <span class="iconsweet">?</span><p><?=$this->session->flashdata('info') ?></p>
        </div>
<?php endif; ?>           