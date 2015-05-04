<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Teach It Forward</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url(); ?>css/landing/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
 <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url(); ?>css/landing/styles.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>js/jquery.js"></script>
		<script type="text/javascript">
		function loadEvents() {
			$(".bio-img, .bio-active").off("click");
			$(".bio-img").on("click", function() {
				$(".bio-p").css('display', 'none');
				$(".bio-active").addClass("bio-img").removeClass("bio-active");
				$("#bio-" + $(this).data('name')).css('display', 'block');
				$(this).addClass("bio-active").removeClass("bio-img");
				loadEvents();
			});
			$(".bio-active").on("click", function() {
				$(".bio-p").css('display', 'none');
				$(".bio-active").addClass("bio-img").removeClass("bio-active");
				$("#bio-all").css('display', 'block');
				$(this).addClass("bio-img").removeClass("bio-active");
				loadEvents();
			});
		}
		$(document).ready(function() {
			loadEvents();
		});
		</script>
	</head>
	<body>

<div class="navbar navbar-fixed-top navbar-bold" data-spy="affix" data-offset-top="1000">
  <div class="container">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">teach it forward</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="#sec1">What is teach it forward</a></li>
        <li><a href="#sec2">About Us</a></li>
        <!-- <li><a href="#sec3">Contact Us</a></li> -->
      </ul>
    </div>
   </div>
</div>

<div class="header vert">
  <div class="container">
    <center>
    <h1><img src="<?php echo base_url(); ?>images/logo.png" /></h1>
      <p class="lead">Teach and Get Taught</p>
      <div>&nbsp;</div>
      <a href="<?php echo $login_url; ?>" class="btn btn-default btn-lg">Log In With <i class="fa fa-fw fa-facebook"></i></a>
   </center>
  </div>
</div>

<div id="sec1" class="blurb">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>What is teach it forward ?</h1>
<p class="lead">Our website allows students to teach Tawjihi or Bagrut subjects and get taught in return.</p>
        <p class="lead">It is especially for Bagrut and Tawjihi students, it helps them to communicate with others, gives them the ability to learn new things and get help in subjects they're not good at and in return they might help other students in subjects they're good at. Various prizes will be offered to those who help a lot.</p>
      </div>
    </div>
  </div>
</div>

<div id="sec2" class="callout" style="background-size:100% 980px;">
  <div class="vert">
    <div class="col-md-12 text-center">&nbsp;</div>
    <div class="col-md-12 text-center"><h1>About Us</h1></div>
    <div class="col-md-12 text-center">&nbsp;</div>
    <div class="col-md-12 text-center">&nbsp;</div>
    <div class="col-md-12 text-center" style="color:#000;font-size:120%;">
	<center>
		<img data-name="bahjat" src="<?php echo base_url(); ?>images/bahjat.png" class="bio-img" style="margin-right:20px;" />
		<img data-name="moran" src="<?php echo base_url(); ?>images/moran.png" class="bio-img" style="margin-right:20px;" />
		<img data-name="sireen" src="<?php echo base_url(); ?>images/sireen.png" class="bio-img" style="margin-right:20px;" />
		<img data-name="ziv" src="<?php echo base_url(); ?>images/ziv.png" class="bio-img" style="margin-right:20px;" />
		<img data-name="tibah" src="<?php echo base_url(); ?>images/tibah.png" class="bio-img" style="margin-right:20px;" />
		<img data-name="azeez" src="<?php echo base_url(); ?>images/azeez.png" class="bio-img" />
		<br><br>
		<p class="bio-p" id="bio-bahjat" style="width:600px;display:none;">My name is Bahjat Kawar, I’m 15 years old, and I’m from Nazareth. I specialize in Physics and Computer Science at school. I’ve loved coding since I was a kid, so I’m fluent in 8 programming languages and I’ve worked on and published a number of websites since I was 10.</p>
		<p class="bio-p" id="bio-moran" style="width:600px;display:none;">My name is Moran Daniel, I’m 16 years old, and I’m from Cfar Yehoshua. I study journalism, docu-filmmaking, and philosophy. I like to draw and design.</p>
		<p class="bio-p" id="bio-tibah" style="width:600px;display:none;">My name is Tibah Saad, I’m 16 years old, and I’m from Maghar. I sing and play the cello. I like business a lot and I think it’s going to be a big part of my future.</p>
		<p class="bio-p" id="bio-ziv" style="width:600px;display:none;">My name is Ziv Hadad, I'm 17 years old and I'm from Ahuzat Barak. I specialize in Physics and Computer Science at school and on a program of the Israeli Cyber Intelligence. I like coding, learning different cool stuffs in life and cooking food from different cultures.</p>
		<p class="bio-p" id="bio-sireen" style="width:600px;display:none;">My name is Sireen Hafi, I'm 16 years old and I'm from Nazareth. I study in St. Joseph Seminary and High School. I like business and I'm really good at it. I enjoy thinking about ideas that might change something in our society, and I will keep creating ideas that would make a change.</p>
		<p class="bio-p" id="bio-azeez" style="width:600px;display:none;">My name is Azeez Zoabi, I'm 16 years old, and I'm from Nazareth. I play the guitar, I like programing and my dream is to be an amazing programmer, so I'm going to take part in the programming of this project.</p>
		<p class="bio-p" id="bio-all" style="width:600px;display:block;">We think we are perfect for this project because we ourselves are Bagrut students and we know all the pain points while studying and how sometimes we don’t really understand the subjects, and how we all help each other out in subjects. But it’s not always convenient. That’s why we thought of making a platform for everyone to help each other in an organized way, and even from all over the country!<br><br>Click on the images above to read about each of our team members</p>
	</center>
    </div>
  </div>
</div>
</div>
<!--
<div class="featurette" id="sec3">
<center>
<h1>Contact Us</h1>
asdfasdf<br>asasdf
</center>
</div>
-->

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>