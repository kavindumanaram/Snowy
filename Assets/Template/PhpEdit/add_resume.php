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
                        <a href="index.html">
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
                        <a href="browse-jobs.html">
                        Browse Jobs
                        </a>
                      </li>
                      <li>
                        <a href="browse-categories.html">
                        Browse Categories
                        </a>
                      </li>
                      <li>
                        <a class="active" href="add-resume.html">
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
                        <a href="manage-job-page.html">
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
                  <li><a href="browse-jobs.html">Browse Jobs</a></li>
                  <li><a href="browse-categories.html">Browse Categories</a></li>
                  <li><a class="active" href="add-resume.html">Add Resume</a></li>
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
                <li><a href="manage-job-page.html">Manage Jobs</a></li>
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
<p>Already have an account? <a href="my-account.html">Click here to login</a></p>
</div>
<form class="form-ad">
<div class="divider"><h3>Basic information</h3></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Name</label>
<input type="text" class="form-control" placeholder="Name">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea"></label>
<label class="control-label" for="textarea">Email</label>
<input type="text" class="form-control" placeholder="Your@domain.com">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Profession Title</label>
<input type="text" class="form-control" placeholder="Headline (e.g. Front-end developer)">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Location</label>
<input type="text" class="form-control" placeholder="Location, e.g">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Web</label>
<input type="text" class="form-control" placeholder="Website address">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Pre Hour</label>
<input type="text" class="form-control" placeholder="Salary, e.g. 85">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Age</label>
<input type="text" class="form-control" placeholder="Years old">
<span class="material-input"></span></div>
<div class="form-group">
<div class="button-group">
<div class="action-buttons">
<div class="upload-button">
<button class="btn btn-common">Choose a cover image</button>
<input id="cover_img_file" type="file">
</div>
</div>
</div>
</div>
<div class="divider"><h3>Education</h3></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Degree</label>
<input type="text" class="form-control" placeholder="Degree, e.g. Bachelor">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Field of Study</label>
<input type="text" class="form-control" placeholder="Major, e.g Computer Science">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">School</label>
<input type="text" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<div class="row">
<div class="col-md-6">
<label class="control-label" for="textarea">From</label>
<input type="text" class="form-control" placeholder="e.g 2014">
</div>
<div class="col-md-6">
<label class="control-label" for="textarea">To</label>
<input type="text" class="form-control" placeholder="e.g 2018">
</div>
</div>
<span class="material-input"></span><span class="material-input"></span></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Description</label>
<textarea class="form-control" rows="7"></textarea>
<span class="material-input"></span></div>
<div class="form-group">
<div class="button-group">
<div class="action-buttons">
<div class="upload-button">
<button class="btn btn-common">Choose a cover Logo</button>
<input id="cover_img_file" type="file">
</div>
</div>
</div>
</div>
<div class="add-post-btn">
<div class="pull-left">
<a href="#" class="btn-added"><i class="ti-plus"></i> Add New Education</a>
</div>
<div class="pull-right">
<a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
</div>
</div>
<div class="divider"><h3>Work Experience</h3></div>
<div class="form-group is-empty">
<label class="control-label" for="textarea">Company Name</label>
<input type="text" class="form-control" placeholder="Company name">
<span class="material-input"></span></div>
<div class="form-group is-empty">
 <label class="control-label" for="textarea">Title</label>
