<script type="text/javascript">
function toggleSize(img) {
	if(img.style.height=="150px") {
		img.style.height="60px";
	} else {
		img.style.height="150px";
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
	<div class="col-lg-12">
		<b>Can help at :</b> <?php echo $CanHelp; ?>
		<b>Needs help at :</b> <?php echo $NeedHelp; ?>
	</div>
</div>
<!-- /.row -->