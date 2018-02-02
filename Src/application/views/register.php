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
                            <h2 class="product-title">My Account</h2>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="ti-home"></i> Home</a></li>
                                <li class="current">My Account</li>
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
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
                        <div class="my-account-form">
                            <ul class="cd-switcher">
                            </ul>

                            <div id="cd-signup" class="is-selected">
                                <div class="page-login-form register">

                                    <form role="form" class="login-form" method="post" action="<?php echo base_url(); ?>index.php/AuthController/RegisterUser">
                                        <fieldset>
                                            <label>Have an account?</label>
                                            <div class="field account-sign-in">
                                                <p>
                                                    <a class="btn btn-common btn-sm" href="<?php echo base_url(); ?>index.php/AuthController/login"><i class="ti-key"></i> Sign in</a>
                                                </p>
                                            </div>
                                        </fieldset>
                                        <div class="form-group is-empty">
                                            <div class="input-icon">
                                                <i class="ti-email"></i>
                                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required" >
                                            </div>
                                            <span class="material-input"></span></div>
                                        <div class="form-group is-empty">
                                            <div class="input-icon">
                                                <i class="ti-lock"></i>
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required">
                                            </div>
                                            <span class="material-input"></span></div>
                                        <div class="form-group is-empty">
                                            <div class="input-icon">
                                                <i class="ti-lock"></i>
                                                <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" required="required">
                                            </div>
                                            <span class="material-input"></span></div>
                                        <button class="btn btn-common log-btn">Register</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>  



        <!-- Footer Section Start -->
        <?php require_once("common/footer.php"); ?>
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
        
        <script>
        var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
        </script>

    </body>
</html>