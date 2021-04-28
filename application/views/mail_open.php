<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Mail</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_inbox myCampus_mail communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="This is the mail inbox. You can view all your mail and also create new mail from this page.">

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

	<!-- Source Code -->
	
	<nav class="navbar navbar-dark blue darken-4 fixed-top">
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

	<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-1">
				<a href="mail_inbox" class="btn btn-primary"><i class="fa fa-reply"></i></a>
			</div>
			<div class="col-1"></div>
			<div class="col-1">
				<a href="<?php base_url(); ?>mail_open/mail_del" class="btn btn-primary"><i class="fa fa-trash"></i></a>
			</div>
			<div class="col-9"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-12">
				<div class="card card-body">
					<div class="row">
						<div class="col-1">
							From
						</div>
						<div class="col-11">
							: <?php echo $fname; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-1">
							To
						</div>
						<div class="col-11">
							: <?php echo $tname; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-1">
							Subject
						</div>
						<div class="col-11">
							: <?php echo $subject; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<hr>
							<textarea class="msgOpenBody"><?php echo $msg; ?></textarea>	
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<small><i class="text-muted"><?php echo "Recieved on ".$sdte." at ".$stime; ?></i></small>
						</div>
						<div class="col-4">
							<?php
								if($attach==1)
								{
									$at=base_url().$attachment;
									echo "<a class='btn btn-red' href='$at' target='_blank'>Download Attachment <i class='fa fa-download'></i></a>";
								}
							?>
						</div>
					</div>
				</div>
				<br>
			</div>
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