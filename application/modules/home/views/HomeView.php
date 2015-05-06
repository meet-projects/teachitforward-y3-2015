<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Homepage <small>Overview</small>
		</h1>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-4">
		<h3 class="page-header">
			People you can help
		</h3>
		<div class="list-group" style="overflow-y:auto; height:350px; max-height:350px;">
		  <?php
			foreach($YouCanHelp as $u) {
				echo '<a href="' . base_url() . 'index.php/profile?id=' . $u->id . '" class="list-group-item"><img src="https://graph.facebook.com/' . $u->id . '/picture?type=large" style="width:30px;height:30px;" /> ' . $u->first . ' ' . $u->last . '</a>';
			}
		  ?>
		</div>
	</div>
	<div class="col-lg-4">
		<h3 class="page-header">
			People who can help you
		</h3>
		<div class="list-group" style="overflow-y:auto; height:350px; max-height:350px;">
		  <?php
			foreach($CanHelpYou as $u) {
				echo '<a href="' . base_url() . 'index.php/profile?id=' . $u->id . '" class="list-group-item"><img src="https://graph.facebook.com/' . $u->id . '/picture?type=large" style="width:30px;height:30px;" /> ' . $u->first . ' ' . $u->last . '</a>';
			}
		  ?>
		</div>
	</div>
	<div class="col-lg-4">
		<h3 class="page-header">
			History
		</h3>
		<div class="list-group" style="overflow-y:auto; height:350px; max-height:350px;">
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Cras justo odio</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Dapibus ac facilisis in</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Morbi leo risus</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Porta ac consectetur ac</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Vestibulum at eros</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Cras justo odio</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Dapibus ac facilisis in</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Morbi leo risus</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Porta ac consectetur ac</a>
		  <a href="#" class="list-group-item"><img src="<?php echo base_url(); ?>images/avatar.jpg" style="width:30px;height:30px;" /> Vestibulum at eros</a>
		</div>
	</div>
</div>
<!-- /.row -->