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
         <div class="container text-left"">
            <div class="row">
               <div class="col-md-9 col-md-offset-2">
                  <div class="page-ads box">
                     <div class="post-header">
                        <p>Already have an account? <a href="login.php">Click here to login</a></p>
                     </div>
                     <form class="form-ad">
                        <div class="divider">
                           <h3>Basic information</h3>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Title</label>
                           <select class="form-control" id="sel1">
                              <option>Mr</option>
                              <option>Mrs</option>
                              <option>Ms</option>
                           </select>
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Name</label>
                           <input type="text" class="form-control" placeholder="Name">
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">NIC</label>
                           <input type="text" class="form-control" placeholder="Name">
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Gender</label><br/>
                           <label class="radio-inline"><input type="radio" name="optradio">Option 1</label>
                           <label class="radio-inline"><input type="radio" name="optradio">Option 2</label>
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea"></label>
                           <label class="control-label" for="textarea">Email</label>
                           <input type="text" class="form-control" placeholder="Your@domain.com">
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Contact No</label>
                           <input type="text" class="form-control" placeholder="Years old">
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Profession Title</label>
                           <input type="text" class="form-control" placeholder="Headline (e.g. Front-end developer)">
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Marital Status</label>
                           <select class="form-control" id="sel1">
                              <option>Single</option>
                              <option>Married</option>
                              <option>Widowed</option>
                              <option>Separated</option>
                              <option>Divorced</option>
                           </select>
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea"> Location for Job</label>
                           <select class="form-control" id="sel1">
                              <option>Matara</option>
                              <option>Colombo</option>
                              <option>Widowed</option>
                           </select>
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Salary Expec</label>
                           <input type="text" class="form-control" placeholder="Website address">
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group">
                           <div class="button-group">
                              <div class="action-buttons">
                                 <div class="upload-button">
                                    <button class="btn btn-common">Change profile image</button>
                                    <input id="cover_img_file" type="file">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="divider">
                           <h3>Professional Information</h3>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Current Designation</label>
                           <input type="text" class="form-control" placeholder="Major, e.g Computer Science">
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea"> Experience in years</label>
                           <select class="form-control" id="sel1">
                              <option>Less than year</option>
                              <option>O/L</option>
                              <option>Degree</option>
                           </select>
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea"> Highest Qualification</label>
                           <select class="form-control" id="sel1">
                              <option>A/L</option>
                              <option>O/L</option>
                              <option>Degree</option>
                           </select>
                           <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty">
                           <label class="control-label" for="textarea">Description</label>
                           <textarea class="form-control" rows="7"></textarea>
                           <span class="material-input"></span>
                        </div>
                        <div class="divider">
                           <h3>Skills</h3>
                        </div>
                        <div class="form-group is-empty">
                           <div class="row">
                              <div class="col-md-6">
                                 <label class="control-label" for="textarea">Skill Name</label>
                                 <input class="form-control" placeholder="Skill name, e.g. HTML" type="text">
                              </div>
                              <div class="col-md-6">
                                 <label class="control-label" for="textarea">% (1-100)</label>
                                 <input class="form-control" placeholder="Skill proficiency, e.g. 90" type="text">
                              </div>
                           </div>
                           <span class="material-input"></span><span class="material-input"></span>
                        </div>
                        <div class="add-post-btn">
                           <div class="pull-left">
                              <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Skills</a>
                           </div>
                           <div class="pull-right">
                              <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                           </div>
                        </div>
                        <div class="divider">
                           <div class="form-group">
                              <div class="button-group pull-right">
                                 <div class="action-buttons">
                                    <div class="upload-button">
                                       <button class="btn btn-common">Upload Your CV</button>
                                       <input id="cover_img_file" type="file">
                                    </div>
                                 </div>
                              </div>
                              <br>
                           </div>
                        </div>
                     </form>
                     <a href="resume.html" class="btn btn-common">Save</a>
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
         $(function() {
           $('#edit').froalaEditor()
         });
      </script>
   </body>
</html>