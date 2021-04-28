<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | Inbox</title>
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

	<button onclick="topFunction" id="scrollTop" title="Go to top"><i class="fa fa-chevron-circle-up"></i></button>

	<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-2">
				
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#createMsgModal">
                    <i class="fa fa-edit"></i> &nbsp;Create
                </button>

                
                <div class="modal fade" id="createMsgModal" tabindex="-1" role="dialog" aria-labelledby="createMsgModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createMsgModalLabel"><i class="fa fa-envelope"></i> &nbsp;New Message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('mail_inbox/sentMail'); ?>
                                <form action="" method="">
                                    <div class="md-form">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" id="newMsgTo" name="newMsgTo" class="form-control"  list="suid" required>
                                        <datalist id="suid">
                                        	<?php
                                        		$i=0;
                                        		$ros=$users["rows"];
                                        		while($i<$ros):
                                        	?>
                                        	<option value="<?php echo $users[$i]["uid"]; ?>"><?php echo $users[$i]["uname"]; ?></option>
                                        	<?php
                                        		$i++;
                                        		endwhile;
                                        	?>
                                        </datalist>
                                        <label for="newMsgTo">To</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-tag prefix grey-text"></i>
                                        <input type="text" id="newMsgSub" name="newMsgSub" class="form-control" maxlength="100"  required>
                                        <label for="newMsgSub">Subject</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-pencil prefix grey-text"></i>
                                        <textarea type="text" id="newMsgBody" name="newMsgBody" class="md-textarea" rows="10" maxlength="500" required></textarea>
                                        <label for="newMsgBody">Your Message</label>
                                        <p class="pull-right" id="msg_len">500</p>
                                    </div>
                                    <div class="md-form">
                                    	<center><input type="checkbox" name="mailAtch" id="mailAtch" value="yes"> Do you have an attachment</center>
                                    </div>
                                    <div class="md-form input-group justify-content-center">
                                    	<span class="input-group-btn">
                                    		<div class="btn btn-blue-grey btn-file">
                                    			<i class="fa fa-paperclip" style="font-size: 22px;"></i>&nbsp;&nbsp;&nbsp;<input type="file" id="mailAttach" name="mailAttach" size="20">
                                    		</div>
                                    	</span>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-unique sendBtn" value="Send &#xf1d8;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
			<div class="col-8"></div>
			<div class="col-2">
				<?php echo "<br>Total messages : ".$mail["rows"]; ?>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-12">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-1"></div>
							<div class="col-3"><span style="font-weight: bold;">From</span></div>
							<div class="col-3"><span style="font-weight: bold;">To</span></div>
							<div class="col-3"><span style="font-weight: bold;">Subject</span></div>
							<div class="col-2"></div>
						</div>
					</li>
					<?php
						$rws=$mail["rows"];
						$i=0;
						while($i<$rws):
					?>
					<form action="<?php echo base_url(); ?>index.php/mail_inbox/openMail" method="post">
						<input type="text" name="mailid" style="display: none;" value="<?php echo $mail[$i]['mailid']; ?>">
						<li class="list-group-item">
						<div class="row">
							<div class="col-1">
							<?php
								if($mail[$i]["status"]==1)
									echo "<center><i class='fa fa-circle onlineDot'></i></center>";
							?>
							</div>
							<div class="col-3">
							<span><?php echo $mail[$i]["fname"]; ?></span>
							</div>
							<div class="col-3">
							<span><?php echo $mail[$i]["tname"]; ?></span>
							</div>
							<div class="col-3">
							<span ><?php echo $mail[$i]["sub"]; ?></span>
							</div>
							<div class="col-2">
							<span class="text-right"><input type="submit" class="btn btn-primary btn-sm" value="Read more"></span>
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