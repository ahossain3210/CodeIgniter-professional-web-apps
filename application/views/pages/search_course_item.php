<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li>Course</li>			
        </div>		
    </div>	
</div>
<section class="container">
    <div class="blog">
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
            <div class="col-sm-9 view_course">
                <h3><i class="fa fa-eye" aria-hidden="true"></i> Your searching result..</h3>
            </div>
            <div class="col-md-9 course_wrap">
                <?php
                foreach ($search_course_item as $v_course) {
                    ?>
                    <div class="col-xs-12 col-sm-12 course_info_wrap">
                        <div class="col-md-8 course_title">
                            <h4><a href="<?php echo base_url(); ?>course-details/<?php echo $v_course->course_id; ?>"><?php echo $v_course->course_title; ?></a></h4>
                            <article>By: <span><a href="<?php echo base_url(); ?>profile"><?php echo $v_course->course_instructor; ?></a></span></article>
                        </div>
                        <div class="col-md-4 course_title_2" style="text-align: center;">
                            <h4  style="margin-bottom: 1em;">BDT <?php echo $v_course->course_fee; ?></h4>
                            <a href="<?php echo base_url(); ?>contact-us" class="btn btn-success readmore">Register Now</a>
                        </div>
                    </div>
                <?php } ?>  

            </div>
        </div><!--/.row-->
    </div>
</section>