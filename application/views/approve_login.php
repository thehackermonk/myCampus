<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Faculty</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_faculty_home myCampus_staff_home myCampus_home communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="This is the home page of staff in myCampus. You can post to this page and also view all the posts in this page.">

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
					<a class="dropdown-item" href="<?php base_url(); ?>logout/signout"><i class="fa fa-sign-out"></i> Log Out</a>
				</div>
			</div>
		</ul>
	</nav>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card card-body">
					<center><h3>Approve Login</h3></center>
					<br><br>
					<ul class="list-group">
						<?php
							$i=0;
							while($i<$totTchr):
						?>
						<form action="<?php echo base_url(); ?>index.php/approve_login/approveFaculty" method="post">
							<input type="hidden" name="facid" value="<?php echo $faculty[$i]['facid']; ?>">
							<li class="list-group-item">
								<div class="row">
									<div class="col-2">
										<img src="<?php echo base_url().$faculty[$i]['facdp']; ?>" class="rounded-circle" height="35" width="35">
									</div>
									<div class="col-4">
										<?php echo $faculty[$i]['facname']; ?>
									</div>
									<div class="col-4">
										<?php echo $faculty[$i]['facdesig']; ?>
									</div>
									<div class="col-2">
										<input type="submit" class="btn btn-primary btn-sm" value="Approve">
									</div>
								</div>
							</li>
						</form>
						<?php
							$i++;
							endwhile;
							$i=0;
							while($i<$totStd):
						?>
						<form action="<?php echo base_url(); ?>index.php/approve_login/approveStudent" method="post">
							<input type="hidden" name="stdno" value="<?php echo $std[$i]['stdno']; ?>">
							<input type="hidden" name="yos" value="<?php echo $std[$i]['yos']; ?>">
							<li class="list-group-item">
								<div class="row">
									<div class="col-2">
										<img src="<?php echo base_url().$std[$i]['dp']; ?>" class="rounded-circle" height="35" width="35">
									</div>
									<div class="col-3">
										<?php echo $std[$i]['name']; ?>
									</div>
									<div class="col-3">
										<?php echo $std[$i]['course']; ?>
									</div>
									<div class="col-2">
										<?php echo $std[$i]['yos']; ?>
									</div>
									<div class="col-2">
										<input type="submit" class="btn btn-primary btn-sm" value="Approve">
									</div>
								</div>
							</li>
						</form>
						<?php
							$i++;
							endwhile;
						?>
					</ul>
				</div>
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