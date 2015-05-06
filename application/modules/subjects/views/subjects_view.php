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
    <div class="item active">
        <div class="row"><center>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <span class="inner">English</span>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <span class="inner">Arabic</span>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
        </center></div>
    </div>

    <div class="item">
      fghfgh
    </div>

    <div class="item">
      hfghfghaaa
    </div>

    <div class="item">
      fghfghfesd
    </div>
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