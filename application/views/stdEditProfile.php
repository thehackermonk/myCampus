<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Edit Profile</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_student_profile myCampus_edit_profile communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="This is the home page of students in myCampus. You can view all the posts in this page.">

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
		<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/stdhome"><span class="pre-brandName">my</span>Campus</a>
		<ul class="navbar-nav nav-pills justify-content-end">
			<a>
				<img src="<?php echo base_url().$dp; ?>" class="rounded-circle" width="32" height="32"><span class="navbar-uname"><?php echo $name; ?></span>
			</a>
		</ul>
	</nav>

	<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<div class="card card-body">
					<br>
					<form action="<?php echo base_url(); ?>index.php/stdEditProfile/editStdDet" method="post">
						<center><img src="<?php echo base_url().$dp; ?>" class="rounded-circle" width="200" height="200"></center>
						<center><a class="btn btn-indigo" href="<?php echo base_url(); ?>index.php/editdp" style="border-radius: 25px; position: relative; top: -35px; cursor: pointer;"><i class="fa fa-camera"></i></a></center>
						<div class="md-form">
	                        <input type="text" name="stdname" id="stdname" class="form-control" value="<?php echo $name; ?>" required>
	                        <label for="stdname">Name</label>
	                    </div>
	                    <div class="input-group">
	                    	<label style="padding-top: 10px;">Course : </label>&nbsp;
                            <select class="form-control" name="stdcrs" required>
                            	<?php
                            		$i=0;
                            		while($i<$totCrs)
                            		{
                            			if($course[$i]['id']==$stdcrsid)
                            			{
                            				echo "<option value='".$course[$i]['id']."' selected='selected'>".$course[$i]['name']."</option>";
                            			}
                            			else
                            			{
                            				echo "<option value='".$course[$i]['id']."'>".$course[$i]['name']."</option>";
                            			}
                            			$i++;
                            		}
                            	?>
                            </select>
	                    </div>
	                    <br>
						<div class="md-form">
							<input type="text" name="stdgrd" id="stdgrd" class="form-control" value="<?php echo $guardian; ?>" required>
							<label for="stdgrd">Guardian</label>
						</div>
						<label>Gender : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                            	<input type="radio" class="form-check-input" name="stdgen" value="female" <?php echo ($gender=='female')?'checked':''?>>
                                <i class="fa fa-venus genicon genicon-female" data-toggle="tooltip" title="Female"></i>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                        	<label class="form-check-label">
                        		<input type="radio" class="form-check-input" name="stdgen" value="male" <?php echo ($gender=='male')?'checked':''?>>
                        		<i class="fa fa-mars genicon genicon-male" data-toggle="tooltip" title="Male"></i>
                        	</label>
                        </div>
                        <br><br>
						<div class="md-form">
                            <textarea name="stdadrs" class="adrs_box" placeholder="Address"><?php echo $address; ?></textarea>
                        </div>
                        <div class="md-form">
                            <input type="email" id="std_mail" name="std_mail" class="form-control" value="<?php echo $mail; ?>">
                            <label for="std_mail">E-mail</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="std_cont" name="std_cont" class="form-control" value="<?php echo $contact; ?>">
                            <label for="std_cont">Contact</label>
                        </div>
                        <br>
                        <center><input type="submit" class="btn btn-primary" value="Save Changes"></center>
                    </form>
					<br>
				</div>
				<br>
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