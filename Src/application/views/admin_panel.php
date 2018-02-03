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
            <div class="container text-left">
                <div class="row">
<!-- Side Menu Start --> 
<?php require_once("common/side_menu.php") ?>
<!-- Side Menu End --> 
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="inner-box my-resume">
                            <div class="author-resume">
                                <div class="thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/resume/img-1.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h3>Mark Anderson</h3>
                                    <p class="sub-title">UI/UX Designer</p>
                                    <p><span class="address"><i class="ti-location-pin"></i>Mahattan, NYC, USA</span> <span><i class="ti-phone"></i>(+01) 211-123-5678</span></p>
                                    <div class="social-link">
                                        <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                                        <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                                        <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google"></i></a>
                                        <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="about-me item">
                                <h3>About Me <i class="ti-pencil"></i></h3>
                                <p>Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur a dolor ac ligula fermentum eusmod ac ullamcorper nulla. Integer blandit uitricies aliquam. Pellentesque quis dui varius, dapibus vilit id, ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet ruturm eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendririt eleif end tempor vitae augue. Fusce eget arcu et nibh dapibus maximus consectetur in est. Sed iaculis Luctus nibh sed veneatis. </p>
                            </div>
                            <div class="work-experence item">
                                <h3>Work Experience <i class="ti-pencil"></i></h3>
                                <h4>UI/UX Designer</h4>
                                <h5>Bannana INC.</h5>
                                <span class="date">Fab 2017-Present(5year)</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero, dolores, officia quibusdam architecto sapiente eos voluptas odit ab veniam porro quae possimus itaque, quas! Tempora sequi nobis, atque incidunt!</p>
                                <p><a href="#">4 Projects</a></p>
                                <br>
                                <h4>UI Designer</h4>
                                <h5>Whale Creative</h5>
                                <span class="date">Fab 2017-Present(2year)</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero, dolores, officia quibusdam architecto sapiente eos voluptas odit ab veniam porro quae possimus itaque, quas! Tempora sequi nobis, atque incidunt!</p>
                                <p><a href="#">4 Projects</a></p>
                            </div>
                            <div class="education item">
                                <h3>Education <i class="ti-pencil"></i></h3>
                                <h4>Massachusetts Institute Of Technology</h4>
                                <p>Bachelor of Computer Science</p>
                                <span class="date">2010-2014</span>
                                <br>
                                <h4>Massachusetts Institute Of Technology</h4>
                                <p>Bachelor of Computer Science</p>
                                <span class="date">2010-2014</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Start -->
    <?php require_once("common/footer.php"); ?>
    <!-- Footer area End -->

    <!-- Copyright Start  -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>All Rights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="http://graygrids.com">GrayGrids</a></p>   
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

</footer>
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