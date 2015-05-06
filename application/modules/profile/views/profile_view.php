<script type="text/javascript">
function toggleSize(img) {
	if(img.style.width=="200px") {
		img.style.width="80px";
		img.style.height="60px";
	} else {
		img.style.width="200px";
		img.style.height="150px";
	}
}
</script>
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			<img src="<?php echo $profile_picture; ?>" style="width:80px;height:60px;transition:width 0.5s, height 0.5s;" onclick="toggleSize(this);" /> <?php echo $first_name . " " . $last_name; ?> <small>Profile</small>
		</h1>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-4">
	</div>
</div>
<!-- /.row -->