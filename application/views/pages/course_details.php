<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li>Contact</li>			
        </div>		
    </div>	
</div>
<section class="container">
    <div class="">
        <div class="row">
            <aside class="col-md-3">
                <div class="home_link">
                    <a href="#"><i class="fa fa-home"> Home</i></a>
                </div>
                <div class="col-sm-12 left_sidebar">
                    <div class="widget search">
                        <form role="form" action="<?php echo base_url(); ?>search-items" method="post">
                            <input type="text" name="search_item" class="form-control search_box" autocomplete="off" placeholder="Search courses">
                        </form>
                    </div><!--/.search-->
                    <div class="widget categories">
                        <h4>Course Instructor</h4>
                        <div class="col-sm-12 instructor_info">
                            <img src="<?php echo base_url(); ?>assets/images/slider/profil_pic.jpg" alt="">
                            <h5><a href="<?php echo base_url(); ?>profile"><b>Md. Anwar Hossain</b></a></h5>
                            <p><i>M.Sc in Computer Science & Engineering</i></p>
                        </div>                   
                    </div><!--/.categories-->
                    <div class="widget categories">
                        <h4>Course Summay</h4>
                        <div class="col-sm-12 course_summary">
                            <p class="text">Course Fee : <span><?php echo $course_info->course_fee; ?> BDT</span></p>
                            <p class="text">Start Date : <span> <?php echo $course_info->start_date; ?></span></p>
                            <p class="text">Total Seats Available : <span> <?php echo $course_info->total_seat; ?></span></p>
                            <p class="text">Number of Classes : <span> <?php echo $course_info->total_class; ?></span></p>
                            <p class="text">Course Duration : <span> 6 Month</span></p>
                            <p><b>Last date: 5th July, 2017</b></p>
                        </div>                   
                    </div>
                    <div class="widget categories">
                        <h4>Class Schedule</h4>
                        <div class="col-sm-12 course_summary">
                            <p class="text">Class Duration : <span> <?php echo $course_info->class_time; ?></span></p>
                            <p class="text">Class On : <span> <?php echo $course_info->days; ?></span></p>
                        </div>                   
                    </div>
                    <div class="course_category">
                        <h4>Course Categories</h4>
                        <ul class="nav">
                            <?php
                            foreach ($all_publish_category as $v_category) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>category-course/<?php echo $v_category->category_id; ?>"><i class="fa fa-angle-double-right"></i> <?php echo $v_category->category_name; ?></a></li>
                            <?php } ?>
                        </ul>               
                    </div>
                    <div class="widget categories">
                        <h4>Upcoming Courses</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_category">
                                    <?php
                                    $latest_course_info = $this->Welcome_Model->select_latest_course_info();
                                    foreach ($latest_course_info as $v_course) {
                                        ?>
                                        <li><a href="<?php echo base_url(); ?>course-details/<?php echo $v_course->course_id; ?>"><?php echo $v_course->course_title; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
                </div>
            </aside> 
            <div class="col-md-9 cat-board">
                <div class="col-xs-12 col-sm-12 course-content">
                    <div class="col-md-12">
                        <h4 class="col-md-10"><?php echo $course_info->course_title; ?></h4>
                        <a href="<?php echo base_url(); ?>contact-us" class="btn btn-success readmore">Register Now</a>
                    </div>
                </div>
                <div class="col-md-12 train_outline" style="padding-bottom: 40px;">
                    <h4>Training Objectives</h4>
                    <?php echo $course_info->course_description; ?>
                </div>
            </div>
        </div>
    </div>
</section>