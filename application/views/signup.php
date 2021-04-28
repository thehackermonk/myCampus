<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Signup</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_signup communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="This is the signup page of myCampus. From this page you can create a new account to use the website.">

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
			<div class="col-6">
				<br><br><br><br><br><br><br><br><br>
				<h1 class="mainPage_title animated slideInLeft" style="font-size: 80px;"><span class="pre-brandName">my</span>Campus</h1>
			</div>
			<div class="col-6">
				<br><br><br>
				<div class="card card-body animated slideInRight">
					<br>
					<form action="<?php echo base_url(); ?>index.php/signup/signups" method="post">
						<div class="md-form">
                            <i class="fa fa-user prefix grey-text" aria-hidden="true"></i>
                            <input type="text" id="signupForm-name" name="signupForm-name" class="form-control" required>
                            <label for="loginForm-name">User ID</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text" aria-hidden="true"></i>
                            <input type="password" id="signupForm-pass" name="signupForm-pass" class="form-control" required>
                            <label for="signupForm-pass">Password</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text" aria-hidden="true"></i>
                            <input type="password" id="signupForm-rpass" name="signupForm-rpass" class="form-control" required>
                            <label for="signupForm-rpass">Retype Password</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-users prefix grey-text" aria-hidden="true"></i>
                            <select class="form-control col-md-11 pull-right" name="usertype" required>
                                <option value="">Choose a user type</option>
                                <option value="prnc">Principal</option>
                                <option value="hod">Head of the Department</option>
                                <option value="tchr">Teacher</option>
                                <option value="std">Student</option>
                            </select>
                        </div>
                        <br><br><br>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-block" id="signupbtn" name="signupbtn" value="Sign Up">
                        </div>
                        <br>
                        <p class="grey-text d-flex justify-content-end">Already a member? <a href="<?php echo base_url(); ?>index.php/login" class="blue-text ml-1"> Log In</a></p>
					</form>
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