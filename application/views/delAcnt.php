<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Delete Account</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_account myCampus_delete_account communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="If you're tired of using myCampus, you can delete your account completely.">

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
			<div class="col-12">
				<br><br><br><br>
				<center><h1 class="animated fadeInDown">Hey <?php echo $name; ?>. Are you sure to delete this account?</h1></center><br>
				<center><h3 class="text-muted animated fadeIn">Once you delete it you could never use this account.</h3></center><br>
				<center>
					<a class="btn btn-danger animated slideInLeft" href="<?php base_url(); ?>delAcnt/delAccount">Yes, Delete this account.</a>
					<a class="btn btn-primary animated slideInRight" href="<?php base_url(); ?>go_home/goToHome">No, Go to Home.</a>
				</center>
			</div>
		</div>
	</div>

	<!--/ Source Code -->
	
	<!-- SCRIPTS -->
	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap tooltip -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>

	<!-- Bootstrap core JavaSc
	ript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/mdb.js"></script>

	<!-- Custom JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
	<!--/ SCRIPTS -->

</body>
</html>