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
      <section class="section text-center" >
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="manager-resumes-item">
                     <div class="manager-content">
                        <a href="resume.html"><img class="resume-thumb" src="<?php echo base_url(); ?>assets/img/jobs/avatar.jpg" alt=""></a>
                        <div class="manager-info">
                           <div class="manager-name">
                              <h4><a href="#">John Doe</a></h4>
                              <h5>Front-end developer</h5>
                           </div>
                           <div class="manager-meta">
                              <span class="location"><i class="ti-location-pin"></i> Cupertino, CA, USA</span>
                              <span class="rate"><i class="ti-time"></i> $55 per hour</span>
                           </div>
                        </div>
                     </div>
                     <div class="item-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, qui aspernatur accusantium! Molestiae, cum cupiditate nam optio dignissimos magnam velit, perspiciatis amet qui aut nobis, quisquam, laudantium vitae eos ipsam.</p>
                        <div class="tag-list">
                           <span>HTML5</span>
                           <span>CSS3</span>
                           <span>Bootstrap</span>
                           <span>Wordpress</span>
                        </div>
                     </div>
                  </div>
               </div>
			   <?php foreach ($records as $record){ ?>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="manager-resumes-item">
                     <div class="manager-content">
                        <a href="resume.html"><img class="resume-thumb" src="<?php echo base_url(); ?>assets/img/jobs/avatar-1.jpg" alt=""></a>
                        <div class="manager-info">
                           <div class="manager-name">
                              <h4><a href="#"><?php echo $record->Name; ?></a></h4>
                              <h5>Java developer</h5>
                           </div>
                           <div class="manager-meta">
                              <span class="location"><i class="ti-location-pin"></i> <?php echo $record->CurrentResidence; ?>, LK</span>
                              <span class="rate"><i class="ti-time"></i> Part Time | Full Time</span>
                           </div>
                        </div>
                     </div>
                     <div class="item-body">
                        <p><?php echo $record->Description; ?></p>
						<div class="tag-list">
						<?php
$str = $record->Skills;
foreach ((explode(",",$str)) as $e)
{
	 ?><span><b><?php echo $e; ?></b></span><?php
}
?>
                        

                          
                        </div>
                     </div>
                  </div>
               </div>
			   <?php } ?>
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
   </body>
</html>