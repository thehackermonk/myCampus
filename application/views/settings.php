<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Settings</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_settings myCampus_mail communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="The page from which you can change your password.">

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

	<button onclick="topFunction" id="scrollTop" title="Go to top"><i class="fa fa-chevron-circle-up"></i></button>

	<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<br><br><br>
				<div class="card card-body">
					<center><h4>Change Password</h4></center><br>
					<form action="<?php base_url(); ?>settings/changePass" method="post">
						<div class="md-form">
							<i class="fa fa-lock prefix grey-text" aria-hidden="true"></i>
							<input type="password" id="chng-oldPass" name="chng-oldPass" class="form-control" required>
                            <label for="oldPass">Old Password</label>
						</div>
						<div class="md-form">
							<i class="fa fa-lock prefix grey-text" aria-hidden="true"></i>
							<input type="password" id="chng-newPass" name="chng-newPass" class="form-control" required>
							<label for="newPass">New Password</label>
						</div>
						<div class="md-form">
							<i class="fa fa-lock prefix grey-text" aria-hidden="true"></i>
							<input type="password" id="chng-rePass" name="chng-rePass" class="form-control" required>
							<label for="rePass">Retype Password</label>
						</div>
						<center><input type="submit" id="chngPassBtn" class="btn btn-primary" value="Change Password"></center>
					</form>
				</div>
			</div>
			<div class="col-4"></div>
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