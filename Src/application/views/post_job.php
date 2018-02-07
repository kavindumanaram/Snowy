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
        <!-- Page Header End -->    
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
                    <div class="col-sm-12 col-md-9 col-md-offset-2">
                        <fieldset>
                            <label>Have an account?</label>
                            <div class="field account-sign-in">
                                <p>
                                    <a class="btn btn-common btn-sm" href="my-account.html"><i class="ti-key"></i> Sign in</a>
                                </p>
                                <div class="alert alert-info alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.
                                </div>
                            </div>
                        </fieldset>
                        <div class="page-ads box">
                            <form class="form-ad" action="<?php echo base_url(); ?>index.php/JobController/save_job" method="post">
                                <div class="form-group is-empty">
                                    <label class="control-label">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" id="job_title">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label">Location <span>(optional)</span></label>
                                    <select class="form-control" name="location" id="location" required >
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
                                    <label class="control-label" for="textarea">Category</label>
                                    
                                    
                                    <select class="form-control" id="category" name="category" required >
                                        <?php foreach($job_categories as $job_category)
                                        {?>
                                        <option value="<?php echo $job_category->	JobCategoryId ?>"><?php echo $job_category->JobCategoryName ?></option> 
                                        <?php } ?>
                                                    
                                                    
                                                    
                                                    
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                                
                                
                                <div class="form-group is-empty">
                                    <label class="control-label">Job Status <span>(optional)</span></label>
                                    <select class="form-control" name="job_status" id="job_status" required >
                                        <option>None</option>
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Internship</option>
                                        <option>Freelance</option>
                                        
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                                
                                <div class="form-group is-empty">
                                    <label class="control-label" for="textarea">Job Tags <span>(optional)</span></label>
                                    <input type="text" class="form-control" placeholder="e.g.PHP,Social Media,Management" name="job_tags" id="job_tags">
                                    <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" placeholder="Enter an Description" name="description" id="description"></textarea>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label">Application email / URL</label>
                                    <input type="text" class="form-control" placeholder="Enter an email address or website URL" name="application_email_url" id="application_email_url">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group is-empty">
                                    <label class="control-label">Closing Date <span>(optional)</span></label>
                                    <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="closing_date" id="closing_date">
                                    <p class="note">Deadline for new applicants.</p>
                                    <span class="material-input"></span>
                                </div>
                                <div class="divider"><h3>Company Details</h3></div>
                                <div class="form-group is-empty">
                                    <label class="control-label">Company Name</label>
                                    <input type="text" class="form-control" placeholder="Enter the name of the company" name="company_name" id="company_name">
                                    <span class="material-input"></span></div>
                                <div class="form-group is-empty">
                                    <label class="control-label">Website <span>(optional)</span></label>
                                    <input type="text" class="form-control" placeholder="http://" name="website">
                                    <span class="material-input"></span></div>
                                <div class="form-group">
                                    <div class="button-group">
                                        <div class="action-buttons">
                                            <div class="upload-button">
                                                <button class="btn btn-common btn-sm">Attachments</button>
                                                <input id="cover_img_file" type="file" name="job_attachments" id="job_attachments">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-common" value="Submit your job">
                            </form>
                        </div>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/froala_editor.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fullscreen.min.js"></script>

    <script>
        $(function () {
            $('#edit').froalaEditor()
        });
    </script>

</body>
</html>