<script type="text/javascript">
function toggleSize(img) {
	if(img.style.height=="150px") {
		img.style.height="200px";
	} else {
		img.style.height="300px";
	}
}
</script>
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			<img src="<?php echo $Picture; ?>" style="height:60px;transition:width 0.5s, height 0.5s;" onclick="toggleSize(this);" /> <?php echo $First . " " . $Last; ?> <small>Profile</small>
		</h1>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-4">
	</div>
</div>
<!-- /.row -->