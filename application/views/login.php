<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Login</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="description" content="This is the login page of myCampus. From this page you can login to the webste using your user ID and password.">
    <meta name="keywords" content="myCampus myCampus_login communication_system college_website college_web_portal college_mailing_system">

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
<body style="background-color: #0d47a1;/* Yale Blue */">

	<!--/ Source Code -->
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
			<br>
				<h1 class="mainPage_title animated slideInDown" align="center"><span class="pre-brandName">my</span>Campus</h1>
				<br><br>
				<div class="card card-body animated zoomIn">
					<br>
					<form action="<?php base_url(); ?>login/logins" method="post">
						<div class="md-form">
                            <i class="fa fa-user prefix grey-text" aria-hidden="true"></i>
                            <input type="text" id="loginForm-name" name="loginForm-name" class="form-control" required>
                            <label for="loginForm-name">User ID</label>
                        </div>
                        <div class="md-form">
                        	<i class="fa fa-lock prefix grey-text" aria-hidden="true"></i>
                        	<input type="password" id="loginForm-pass" name="loginForm-pass" class="form-control" required>
                        	<label for="loginForm-pass">Password</label>
                        	<!--<a href="#" class="gray-dark-text fgtPassLink">Forgot Password?</a>-->
                        </div>
                        <br>
                        <?php echo "<center><p style='color:red;'>".$error."</p></center>"; ?>
                        <div class="text-center">
                        	<input type="submit" class="btn btn-primary" value="Login">
                        </div>
					</form>
					<hr>
					<p class="grey-text d-flex justify-content-center">Not a member? <a href="<?php echo base_url(); ?>index.php/signup" class="blue-text ml-1"> Sign Up</a></p>
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