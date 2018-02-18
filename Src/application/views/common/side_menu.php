                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="right-sideabr">
                            <div class="inner-box">
                                <ul class="lest item">
                                    <div class="thumb">
                                        <img src="<?php echo base_url(); ?>assets/uploads/profile_pic/<?php echo $this->session->userdata('logged_in')['email']; ?>.png" alt="" height="50px" width="50px">
                                </div>
                                    <li><?php echo $this->session->userdata('logged_in')['email']; ?> [ <?php echo $this->session->userdata('logged_in')['user_level']; ?> ]</li>

                                </ul>
                                <h4>Manage Account</h4>
                                <ul class="lest item">
                                    <li><a class="active" href="resume.html">My Resume</a></li>
                                    <li><a href="bookmarked.html">Bookmarked Jobs</a></li>
                                    <li><a href="notifications.html">Notifications <span class="notinumber">2</span></a></li>
                                </ul>
                                <h4>Manage Job</h4>
                                <ul class="lest item">
                                    <li><a href="manage-applications.html">Manage Applications</a></li>
                                    <li><a href="job-alerts.html">Job Alerts</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/JobController/job_categories">Manage Job Categories</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/AuthController/user">Users</a></li>
                                </ul>
                                <ul class="lest">
                                    <li><a href="<?php echo base_url(); ?>index.php/AuthController/change_password">Change Password</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/AuthController/Logout">Sing Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>