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
        <!-- Editor -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/extras/froala_editor.min.css" type="text/css">
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
                            <h2 class="product-title">Create Resume</h2>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Resumes</li>
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
                    <div class="col-md-9 col-md-offset-2">
                        <div class="page-ads box">
                            <div class="post-header">
                                <p>Already have an account? <a href="<?php echo base_url(); ?>index.php/AuthController/Login">Click here to login</a></p>
                            </div>
                            <?php //echo $error;?> 
                            <?php
                            if (!empty($notification)) {
                                echo '
            <p>Notifications : </p>
            <p>' . $notification . '</p>';    //<!-- For the status of the uploaded files ( error or success ) -->
                            }
                            ?>
                            <?php echo form_open_multipart('ResumeController/add'); ?> 
                            <form class="form-ad" method="post" action="">

                                <div class="divider">
                                    <h3>Basic information</h3>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Title</label>
                                    <select class="form-control" id="title" name="title" required >
                                        <option value="">None</option>
                                        <option>Mr</option>
                                        <option>Mrs</option>
                                        <option>Ms</option>
                                        <option>Miss</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Full Name" name="name" id="name" required >
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">NIC</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Natianal Identity Card Number" name="nic" id="nic" required >
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Gender</label><br/>
                                    <label class="radio-inline"><input type="radio" name="gender" value="1">Male</label>
                                    <label class="radio-inline"><input type="radio" name="gender" value="2">Female</label>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea"></label>
                                    <label class="control-label" for="textarea">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email Address (eg: Your@domain.com)" name="email" id="email" required >
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="textarea">Mobile Number</label>
                                            <input class="form-control" placeholder="Enter Your Mobile Phone Number" type="text" name="mobile" id="mobile" required >
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label" for="textarea">Home Phone</label>
                                            <input class="form-control" placeholder="Enter Your Home Phone Number" type="text" name="home_phone" id="home_phone">
                                        </div>
                                    </div>
                                    <span class="material-input"></span>
                                </div>

                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Marital Status</label>
                                    <select class="form-control" name="marital_status" id="marital_status" required >
                                        <option>None</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea"> Current Residence</label>
                                    <select class="form-control" name="current_residence" id="current_residence" required >
                                        <option>None</option>
                                        <option>Ampara</option>
                                        <option>Anuradhapura</option>
                                        <option>Badulla</option>
                                        <option>Batticaloa</option>
                                        <option>Colombo</option>
                                        <option>Galle</option>
                                        <option>Gampaha</option>
                                        <option>Hambantota</option>
                                        <option>Jaffna</option>
                                        <option>Kalutara</option>
                                        <option>Kandy</option>
                                        <option>Kegalle</option>
                                        <option>Kilinochchi</option>
                                        <option>Kurunegala</option>
                                        <option>Mannar</option>
                                        <option>Matara</option>
                                        <option>Monaragala</option>
                                        <option>Mullaitivu</option>
                                        <option>Nuwara Eliya</option>
                                        <option>Polonnaruwa</option>
                                        <option>Puttalam</option>
                                        <option>Ratnapura</option>
                                        <option>Trincomalee</option>
                                        <option>Vavuniya</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Apply Position</label>
                                    <input type="text" class="form-control" placeholder="Headline (e.g. Front-end developer)" readonly="readonly" name="apply_position" id="apply_position" value="SE">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Salary Expectation</label>
                                    <input type="number" step="any"  class="form-control" placeholder="Salary Expec  e.g 45,000" name="salary_expectation" id="salary_expectation">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <div class="button-group">
                                        <div class="action-buttons">
                                            <div class="upload-button">
                                                <label  class="btn btn-common" for="default">Change profile image</label>
                                                <input type="file" name="cvImage"  accept="image/gif, image/jpeg, image/png, image/jpg">
                                                <!--<button class="btn btn-common">Change profile image</button>-->
                                                <!--<input type = "file" name = "userfile" size = "20" />--> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider">
                                    <h3>Professional Information</h3>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Current Designation</label>
                                    <input type="text" class="form-control" placeholder="Major, e.g Computer Science" name="current_designation" id="current_designation">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea"> Total years of Experiance</label>
                                    <select class="form-control" name="total_experiance" id="total_experiance">
                                        <option>None</option>
                                        <option>Less than one year</option>
                                        <option>Less than two year</option>
                                        <option>Less than three year</option>
                                        <option>Less than five year</option>
                                        <option>Less than seven year</option>
                                        <option>Less than ten year</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea"> Highest Qualification</label>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label" for="textarea">Qualification</label>
                                            <select class="form-control" name="qualification" id="qualification" required >
                                                <option>None</option>
                                                <option>A/L</option>
                                                <option>O/L</option>
                                                <option>Degree</option>
                                                <option>Bachelor</option>
                                                o<ption>Master</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label" for="textarea">Name</label>
                                            <input class="form-control" placeholder="Enter Your Home Phone Number" type="text" name="qualification_name" id="qualification_name">
                                        </div>
                                    </div>



                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Description</label>
                                    <textarea class="form-control" rows="7" name="description" id="description"></textarea>
                                    <span class="material-input"></span>
                                </div>
                                <div class="divider">
                                    <h3>Specialized area</h3>
                                </div>
                                <div class="form-group is-empty">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label" for="textarea">Skill Name</label>
                                            <input class="form-control" placeholder="Skill name, e.g. HTML, .Net, Communication (With Comma separated values)" type="text" name="skill" id="skill">
                                        </div>
                                    </div>
                                    <span class="material-input"></span><span class="material-input"></span>
                                </div>
                                <div class="divider">
                                    <div class="form-group">
                                        <div class="button-group pull-right">
                                            <div class="action-buttons">
                                                <div class="upload-button">
                                                    <label class="btn btn-common" for="default">Upload CV</label>
                                                    <input type="file" name="cv" accept="application/pdf" required/>
                                                    <!--                                       <button class="btn btn-common">Upload Your CV</button>
                                                                                           <input type = "file" name = "usercvfile" size = "20" /> -->
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-common" value="Save" name="upload">
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/froala_editor.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fullscreen.min.js"></script>
<script>
    $(function () {
        $('#edit').froalaEditor()
    });
</script>
</body>
</html>