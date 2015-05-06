<style type="text/css">
tr {
	border-bottom: 1px solid #eee;
}
</style>
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
		<table style="width:100%;">
		<?php
		foreach($Results as $u) {
			echo '<tr><td style="width:100px;"><br><a href="' . base_url() . 'index.php/profile?id=' . $u->id . '"><img src="https://graph.facebook.com/' . $u->id . '/picture?type=large" style="height:60px;" /></a><br></td><td><a href="' . base_url() . 'index.php/profile?id=' . $u->id . '">' . $u->first . ' ' . $u->last . '</a></td></tr>';
		}
		?>
		</table>
	</div>
</div>
<!-- /.row -->