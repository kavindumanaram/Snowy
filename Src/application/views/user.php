<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="Jobboard">

        <title>JobBoard - Bootstrap HTML5 Job Portal Template</title>    

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">    
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jasny-bootstrap.min.css" type="text/css">  
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" type="text/css">  
        <!-- Material CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-kit.css" type="text/css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome.min.css" type="text/css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/themify-icons.css"> 

        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/extras/animate.css" type="text/css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/extras/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/extras/owl.theme.css" type="text/css">
        <!-- Rev Slider CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/extras/settings.css" type="text/css"> 
        <!-- Slicknav js -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.css" type="text/css">
        <!-- Main Styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" type="text/css">
        <!-- Responsive CSS Styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" type="text/css">

        <!-- Color CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/colors/red.css" media="screen" />

    </head>

    <body>  
        <!-- Header Section Start -->
        <?php require_once("common/header.php") ?>
        <!-- Header Section End -->  

        <!-- Page Header Start -->
        <div class="page-header" style="background: url(<?php echo base_url(); ?>assets/img/banner1.jpg);">
            <div class="container">
                <div class="row">         
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Job Alerts</h2>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Job Alerts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End --> 

        <section class="section text-center" >
            <div class="container">
                <div class="row">
                    <!-- Side Menu Start --> 
                    <?php require_once("common/side_menu.php") ?>
                    <!-- Side Menu End --> 
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="job-alerts-item candidates">
                            <h3 class="alerts-title">Manage Jobs</h3>
                            <div class="alerts-list">
                                <div class="row">
                                    <div class="col-md-3"> 
                                        <p>Name</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Email</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Photo</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Action</p>
                                    </div>
                                </div>
                            </div>
                            
                                <?php foreach ($records as $record) {?>
                            <div class="alerts-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3><?php echo $record->Name; ?></h3>
                                        <span class="location"><i class="ti-location-pin"></i><?php echo  $record->CurrentResidence; ?>, LK</span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><?php echo  $record->userEmail; ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="can-img"><a href="#">
                                                <img src="<?php echo base_url();?>/assets/uploads/profile_pic/<?php echo $record->Email; ?>.png" alt="">
                                            </a></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p><a href="<?php echo base_url();?>index.php/AuthController/delete_user?email=<?php echo $record->Email;?>"><span class="full-time">Delete</span></a></p>
                                    </div>
                                </div>
                                </div>
                                <?php } ?>
                            
                            
                           
                           

                            <br>
                            <ul class="pagination">
                                <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i> prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section Start -->
        <?php require_once("common/footer.php") ?>
        <!-- Footer Section End -->  

        <!-- Go To Top Link -->
        <a href="#" class="back-to-top">
            <i class="ti-arrow-up"></i>
        </a>

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                </div>
            </div>
        </div>

        <!-- Main JS  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-min.js"></script>      
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>    
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material-kit.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.parallax.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.slicknav.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/form-validator.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/contact-form-script.js"></script>    
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.tools.min.js"></script>

    </body>
</html>