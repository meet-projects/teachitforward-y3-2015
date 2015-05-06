<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Search Results <small><?php echo count($Results); ?> results</small>
		</h1>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-12">
		<?php
		foreach($Results as $u) {
			echo '<a href="' . base_url() . 'index.php/profile?id=' . $u->id . '"><img src="https://graph.facebook.com/' . $u->id . '/picture?type=large" style="height:60px;" /> ' . $u->first . ' ' . $u->last . '</a><br><hr>';
		}
		?>
	</div>
</div>
<!-- /.row -->