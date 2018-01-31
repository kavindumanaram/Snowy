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
      <div class="header">    
        <div class="logo-menu">
          <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
              </div>

              <div class="collapse navbar-collapse" id="navbar">              
                 <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                  <li>
                    <a href="index.html">
                    Home <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a class="active" href="index.html">
                        Home 1
                        </a>
                      </li>
                      <li>
                        <a href="index-02.html">
                        Home 2
                        </a>                          
                      </li>
                      <li>
                        <a href="index-03.html">
                        Home 3
                        </a>
                      </li>
                      <li>
                        <a href="index-04.html">
                        Home 4
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="about.html">
                    Pages <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="about.html">
                        About
                        </a>
                      </li>
                      <li>
                        <a href="job-page.html">
                        Job Page
                        </a>
                      </li>
                      <li>
                        <a href="job-details.html">
                        Job Details
                        </a>
                      </li>
                      <li>
                        <a href="resume.html">
                        Resume Page
                        </a>
                      </li>
                      <li>
                        <a href="privacy-policy.html">
                        Privacy Policy
                        </a>
                      </li>
                      <li>
                        <a href="faq.html">
                        FAQ
                        </a>
                      </li>
                      <li>
                        <a href="pricing.html">
                        Pricing Tables
                        </a>
                      </li>
                      <li>
                        <a href="contact.html">
                        Contact
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="active" href="#">
                    Candidates <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a class="active" href="browse-jobs.html">
                        Browse Jobs
                        </a>
                      </li>
                      <li>
                        <a href="browse-categories.html">
                        Browse Categories
                        </a>
                      </li>
                      <li>
                        <a href="add-resume.html">
                        Add Resume
                        </a>
                      </li>
                      <li>
                        <a href="manage-resumes.html">
                        Manage Resumes
                        </a>
                      </li>
                      <li>
                        <a href="job-alerts.html">
                        Job Alerts
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">
                    Employers <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="post-job.html">
                        Add Job
                        </a>
                      </li>
                      <li>
                        <a href="manage-jobs.html">
                        Manage Jobs
                        </a>
                      </li>
                      <li>
                        <a href="manage-applications.html">
                        Manage Applications
                        </a>
                      </li>
                      <li>
                        <a href="browse-resumes.html">
                        Browse Resumes
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="blog.html">
                    Blog <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="blog.html">
                        Blog - Right Sidebar
                        </a>
                      </li>
                      <li>
                        <a href="blog-left-sidebar.html">
                        Blog - Left Sidebar
                        </a>
                      </li>
                      <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                      <li>
                        <a href="single-post.html">
                        Blog Single Post
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                  <li class="left"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                  <li class="right"><a href="my-account.html"><i class="ti-lock"></i>  Log In</a></li>
                </ul>
              </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a href="index.html">Home</a>
                <ul>
                  <li><a href="index.html">Home 1</a></li>
                  <li><a href="index-02.html">Home 2</a></li>
                  <li><a href="index-03.html">Home 3</a></li>
                  <li><a href="index-04.html">Home 4</a></li>
                </ul>                       
              </li>
              <li>
                <a href="about.html">Pages</a>
                <ul>
                  <li><a href="about.html">About</a></li>
                  <li><a href="job-page.html">Job Page</a></li>
                  <li><a href="job-details.html">Job Details</a></li>
                  <li><a href="resume.html">Resume Page</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="pricing.html">Pricing Tables</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </li>
              <li>
                <a class="active" href="#">For Candidates</a>
                <ul>
                  <li><a class="active" href="browse-jobs.html">Browse Jobs</a></li>
                  <li><a href="browse-categories.html">Browse Categories</a></li>
                  <li><a href="add-resume.html">Add Resume</a></li>
                  <li><a href="manage-resumes.html">Manage Resumes</a></li>
                  <li><a href="job-alerts.html">Job Alerts</a></li>
                </ul>
              </li>
              <li>
                <a href="#">For Employers</a>
                <ul>
                  <li><a href="post-job.html">Add Job</a></li>
                  <li><a href="manage-jobs.html">Manage Jobs</a></li>
                  <li><a href="manage-applications.html">Manage Applications</a></li>
                  <li><a href="browse-resumes.html">Browse Resumes</a></li>
                </ul>
              </li> 
              <li>
                <a href="blog.html">Blog</a>
                <ul class="dropdown">
                  <li><a href="blog.html">Blog - Right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                  <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                  <li><a href="single-post.html">Blog Single Post</a></li>
                </ul>
              </li>  
              <li class="btn-m"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>
              <li class="btn-m"><a href="my-account.html"><i class="ti-lock"></i>  Log In</a></li>          
            </ul>
            <!-- Mobile Menu End --> 
          </nav>

          <!-- Off Canvas Navigation -->
          <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
          <!--- Off Canvas Side Menu -->
            <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                <i class="ti-close"></i>
            </div>
              <h3 class="title-menu">All Pages</h3>
              <ul class="nav navmenu-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="index-02.html">Home Page 2</a></li>
                <li><a href="index-03.html">Home Page 3</a></li>
                <li><a href="index-04.html">Home Page 4</a></li>
                <li><a href="about.html">About us</a></li>            
                <li><a href="job-page.html">Job Page</a></li>             
                <li><a href="job-details.html">Job Details</a></li>    
                <li><a href="resume.html">Resume Page</a></li> 
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="pricing.html">Pricing Tables</a></li>
                <li><a href="browse-jobs.html">Browse Jobs</a></li>
                <li><a href="browse-categories.html">Browse Categories</a></li>
                <li><a href="add-resume.html">Add Resume</a></li>
                <li><a href="manage-resumes.html">Manage Resumes</a></li> 
                <li><a href="job-alerts.html">Job Alerts</a></li> 
                <li><a href="post-job.html">Add Job</a></li>  
                <li><a href="manage-jobs.html">Manage Jobs</a></li>
                <li><a href="manage-applications.html">Manage Applications</a></li>
                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="my-account.html">Login</a></li>
              </ul><!--- End Menu -->
          </div> <!--- End Off Canvas Side Menu -->
          <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
            <p><i class="ti-files"></i> All Pages</p>
          </div>
        </div>
      </div>
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
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="<?php echo base_url(); ?>assets/img/jobs/img-1.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">We need a web designer</a><span class="full-time">Full-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                        <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <div class="btn btn-common btn-rm">More Detail</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="<?php echo base_url(); ?>assets/img/jobs/img-2.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">Front-end developer needed</a><span class="full-time">Full-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                        <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <div class="btn btn-common btn-rm">More Detail</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="<?php echo base_url(); ?>assets/img/jobs/img-3.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">Software Enginner</a><span class="part-time">Part-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                        <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <div class="btn btn-common btn-rm">More Detail</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="<?php echo base_url(); ?>assets/img/jobs/img-4.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">Fullstack web developer needed</a><span class="full-time">Full-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                        <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <div class="btn btn-common btn-rm">More Detail</div>
                    </div>
                  </div>
                </div>
              </div>
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
 <form action="#">
