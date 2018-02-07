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
                <a class="active" href="<?php echo base_url(); ?>index.php/AuthController/index">
                    Home</i>
                </a>
            </li>
            <li>
                <a href="#">
                    Candidates <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown">
                    <li><a href="<?php echo base_url(); ?>index.php/JobController/browse_jobs">Browse Jobs</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/ResumeController/add">Add Resume</a></li>

                </ul>
            </li>
            <li>
                <a href="#">
                    Employers <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/jobController/post_job">
                            Add Job
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/ResumeController/browse">
                            Browse Resumes
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right float-right">
            <li class="left"><a href="<?php echo base_url(); ?>index.php/JobController/post_job"><i class="ti-pencil-alt"></i> Post A Job</a></li>
            <li class="right"><a href="<?php echo base_url(); ?>index.php/AuthController/Login"><i class="ti-lock"></i>  Sign In </a></li>
        </ul>
    </div>
</div>
<ul class="wpb-mobile-menu">
    <li>
        <a href="<?php echo base_url(); ?>index.php/AuthController/index">Home</a>                       
    </li>
    <li>
        <a href="#">For Candidates</a>
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/JobController/browse_jobs">Browse Jobs</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/ResumeController/add">Add Resume</a></li>
        </ul>
    </li>
    <li>
        <a href="#">For Employers</a>
        <ul>
            <li><a href="<?php echo base_url(); ?>index.php/jobController/post_job">Add Job</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/ResumeController/browse">Browse Resumes</a></li>
        </ul>
    </li>  
    <li class="btn-m"><a href="<?php echo base_url(); ?>index.php/JobController/post_job"><i class="ti-pencil-alt"></i> Post A Job</a></li>
    <li class="btn-m"><a  class="active" href="<?php echo base_url(); ?>index.php/AuthController/Login"><i class="ti-lock"></i>  Sign In</a></li>          
</ul>
