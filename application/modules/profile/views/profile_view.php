<script type="text/javascript">
function toggleSize(img) {
	if(img.style.width=="200px") {
		img.style.width="80px";
	} else {
		img.style.width="200px";
	}
}
</script>
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			<img src="<?php echo $Picture; ?>" style="width:80px;transition:width 0.5s, height 0.5s;" onclick="toggleSize(this);" /> <?php echo $First . " " . $Last; ?> <small>Profile</small>
		</h1>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-4">
	</div>
</div>
<!-- /.row -->