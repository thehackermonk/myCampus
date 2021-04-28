<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | New Subject</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_add_subject myCampus_new_subject communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="From this page you can add new subjects.">

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
		<a class="navbar-brand" href="tchrhome"><span class="pre-brandName">my</span>Campus</a>
		<ul class="navbar-nav nav-pills justify-content-end">
			<div class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="<?php echo base_url().$dp; ?>" class="rounded-circle" width="32" height="32"><span class="navbar-uname"><?php echo $name; ?></span>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?php base_url(); ?>logout/signout"><i class="fa fa-sign-out"></i> Log out</a>
				</div>
			</div>
		</ul>
	</nav>

	<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<center><h3>Add New Subject</h3></center>
				<br>
				<div class="card card-body">
					<br>
					<form action="<?php echo base_url(); ?>index.php/add_subject/addSubject" method="post">
						<div class="md-form">
							<select class="form-control" name="course" required>
								<?php
	                        		$i=0;
	                        		while($i<$totCrs)
	                        		{
	                        			echo "<option value='".$course[$i]['id']."' selected='selected'>".$course[$i]['name']."</option>";
	                        			$i++;
	                        		}
	                        	?>
							</select>
						</div>
						<div class="md-form">
							<input type="text" class="form-control" name="subname" placeholder="Name" required>
						</div>
						<div class="md-form">
							<textarea class="add_description" name="subdesc" placeholder="Desciption" maxlength="250" required></textarea>
						</div>
						<center><input type="submit" class="btn btn-primary" value="Add Subject"></center>
					</form>
					<br>
				</div>
			</div>
			<div class="col-3"></div>
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