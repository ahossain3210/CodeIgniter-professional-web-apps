<header>		
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="border-bottom: none; margin-bottom: 0;">
        <div class="navigation">
            <div class="container">					
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand" style="margin-right: 45px;">
                        <a href="<?php echo base_url(); ?>"><h1><span>It</span>Experts</h1></a>
                    </div>
                </div>

                <div class="navbar-collapse collapse" id="myNavbar">							
                    <div class="menu">
                        <ul class="nav navbar-nav">
                            <li role="presentation" class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li role="presentation"><a href="<?php echo base_url(); ?>about">About</a></li>
                            <li role="presentation" class="dropdown">
                                <a href="<?php echo base_url(); ?>courses">Courses</a>
                                <ul class="sub-menu">
                                    <?php 
                                    $all_publish_category= $this->Welcome_Model->select_all_publish_category_info();
                                    
                                    foreach ($all_publish_category as $v_category)
                                        {
                                    ?>
                                    <li><a href="<?php echo base_url(); ?>category-course/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name;?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="<?php echo base_url(); ?>services">Services</a>
<!--                                <ul class="sub-menu">
                                    <li><a href="#">Web Apps Development</a></li>
                                    <li><a href="#">Android Apps Development</a></li>
                                    <li><a href="#">SEO & Marketing</a></li>
                                    <li><a href="#">Domain & Hosting</a></li>
                                    <li><a href="#">Web Design & Graphics</a></li>
                                </ul>-->
                            </li>	
                            <li role="presentation"><a href="<?php echo base_url(); ?>our-blogs">Blog</a></li>
                            <li role="presentation"><a href="<?php echo base_url(); ?>job-list">Job List</a></li>					
                        </ul>
                    </div>
                    <div class="nav navbar-right">
                        <ul class="nav navbar-nav">
                            <?php
                            $user_id = $this->session->userdata('user_id');
                            $user_name = $this->session->userdata('user_name');
                            if ($user_id != NULL) {
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle tt_none color_green_2" style="color: #00a651;" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-user"></span><span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <h3><?php echo $user_name;?></h3>
                                        <li><a href="<?php echo base_url(); ?>my-profile"><span class="fa fa-user"></span> Profile Settings</a></li>
                                        <li><a href="<?php echo base_url(); ?>user-logout" class="tt_none scheme_color" style="color: #e74c3c;"><span class="fa fa-sign-out"></span> Logout</a></li>
                                    </ul>
                                        
                                </li>
                                
                            <?php } else { ?>
                                <li><a href="<?php echo base_url(); ?>sign-up" class="tt_none"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="<?php echo base_url(); ?>user-login" class="tt_none"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php } ?>
                        </ul>
                        <a class="btn navbar-btn btn-primary" href="<?php echo base_url(); ?>contact-us">Register for a course</a>
                    </div>
                </div>						
            </div>
        </div>	
    </nav>		
</header>
