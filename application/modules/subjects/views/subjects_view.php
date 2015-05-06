<script type="text/javascript">
$(document).ready(function() {
 $('.carousel').each(function(){
        $(this).carousel({
            interval: false
        });
    });
});
</script>
<style type="text/css">
.thumb {
    margin-bottom: 30px;
	width:400px;
	height:300px;
}
.thumbnail {
	height:100%;
}
.inner {
	position: relative;
	top: calc(50% - 25px);
	font-size:25px;
}
.row {
	padding-left:200px;
	padding-right:200px;
}
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php
		$c=-1;
		echo "<div class='item active'><div class='row'><center>";
		foreach($Subjects as $s) {
			if($c==0) echo "<div class='item'><div class='row'><center>";
			echo '<div class="col-lg-4 col-md-4 col-xs-6 thumb"><a' . ($s->major==1 ? 'style="background:#eee;"' : '') . ' class="thumbnail" href="' . base_url() . 'index.php/subjects/subject?id=' . $s->id . '">';
			echo '<span class="inner">' . $s->name . '</span>';
			echo '</a></div>';
			$c++;
			if($c==0) $c++;
			if($c==6) {
				echo "</center></div></div>";
				$c=0;
			}
		}
		if ($c!=0) echo "</center></div></div>";
	?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>