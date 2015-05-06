<!DOCTYPE html>
<html lang="en" style="height:100% !important;min-height:100% !important;">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php
            //Check if value is set, if not give default value
            if (isset($title)) {
                echo "teach it forward - " . $title;
            } else {
                echo "teach it forward";
            }
            ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-select.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.selectpicker').selectpicker();
			$("#needhelp, #canhelp").on('change', function() {
				$.ajax({
					url: "<?php echo base_url(); ?>index.php/template/updateSubjects",
					data: {
						needhelp : $("#needhelp").val().join(","),
						canhelp : $("#canhelp").val().join(",")
					},
					type: "POST",
					dataType: "text",
					success: function(data) {
					},
					error: function(xhr, status, errorThrown) {
						alert("Sorry, there was a problem!");
						alert("Error: " + errorThrown);
						alert("Status: " + status);
						alert(xhr);
					},
					// code to run regardless of success or failure
					complete: function(xhr, status) {
					}
				});
			});
		});
	</script>

</head>

<body style="height:100% !important;min-height:100% !important;">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $passData["first_name"] . " " . $passData["last_name"]; ?></h4>
      </div>
      <div class="modal-body">
        Subjects you can help at :<br>
		<select class="selectpicker" multiple data-live-search="true" data-size="6" id="canhelp">
			<optgroup label="Obligatory">
			  <?php
				$i=0;
				for($i=0; $subjects[$i]->major==0; $i++) {
					echo "<option value=\"" . $subjects[$i]->id . "\"" . ($subjects[$i]->canhelp==1 ? "selected='true'" : "") . ">" . $subjects[$i]->name . "</option>";
					if($i>=sizeof($subjects)) break;
				}
			  ?>
			</optgroup>
			<optgroup label="Major">
			  <?php
				for(; $i < sizeof($subjects); $i++) {
					echo "<option value=\"" . $subjects[$i]->id . "\"" . ($subjects[$i]->canhelp==1 ? "selected='true'" : "") . ">" . $subjects[$i]->name . "</option>";
				}
			  ?>
			</optgroup>
		</select><br><br>
        Subjects you need help at :<br>
		<select class="selectpicker" multiple data-live-search="true" data-size="6" id="needhelp">
			<optgroup label="Obligatory">
			  <?php
				$i=0;
				for($i=0; $subjects[$i]->major==0; $i++) {
					echo "<option value=\"" . $subjects[$i]->id . "\"" . ($subjects[$i]->needhelp==1 ? "selected='true'" : "") . ">" . $subjects[$i]->name . "</option>";
					if($i>=sizeof($subjects)) break;
				}
			  ?>
			</optgroup>
			<optgroup label="Major">
			  <?php
				for(; $i < sizeof($subjects); $i++) {
					echo "<option value=\"" . $subjects[$i]->id . "\"" . ($subjects[$i]->needhelp==1 ? "selected='true'" : "") . ">" . $subjects[$i]->name . "</option>";
				}
			  ?>
			</optgroup>
		</select><br>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-danger" style="float:left;">Log out</span></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <div id="wrapper" style="height:100% !important;min-height:100% !important;">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
			<li>
			
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
			</li>
                <li>
                    <a href="#" class="dropdown-toggle fb-login" data-toggle="modal" data-target="#myModal"><i class="fa fa-facebook"></i>
					<?php echo $passData["first_name"] . " " . $passData["last_name"]; ?>
					</a>
          
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="top:100px;">
		    <li>
		    <img src="<?php echo base_url(); ?>images/logo.png" style="float:left;position:fixed;top:0px;left:0px;width:225px;height:100px;background-color:#222;" />
		    </li>
                    <li <?php if($passData['Name']=='home') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>index.php/home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li <?php if($passData['Name']=='profile') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>index.php/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li <?php if($passData['Name']=='subjects') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>index.php/subjects"><i class="fa fa-fw fa-table"></i> Subjects</a>
                    </li>
                    <li <?php if($passData['Name']=='chat') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url(); ?>index.php/chat"><i class="fa fa-fw fa-wechat"></i> Chat</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="height:100% !important;min-height:100% !important;">

            <div class="container-fluid" style="height:100% !important;min-height:100% !important;">
				<?php
					$this->load->view(strtolower($passData['Name']) . "/" . $viewPath, $passData);
				?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>