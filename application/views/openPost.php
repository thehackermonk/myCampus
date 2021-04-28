<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Blog</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_blog communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="In this page you can read the blog and even comment on them.">

	<!-- STYLES -->
	<!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
	<link href="<?php echo base_url(); ?>css/mdb.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

	<!-- Modernizr for old browsers -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>
	<!--/ STYLES -->

</head>
<body>

	<!--/ Source Code -->
	<nav class="navbar navbar-dark blue darken-4">
		<a class="navbar-brand" href="<?php base_url(); ?>go_home/goToHome"><span class="pre-brandName">my</span>Campus</a>
		<ul class="navbar-nav nav-pills justify-content-end">
			<div class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="<?php echo base_url().$dp; ?>" class="rounded-circle" width="32" height="32"><span class="navbar-uname"><?php echo $name; ?></span>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="about"><i class="fa fa-info-circle"></i> About</a>
					<a class="dropdown-item" href="<?php base_url(); ?>logout/signout"><i class="fa fa-sign-out"></i> Log Out</a>
				</div>
			</div>
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="<?php base_url(); ?>go_home/goToHome" class="btn btn-primary"><i class="fa fa-reply"></i></a>
				&nbsp;
				<?php
					if($uid==$fromid)
						echo "<a href='openPost/post_del' class='btn btn-primary'><i class='fa fa-trash'></i></a>";
				?>
				<br><br>
				<div class="card">
					<div class="card-title">
						<div class="row">
							<div class="col-1"></div>
							<div class="col-1">
								<br>
								<img src="<?php echo base_url().$tdp;?>" width="75" height="75" class="rounded-circle">
							</div>
							<div class="col-8">
								<br><br>
								<?php echo "<span class='blogname'>".$tname."</span> | <i>".$tdesig."</i><br>"; ?>
								<?php echo "<span class='blogtime text-muted'>".$updte." &#9830; ".$uptime."</span>"; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<hr>
							</div>
						</div>
					</div>
					<div class="card-subtitle">
						<div class="row">
							<div class="col-1"></div>
							<div class="col-11">
								<h4><?php echo $title; ?></h4>
							</div>
						</div>
						<div class="row">
							<hr>
						</div>
					</div>
					<div class="card-body">
						<textarea class="postOpen-blog" readonly><?php echo $content; ?></textarea>
					</div>
				</div>
			</div>
		</div>
		<br>
		<form action="<?php echo base_url(); ?>index.php/openPost/comment" method="post">
			<div class="row">
				<div class="col-1">
					<i class="fa fa-commenting-o" style="font-size: 28px; padding-top: 10px; padding-left: 35px;"></i>
				</div>
				<div class="col-6">
					<input type="text" class="form-control" name="cmntBox" placeholder="Write a comment.. ." maxlength="300">
				</div>
				<div class="col-1">
					<input class="btn btn-primary commentBtn" type="submit" value="&#xf1d9;">
				</div>
				<div class="col-4"></div>
			</div>
		</form>
		<div class="row">
			<?php
				$rws=$comment["rows"];
				$i=0;
				while($i<$rws):
			?>
			<div class="col-1"></div>
			<div class="col-1">
				<img src="<?php echo base_url().$comment[$i]["dp"] ?>" width="50" height="50">
			</div>
			<div class="col-6">
				<h5><?php echo $comment[$i]["name"]; ?></h5>
					<?php
						echo "<span class='blogtime'>".$comment[$i]["dte"]."</span> &#9830; ";
						echo "<span class='blogtime'>".$comment[$i]["tym"]."</span> : ";
						echo $comment[$i]["comment"];
					?>
					<hr>
			</div>
			<div class="col-4"></div>
			<?php
				$i++;
				endwhile;
			?>
		</div>
	</div>
	<!--/ Source Code -->

	<!-- SCRIPTS -->
	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap tooltip -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/mdb.js"></script>

	<!-- Custom JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
	<!--/ SCRIPTS -->

</body>
</html>