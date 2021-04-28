<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Edit DP</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_dp communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="You can change your profile picture from this page.">

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
		<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/go_home/goToHome"><span class="pre-brandName">my</span>Campus</a>
		<ul class="navbar-nav nav-pills justify-content-end">
			<a>
				<img src="<?php echo base_url().$dp; ?>" class="rounded-circle" width="32" height="32"><span class="navbar-uname"><?php echo $name; ?></span>
			</a>
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<br>
					<h3 align="center">Change Profile Picture</h3>
					<br>
					<center><img src="<?php echo base_url().$dp; ?>" class="rounded-circle" width="225px" height="225px" id="img-Edit"></center>
					<br>
					<center><?php echo $error; ?></center>
					<?php echo form_open_multipart('editdp/do_upload'); ?>
					<form action="" method="">					
						<div class="input-group justify-content-center">
							<span class="input-group-btn">
								<div class="btn btn-unique btn-file">
									<i class="fa fa-camera-retro" style="font-size: 22px;"></i>&nbsp;&nbsp;&nbsp;<input type="file" name="userdp" id="imgEdt" size="20" accept="jpg|png" required>
								</div>
							</span>
						</div>
						<center><p class="upload_warn">*please upload a file with size less than 5MB</p></center>
						<center><input type="submit" class="uploadBtn btn btn-primary" value="Upload &#xf093;"></center>
					</form>
					<br>
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