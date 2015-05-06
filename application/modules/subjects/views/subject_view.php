<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			<?php echo $Subject->name . " <small>" . ($Subject->major==1 ? "Major" : "Obligatory") . "</small>"; ?>
		</h1>
	</div>
</div>


<div class="row">
	<div class="col-lg-6">
		<h3 class="page-header">
			People who can help at <?php echo $Subject->name; ?>
		</h3>
		<div class="list-group" style="overflow-y:auto; height:350px; max-height:350px;">
		  <?php
			foreach($CanHelp as $u) {
				echo '<a href="' . base_url() . 'index.php/profile?id=' . $u->id . '" class="list-group-item"><img src="https://graph.facebook.com/' . $u->id . '/picture?type=large" style="width:30px;height:30px;" /> ' . $u->first . ' ' . $u->last . '</a>';
			}
		  ?>
		</div>
	</div>
	<div class="col-lg-6">
		<h3 class="page-header">
			People who need help at <?php echo $Subject->name; ?>
		</h3>
		<div class="list-group" style="overflow-y:auto; height:350px; max-height:350px;">
		  <?php
			foreach($NeedHelp as $u) {
				echo '<a href="' . base_url() . 'index.php/profile?id=' . $u->id . '" class="list-group-item"><img src="https://graph.facebook.com/' . $u->id . '/picture?type=large" style="width:30px;height:30px;" /> ' . $u->first . ' ' . $u->last . '</a>';
			}
		  ?>
		</div>
	</div>
</div>
<!-- /.row -->