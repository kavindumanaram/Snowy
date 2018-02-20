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

	<script type="text/javascript">
//made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
	</script>
	<style>
	#x{
		color:#FF4F57;
	}
	</style>
    
  </head>

  <body>  
      <!-- Header Section Start -->
      <div class="header">    
        <!-- Start intro section -->
        <section id="intro" class="section-intro">
          <div class="logo-menu">
           <!-- Main Nav Bar Start--> 
		   <?php require_once("common/main_nav_bar.php"); ?>
           <!-- Main Nav Bar End--> 
      </div>
      <!-- Header Section End -->    

      <div class="search-container">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Find the job that fits your life</h1><br>			 
			 <h2><a id="x" href="" class="typewrite" data-period="2000" data-type='[ "More than <strong> 12,000 </strong> jobs are waiting to Kickstart your career!", "Looking For Internship Opportunity", "10 Plus Part Time Jobs" ]'>
    <span class="wrap"></span>
  </a></h2>
              <div class="content">
                <form method="" action="">
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="job title / keywords / company name">
                        <i class="ti-time"></i>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="city / province / zip code">
                        <i class="ti-location-pin"></i>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker">
                            <option>All Categories</option>
                            <option>Finance</option>
                            <option>IT & Engineering</option>
                            <option>Education/Training</option>
                            <option>Art/Design</option>
                            <option>Sale/Markting</option>
                            <option>Healthcare</option>
                            <option>Science</option>                              
                            <option>Food Services</option>
                          </select>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-1 col-sm-6">
                      <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="popular-jobs">
                <b>Popular Keywords: </b>
                <a href="#">Web Design</a>
                <a href="#">Manager</a>
                <a href="#">Programming</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end intro section -->
    </div>
    
    <!-- Find Job Section Start -->
    <section class="find-job section">
      <div class="container">
        <h2 class="section-title">Hot Jobs</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="<?php echo base_url(); ?>assets/img/jobs/img-1.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Need a web designer</a><span class="full-time">Full-Time</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                      <span><i class="ti-location-pin"></i>Washington, USA</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
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
                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="<?php echo base_url(); ?>assets/img/jobs/img-3.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Senior Accountant</a><span class="part-time">Part-Time</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-home"></i>Finance</a></span>
                      <span><i class="ti-location-pin"></i>Delaware, USA</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
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
                      <span><i class="ti-location-pin"></i>New York, USA</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="showing pull-left">
              <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
            </div>                    
            <ul class="pagination pull-right">              
              <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
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
    </section>
    <!-- Find Job Section End -->

    <!-- Category Section Start -->

    <!-- Category Section End -->  

    <!-- Featured Jobs Section Start -->
    <section class="featured-jobs section">
      <div class="container">
        <h2 class="section-title">
          Job Categories
        </h2>
        <div class="row">
     
             <?php foreach ($job_categories as $job_category) {?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="job-page.html">
                        <img src="<?php echo base_url(); ?>assets/uploads/job_categories_imge/<?php echo $job_category->Image; ?>" alt="" width="342" height="216">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title"><a href="job-page.html"><?php echo $job_category->JobCategoryName; ?></a></h3>
                    <div class="adderess"><i class="ti-location-pin"></i>Matara | Colombo</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-calendar"></i> 4 months ago</span>
                <span><i class="ti-time"></i> Full Time | Part Time </span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
         <?php } ?>
      </div>
    </section>
    <!-- Featured Jobs Section End -->

    <!-- Start Purchase Section -->
    <section class="section purchase" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="section-content text-center">
            <h1 class="title-text">
             Looking for an Internship
            </h1>
            <p>Join thousand of employers and earn what you deserve!</p>
            <a href="my-account.html" class="btn btn-common">Get Started Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Purchase Section -->
     
    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <h2 class="section-title">
          Latest News
        </h2>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="<?php echo base_url(); ?>assets/img/blog/home-items/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Dec 20, 2017</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    Tips to write an impressive resume online for beginner
                  </h3>
                </a>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="<?php echo base_url(); ?>assets/img/blog/home-items/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Jan 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    Let's explore 5 cool new features in JobBoard theme
                  </h3>
                </a>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="<?php echo base_url(); ?>assets/img/blog/home-items/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Mar 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    How to convince recruiters and get your dream job
                  </h3>
                </a>
                <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section">
      <div class="container">
        <div class="row">
          <div class="touch-slider" class="owl-carousel owl-theme">
            <div class="item active text-center">  
              <img class="img-member" src="<?php echo base_url(); ?>assets/img/testimonial/img1.jpg" alt=""> 
              <div class="client-info">
               <h2 class="client-name">Jessica <span>(Senior Accountant)</span></h2>
              </div>
              <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
            </div>
            <div class="item text-center">
              <img class="img-member" src="<?php echo base_url(); ?>assets/img/testimonial/img2.jpg" alt=""> 
              <div class="client-info">
               <h2 class="client-name">John Doe <span>(Project Menager)</span></h2>
              </div>
              <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
            </div>
            <div class="item text-center">
              <img class="img-member" src="<?php echo base_url(); ?>assets/img/testimonial/img3.jpg" alt=""> 
              <div class="client-info">
                <h2 class="client-name">Helen <span>(Engineer)</span></h2>
              </div>
              <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Clients Section -->
    <section class="clients section">
      <div class="container">
        <h2 class="section-title">
          Clients & Partners
        </h2>
        <div class="row"> 
          <div id="clients-scroller">
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img1.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img2.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img3.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img4.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img5.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img6.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img6.png" alt="">
            </div>
            <div class="items">
              <img src="<?php echo base_url(); ?>assets/img/clients/img6.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Client Section End -->

     <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-briefcase"></i>
              </div>
              <div class="desc">                
                <h2>Jobs</h2>
                <h1 class="counter"><?php echo $job_count ?></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-user"></i>
              </div>
              <div class="desc">
                <h2>Members</h2>
                <h1 class="counter"><?php echo $user_count ?></h1></h1>                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-write"></i>
              </div>
              <div class="desc">
                <h2>Resume</h2>
                <h1 class="counter"><?php echo $resume_count ?></h1></h1>                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-heart"></i>
              </div>
              <div class="desc">
                <h2>Company</h2>
                <h1 class="counter">9050</h1>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

    <!-- Infobox Section Start -->

    <!-- Infobox Section End -->

    <!-- Footer Section Start -->
    <?php require_once ("common/footer.php"); ?>
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