<input type="text" class="form-control" placeholder="e.g UI/UX Researcher">
<span class="material-input"></span></div>
<div class="form-group is-empty">
<div class="row">
<div class="col-md-6">
<label class="control-label" for="textarea">Date Form</label>
<input type="text" class="form-control" placeholder="e.g 2014">
</div>
<div class="col-md-6">
<label class="control-label" for="textarea">Date To</label>
<input type="text" class="form-control" placeholder="e.g 2018">
</div>
</div>
<span class="material-input"></span><span class="material-input"></span></div>
<div class="form-group">
<label class="control-label" for="textarea">Description</label>
</div>
<section id="editor">
<div id="edit" style="margin-bottom: 30px;" class="fr-box fr-basic fr-top"><div class="fr-toolbar fr-desktop fr-top fr-basic fr-sticky fr-sticky-off" style="top: 0px; bottom: auto;"><button id="fullscreen-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Fullscreen" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="fullscreen"><i class="fa fa-expand" aria-hidden="true"></i><span class="fr-sr-only">Fullscreen</span></button><button id="bold-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Bold (Ctrl+B)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="bold"><i class="fa fa-bold" aria-hidden="true"></i><span class="fr-sr-only">Bold</span></button><button id="italic-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Italic (Ctrl+I)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="italic"><i class="fa fa-italic" aria-hidden="true"></i><span class="fr-sr-only">Italic</span></button><button id="underline-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Underline (Ctrl+U)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="underline"><i class="fa fa-underline" aria-hidden="true"></i><span class="fr-sr-only">Underline</span></button><button id="strikeThrough-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Strikethrough (Ctrl+S)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="strikeThrough"><i class="fa fa-strikethrough" aria-hidden="true"></i><span class="fr-sr-only">Strikethrough</span></button><button id="subscript-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Subscript" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="subscript"><i class="fa fa-subscript" aria-hidden="true"></i><span class="fr-sr-only">Subscript</span></button><button id="superscript-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Superscript" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="superscript"><i class="fa fa-superscript" aria-hidden="true"></i><span class="fr-sr-only">Superscript</span></button><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="outdent-1" type="button" tabindex="-1" role="button" title="Decrease Indent (Ctrl+[)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="outdent"><i class="fa fa-outdent" aria-hidden="true"></i><span class="fr-sr-only">Decrease Indent</span></button><button id="indent-1" type="button" tabindex="-1" role="button" title="Increase Indent (Ctrl+])" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="indent"><i class="fa fa-indent" aria-hidden="true"></i><span class="fr-sr-only">Increase Indent</span></button><button id="insertHR-1" type="button" tabindex="-1" role="button" title="Insert Horizontal Line" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="insertHR"><i class="fa fa-minus" aria-hidden="true"></i><span class="fr-sr-only">Insert Horizontal Line</span></button><div class="fr-separator fr-hs" role="separator" aria-orientation="horizontal"></div><button id="undo-1" type="button" tabindex="-1" role="button" aria-disabled="true" title="Undo (Ctrl+Z)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="undo"><i class="fa fa-rotate-left" aria-hidden="true"></i><span class="fr-sr-only">Undo</span></button><button id="redo-1" type="button" tabindex="-1" role="button" aria-disabled="true" title="Redo (Ctrl+Shift+Z)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="redo"><i class="fa fa-rotate-right" aria-hidden="true"></i><span class="fr-sr-only">Redo</span></button><button id="clearFormatting-1" type="button" tabindex="-1" role="button" title="Clear Formatting" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="clearFormatting"><i class="fa fa-eraser" aria-hidden="true"></i><span class="fr-sr-only">Clear Formatting</span></button><button id="selectAll-1" type="button" tabindex="-1" role="button" title="Select All" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="selectAll"><i class="fa fa-mouse-pointer" aria-hidden="true"></i><span class="fr-sr-only">Select All</span></button></div><div class="fr-sticky-dummy" style="height: 82px;"></div><div class="fr-wrapper" dir="auto"><div class="fr-element fr-view" dir="auto" contenteditable="true" aria-disabled="false" spellcheck="true"><h3>Description</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, aliquid laudantium quae assumenda consectetur saepe, minus sapiente quod beatae. Natus odio, laborum saepe quisquam adipisci quos rem quis dignissimos expedita!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non hic corporis, ducimus mollitia rem reprehenderit autem repellat quisquam omnis! Rerum debitis ut in, unde nesciunt nihil est, qui voluptates numquam.</p></div></div><div style="position: absolute; bottom: 0px; left: 0px; z-index: 9999;"><a href="https://www.froala.com/wysiwyg-editor?k=u" style="padding: 3px 10px; display: inline-block; background-color: #D14841; color: #fff; text-decoration: none;" target="_blank">Unlicensed Froala Editor</a></div></div>
</section>
<div class="form-group">
<div class="button-group">
<div class="action-buttons">
<div class="upload-button">
<button class="btn btn-common">Choose a cover Logo</button>
<input id="cover_img_file" type="file">
</div>
</div>
</div>
</div>
<div class="add-post-btn">
<div class="pull-left">
<a href="#" class="btn-added"><i class="ti-plus"></i> Add New Experience</a>
</div>
<div class="pull-right">
<a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
</div>
</div>
<div class="divider"><h3>Skills</h3></div>
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
<span class="material-input"></span><span class="material-input"></span></div>
<div class="add-post-btn">
<div class="pull-left">
<a href="#" class="btn-added"><i class="ti-plus"></i> Add New Skills</a>
</div>
<div class="pull-right">
<a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
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