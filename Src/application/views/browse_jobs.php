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
                            <h2 class="product-title">Browse Job</h2>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Browse Job</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->      

        <!-- Job Browse Section Start -->  
        <section class="job-browse section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <?php foreach ($jobs as $job) { ?>
                            <div class="job-list">
                                <div class="thumb">
                                    <a href="job-details.html"><img src="<?php echo base_url(); ?>assets/img/jobs/img-1.jpg" alt=""></a>
                                </div>

                                <div class="job-list-content">
                                    <h4><a href="job-details.html"><?php echo $job->Title; ?></a><span class="part-time"><?php echo $job->JobStatus; ?></span></h4>
                                    <p><?php echo $job->Discription; ?></p>
                                    <div class="job-tag">
                                        <div class="pull-left">
                                            <div class="meta-tag">
                                                <span><a href="browse-categories.html"><i class="ti-brush"></i><?php echo $job->JobCategoryName; ?></a></span>
                                                <span><i class="ti-location-pin"></i><?php echo $job->Location; ?>, SL</span>
                                                <span><i class="ti-time"></i>60/Hour</span>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <div class="icon">
                                                <i class="ti-heart"></i>
                                            </div>
                                            <div class="btn btn-common btn-rm">More</div>
                                            <div class="btn btn-common btn-rm">Delete</div>
                                            <div class="btn btn-common btn-rm">Edit</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php } ?>
                        <!-- Start Pagination -->
                        <ul class="pagination">              
                            <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                        </ul>
                        <!-- End Pagination -->
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <aside>
                            <div class="sidebar">
                                <div class="inner-box">
                                    <h3>Search</h3>
                                    <br/>

                                    <ul class="cat-list">
                                        <li>
                                            <form action="<?php echo base_url() ?>index.php/JobController/browse_jobs">
                                                <div class="form-group is-empty"><input class="form-control search" type="search" placeholder="Enter your keyword" name="search_text"><span class="material-input"></span></div><br/>
                                                <button class="search-btn" type="submit" style="right: 54px; top: 107px;"><i class="fa fa-search"></i></button>
                                            </form>  
                                        </li>
                                    </ul>					  
                                </div>
                                <div class="inner-box">
                                    <h3>Categories</h3>
                                    <ul class="cat-list">
                                        <?php foreach ($job_categories as $job_category) { ?>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/JobController/browse_jobs?search_text=<?php echo $job_category->JobCategoryId; ?>&search_field=job.Category"> <?php echo $job_category->JobCategoryName ?> <span class="num-posts"> <?php echo $job_category->jobCount ?> Jobs</span></a>                    
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="inner-box">
                                    <h3>Job Status</h3>
                                    <ul class="cat-list">
                                        <?php foreach ($job_status as $job_status) { ?>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/JobController/browse_jobs?search_text=<?php echo $job_status->JobStatus; ?>&search_field=job.JobStatus"><?php echo $job_status->JobStatus ?> <span class="num-posts"> <?php echo $job_status->jobCount ?> Jobs</span></a>                    
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="inner-box">
                                    <h3>Locations</h3>
                                    <ul class="cat-list">
                                        <?php foreach ($job_locations as $job_location) { ?>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/JobController/browse_jobs?search_text=<?php echo $job_location->Location; ?>&search_field=job.Location"><?php echo $job_location->Location; ?><span class="num-posts"> <?php echo $job_location->jobCount ?> Jobs</span></a>                    
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Job Browse Section End --> 

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

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-common btn-rm" data-dismiss="modal">Close</button>
                    </div>
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