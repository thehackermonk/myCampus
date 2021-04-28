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
		<a class="navbar-brand" href="#"><span class="pre-brandName">my</span>Campus</a>
		<div class="mx-auto">
			<a href="mail_inbox"><i class="fa fa-envelope navbar-icon" data-toggle="tooltip" data-placement="bottom" title="Messages"></i></a>
			&nbsp;&nbsp;&nbsp;
			<a href="event_calendar"><i class="fa fa-calendar navbar-icon" data-toggle="tooltip" data-placement="bottom" title="Events"></i></a>
		</div>
		<ul class="navbar-nav nav-pills justify-content-end">
			<div class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="<?php echo base_url().$dp; ?>" class="rounded-circle" width="32" height="32"><span class="navbar-uname"><?php echo $name; ?></span>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="tchrEditProfile"><i class="fa fa-user"></i> Profile</a>
					<a class="dropdown-item" href="settings"><i class="fa fa-cog"></i> Settings</a>
					<div class="dropdown-divider"></div>
					<?php
						if($role=='prnc')
						{
							echo "<a class='dropdown-item' href='add_course'><i class='fa fa-plus-circle'></i> Add Course</a>";
							echo "<a class='dropdown-item' href='approve_login'><i class='fa fa-user-plus'></i> Approve Login</a>";
							echo "<div class='dropdown-divider'></div>";
						}
						if($role=='hod')
						{
							echo "<a class='dropdown-item' href='add_subject'><i class='fa fa-plus-circle'></i> Add Subject</a>";
							echo "<a class='dropdown-item' href='approve_login'><i class='fa fa-user-plus'></i> Approve Login</a>";
							echo "<div class='dropdown-divider'></div>";
						}
					?>
					<a class="dropdown-item" href="about"><i class="fa fa-info-circle"></i> About</a>
					<a class="dropdown-item" href="<?php base_url(); ?>logout/signout"><i class="fa fa-sign-out"></i> Log Out</a>
				</div>
			</div>
		</ul>
	</nav>

	<button onclick="topFunction" id="scrollTop" title="Go to top"><i class="fa fa-chevron-circle-up"></i></button>

	<br><br>

	<div class="container-fluid">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<br>
				<div class="card card-body">
					<form action="<?php echo base_url(); ?>index.php/tchrhome/sendPost" method="post">
						<input type="text" name="postTitle" placeholder="Blog title" maxlength="50" required><br><br>
						<textarea class="status_box" name="postBox" id="postBox" placeholder="Write something..." maxlength="500" required></textarea>
						<div align="right">
							<span id="postLen">500</span>
							<input type="submit" class="btn btn-primary" value="post">
						</div>
					</form>
				</div>
				<br>
				<div class="card card-body">
					<br>
					<?php while($blog=mysqli_fetch_array($blogpost)): ?>
						<form action="<?php echo base_url(); ?>index.php/tchrhome/openPost" method="post">
							<div class="row">
								<div class="col-2">
									<img src="<?php echo base_url().$blog[1];?>" width="50" height="50" class="rounded-circle">
								</div>
								<div class="8">
									<?php echo "<input type='text' class='blogid' value='$blog[2]' name='blogid'>";?>
									<?php echo "<span class='blogname'>".$blog[0]."</span><br>"; ?>
									<?php echo "<span class='blogtime text-muted'>".$blog[4]." &#9830; ".$blog[5]."</span>"; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-8">
									<br>
									<?php echo "<span class='blogpost'>".$blog[3]."<span>"; ?>
								</div>
								<div class="col-4 pull-right">
								<br>
									<input class="btn btn-primary btn-sm rmpostBtn" type="submit" value="Read More..&nbsp;&#xf0a9;">
								</div>
							</div>
						</form>
						<hr>
					<?php endwhile; ?>
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

	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/mdb.js"></script>

	<!-- Custom JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
	<!--/ SCRIPTS -->

</body>
</html>