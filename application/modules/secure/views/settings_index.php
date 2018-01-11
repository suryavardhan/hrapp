<?php $this->load->view('header'); ?>

<script type="text/javascript">
//Highlight menu   
	$(document).ready(function() {  
	jQuery(".hc6").attr("id","menu-active");
	
	
	});

		
</script>
	<script type="text/javascript" src="<?=site_url();?>assets/js/loaderanim.js"></script>
<!--Includes-->	
<div id="main">

	<!-- Tray -->
		 <?php $this->load->view('tray'); ?>
	 <!--  /tray -->

	<hr class="noscreen" />
	<!-- Menu -->
	<div id="menu" class="box">

        <?php $this->load->view('menu_parent_buttons'); ?>

	</div> <!-- /header -->

	<hr class="noscreen" />

	<!-- Columns -->
	<div id="cols" class="box">
		<!-- Aside (Left Column) -->
		<div id="aside" class="box">

		<?php $this->load->view('sidelinks_settings'); ?>	

		</div> <!-- /aside -->

		<hr class="noscreen" />

<!--  Content (Right Column)-->
		<div id="content" class="box">
  
        <?php $this->load->view('messages');?>
        
        <a href=""></a>
 

		
	    </div> <!-- /content -->

	</div> <!-- /cols -->

<?php $this->load->view('footer'); ?>