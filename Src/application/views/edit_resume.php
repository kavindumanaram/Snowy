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
                            <?php echo form_open_multipart('ResumeController/edit_resume_prosess'); ?> 
                            <form class="form-ad" method="post" action="">
                                <?php foreach ($records as $record) { ?>
                                    <div class="divider">
                                        <h3>Basic information</h3>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Title</label>
                                        <select class="form-control" id="title" name="title" required >
                                            <option value="">None</option>
                                            <option <?php echo (($record->Title) == 'Mr') ? "Selected" : true ?> >Mr</option>
                                            <option <?php echo (($record->Title) == 'Mrs') ? "Selected" : true ?> >Mrs</option>
                                            <option <?php echo (($record->Title) == 'Ms') ? "Selected" : true ?> >Ms</option>
                                            <option <?php echo (($record->Title) == 'Miss') ? "Selected" : true ?>>Miss</option>
                                        </select>
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Full Name" name="name" id="name" value="<?php echo $record->Name ?>" required >
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">NIC</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Natianal Identity Card Number" name="nic" id="nic" value="<?php echo $record->Nic ?>" required >
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Gender</label><br/>
                                        <label class="radio-inline"><input type="radio" name="gender" value="1" <?php echo (($record->Gender) == '1') ? "checked" : true ?>>Male</label>
                                        <label class="radio-inline"><input type="radio" name="gender" value="2" <?php echo (($record->Gender) == '2') ? "checked" : true ?>>Female</label>
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea"></label>
                                        <label class="control-label" for="textarea">Email</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Email Address (eg: Your@domain.com)" name="email" id="email" value="<?php echo $record->Email ?>" required >
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label" for="textarea">Mobile Number</label>
                                                <input class="form-control" placeholder="Enter Your Mobile Phone Number" type="text" name="mobile" id="mobile" value="<?php echo $record->Mobile ?>" required >
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label" for="textarea">Home Phone</label>
                                                <input class="form-control" placeholder="Enter Your Home Phone Number" type="text" name="home_phone" value="<?php echo $record->HomePhone ?>" id="home_phone">
                                            </div>
                                        </div>
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Marital Status</label>
                                        <select class="form-control" name="marital_status" id="marital_status" required >
                                            <option >None</option>
                                            <option <?php echo (($record->MaritalStatus) == 'Single') ? "selected" : true ?> >Single</option>
                                            <option<?php echo (($record->MaritalStatus) == 'Married') ? "selected" : true ?> >Married</option>
                                        </select>
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea"> Current Residence</label>
                                        <select class="form-control" name="current_residence" id="current_residence"  required >
                                            <option>None</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Ampara') ? "selected" : true ?>>Ampara</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Anuradhapura') ? "selected" : true ?>>Anuradhapura</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Badulla') ? "selected" : true ?>>Badulla</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Batticaloa') ? "selected" : true ?>>Batticaloa</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Colombo') ? "selected" : true ?>>Colombo</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Galle') ? "selected" : true ?>>Galle</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Gampaha') ? "selected" : true ?>>Gampaha</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Hambantota') ? "selected" : true ?>>Hambantota</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Jaffna') ? "selected" : true ?>>Jaffna</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Kalutara') ? "selected" : true ?>>Kalutara</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Kandy') ? "selected" : true ?>>Kandy</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Kegalle') ? "selected" : true ?>>Kegalle</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Kilinochchi') ? "selected" : true ?>>Kilinochchi</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Kurunegala') ? "selected" : true ?>>Kurunegala</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Mannar') ? "selected" : true ?>>Mannar</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Matara') ? "selected" : true ?>>Matara</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Monaragala') ? "selected" : true ?>>Monaragala</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Mullaitivu') ? "selected" : true ?>>Mullaitivu</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Nuwara Eliya') ? "selected" : true ?>>Nuwara Eliya</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Polonnaruwa') ? "selected" : true ?>>Polonnaruwa</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Puttalam') ? "selected" : true ?>>Puttalam</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Ratnapura') ? "selected" : true ?>>Ratnapura</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Trincomalee') ? "selected" : true ?>>Trincomalee</option>
                                            <option <?php echo (($record->CurrentResidence) == 'Vavuniya') ? "selected" : true ?>>Vavuniya</option>
                                        </select>
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Apply Position</label>
                                        <input type="text" class="form-control" placeholder="Headline (e.g. Front-end developer)" readonly="readonly" name="apply_position" id="apply_position" value="<?php echo $record->ApplyPosition; ?>">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Salary Expectation</label>
                                        <input type="number" step="any"  class="form-control" placeholder="Salary Expec  e.g 45,000" name="salary_expectation" id="salary_expectation" value="<?php echo $record->SalaryExpec; ?>">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="button-group">
                                            <div class="action-buttons">
                                                <div class="thumb">
                                                    <img src="<?php echo base_url(); ?>assets/uploads/profile_pic/<?php echo $record->Email; ?>.png" alt="">
                                                </div>
                                                <div class="upload-button">

                                                    <input type="file" name="cvImage"  accept="image/gif, image/jpeg, image/png, image/jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider">
                                        <h3>Professional Information</h3>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Current Designation</label>
                                        <input type="text" class="form-control" placeholder="Major, e.g Computer Science" name="current_designation" id="current_designation" value="<?php echo $record->CurrentDesignation; ?>">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea"> Total years of Experiance</label>
                                        <select class="form-control" name="total_experiance" id="total_experiance" value="<?php echo $record->ExperienceYears; ?>">
                                            <option>None</option>
                                            <option <?php echo (($record->ExperienceYears) == 'Less than one year') ? 'selected' : true ?> >Less than one year</option>
                                            <option <?php echo (($record->ExperienceYears) == 'Less than two year') ? 'selected' : true ?> >Less than two year</option>
                                            <option <?php echo (($record->ExperienceYears) == 'Less than three year') ? 'selected' : true ?> >Less than three year</option>
                                            <option <?php echo (($record->ExperienceYears) == 'Less than five year') ? 'selected' : true ?> >Less than five year</option>
                                            <option <?php echo (($record->ExperienceYears) == 'Less than seven year') ? 'selected' : true ?> >Less than seven year</option>
                                            <option <?php echo (($record->ExperienceYears) == 'Less than ten year') ? 'selected' : true ?> >Less than ten year</option>
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
                                                    <option <?php echo (($record->HighestQualificationTitle) == 'A/L') ? "selected" : true ?> >A/L</option>
                                                    <option <?php echo (($record->HighestQualificationTitle) == 'O/L') ? "selected" : true ?> >O/L</option>
                                                    <option <?php echo (($record->HighestQualificationTitle) == 'Degree') ? "selected" : true ?> >Degree</option>
                                                    <option <?php echo (($record->HighestQualificationTitle) == 'Bachelor') ? "selected" : true ?> >Bachelor</option>
                                                    o<ption <?php echo (($record->HighestQualificationTitle) == 'Master') ? "selected" : true ?> >Master</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label" for="textarea">Qualification Details</label>
                                                <input class="form-control" placeholder="Enter Your Qualification Details" type="text" name="qualification_name" id="qualification_name" value="<?php echo $record->QulificationDetails ?>">
                                            </div>
                                        </div>



                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="control-label" for="textarea">Description</label>
                                        <textarea class="form-control" rows="7" name="description" id="description"><?php echo $record->Description; ?></textarea>
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="divider">
                                        <h3>Specialized area</h3>
                                    </div>
                                    <div class="form-group is-empty">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label" for="textarea">Skill Name</label>
                                                <input class="form-control" placeholder="Skill name, e.g. HTML, .Net, Communication (With Comma separated values)" type="text" name="skill" id="skill" value="<?php echo $record->Skills; ?>">
                                            </div>
                                        </div>
                                        <span class="material-input"></span><span class="material-input"></span>
                                    </div>
                                    <div class="divider">
                                        <div class="form-group">
                                            <div class="button-group pull-right">
                                                <div class="action-buttons">
                                                    <div class="upload-button">
                                                        <label class="btn btn-common" for="default">Update Uploaded CV</label>
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
                                <?php } ?>
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