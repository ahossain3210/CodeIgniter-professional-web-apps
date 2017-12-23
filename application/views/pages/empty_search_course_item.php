<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li>Course</li>			
        </div>		
    </div>	
</div>

<div class="container">
    <marquee scrollamount="3">
        Upcoming Courses: PHP Laravel Framework Professional From Scratch to Advance Step By Steop -- Start From 1st May, 2017 
    </marquee>
</div>
<section id="blog" class="container">
    <div class="blog">
        <div class="row">
            <aside class="col-md-3">
                <div class="widget search">
                    <form role="form" action="<?php echo base_url(); ?>search-items" method="post">
                        <input type="text" name="search_item" class="form-control search_box" autocomplete="off" placeholder="Search course">
                    </form>
                </div><!--/.search-->
                <div class="widget archieve">
                    <h4>Course Categories</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="blog_archieve">
                                <?php
                                foreach ($all_publish_category as $v_category) {
                                    ?>
                                    <li><a href="<?php echo base_url(); ?>category-course/<?php echo $v_category->category_id; ?>"><i class="fa fa-angle-double-right"></i> <?php echo $v_category->category_name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>                     
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
            </aside> 
            <div class="col-md-9 cat-board">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 cat-content">
                            <h4>Your Searching Results are..</h4>
                            <p style="text-align: justify; color: #e74c3c;">The course you searching isn't available right now. Please register for another course.</p>
                        </div>
                    </div>    
                </div><!--/.blog-item-->
                <div id="pagination" style="margin: 20px 0 20px 0; text-align: center">
                    
                </div>
                    
            </div>
        </div><!--/.row-->
    </div>
</section>