<div class="form-group is-empty"><input class="form-control search" type="search" placeholder="Enter your keyword"><span class="material-input"></span></div><br/>
<button class="search-btn" type="submit" style="right: 54px; top: 98px;"><i class="fa fa-search"></i></button>
</form>  
 </li>
                      <li>
<button type="button" class="btn btn-common btn-rm" data-toggle="modal" data-target="#myModal">Add New Job</button>						
                      </li>
</ul>					  
                  </div>
                  <div class="inner-box">
                    <h3>Categories</h3>
                    <ul class="cat-list">
                      <li>
                        <a href="#">Finance <span class="num-posts">4,287 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Techonologies <span class="num-posts">4,256 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Art/Design<span class="num-posts">3,245 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Science <span class="num-posts">4,256 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Education Training <span class="num-posts">4,560 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Logistics <span class="num-posts">3,256 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Food Services <span class="num-posts">1,256 Jobs</span></a>                   
                      </li>
                    </ul>
                  </div>
                  <div class="inner-box">
                    <h3>Job Status</h3>
                    <ul class="cat-list">
                      <li>
                        <a href="#">Full Time <span class="num-posts">12,256 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Part Time <span class="num-posts">6,510 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Freelancer <span class="num-posts">1,171 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Internship <span class="num-posts">876 Jobs</span></a>                    
                      </li>
                    </ul>
                  </div>
                  <div class="inner-box">
                    <h3>Locations</h3>
                    <ul class="cat-list">
                      <li>
                        <a href="#">New York <span class="num-posts">4,197 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">San Francisco <span class="num-posts">2,256 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">San Diego <span class="num-posts">3,278 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Los Angeles <span class="num-posts">5,294 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Chicago <span class="num-posts">1,746 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">Houston <span class="num-posts">871 Jobs</span></a>                    
                      </li>
                      <li>
                        <a href="#">New Orleans <span class="num-posts">2,163 Jobs</span></a>                   
                      </li>
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
      <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                  <h3 class="block-title"><img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-responsive" alt="Footer Logo"></h3>
                  <div class="textwidget">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                  <h3 class="block-title">Quick Links</h3>
                  <ul class="menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">License</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                  <h3 class="block-title">Trending Jobs</h3>
                  <ul class="menu">
                    <li><a href="#">Android Developer</a></li>
                    <li><a href="#">Senior Teamleader</a></li>
                    <li><a href="#">iOS Developer</a></li>
                    <li><a href="#">Junior Tester</a></li>
                    <li><a href="#">Full Stack Developer</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                  <h3 class="block-title">Follow Us</h3>
                  <div class="bottom-social-icons social-icon">  
                    <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                    <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>                   
                    <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                    <a class="dribble" href="https://dribbble.com/"><i class="ti-dribbble"></i></a>
                    <a class="linkedin" href="https://www.linkedin.com/"><i class="ti-linkedin"></i></a>
                  </div>  
                  <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                  <form class="subscribe-box">
                    <input type="text" placeholder="Your email">
                    <input type="submit" class="btn-system" value="Send">
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </section>
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