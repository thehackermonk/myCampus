<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>myCampus | New faculty info</title>
    <link href="<?php echo base_url(); ?>img/icon/logo.ico" rel="icon" type="image/x-icon">

    <meta name="keywords" content="myCampus myCampus_new_faculty myCampus_faculty_information communication_system college_website college_web_portal college_mailing_system">
    <meta name="description" content="The details of the new faculties are added from this page.">

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

    <!-- Start your project here-->

    <nav class="navbar navbar-dark blue darken-4">
        <a class="navbar-brand" href="#"><span class="pre-brandName">my</span>Campus</a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <br>
                <div class="card card-body">
                    <form action="<?php echo base_url(); ?>index.php/tchrinfoadd/tchraddinfo" method="post">
                        <p style="color: red;"><?php echo $error; ?></p>
                        <div class="md-form">
                            <input type="text" name="facno" id="facno" class="form-control" required>
                            <label for="facno">Faculty ID</label>
                        </div>
                        <div class="md-form">
                            <input type="text" name="facname" id="facname" class="form-control" required>
                            <label for="facname">Name</label>
                        </div>
                        <label>Gender : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="facgen" value="female" required>
                                <i class="fa fa-venus genicon genicon-female" data-toggle="tooltip" title="Female"></i>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="facgen" value="male" required>
                                <i class="fa fa-mars genicon genicon-male" data-toggle="tooltip" title="Male"></i>
                            </label>
                        </div>
                        <br><br>
                        <div class="md-form">
                            <textarea name="facadrs" id="facadrs" class="adrs_box" placeholder="Address" required></textarea>
                        </div>
                        <div class="md-form">
                            <input type="email" name="facmail" id="facmail" class="form-control" required>
                            <label for="facmail">E-mail</label>
                        </div>
                        <div class="md-form">
                            <input type="text" name="faccont" id="faccont" class="form-control" required>
                            <label for="faccont">Contact</label>
                        </div>
                        <div class="md-form">
                            <input type="text" name="facquali" id="facquali" class="form-control" required>
                            <label for="facquali">Qualification</label>
                        </div>
                        <div class="input-group">
                            <label style="padding-top: 10px;">Subject : </label>&nbsp;
                            <select class="form-control" name="tchrSub" required>
                                <?php
                                    $i=0;
                                    while($i<$totSub)
                                    {
                                        echo "<option value='".$subject[$i]['id']."'>".$subject[$i]['name']."</option>";
                                        $i++;
                                    }
                                ?>
                            </select>
                        </div>
                        <br>
                        <center><input type="submit" class="btn btn-info" value="Continue"></center>
                    </form>
                </div>
                <br>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <!-- /Start your project here-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/mdb.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

    <!-- / SCRIPTS -->

</body>

</html>